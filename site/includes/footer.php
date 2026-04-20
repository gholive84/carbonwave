<footer class="footer">
    <div class="container footer__inner">
        <div class="footer__brand">
            <a href="/" class="logo">
                <span class="logo__text">carbonwave</span>
            </a>
            <p class="footer__tagline">Em breve.</p>
        </div>
    </div>

    <div class="footer__bottom">
        <div class="container">
            <p>&copy; <?php echo date('Y'); ?> Carbonwave. Todos os direitos reservados.</p>
        </div>
    </div>
</footer>

<?php
$js_path = $_SERVER['DOCUMENT_ROOT'] . '/site/assets/js/main.js';
$js_v    = file_exists($js_path) ? filemtime($js_path) : time();
echo "<script src=\"/site/assets/js/main.js?v={$js_v}\"></script>\n";

try {
    if (function_exists('setting')) {
        // Inject managed JS libraries
        $site_libs = json_decode(setting('site_libraries', '[]'), true) ?: [];
        foreach ($site_libs as $lib) {
            if (!empty($lib['js'])) {
                echo "<script src=\"" . htmlspecialchars($lib['js']) . "\"></script>\n";
            }
        }

        $footer_codes = setting('footer_codes', '');
        if ($footer_codes !== '') echo $footer_codes . "\n";
    }
} catch (Exception $e) {}
?>
</body>
</html>
