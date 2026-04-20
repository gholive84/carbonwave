# CLAUDE.md — Carbonwave

Este arquivo define a stack tecnológica, estrutura de arquivos e processos de desenvolvimento do projeto Carbonwave. As informações específicas do site (identidade visual, conteúdo, tom de voz) serão adicionadas em uma segunda etapa.

---

## Stack Tecnológica

- **Backend**: PHP 8+
- **Frontend**: HTML5, CSS3 (custom, sem framework), JavaScript (vanilla)
- **Banco de dados**: MySQL (via PDO)
- **CMS**: PHP + MySQL próprio (pasta `cms/`)
- **Editor de conteúdo**: TipTap (WYSIWYG, carregado via ESM CDN)
- **Animações**: CSS transitions + IntersectionObserver
- **Deploy**: Apache + mod_rewrite (Hostinger)
- **Git**: https://github.com/gholive84/carbonwave.git

---

## Banco de Dados

Credenciais em `cms/config/config.php` (fora do git via `.gitignore`)

---

## CMS — Acesso e Instalação

- **URL do CMS**: `/cms/`
- **Login**: `/cms/login.php`
- **Instalador**: `/cms/install.php` (rodar uma única vez no servidor; cria tabelas + admin)
- **Admin criado automaticamente** durante a instalação (e-mail e senha definidos em `install.php`)

---

## Estrutura de Arquivos

```
index.php                  — Homepage principal
.htaccess                  — Rewrites Apache
.gitignore                 — Exclui config.php e uploads do git

cms/                       — Painel administrativo
  config/config.php        — Credenciais DB + constantes (fora do git)
  boot.php                 — Bootstrap: carrega config, db, auth, functions
  install.php              — Instalador (cria tabelas + usuário admin)
  login.php / logout.php   — Autenticação
  index.php                — Dashboard
  upload.php               — Upload de imagens
  core/
    db.php                 — Conexão PDO (singleton via db())
    auth.php               — Funções de sessão e CSRF
    functions.php          — h(), slug(), setting(), flash_*(), format_date()
  includes/
    head.php               — Layout admin: sidebar + topbar (abre <main>)
    foot.php               — Fecha layout + TipTap + admin.js
  assets/
    css/admin.css          — Estilos do painel
    js/admin.js            — JS do painel (slugs, uploads, confirms)
  posts/                   — CRUD de posts do blog
  leads/                   — Gestão de leads (kanban + lista)
  paginas/                 — Referências de páginas PHP + editor com IA
  configuracoes/           — SMTP, códigos de cabeçalho, bibliotecas JS, IA
    usuarios/              — Gerenciamento de usuários CMS
    tipos/                 — Tipos de conteúdo dinâmicos

site/                      — Frontend do site
  includes/
    head.php               — <head> com CSS + códigos de analytics
    head-page.php          — <head> para páginas internas (com $page_title)
    header.php             — Navegação principal
    footer.php             — Rodapé + JS + bibliotecas gerenciadas
  sections/                — Seções reutilizáveis da homepage
  paginas/                 — Templates de páginas internas
    guideline.php          — Design system interno (sem indexação)
  assets/
    css/                   — reset, variables, global, components, sections,
                             responsive, inner-pages
    js/main.js             — JavaScript do site
    img/                   — Imagens e SVGs
    uploads/               — Uploads via CMS (fora do git)

api/                       — Endpoints auxiliares
```

---

## Tabelas do Banco

| Tabela | Uso |
|---|---|
| `cms_users` | Usuários do painel (admin/editor) |
| `posts` | Posts do blog (título, slug, conteúdo, imagem, categoria, status) |
| `paginas` | Referências às páginas PHP do site |
| `paginas_history` | Histórico de versões das páginas (editor com IA) |
| `leads` | Formulários de contato recebidos |
| `lead_comments` | Notas internas por lead |
| `settings` | Configurações globais (SMTP, header codes, libs, IA) |
| `content_types` | Tipos de conteúdo dinâmicos (depoimentos, cases, etc.) |
| `content_items` | Itens dos tipos dinâmicos |

---

## Processos de Desenvolvimento

### Adicionar uma nova seção à homepage

1. Criar `site/sections/nome-da-secao.php`
2. Adicionar o include em `index.php`:
   ```php
   include ROOT . '/site/sections/nome-da-secao.php';
   ```
3. Adicionar os estilos da seção em `site/assets/css/sections.css`

### Adicionar uma nova página interna

1. Criar `site/paginas/nome-da-pagina.php` com o template:
   ```php
   <?php
   $page_title = 'Título — Carbonwave';
   $page_description = 'Descrição da página.';
   include dirname(__DIR__) . '/includes/head-page.php';
   include dirname(__DIR__) . '/includes/header.php';
   ?>
   <main>
     <!-- conteúdo -->
   </main>
   <?php include dirname(__DIR__) . '/includes/footer.php'; ?>
   ```
2. Adicionar a rota em `.htaccess`:
   ```apache
   RewriteRule ^nome-da-pagina/?$ site/paginas/nome-da-pagina.php [L]
   ```
3. No CMS em `/cms/paginas/`, clicar em **Sincronizar Páginas** para registrar no banco

### Adicionar um formulário de contato (lead)

- O endpoint já existe: `POST /cms/leads/submit.php`
- Aceita JSON ou form-data com os campos: `nome`, `email`, `telefone`, `mensagem`, `origem`
- Validação obrigatória: nome (≥ 2 chars), email válido, telefone (≥ 10 dígitos)
- Leads aparecem no kanban em `/cms/leads/`

### Configurar analytics ou scripts globais

- Acessar `/cms/configuracoes/?tab=header`
- Colar o código (GTM, GA4, Meta Pixel, etc.) no campo **Códigos do Cabeçalho**
- É injetado automaticamente no `<head>` de todas as páginas

### Adicionar biblioteca JS global (Swiper, GSAP, etc.)

- Acessar `/cms/configuracoes/?tab=libs`
- Informar nome, URL do CSS (opcional) e URL do JS
- A lib é injetada em todas as páginas automaticamente via `footer.php`

### Publicar com git

```bash
git add -A
git commit -m "mensagem"
git push
```

---

## Regras de Desenvolvimento

1. **Mobile-first** — responsivo em 375px / 768px / 1280px
2. **Performance** — `loading="lazy"` em todas as imagens
3. **Acessibilidade** — tags semânticas (`<section>`, `<nav>`, `<main>`), aria-labels
4. **Caminhos**: páginas em `site/paginas/` usam `dirname(__DIR__)` para includes
5. **Sem frameworks CSS** — estilos customizados em `site/assets/css/`
6. **Seções novas** — arquivo em `site/sections/` + include em `index.php` + estilos em `sections.css`
7. **config.php fora do git** — nunca commitar credenciais; criar manualmente no servidor

---

## Identidade Visual

> A ser definida. As cores, tipografia, tom de voz e diretrizes visuais serão adicionadas aqui quando o briefing do projeto for passado.
