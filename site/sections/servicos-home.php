<section class="py-[100px] bg-[#F4F5F7]" id="servicos">
    <div class="max-w-[1200px] mx-auto px-6">

        <div class="max-w-[540px] mb-16">
            <p class="text-[0.6875rem] font-bold tracking-[0.14em] uppercase text-action mb-4">O que fazemos</p>
            <h2 class="reveal font-extrabold uppercase tracking-[-0.02em] leading-[1.05] mb-4"
                style="font-size: clamp(1.75rem, 3vw, 2.75rem)">
                Três frentes.<br>Um único parceiro.
            </h2>
            <p class="text-[1rem] text-gray-500 leading-[1.75]">
                Da concepção ao crescimento, cobrimos cada estágio da sua presença digital com inteligência e precisão.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-[2px] bg-gray-200">
            <?php
            $servicos = [
                ['01', 'Custom Development', 'Sites e e-commerces desenvolvidos sob medida com design de alto padrão e IA integrada desde o início.', '/servicos#development'],
                ['02', 'Intelligence',        'CMS e CRM proprietários com automação, dados em tempo real e sugestões de IA.', '/servicos#intelligence'],
                ['03', 'Support',             '20 anos de mercado. Consultoria estratégica contínua que vai além do suporte técnico.', '/servicos#support'],
            ];
            foreach ($servicos as [$num, $title, $text, $href]): ?>
            <a href="<?= $href ?>"
               class="reveal group bg-white p-12 flex flex-col gap-0 hover:bg-navy transition-colors duration-300 cursor-pointer">
                <span class="text-[0.6875rem] font-bold tracking-[0.1em] uppercase text-action mb-8"><?= $num ?></span>
                <h3 class="text-[1.25rem] font-extrabold uppercase tracking-[-0.01em] leading-[1.2] text-navy group-hover:text-white mb-4 transition-colors duration-300"><?= $title ?></h3>
                <p class="text-[0.9375rem] text-gray-500 leading-[1.65] group-hover:text-white/60 transition-colors duration-300"><?= $text ?></p>
                <span class="mt-7 text-[0.8125rem] font-bold tracking-[0.06em] uppercase text-action group-hover:text-action flex items-center gap-2">
                    Saiba mais →
                </span>
            </a>
            <?php endforeach; ?>
        </div>

    </div>
</section>
