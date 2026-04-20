<section class="py-16 bg-white border-b border-gray-200">
    <div class="max-w-[1200px] mx-auto px-6">
        <p class="text-center text-[0.6875rem] font-bold tracking-[0.14em] uppercase text-gray-400 mb-10">
            Empresas que confiam na Carbonwave
        </p>
        <div class="flex flex-wrap justify-center border-l border-t border-gray-200">
            <?php
            $clientes = [
                'Cliente 01', 'Cliente 02', 'Cliente 03',
                'Cliente 04', 'Cliente 05', 'Cliente 06',
            ];
            foreach ($clientes as $c): ?>
            <div class="flex-[0_0_33.333%] md:flex-[0_0_16.666%] flex items-center justify-center
                        p-7 border-r border-b border-gray-200
                        grayscale opacity-40 hover:grayscale-0 hover:opacity-100 transition-all duration-200">
                <span class="text-xs font-bold tracking-[0.06em] uppercase text-gray-500"><?= $c ?></span>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
