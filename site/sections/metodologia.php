<section class="py-[100px] bg-navy text-white">
    <div class="max-w-[1200px] mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-24 items-start">

            <!-- Quote side -->
            <div class="reveal">
                <p class="text-[0.6875rem] font-bold tracking-[0.14em] uppercase text-white/40 mb-8">Metodologia</p>
                <blockquote class="border-l-[3px] border-action pl-7"
                            style="font-size: clamp(1.4rem, 2.2vw, 2rem); font-weight: 700; line-height: 1.35; letter-spacing: -0.01em">
                    O carbono é o elemento mais adaptável da natureza.<br>
                    A água, o mais fluido.<br>
                    <span class="text-action">Nós somos os dois.</span>
                </blockquote>
            </div>

            <!-- Text side -->
            <div class="reveal reveal-d2">
                <p class="text-[1rem] text-white/60 leading-[1.8] mb-6">
                    Assim como o carbono forma estruturas que vão do grafite ao diamante — frágil e precioso, resistente e brilhante — e a água assume a forma de qualquer recipiente sem perder sua essência, nossa metodologia se adapta ao contexto de cada cliente sem abrir mão de rigor e qualidade.
                </p>
                <p class="text-[1rem] text-white/60 leading-[1.8] mb-10">
                    Com mais de 20 anos de mercado, entendemos que cada negócio é único. Não existe solução de prateleira — existe diagnóstico, estratégia e execução sob medida.
                </p>

                <div class="grid grid-cols-2 gap-6">
                    <?php
                    $pillars = [
                        ['Adaptabilidade',  'Moldamos a solução ao seu contexto, não o contrário.'],
                        ['Precisão',        'Código limpo, sistemas sólidos, resultados mensuráveis.'],
                        ['Inteligência',    'IA integrada desde a concepção, não como recurso.'],
                        ['Continuidade',    'Parceria de longo prazo, não projeto e abandono.'],
                    ];
                    foreach ($pillars as [$title, $text]): ?>
                    <div class="border-t-2 border-action pt-5">
                        <p class="text-[0.8125rem] font-bold uppercase tracking-[0.06em] text-white mb-2"><?= $title ?></p>
                        <p class="text-[0.875rem] text-white/50 leading-[1.6]"><?= $text ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
    </div>
</section>
