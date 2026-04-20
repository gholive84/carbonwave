<?php
/**
 * Carbonwave CMS — Instalador
 * Acesse /cms/install.php uma única vez para criar as tabelas e o usuário admin.
 * Apague ou proteja este arquivo após a instalação.
 */
define('CMS_DIR', __DIR__);
define('SITE_ROOT', dirname(__DIR__));
require_once __DIR__ . '/config/config.php';
require_once __DIR__ . '/core/db.php';
require_once __DIR__ . '/core/functions.php';
if (session_status() === PHP_SESSION_NONE) session_start();

$step   = (int)($_POST['step'] ?? 0);
$errors = [];
$log    = [];

// ── STEP 1: Criar tabelas + admin ───────────────────────────────────────────
if ($step === 1) {
    try {
        $pdo = db();

        $tables = [

        "CREATE TABLE IF NOT EXISTS cms_users (
            id            INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            nome          VARCHAR(150)  NOT NULL,
            email         VARCHAR(200)  NOT NULL UNIQUE,
            password_hash VARCHAR(255)  NOT NULL,
            role          ENUM('admin','editor') NOT NULL DEFAULT 'editor',
            active        TINYINT(1)    NOT NULL DEFAULT 1,
            last_login    DATETIME      NULL,
            created_at    DATETIME      NOT NULL DEFAULT CURRENT_TIMESTAMP
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4",

        "CREATE TABLE IF NOT EXISTS posts (
            id             INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            title          VARCHAR(500)  NOT NULL,
            slug           VARCHAR(300)  NOT NULL UNIQUE,
            excerpt        TEXT,
            content        LONGTEXT,
            image_url      VARCHAR(600),
            category       VARCHAR(100),
            category_slug  VARCHAR(100),
            read_time      VARCHAR(30),
            status         ENUM('published','draft') NOT NULL DEFAULT 'draft',
            created_at     DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
            updated_at     DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4",

        "CREATE TABLE IF NOT EXISTS paginas (
            id          INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            title       VARCHAR(300) NOT NULL,
            slug        VARCHAR(200) NOT NULL UNIQUE,
            url         VARCHAR(300),
            file_path   VARCHAR(400),
            status      ENUM('active','inactive') NOT NULL DEFAULT 'active',
            created_at  DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4",

        "CREATE TABLE IF NOT EXISTS leads (
            id         INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            nome       VARCHAR(200),
            email      VARCHAR(200),
            telefone   VARCHAR(30),
            mensagem   TEXT,
            origem     VARCHAR(100) DEFAULT 'site',
            status     ENUM('novo','contactado','fechado','descartado') NOT NULL DEFAULT 'novo',
            created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4",

        "CREATE TABLE IF NOT EXISTS lead_comments (
            id         INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            lead_id    INT UNSIGNED NOT NULL,
            content    TEXT NOT NULL,
            created_by INT UNSIGNED NULL,
            created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
            INDEX (lead_id)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4",

        "CREATE TABLE IF NOT EXISTS settings (
            id         INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            key_name   VARCHAR(100) NOT NULL UNIQUE,
            value      LONGTEXT,
            updated_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4",

        "CREATE TABLE IF NOT EXISTS content_types (
            id             INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            name           VARCHAR(150) NOT NULL,
            slug           VARCHAR(150) NOT NULL UNIQUE,
            icon           VARCHAR(50)  DEFAULT 'box',
            fields_schema  JSON,
            created_at     DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4",

        "CREATE TABLE IF NOT EXISTS content_items (
            id           INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            type_id      INT UNSIGNED NOT NULL,
            title        VARCHAR(500) NOT NULL,
            slug         VARCHAR(300) NOT NULL,
            status       ENUM('published','draft') NOT NULL DEFAULT 'draft',
            fields_data  JSON,
            created_at   DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
            updated_at   DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
            UNIQUE KEY uniq_type_slug (type_id, slug),
            FOREIGN KEY (type_id) REFERENCES content_types(id) ON DELETE CASCADE
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4",

        "CREATE TABLE IF NOT EXISTS paginas_history (
            id         INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            pagina_id  INT UNSIGNED NOT NULL,
            file_path  VARCHAR(400),
            content    LONGTEXT,
            saved_by   INT UNSIGNED NULL,
            saved_at   DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
            INDEX (pagina_id)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4",

        ];

        foreach ($tables as $sql) {
            $pdo->exec($sql);
            preg_match('/TABLE IF NOT EXISTS (\w+)/i', $sql, $m);
            $log[] = ['ok', 'Tabela criada/verificada: ' . ($m[1] ?? '?')];
        }

        // ── Seed: paginas ──
        $existing_pgs = (int)$pdo->query('SELECT COUNT(*) FROM paginas')->fetchColumn();
        if ($existing_pgs === 0) {
            $pages_seed = [
                ['Home',      '/',           '/',           SITE_ROOT . '/index.php'],
                ['Guideline', '/guideline',  '/guideline',  SITE_ROOT . '/site/paginas/guideline.php'],
            ];
            $ins = $pdo->prepare(
                'INSERT IGNORE INTO paginas (title, slug, url, file_path, status)
                 VALUES (?, ?, ?, ?, ?)'
            );
            foreach ($pages_seed as [$title, $slug, $url, $file]) {
                $ins->execute([$title, $slug, $url, $file, 'active']);
            }
            $log[] = ['ok', count($pages_seed) . ' páginas registradas.'];
        } else {
            $log[] = ['info', "Páginas já existem ($existing_pgs). Seed ignorado."];
        }

        // ── Seed: settings padrão ──
        $default_settings = [
            'smtp_host'       => '',
            'smtp_port'       => '587',
            'smtp_user'       => '',
            'smtp_pass'       => '',
            'smtp_from_name'  => 'Carbonwave',
            'smtp_from_email' => '',
            'header_codes'    => '',
        ];
        $ins = $pdo->prepare(
            'INSERT IGNORE INTO settings (key_name, value) VALUES (?, ?)'
        );
        foreach ($default_settings as $k => $v) {
            $ins->execute([$k, $v]);
        }
        $log[] = ['ok', 'Configurações padrão inseridas.'];

        // ── Auto-criar usuário admin ──
        $existing_users = (int)$pdo->query('SELECT COUNT(*) FROM cms_users')->fetchColumn();
        if ($existing_users === 0) {
            $hash = password_hash('c@rloS1330', PASSWORD_BCRYPT, ['cost' => 12]);
            $ins  = $pdo->prepare(
                'INSERT INTO cms_users (nome, email, password_hash, role, active) VALUES (?, ?, ?, ?, 1)
                 ON DUPLICATE KEY UPDATE password_hash = VALUES(password_hash), role = "admin", active = 1'
            );
            $ins->execute(['Admin', 'gholive@gmail.com', $hash, 'admin']);
            $log[] = ['ok', 'Usuário admin criado: gholive@gmail.com'];
        } else {
            $log[] = ['info', 'Usuário admin já existe. Seed ignorado.'];
        }

        $log[] = ['done', 'Instalação concluída! Acesse o CMS e faça login.'];
        $step = 4;

    } catch (Exception $e) {
        $errors[] = 'Erro na instalação: ' . $e->getMessage();
        $step = 0;
    }
}
?><!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Instalação — Carbonwave CMS</title>
  <meta name="robots" content="noindex, nofollow">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?= CMS_URL ?>/assets/css/admin.css">
