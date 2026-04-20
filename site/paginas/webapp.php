<?php
$page_title       = 'App Preview — Carbonwave';
$page_description = 'Conheça o app mobile de suporte da Carbonwave. Acompanhe seus projetos, chamados e métricas em qualquer lugar.';
include dirname(__DIR__) . '/includes/head-page.php';
include dirname(__DIR__) . '/includes/header.php';
?>

<!-- Page Hero -->
<section class="bg-navy text-white pt-[160px] pb-20 border-b border-white/10">
    <div class="max-w-[1200px] mx-auto px-6">
        <p class="text-[0.6875rem] font-bold tracking-[0.14em] uppercase text-action mb-5">Web App</p>
        <h1 class="font-extrabold uppercase tracking-[-0.02em] leading-[1.0] mb-5"
            style="font-size: clamp(2.25rem, 5vw, 4rem)">
            Seu negócio na<br><span class="text-action">palma da mão.</span>
        </h1>
        <p class="text-[1.0625rem] text-white/55 max-w-[480px] leading-[1.7]">
            Acompanhe projetos, chamados e métricas em tempo real — de qualquer dispositivo.
        </p>
    </div>
</section>

<!-- App Preview -->
<section class="py-[100px] bg-navy text-white overflow-hidden">
    <div class="max-w-[1200px] mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-20 items-center">

            <!-- Phones -->
            <div class="reveal flex justify-center gap-6 items-start">
                <!-- Phone 1 -->
                <div class="w-[220px] border-2 border-white/15 rounded-[36px] p-3 bg-navy-light">
                    <div class="phone-inner flex items-center justify-center">
                        <p class="text-xs text-white/20 tracking-widest uppercase">Tela 1</p>
                    </div>
                </div>
                <!-- Phone 2 -->
                <div class="w-[220px] border-2 border-white/15 rounded-[36px] p-3 bg-navy-light mt-12">
                    <div class="phone-inner flex items-center justify-center">
                        <p class="text-xs text-white/20 tracking-widest uppercase">Tela 2</p>
                    </div>
                </div>
            </div>

            <!-- Features -->
            <div class="reveal reveal-d2">
                <p class="text-[0.6875rem] font-bold tracking-[0.14em] uppercase text-white/40 mb-6">Funcionalidades</p>
                <h2 class="font-extrabold uppercase tracking-[-0.02em] leading-[1.05] mb-8"
                    style="font-size: clamp(1.5rem, 2.5vw, 2.25rem)">
                    Controle total<br>onde você estiver.
                </h2>

                <div class="flex flex-col gap-6">
                    <?php
                    $features = [
                        ['01', 'Dashboard em Tempo Real',   'Métricas, tickets e alertas consolidados em uma tela.'],
                        ['02', 'Gestão de Chamados',        'Abra, acompanhe e feche chamados com histórico completo.'],
                        ['03', 'Notificações Inteligentes', 'Alertas priorizados por IA — sem ruído, só o que importa.'],
                        ['04', 'Relatórios Automatizados',  'Relatórios gerados automaticamente e enviados por e-mail.'],
                    ];
                    foreach ($features as [$num, $title, $text]): ?>
                    <div class="grid grid-cols-[44px_1fr] gap-4 items-start">
                        <span class="text-[0.6875rem] font-bold tracking-[0.1em] uppercase text-action pt-1"><?= $num ?></span>
                        <div>
                            <p class="text-[0.9375rem] font-bold text-white mb-1"><?= $title ?></p>
                            <p class="text-[0.875rem] text-white/50 leading-[1.6]"><?= $text ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

                <a href="/#contato"
                   class="mt-10 inline-flex items-center px-7 py-3 text-xs font-bold tracking-[0.04em] uppercase rounded-[4px] bg-action text-white hover:bg-action-dark transition-colors">
                    Solicitar acesso antecipado
                </a>
            </div>

        </div>
    </div>
</section>

<?php include dirname(__DIR__) . '/includes/footer.php'; ?>
