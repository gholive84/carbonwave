<header id="header" class="fixed top-0 left-0 right-0 z-50 bg-white border-b border-gray-200 transition-shadow duration-200">
    <div class="max-w-[1200px] mx-auto px-6 flex items-center justify-between h-[68px]">

        <a href="/" class="text-[1.125rem] font-extrabold tracking-[-0.03em] text-navy lowercase">carbonwave</a>

        <nav id="nav" aria-label="Menu principal">
            <ul class="hidden md:flex gap-9 items-center">
                <li><a href="/servicos" class="text-sm font-medium text-navy hover:text-action transition-colors duration-150">Serviços</a></li>
                <li><a href="/portfolio" class="text-sm font-medium text-navy hover:text-action transition-colors duration-150">Portfólio</a></li>
                <li><a href="/webapp" class="text-sm font-medium text-navy hover:text-action transition-colors duration-150">App</a></li>
                <li><a href="/#contato" class="text-sm font-medium text-navy hover:text-action transition-colors duration-150">Contato</a></li>
            </ul>
        </nav>

        <a href="/#contato" class="hidden md:inline-flex items-center px-6 py-3 text-xs font-bold tracking-[0.04em] uppercase rounded-[4px] bg-action text-white hover:bg-action-dark transition-colors duration-200">
            Fale Conosco
        </a>

        <button id="hamburger" aria-label="Abrir menu" aria-expanded="false"
                class="md:hidden flex flex-col gap-[5px] w-7 p-0 bg-transparent border-none cursor-pointer">
            <span class="h-[2px] bg-navy rounded-sm transition-all duration-200 origin-center"></span>
            <span class="h-[2px] bg-navy rounded-sm transition-all duration-200"></span>
            <span class="h-[2px] bg-navy rounded-sm transition-all duration-200 origin-center"></span>
        </button>
    </div>
</header>

<!-- Mobile drawer -->
<div id="navDrawer"
     class="fixed top-[68px] right-[-100%] w-[min(340px,100vw)] h-[calc(100vh-68px)] bg-white border-l border-gray-200 px-6 py-8 z-40 flex flex-col gap-2 transition-[right] duration-300">
    <a href="/servicos" class="block text-[1.125rem] font-semibold text-navy py-3 border-b border-gray-100 hover:text-action">Serviços</a>
    <a href="/portfolio" class="block text-[1.125rem] font-semibold text-navy py-3 border-b border-gray-100 hover:text-action">Portfólio</a>
    <a href="/webapp"    class="block text-[1.125rem] font-semibold text-navy py-3 border-b border-gray-100 hover:text-action">App</a>
    <a href="/#contato"  class="block text-[1.125rem] font-semibold text-navy py-3 border-b border-gray-100 hover:text-action">Contato</a>
    <a href="/#contato"  class="mt-6 inline-flex justify-center px-6 py-3 text-sm font-bold tracking-[0.04em] uppercase rounded-[4px] bg-action text-white hover:bg-action-dark transition-colors">
        Fale Conosco
    </a>
</div>
<div id="navOverlay" class="fixed inset-0 bg-navy/40 z-30 hidden" aria-hidden="true"></div>
