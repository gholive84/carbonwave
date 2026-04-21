<?php
$page_title       = 'Serviços — Carbonwave';
$page_description = 'Sites e e-commerces de alto padrão com CMS, CRM e IA integrados. Para empresas que não aceitam o comum.';
include dirname(__DIR__) . '/includes/head-page.php';
include dirname(__DIR__) . '/includes/header.php';
?>

<!-- Page Hero -->
<section class="bg-navy text-white pt-[160px] pb-20 border-b border-white/10">
    <div class="max-w-[1200px] mx-auto px-6">
        <p class="text-[0.6875rem] font-bold tracking-[0.14em] uppercase text-action mb-5">Serviços</p>
        <h1 class="font-extrabold uppercase tracking-[-0.02em] leading-[1.0] mb-5"
            style="font-size: clamp(2.25rem, 5vw, 4rem)">
            Três frentes.<br>Um único parceiro.
        </h1>
        <p class="text-[1.0625rem] text-white/55 max-w-[520px] leading-[1.7]">
            Do site ao e-commerce — cobrimos cada estágio da sua presença digital.
        </p>
    </div>
</section>

<!-- Custom Development -->
<section class="py-[100px] bg-white border-b border-gray-200" id="development">
    <div class="max-w-[1200px] mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-20 items-center">
            <div class="reveal">
                <p class="text-[0.6875rem] font-bold tracking-[0.14em] uppercase text-action mb-4">01</p>
                <h2 class="font-extrabold uppercase tracking-[-0.02em] leading-[1.05] mb-5 text-navy"
                    style="font-size: clamp(1.75rem, 3vw, 2.75rem)">
                    Custom<br>Development
                </h2>
                <p class="text-[1rem] text-gray-500 leading-[1.75] mb-7">
                    Sites institucionais, landing pages de alta conversão e e-commerces desenvolvidos do zero — sem template, sem atalho. Cada projeto é pensado para o seu negócio com performance, SEO e IA integrada desde o início.
                </p>
                <ul class="flex flex-col gap-3 mb-9">
                    <?php $items = ['Sites institucionais e portfólios', 'E-commerce com IA de produto', 'Landing pages de alta conversão', 'Integrações com ERPs e APIs externas', 'Performance e Core Web Vitals'];
                    foreach ($items as $item): ?>
                    <li class="flex gap-3 text-[0.9375rem] text-gray-500">
                        <span class="text-action font-bold shrink-0">—</span><?= $item ?>
                    </li>
                    <?php endforeach; ?>
                </ul>
                <a href="/#contato" class="inline-flex items-center px-7 py-3 text-xs font-bold tracking-[0.04em] uppercase rounded-[4px] bg-action text-white hover:bg-action-dark transition-colors">
                    Solicitar proposta
                </a>
            </div>
            <div class="reveal reveal-d2 bg-[#F4F5F7] rounded-[4px] aspect-square flex items-center justify-center">
                <p class="text-xs font-bold tracking-widest uppercase text-gray-400">Mockup / Screenshot</p>
            </div>
        </div>
    </div>
</section>

