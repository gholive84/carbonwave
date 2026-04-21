<?php
$page_title       = 'Portfólio — Carbonwave';
$page_description = 'Projetos desenvolvidos pela Carbonwave. Sites, e-commerces e soluções digitais de alto padrão.';
include dirname(__DIR__) . '/includes/head-page.php';
include dirname(__DIR__) . '/includes/header.php';
?>

<!-- Page Hero -->
<section class="bg-navy text-white pt-[160px] pb-20 border-b border-white/10">
    <div class="max-w-[1200px] mx-auto px-6">
        <p class="text-[0.6875rem] font-bold tracking-[0.14em] uppercase text-action mb-5">Portfólio</p>
        <h1 class="font-extrabold uppercase tracking-[-0.02em] leading-[1.0]"
            style="font-size: clamp(2.25rem, 5vw, 4rem)">
            Projetos que<br><span class="text-action">falam por si.</span>
        </h1>
    </div>
</section>

<!-- Portfolio Grid (edge-to-edge) -->
<section class="bg-white">
    <?php
    $projetos = [
        ['title' => 'Projeto 01', 'tag' => 'Site Institucional', 'href' => '#', 'img' => ''],
        ['title' => 'Projeto 02', 'tag' => 'E-commerce',         'href' => '#', 'img' => ''],
        ['title' => 'Projeto 03', 'tag' => 'Landing Page',       'href' => '#', 'img' => ''],
        ['title' => 'Projeto 04', 'tag' => 'Landing Page',       'href' => '#', 'img' => ''],
        ['title' => 'Projeto 05', 'tag' => 'CRM Customizado',    'href' => '#', 'img' => ''],
        ['title' => 'Projeto 06', 'tag' => 'App Mobile',         'href' => '#', 'img' => ''],
    ];
    foreach ($projetos as $i => $p):
        $bg = ['bg-[#0A1128]','bg-[#141D3C]','bg-[#1a2847]','bg-[#0d1f3c]','bg-[#0f172a]','bg-[#192340]'][$i % 6];
    ?>
    <a href="<?= htmlspecialchars($p['href']) ?>" target="_blank" rel="noopener"
       class="group relative block aspect-[4/3] overflow-hidden <?= $i % 2 === 0 ? 'md:inline-block md:w-1/2' : 'md:inline-block md:w-1/2' ?>
              border-b border-gray-100 <?= $i % 2 === 0 ? 'md:border-r' : '' ?>">
        <?php if ($p['img']): ?>
        <img src="<?= htmlspecialchars($p['img']) ?>" alt="<?= htmlspecialchars($p['title']) ?>"
             loading="lazy" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-[1.04]">
        <?php else: ?>
        <div class="w-full h-full <?= $bg ?> flex items-center justify-center transition-transform duration-500 group-hover:scale-[1.02]">
            <p class="text-xs font-bold tracking-widest uppercase text-white/20"><?= htmlspecialchars($p['title']) ?></p>
        </div>
        <?php endif; ?>
        <!-- Overlay -->
        <div class="absolute inset-0 bg-navy/0 group-hover:bg-navy/70 flex items-end p-7 transition-all duration-300">
            <div class="opacity-0 translate-y-3 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300">
                <p class="text-[0.75rem] font-bold tracking-[0.08em] uppercase text-action mb-1"><?= htmlspecialchars($p['tag']) ?></p>
                <p class="text-[1.125rem] font-bold text-white"><?= htmlspecialchars($p['title']) ?> →</p>
            </div>
        </div>
    </a>
    <?php endforeach; ?>
</section>

<!-- CTA -->
<section class="py-20 bg-action text-white">
    <div class="max-w-[1200px] mx-auto px-6 flex flex-wrap items-center justify-between gap-10">
        <h2 class="font-extrabold uppercase tracking-[-0.02em] leading-[1.1]"
            style="font-size: clamp(1.75rem, 3vw, 2.5rem)">
            Quer seu projeto aqui?
        </h2>
        <a href="/#contato"
           class="shrink-0 inline-flex items-center px-8 py-4 text-[0.875rem] font-bold tracking-[0.04em] uppercase rounded-[4px] bg-white text-action hover:bg-gray-100 transition-colors">
            Fale com a gente
        </a>
    </div>
</section>

<?php include dirname(__DIR__) . '/includes/footer.php'; ?>
