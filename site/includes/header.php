<header id="header"
        class="fixed top-0 left-0 right-0 z-50 border-b border-transparent transition-all duration-300"
        data-transparent="true">
    <div class="max-w-[1200px] mx-auto px-6 flex items-center justify-between h-[68px]">

        <a href="/" class="text-[1.125rem] font-extrabold tracking-[-0.03em] lowercase text-white" id="headerLogo">
            carbonwave
        </a>

        <nav aria-label="Menu principal">
            <ul class="hidden md:flex gap-9 items-center">
                <li><a href="/servicos"  class="nav-link text-sm font-medium text-white/80 hover:text-white transition-colors duration-150">Serviços</a></li>
                <li><a href="/portfolio" class="nav-link text-sm font-medium text-white/80 hover:text-white transition-colors duration-150">Portfólio</a></li>
                <li><a href="/webapp"    class="nav-link text-sm font-medium text-white/80 hover:text-white transition-colors duration-150">App</a></li>
                <li><a href="/#contato"  class="nav-link text-sm font-medium text-white/80 hover:text-white transition-colors duration-150">Contato</a></li>
            </ul>
        </nav>

        <div class="hidden md:flex items-center gap-3">
            <!-- WhatsApp -->
            <a href="https://wa.me/5541996481321" target="_blank" rel="noopener"
               class="flex items-center gap-2 px-4 py-[10px] text-xs font-bold tracking-[0.04em] uppercase rounded-[4px]
                      border-2 border-white/25 text-white hover:border-[#25D366] hover:text-[#25D366] transition-colors duration-200 header-wa-btn">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                </svg>
                WhatsApp
            </a>
            <!-- CTA -->
            <a href="/#contato"
               class="px-5 py-[10px] text-xs font-bold tracking-[0.04em] uppercase rounded-[4px] bg-action text-white hover:bg-action-dark transition-colors duration-200">
                Fale Conosco
            </a>
        </div>

        <button id="hamburger" aria-label="Abrir menu" aria-expanded="false"
                class="md:hidden flex flex-col gap-[5px] w-7 p-0 bg-transparent border-none cursor-pointer">
            <span class="h-[2px] bg-white rounded-sm transition-all duration-200 origin-center hamburger-bar"></span>
            <span class="h-[2px] bg-white rounded-sm transition-all duration-200 hamburger-bar"></span>
            <span class="h-[2px] bg-white rounded-sm transition-all duration-200 origin-center hamburger-bar"></span>
        </button>
    </div>
</header>

<!-- Mobile drawer -->
<div id="navDrawer"
     class="fixed top-[68px] z-40 flex flex-col gap-2 px-6 py-8
            bg-white border-l border-gray-200 h-[calc(100vh-68px)] w-[min(340px,100vw)]
            transition-[right] duration-300"
     style="right:-100%">
    <a href="/servicos"  class="block text-[1.125rem] font-semibold text-navy py-3 border-b border-gray-100 hover:text-action">Serviços</a>
    <a href="/portfolio" class="block text-[1.125rem] font-semibold text-navy py-3 border-b border-gray-100 hover:text-action">Portfólio</a>
    <a href="/webapp"    class="block text-[1.125rem] font-semibold text-navy py-3 border-b border-gray-100 hover:text-action">App</a>
    <a href="/#contato"  class="block text-[1.125rem] font-semibold text-navy py-3 border-b border-gray-100 hover:text-action">Contato</a>
    <a href="https://wa.me/5541996481321" target="_blank" rel="noopener"
       class="mt-4 flex items-center justify-center gap-2 px-6 py-3 text-sm font-bold tracking-[0.04em] uppercase rounded-[4px] border-2 border-[#25D366] text-[#25D366]">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
        WhatsApp
    </a>
    <a href="/#contato"
       class="inline-flex justify-center px-6 py-3 text-sm font-bold tracking-[0.04em] uppercase rounded-[4px] bg-action text-white hover:bg-action-dark transition-colors">
        Fale Conosco
    </a>
</div>
<div id="navOverlay" class="fixed inset-0 bg-navy/40 z-30 hidden" aria-hidden="true"></div>