<!-- Intelligence -->
<section class="py-[100px] bg-navy text-white border-b border-white/10" id="intelligence">
    <div class="max-w-[1200px] mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-20 items-center">
            <!-- Visual (left) -->
            <div class="reveal order-last md:order-first bg-navy-light border border-white/10 rounded-[4px] aspect-video flex items-center justify-center">
                <div class="text-center">
                    <div class="w-16 h-16 rounded-full bg-action/20 flex items-center justify-center mx-auto mb-4">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none">
                            <path d="M5 3l14 9L5 21V3z" fill="#e30000"/>
                        </svg>
                    </div>
                    <p class="text-xs text-white/40 tracking-widest uppercase">Demo em breve</p>
                </div>
            </div>
            <!-- Text (right) -->
            <div class="reveal reveal-d2">
                <p class="text-[0.6875rem] font-bold tracking-[0.14em] uppercase text-white/40 mb-4">02</p>
                <h2 class="font-extrabold uppercase tracking-[-0.02em] leading-[1.05] mb-5"
                    style="font-size: clamp(1.75rem, 3vw, 2.75rem)">
                    Intelligence
                </h2>
                <p class="text-[1rem] text-white/60 leading-[1.75] mb-7">
                    CMS e CRM proprietários com inteligência artificial nativa — integrados diretamente ao seu site ou e-commerce. Gerencie conteúdo, leads e conversões com automação real, não com chatbots genéricos.
                </p>
                <ul class="flex flex-col gap-3 mb-9">
                    <?php $items = ['CMS com editor assistido por IA', 'CRM com scoring automático de leads', 'Automação de e-mails e notificações', 'Dashboard de métricas em tempo real', 'Integração com WhatsApp e APIs externas'];
                    foreach ($items as $item): ?>
                    <li class="flex gap-3 text-[0.9375rem] text-white/65">
                        <span class="text-action font-bold shrink-0">—</span><?= $item ?>
                    </li>
                    <?php endforeach; ?>
                </ul>
                <a href="/#contato" class="inline-flex items-center px-7 py-3 text-xs font-bold tracking-[0.04em] uppercase rounded-[4px] border-2 border-white/20 text-white hover:bg-white/8 transition-colors">
                    Agendar demo
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Support -->
<section class="py-[100px] bg-white" id="support">
    <div class="max-w-[1200px] mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-20 items-center">
            <div class="reveal">
                <p class="text-[0.6875rem] font-bold tracking-[0.14em] uppercase text-action mb-4">03</p>
                <h2 class="font-extrabold uppercase tracking-[-0.02em] leading-[1.05] mb-5 text-navy"
                    style="font-size: clamp(1.75rem, 3vw, 2.75rem)">
                    Support
                </h2>
                <p class="text-[1rem] text-gray-500 leading-[1.75] mb-7">
                    Não somos só técnicos — somos parceiros. Com 20 anos de mercado, nossa consultoria une experiência estratégica com execução prática. Estamos do lado do seu negócio, não apenas do seu servidor.
                </p>
                <div class="mb-9">
                    <p class="text-[clamp(3rem,5vw,4.5rem)] font-extrabold text-action leading-none mb-2">20+</p>
                    <p class="text-[0.875rem] text-gray-400 uppercase tracking-[0.06em] font-bold">Anos de experiência no mercado</p>
                </div>
                <ul class="flex flex-col gap-3 mb-9">
                    <?php $items = ['Consultoria estratégica mensal', 'SLA garantido com resposta em horas', 'Treinamento da equipe interna', 'Revisão contínua de performance', 'Suporte técnico prioritário 24/5'];
                    foreach ($items as $item): ?>
                    <li class="flex gap-3 text-[0.9375rem] text-gray-500">
                        <span class="text-action font-bold shrink-0">—</span><?= $item ?>
                    </li>
                    <?php endforeach; ?>
                </ul>
                <a href="/#contato" class="inline-flex items-center px-7 py-3 text-xs font-bold tracking-[0.04em] uppercase rounded-[4px] bg-action text-white hover:bg-action-dark transition-colors">
                    Falar com consultor
                </a>
            </div>
            <div class="reveal reveal-d2 bg-[#F4F5F7] rounded-[4px] p-12 flex flex-col justify-center gap-6">
                <?php
                $stats = [['98%', 'Satisfação de clientes'], ['3×', 'Aumento médio em conversões'], ['48h', 'Tempo médio de resposta']];
                foreach ($stats as [$val, $label]): ?>
                <div class="border-b border-gray-200 pb-6 last:border-0 last:pb-0">
                    <p class="text-[2.5rem] font-extrabold text-navy leading-none mb-1"><?= $val ?></p>
                    <p class="text-sm text-gray-400 uppercase tracking-[0.06em] font-bold"><?= $label ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="py-20 bg-action text-white">
    <div class="max-w-[1200px] mx-auto px-6 flex flex-wrap items-center justify-between gap-10">
        <h2 class="font-extrabold uppercase tracking-[-0.02em] leading-[1.1]"
            style="font-size: clamp(1.75rem, 3vw, 2.75rem)">
            Pronto para o próximo nível?
        </h2>
        <a href="/#contato"
           class="shrink-0 inline-flex items-center px-8 py-4 text-[0.875rem] font-bold tracking-[0.04em] uppercase rounded-[4px] bg-white text-action hover:bg-gray-100 transition-colors">
            Fale com a gente
        </a>
    </div>
</section>

<?php include dirname(__DIR__) . '/includes/footer.php'; ?>
