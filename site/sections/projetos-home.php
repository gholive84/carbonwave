<section class="py-[100px] bg-white" id="projetos">
    <div class="max-w-[1200px] mx-auto px-6">

        <div class="flex flex-wrap items-end justify-between gap-6 mb-12">
            <div>
                <p class="text-[0.6875rem] font-bold tracking-[0.14em] uppercase text-action mb-3">Projetos Realizados</p>
                <h2 class="reveal font-extrabold uppercase tracking-[-0.02em] leading-[1.05]"
                    style="font-size: clamp(1.75rem, 3vw, 2.75rem)">
                    Trabalhos que<br><span class="text-action">falam por si.</span>
                </h2>
            </div>
            <a href="/portfolio"
               class="shrink-0 text-[0.8125rem] font-bold tracking-[0.06em] uppercase text-navy border-b-2 border-action pb-[2px] hover:text-action transition-colors">
                Ver portfólio completo →
            </a>
        </div>

        <!-- Grid 2×2 destaque + 2 menores -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-[2px] bg-gray-200">
            <?php
            $projetos = [
                ['title'=>'Projeto Destaque 01', 'tag'=>'Site Institucional', 'href'=>'#', 'img'=>'', 'span'=>'md:col-span-2 md:row-span-2'],
                ['title'=>'Projeto 02',          'tag'=>'E-commerce',         'href'=>'#', 'img'=>'', 'span'=>''],
                ['title'=>'Projeto 03',          'tag'=>'Web App',        'href'=>'#', 'img'=>'', 'span'=>''],
                ['title'=>'Projeto 04',          'tag'=>'Landing Page',       'href'=>'#', 'img'=>'', 'span'=>''],
            ];
            $bgs = ['bg-[#1A1A1A]','bg-[#272727]','bg-[#2D2D2D]','bg-[#222222]'];
            foreach ($projetos as $i => $p): ?>
            <a href="<?= htmlspecialchars($p['href']) ?>" target="_blank" rel="noopener"
               class="reveal group relative block overflow-hidden aspect-[4/3] <?= $p['span'] ?> <?= $bgs[$i] ?>">
                <?php if ($p['img']): ?>
                <img src="<?= htmlspecialchars($p['img']) ?>" alt="<?= htmlspecialchars($p['title']) ?>"
                     loading="lazy" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-[1.04]">
                <?php else: ?>
                <div class="absolute inset-0 flex items-center justify-center">
                    <p class="text-[0.6875rem] font-bold tracking-widest uppercase text-white/15"><?= htmlspecialchars($p['title']) ?></p>
                </div>
                <?php endif; ?>
                <div class="absolute inset-0 bg-navy/0 group-hover:bg-navy/75 flex items-end p-7 transition-all duration-300">
                    <div class="opacity-0 translate-y-3 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300 delay-75">
                        <p class="text-[0.75rem] font-bold tracking-[0.08em] uppercase text-action mb-1"><?= htmlspecialchars($p['tag']) ?></p>
                        <p class="text-[1.0625rem] font-bold text-white"><?= htmlspecialchars($p['title']) ?> →</p>
                    </div>
                </div>
            </a>
            <?php endforeach; ?>
        </div>

    </div>
</section>
