<section class="py-[100px] bg-navy text-white" id="ia">
    <div class="max-w-[1200px] mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-20 items-center">

            <!-- Text -->
            <div class="reveal">
                <p class="text-[0.6875rem] font-bold tracking-[0.14em] uppercase text-white/40 mb-5">IA em Ação</p>
                <h2 class="font-extrabold uppercase tracking-[-0.02em] leading-[1.05] mb-5"
                    style="font-size: clamp(1.75rem, 3vw, 2.75rem)">
                    Inteligência que<br><span class="text-action">trabalha por você.</span>
                </h2>
                <p class="text-[1rem] text-white/60 leading-[1.75] mb-8">
                    Nossas soluções integram IA diretamente nos fluxos do seu negócio — automatizando tarefas, gerando conteúdo e tomando decisões em tempo real.
                </p>
                <div class="flex flex-col gap-4">
                    <?php
                    $features = [
                        'Geração automática de conteúdo e descrições',
                        'CRM e CMS com sugestões inteligentes',
                        'Análise de dados e relatórios automatizados',
                        'Atendimento e suporte via agentes de IA',
                    ];
                    foreach ($features as $f): ?>
                    <div class="flex gap-3 items-start">
                        <span class="w-2 h-2 rounded-full bg-action mt-[7px] shrink-0"></span>
                        <span class="text-[0.9375rem] text-white/70"><?= $f ?></span>
                    </div>
                    <?php endforeach; ?>
                </div>
                <a href="/servicos#intelligence"
                   class="inline-flex items-center gap-2 mt-8 text-[0.8125rem] font-bold tracking-[0.06em] uppercase text-action hover:underline">
                    Saber mais →
                </a>
            </div>

            <!-- Device mockup -->
            <div class="reveal reveal-d2">
                <div class="border-2 border-white/10 rounded-[8px] overflow-hidden bg-[#1E1E1E]">
                    <!-- Browser bar -->
                    <div class="h-8 bg-navy flex items-center gap-[6px] px-3">
                        <span class="w-[10px] h-[10px] rounded-full bg-white/15"></span>
                        <span class="w-[10px] h-[10px] rounded-full bg-white/15"></span>
                        <span class="w-[10px] h-[10px] rounded-full bg-white/15"></span>
                    </div>
                    <!-- Screen placeholder (replace src with real video) -->
                    <div class="device-screen flex items-center justify-center">
                        <div class="text-center">
                            <div class="w-16 h-16 rounded-full bg-action/20 flex items-center justify-center mx-auto mb-4">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M5 3l14 9L5 21V3z" fill="currentColor" class="text-action"/>
                                </svg>
                            </div>
                            <p class="text-xs text-white/40 tracking-widest uppercase">Demo em breve</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
