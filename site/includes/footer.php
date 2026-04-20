<footer class="bg-navy text-white pt-16 pb-8">
    <div class="max-w-[1200px] mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 pb-12 border-b border-white/10">
            <div>
                <p class="text-[1.25rem] font-extrabold tracking-[-0.03em] mb-3 lowercase">carbonwave</p>
                <p class="text-sm text-white/50 leading-relaxed">Custom Development, Intelligence & Support para empresas que querem crescer de forma inteligente.</p>
            </div>
            <div>
                <p class="text-[0.6875rem] font-bold tracking-[0.1em] uppercase text-white/40 mb-4">Serviços</p>
                <div class="flex flex-col gap-2">
                    <a href="/servicos#development" class="text-sm text-white/60 hover:text-white transition-colors">Custom Development</a>
                    <a href="/servicos#intelligence" class="text-sm text-white/60 hover:text-white transition-colors">Intelligence</a>
                    <a href="/servicos#support"      class="text-sm text-white/60 hover:text-white transition-colors">Support</a>
                </div>
            </div>
            <div>
                <p class="text-[0.6875rem] font-bold tracking-[0.1em] uppercase text-white/40 mb-4">Links</p>
                <div class="flex flex-col gap-2">
                    <a href="/portfolio" class="text-sm text-white/60 hover:text-white transition-colors">Portfólio</a>
                    <a href="/webapp"    class="text-sm text-white/60 hover:text-white transition-colors">App Preview</a>
                    <a href="/#contato"  class="text-sm text-white/60 hover:text-white transition-colors">Contato</a>
                </div>
            </div>
        </div>
        <div class="pt-8 flex flex-col md:flex-row items-center justify-between gap-3">
            <p class="text-[0.8125rem] text-white/30">&copy; <?php echo date('Y'); ?> Carbonwave. Todos os direitos reservados.</p>
        </div>
    </div>
</footer>

<?php
$js_path = $_SERVER['DOCUMENT_ROOT'] . '/site/assets/js/main.js';
$js_v    = file_exists($js_path) ? filemtime($js_path) : time();
echo "<script src=\"/site/assets/js/main.js?v={$js_v}\"></script>\n";

try {
    if (function_exists('setting')) {
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
