<style>
/* ── Carbonwave · processo ───────────────────────────── */
.proc-step {
    position: relative;
    padding-top: 2.25rem;
}
/* Base rule (muted) */
.proc-step::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0;
    height: 1px;
    background: rgba(255,255,255,.10);
}
/* Action accent that grows left → right on scroll */
.proc-step::after {
    content: '';
    position: absolute;
    top: -1px; left: 0;
    width: 0;
    height: 2px;
    background: var(--color-action, #0066FF);
    transition: width 1.2s cubic-bezier(.16,1,.3,1);
}
.proc-step.proc-on::after { width: 100%; }

/* Giant watermark number */
.proc-num-bg {
    position: absolute;
    top: .25rem; right: -.25rem;
    font-size: clamp(5rem, 9vw, 8rem);
    font-weight: 900;
    letter-spacing: -.04em;
    line-height: 1;
    color: rgba(255,255,255,.05);
    pointer-events: none;
    user-select: none;
}

/* Content reveal */
.proc-content {
    opacity: 0;
    transform: translateY(14px);
    transition: opacity .7s ease .18s, transform .9s cubic-bezier(.16,1,.3,1) .18s;
}
.proc-step.proc-on .proc-content {
    opacity: 1;
    transform: translateY(0);
}
</style>

<section class="py-[120px] bg-navy text-white">
    <div class="max-w-[1200px] mx-auto px-6">

        <!-- Header -->
        <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-6 mb-20">
            <div class="reveal">
                <p class="text-[0.6875rem] font-bold tracking-[0.14em] uppercase text-white/35 mb-5">Como trabalhamos</p>
                <h2 class="font-extrabold uppercase tracking-[-0.02em] leading-[1.05]"
                    style="font-size: clamp(1.75rem, 3vw, 2.75rem)">
                    Nosso processo.
                </h2>
            </div>
            <p class="reveal reveal-d1 text-[0.9375rem] text-white/40 leading-[1.8] max-w-[360px]">
                Do primeiro contato à evolução contínua — cada etapa pensada para gerar resultado real.
            </p>
        </div>

        <!-- Steps -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-x-10 gap-y-14" id="proc-grid">
            <?php
            $etapas = [
                ['01', 'Briefing & Diagnóstico',
                 'Entendemos seu negócio, mapeamos os desafios e definimos a estratégia ideal antes de escrever uma linha de código.'],
                ['02', 'Execução Muito Rápida',
                 'Desenvolvemos com agilidade e sem burocracia, sem abrir mão da precisão técnica que cada projeto exige.'],
                ['03', 'Entrega Profissional',
                 'Resultado final testado, documentado e pronto para escalar — com o padrão de qualidade que o seu negócio merece.'],
                ['04', 'Acompanhamento & Evolução Contínua',
                 'Não paramos na entrega. Monitoramos, evoluímos e crescemos junto com você — parceria de longo prazo.'],
            ];
            foreach ($etapas as [$num, $title, $text]): ?>
            <div class="proc-step">
                <span class="proc-num-bg"><?= $num ?></span>
                <div class="proc-content">
                    <p class="text-[0.6875rem] font-bold tracking-[0.1em] uppercase text-action mb-7"><?= $num ?></p>
                    <h3 class="text-[1.0625rem] font-extrabold uppercase tracking-[-0.01em] leading-[1.3] text-white mb-4"><?= $title ?></h3>
                    <p class="text-[0.9375rem] text-white/40 leading-[1.75]"><?= $text ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<script>
(function () {
    var grid = document.getElementById('proc-grid');
    if (!grid) return;

    var steps = Array.prototype.slice.call(grid.querySelectorAll('.proc-step'));

    var obs = new IntersectionObserver(function (entries) {
        if (!entries[0].isIntersecting) return;
        steps.forEach(function (step, i) {
            setTimeout(function () { step.classList.add('proc-on'); }, i * 160);
        });
        obs.disconnect();
    }, { threshold: 0.15 });

    obs.observe(grid);
}());
</script>
