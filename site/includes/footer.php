<!-- WhatsApp fixed button -->
<a href="https://wa.me/5541996481321" target="_blank" rel="noopener" aria-label="WhatsApp"
   class="fixed bottom-6 right-6 z-50 w-14 h-14 rounded-full bg-[#25D366] flex items-center justify-center
          shadow-[0_4px_20px_rgba(37,211,102,0.4)] hover:scale-110 transition-transform duration-200">
    <svg width="28" height="28" viewBox="0 0 24 24" fill="white">
        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
    </svg>
</a>

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
