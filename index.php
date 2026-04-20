<?php
define('ROOT', __DIR__);

include ROOT . '/site/includes/head.php';
include ROOT . '/site/includes/header.php';

// Sections serão adicionadas aqui conforme desenvolvimento
// include ROOT . '/site/sections/hero.php';
// include ROOT . '/site/sections/contact.php';

?>

<main style="min-height:80vh;display:flex;align-items:center;justify-content:center;background:#0F172A">
  <div style="text-align:center;padding:60px 24px">
    <p style="font-size:.875rem;font-weight:600;letter-spacing:.1em;text-transform:uppercase;color:#22d3ee;margin-bottom:16px">Em breve</p>
    <h1 style="font-size:clamp(2.5rem,5vw,4rem);font-weight:800;color:#fff;letter-spacing:-0.02em;margin-bottom:20px">carbonwave</h1>
    <p style="font-size:1.125rem;color:#64748b;max-width:480px;margin:0 auto">Site em construção. Em breve traremos novidades.</p>
  </div>
</main>

<?php
include ROOT . '/site/includes/footer.php';
