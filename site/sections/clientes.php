<section class="py-14 bg-navy border-b border-white/8">
    <p class="text-center text-[0.6875rem] font-bold tracking-[0.14em] uppercase text-white/30 mb-10 px-6">
        Empresas que confiam na Carbonwave
    </p>

    <div class="overflow-hidden">
        <div class="clients-track">
            <?php
            $clientes = [
                'Cliente 01', 'Cliente 02', 'Cliente 03',
                'Cliente 04', 'Cliente 05', 'Cliente 06',
                'Cliente 07', 'Cliente 08',
            ];
            // Render twice for seamless loop
            for ($i = 0; $i < 2; $i++):
                foreach ($clientes as $c): ?>
                <div class="flex items-center justify-center px-16 shrink-0">
                    <span class="text-[0.8125rem] font-bold tracking-[0.12em] uppercase"
                          style="color:rgba(255,255,255,0.28)"><?= htmlspecialchars($c) ?></span>
                </div>
            <?php endforeach; endfor; ?>
        </div>
    </div>
</section>