</head>
<body>
<div class="install-wrap">
  <div class="install-card" style="max-width:520px">

    <span style="font-size:1.5rem;font-weight:800;letter-spacing:-0.02em;color:#22d3ee;display:block;text-align:center;margin-bottom:6px">carbonwave</span>
    <p style="text-align:center;color:#64748b;font-size:.875rem;margin-bottom:28px">Instalador do CMS</p>

    <?php foreach ($errors as $err): ?>
    <div class="flash flash--error" style="margin-bottom:16px">
      <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
      <?= htmlspecialchars($err) ?>
    </div>
    <?php endforeach; ?>

    <?php if (!empty($log)): ?>
    <div style="background:rgba(255,255,255,0.03);border:1px solid rgba(255,255,255,0.07);border-radius:8px;padding:16px;margin-bottom:24px;font-size:.8125rem;font-family:monospace">
      <?php foreach ($log as [$type, $msg]): ?>
        <?php
          $color = $type === 'ok' ? '#22c55e' : ($type === 'done' ? '#22d3ee' : '#64748b');
          $prefix = $type === 'ok' ? '✓' : ($type === 'done' ? '★' : '→');
        ?>
        <div style="color:<?= $color ?>;margin-bottom:4px"><?= $prefix ?> <?= htmlspecialchars($msg) ?></div>
      <?php endforeach; ?>
    </div>
    <?php endif; ?>

    <?php if ($step === 0): ?>
    <h2 class="install-title">Bem-vindo ao instalador</h2>
    <p class="install-sub">Este wizard irá criar as tabelas no banco de dados e configurar o usuário administrador automaticamente.</p>
    <div style="background:rgba(245,158,11,0.1);border:1px solid rgba(245,158,11,0.3);border-radius:8px;padding:14px;margin-bottom:24px;font-size:.875rem;color:#f59e0b">
      <strong>⚠ Atenção:</strong> Execute apenas uma vez. Apague ou proteja este arquivo após a instalação.
    </div>
    <form method="POST">
      <input type="hidden" name="step" value="1">
      <button type="submit" class="btn btn-primary" style="width:100%;justify-content:center">
        Iniciar instalação →
      </button>
    </form>

    <?php elseif ($step === 4): ?>
    <div style="text-align:center;padding:20px 0">
      <div style="font-size:3rem;margin-bottom:16px">🎉</div>
      <h2 class="install-title" style="text-align:center">Instalação concluída!</h2>
      <p class="install-sub" style="text-align:center">O CMS está pronto para uso.</p>
      <div style="background:rgba(34,211,238,0.08);border:1px solid rgba(34,211,238,0.2);border-radius:8px;padding:14px;margin-bottom:20px;font-size:.875rem;text-align:left">
        <p style="color:#22d3ee;font-weight:600;margin-bottom:6px">Credenciais de acesso:</p>
        <p style="color:#e2e8f0">E-mail: <code style="background:rgba(255,255,255,.08);padding:1px 6px;border-radius:3px">gholive@gmail.com</code></p>
        <p style="color:#e2e8f0;margin-top:4px">Senha: <code style="background:rgba(255,255,255,.08);padding:1px 6px;border-radius:3px">c@rloS1330</code></p>
      </div>
      <a href="<?= CMS_URL ?>/login.php" class="btn btn-primary" style="width:100%;justify-content:center;margin-top:8px">
        Ir para o login →
      </a>
      <p style="margin-top:20px;font-size:.8rem;color:#ef4444;text-align:center">
        ⚠ Apague ou proteja este arquivo: <code>cms/install.php</code>
      </p>
    </div>
    <?php endif; ?>

  </div>
</div>
</body>
</html>
