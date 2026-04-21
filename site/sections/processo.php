<section class="py-[100px] bg-white">
    <div class="max-w-[1200px] mx-auto px-6">

        <div class="max-w-[540px] mb-16">
            <p class="text-[0.6875rem] font-bold tracking-[0.14em] uppercase text-action mb-4">Como trabalhamos</p>
            <h2 class="reveal font-extrabold uppercase tracking-[-0.02em] leading-[1.05] mb-4"
                style="font-size: clamp(1.75rem, 3vw, 2.75rem)">
                Como funciona<br>nosso processo.
            </h2>
            <p class="text-[1rem] text-gray-500 leading-[1.75]">
                Do primeiro contato à evolução contínua — cada etapa pensada para gerar resultado real.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-[2px] bg-gray-200">
            <?php
            $etapas = [
                [
                    '01',
                    'Briefing & Diagnóstico',
                    'Entendemos seu negócio, mapeamos os desafios e definimos a estratégia ideal antes de escrever uma linha de código.',
                    '<path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/>',
                ],
                [
                    '02',
                    'Execução Muito Rápida',
                    'Desenvolvemos com agilidade e sem burocracia. Sem abrir mão da precisão técnica que cada projeto exige.',
                    '<path d="M13 10V3L4 14h7v7l9-11h-7z"/>',
                ],
                [
                    '03',
                    'Entrega Profissional',
                    'Resultado final testado, documentado e pronto para escalar — com o padrão de qualidade que o seu negócio merece.',
                    '<path d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>',
                ],
                [
                    '04',
                    'Acompanhamento & Evolução Contínua',
                    'Não paramos na entrega. Monitoramos, evoluímos e crescemos junto com você — parceria de longo prazo.',
                    '<path d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>',
                ],
            ];
            foreach ($etapas as [$num, $title, $text, $icon]): ?>
            <div class="reveal group bg-white p-10 flex flex-col gap-0 hover:bg-navy transition-colors duration-300">
                <span class="text-[0.6875rem] font-bold tracking-[0.1em] uppercase text-action mb-7"><?= $num ?></span>
                <div class="w-10 h-10 rounded-[4px] bg-action/10 flex items-center justify-center mb-6 group-hover:bg-action/20 transition-colors duration-300">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none"
                         stroke="var(--color-action, #0066FF)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <?= $icon ?>
                    </svg>
                </div>
                <h3 class="text-[1.0625rem] font-extrabold uppercase tracking-[-0.01em] leading-[1.25] text-navy group-hover:text-white mb-3 transition-colors duration-300"><?= $title ?></h3>
                <p class="text-[0.9375rem] text-gray-500 leading-[1.65] group-hover:text-white/60 transition-colors duration-300"><?= $text ?></p>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>
