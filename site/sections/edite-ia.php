<section class="py-[100px] bg-[#F4F5F7]">
    <div class="max-w-[1200px] mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-20 items-center">

            <!-- Mock AI editor -->
            <div class="reveal order-2 md:order-1">
                <div class="border border-gray-200 rounded-[8px] overflow-hidden bg-white shadow-[0_8px_40px_rgba(0,0,0,0.08)]">
                    <!-- Editor bar -->
                    <div class="h-10 bg-[#ECEEF2] border-b border-gray-200 flex items-center justify-between px-4">
                        <div class="flex gap-[6px]">
                            <span class="w-[10px] h-[10px] rounded-full bg-red-300"></span>
                            <span class="w-[10px] h-[10px] rounded-full bg-yellow-300"></span>
                            <span class="w-[10px] h-[10px] rounded-full bg-green-300"></span>
                        </div>
                        <span class="text-[0.6875rem] text-gray-400 font-semibold tracking-[0.05em]">Carbonwave CMS · Editor IA</span>
                        <div class="w-[52px]"></div>
                    </div>
                    <!-- Chat messages -->
                    <div class="p-5 flex flex-col gap-4 min-h-[300px]">
                        <div class="flex justify-end">
                            <div class="bg-action text-white text-[0.875rem] px-4 py-2.5 rounded-[8px] rounded-tr-[3px] max-w-[80%] leading-[1.55]">
                                Reescreva o título da home de forma mais impactante
                            </div>
                        </div>
                        <div class="flex gap-3 items-start">
                            <div class="w-7 h-7 rounded-full bg-navy flex items-center justify-center shrink-0 mt-0.5">
                                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                                </svg>
                            </div>
                            <div class="bg-gray-100 text-[0.875rem] text-gray-700 px-4 py-3 rounded-[8px] rounded-tl-[3px] max-w-[82%] leading-[1.6]">
                                Feito! Novo título: <span class="font-bold text-navy">"Tecnologia que domina mercados."</span>
                                <br><span class="text-[0.8125rem] text-gray-400 mt-1 inline-block">Salvo em homepage.php · linha 12</span>
                            </div>
                        </div>
                        <div class="flex justify-end">
                            <div class="bg-action text-white text-[0.875rem] px-4 py-2.5 rounded-[8px] rounded-tr-[3px] max-w-[80%] leading-[1.55]">
                                Adicione um CTA abaixo com o texto "Começar agora"
                            </div>
                        </div>
                        <div class="flex gap-3 items-start">
                            <div class="w-7 h-7 rounded-full bg-navy flex items-center justify-center shrink-0 mt-0.5">
                                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                                </svg>
                            </div>
                            <div class="bg-gray-100 px-4 py-3 rounded-[8px] rounded-tl-[3px] flex gap-1.5 items-center">
                                <span class="w-[7px] h-[7px] rounded-full bg-gray-400 animate-bounce" style="animation-delay:0ms"></span>
                                <span class="w-[7px] h-[7px] rounded-full bg-gray-400 animate-bounce" style="animation-delay:160ms"></span>
                                <span class="w-[7px] h-[7px] rounded-full bg-gray-400 animate-bounce" style="animation-delay:320ms"></span>
                            </div>
                        </div>
                    </div>
                    <!-- Input bar -->
                    <div class="border-t border-gray-200 px-4 py-3 flex items-center gap-3 bg-white">
                        <input type="text" placeholder="Peça uma alteração ao seu projeto..." disabled
                               class="flex-1 text-[0.875rem] text-gray-400 bg-transparent outline-none placeholder-gray-300 cursor-default">
                        <div class="w-8 h-8 rounded-[4px] bg-action/10 flex items-center justify-center shrink-0">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="var(--color-action,#0066FF)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 2L11 13M22 2l-7 20-4-9-9-4 20-7z"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Text -->
            <div class="reveal reveal-d2 order-1 md:order-2">
                <p class="text-[0.6875rem] font-bold tracking-[0.14em] uppercase text-action mb-5">IA Integrada</p>
                <h2 class="font-extrabold uppercase tracking-[-0.02em] leading-[1.05] mb-5"
                    style="font-size: clamp(1.75rem, 3vw, 2.75rem)">
                    Edite seu projeto<br><span class="text-action">com IA.</span>
                </h2>
                <p class="text-[1rem] text-gray-600 leading-[1.75] mb-8">
                    Chega de formulários de suporte e longos prazos de espera. Com o nosso CMS proprietário, você conversa com a IA para alterar textos, criar seções e publicar em segundos — sem escrever uma linha de código.
                </p>
                <div class="flex flex-col gap-4">
                    <?php
                    $features = [
                        'Alterações em linguagem natural, sem código',
                        'Publicação instantânea com revisão automática',
                        'Histórico de versões e rollback com um clique',
                        'SEO otimizado pela IA em cada edição',
                    ];
                    foreach ($features as $f): ?>
                    <div class="flex gap-3 items-start">
                        <span class="w-5 h-5 rounded-full bg-action/10 flex items-center justify-center shrink-0 mt-[2px]">
                            <svg width="10" height="10" viewBox="0 0 24 24" fill="none" stroke="var(--color-action,#0066FF)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M20 6L9 17l-5-5"/>
                            </svg>
                        </span>
                        <span class="text-[0.9375rem] text-gray-600"><?= $f ?></span>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
    </div>
</section>
