<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= htmlspecialchars($page_description ?? 'Carbonwave — Custom Development, Intelligence & Support') ?>">
    <title><?= htmlspecialchars($page_title ?? 'Carbonwave') ?></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,400;0,14..32,500;0,14..32,600;0,14..32,700;0,14..32,800;1,14..32,400&display=swap" rel="stylesheet">

    <?php
    $css_path = $_SERVER['DOCUMENT_ROOT'] . '/site/assets/css/style.css';
    $css_v    = file_exists($css_path) ? filemtime($css_path) : time();
    echo "<link rel=\"stylesheet\" href=\"/site/assets/css/style.css?v={$css_v}\">\n";
    ?>

    <link rel="icon" type="image/png" href="/site/assets/img/favicon.png">

    <?php
    try {
        if (!function_exists('db')) {
            $cms_config = $_SERVER['DOCUMENT_ROOT'] . '/cms/boot.php';
            if (file_exists($cms_config)) require_once $cms_config;
        }
        if (function_exists('setting')) {
            $hc = setting('header_codes', '');
            if ($hc !== '') echo $hc . "\n";

            $site_libs = json_decode(setting('site_libraries', '[]'), true) ?: [];
            foreach ($site_libs as $lib) {
                if (!empty($lib['css'])) {
                    echo "<link rel=\"stylesheet\" href=\"" . htmlspecialchars($lib['css']) . "\">\n";
                }
            }
        }
    } catch (Exception $e) {}
    ?>
</head>
<body class="font-sans antialiased bg-white text-navy">
