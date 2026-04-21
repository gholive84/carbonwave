<style>
/* ── Carbonwave · edite-ia mockup ─────────────────────── */
.cw-mock{background:#0f172a;border:1px solid rgba(255,255,255,.08);border-radius:16px;overflow:hidden;box-shadow:0 32px 80px rgba(0,0,0,.35)}
.cw-mock-head{padding:18px 16px 14px;border-bottom:1px solid rgba(255,255,255,.08)}
.cw-mock-chips{padding:10px 16px;border-bottom:1px solid rgba(255,255,255,.08);display:flex;gap:8px;overflow-x:auto;scrollbar-width:none}
.cw-mock-chips::-webkit-scrollbar{display:none}
.cw-chip{font-size:.75rem;color:rgba(255,255,255,.5);padding:4px 12px;border-radius:20px;background:rgba(255,255,255,.04);border:1px solid rgba(255,255,255,.08);white-space:nowrap}
.cw-messages{padding:16px;min-height:260px;display:flex;flex-direction:column;gap:12px}
.cw-sys{background:rgba(34,197,94,.07);border:1px solid rgba(34,197,94,.18);border-radius:8px;padding:12px 14px;font-size:.8125rem;color:#86efac;line-height:1.5;text-align:center;font-family:Inter,system-ui,sans-serif}
.cw-user-msg{align-self:flex-end;max-width:82%;background:rgba(235,64,57,.12);border:1px solid rgba(235,64,57,.22);border-radius:12px 12px 4px 12px;padding:10px 14px;font-size:.875rem;color:#fecaca;line-height:1.55;font-family:Inter,system-ui,sans-serif}
.cw-ai-msg{align-self:flex-start;max-width:88%;background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.08);border-radius:12px 12px 12px 4px;padding:10px 14px;font-size:.875rem;color:rgba(255,255,255,.85);line-height:1.6;font-family:Inter,system-ui,sans-serif}
.cw-typing-bubble{align-self:flex-start;background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.08);border-radius:12px 12px 12px 4px;padding:12px 16px;display:flex;gap:5px;align-items:center}
.cw-publish-bar{padding:0 16px 14px;display:grid;grid-template-columns:1fr 1fr;gap:10px;font-family:Inter,system-ui,sans-serif}
.cw-btn-pub{background:linear-gradient(135deg,#EB4039,#C9302B);color:#fff;border:none;border-radius:8px;padding:9px 14px;font-size:.8125rem;font-weight:600;cursor:pointer;display:flex;align-items:center;justify-content:center;gap:6px}
.cw-btn-dis{background:rgba(255,255,255,.06);color:rgba(255,255,255,.6);border:1px solid rgba(255,255,255,.08);border-radius:8px;padding:9px 14px;font-size:.8125rem;font-weight:600;cursor:pointer}
.cw-input-bar{padding:12px 16px 16px;border-top:1px solid rgba(255,255,255,.08);display:flex;gap:8px;align-items:center}
.cw-input-fake{flex:1;background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.1);border-radius:10px;padding:10px 14px;font-size:.875rem;color:rgba(255,255,255,.25);font-family:Inter,system-ui,sans-serif}
.cw-ibtn{width:42px;height:42px;border-radius:10px;display:flex;align-items:center;justify-content:center;flex-shrink:0;border:none;cursor:default}
.cw-ibtn-mic{background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.1)!important}
.cw-ibtn-send{background:linear-gradient(135deg,#EB4039,#C9302B)}

@keyframes cw-blink{0%,80%,100%{opacity:.25;transform:translateY(0)}40%{opacity:1;transform:translateY(-3px)}}
.cw-dot{display:inline-block;width:6px;height:6px;border-radius:50%;background:#64748b;animation:cw-blink 1.2s infinite}
.cw-dot:nth-child(2){animation-delay:.2s}
.cw-dot:nth-child(3){animation-delay:.4s}

.cw-anim{opacity:0;transform:translateY(8px);transition:opacity .4s ease,transform .4s ease}
.cw-anim.cw-on{opacity:1;transform:translateY(0)}
</style>

<section class="py-[100px] bg-[#F4F5F7]">
    <div class="max-w-[1200px] mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-20 items-center">

            <!-- Chat mockup -->
            <div class="reveal order-2 md:order-1">
                <div class="cw-mock">

                    <!-- Header -->
                    <div class="cw-mock-head">
                        <div style="display:flex;align-items:center;gap:10px;margin-bottom:6px">
                            <span style="font-size:.9375rem;font-weight:700;color:#e2e8f0;font-family:Inter,system-ui,sans-serif">Seu projeto</span>
                            <span style="background:linear-gradient(135deg,#EB4039,#C9302B);color:#fff;font-size:.65rem;font-weight:700;padding:2px 8px;border-radius:20px;text-transform:uppercase;letter-spacing:.05em">IA DEMO</span>
                        </div>
                        <p style="font-size:.8125rem;color:#64748b;line-height:1.45;font-family:Inter,system-ui,sans-serif">Descreva o que deseja alterar na página inicial. A IA modifica o site em tempo real.</p>
                    </div>

                    <!-- Quick chips -->
                    <div class="cw-mock-chips">
                        <span class="cw-chip">Mude o título do hero</span>
                        <span class="cw-chip">Troque a cor do CTA</span>
                        <span class="cw-chip">Adicione uma seção</span>
                        <span class="cw-chip">Otimize o SEO</span>
                    </div>

                    <!-- Messages -->
                    <div class="cw-messages" id="cw-chat-msgs">
                        <div class="cw-sys">
                            👋 Olá! Escreva ou grave um áudio descrevendo o que quer alterar. Após a IA gerar as mudanças, você poderá visualizar e publicar.
                        </div>
                        <div class="cw-user-msg cw-anim" id="cw-msg-user" style="display:none">
                            Mude o título para algo mais impactante
                        </div>
                        <div class="cw-typing-bubble cw-anim" id="cw-typing" style="display:none">
                            <span class="cw-dot"></span>
                            <span class="cw-dot"></span>
                            <span class="cw-dot"></span>
                        </div>
                        <div class="cw-ai-msg cw-anim" id="cw-msg-ai" style="display:none">
                            Site atualizado! (2 arquivo(s) modificado(s)). Confira o preview e publique.
                        </div>
                    </div>

                    <!-- Publish actions -->
                    <div class="cw-publish-bar cw-anim" id="cw-publish-bar" style="display:none">
                        <button class="cw-btn-pub">
                            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6L9 17l-5-5"/></svg>
                            Publicar
                        </button>
                        <button class="cw-btn-dis">Desfazer</button>
                    </div>

                    <!-- Input bar -->
                    <div class="cw-input-bar">
                        <div class="cw-input-fake">Ex: Mude o título para algo mais impactante...</div>
                        <div class="cw-ibtn cw-ibtn-mic">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="rgba(255,255,255,.65)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M12 1a3 3 0 0 0-3 3v8a3 3 0 0 0 6 0V4a3 3 0 0 0-3-3z"/>
                                <path d="M19 10v2a7 7 0 0 1-14 0v-2"/>
                                <line x1="12" y1="19" x2="12" y2="23"/>
                                <line x1="8" y1="23" x2="16" y2="23"/>
                            </svg>
                        </div>
                        <div class="cw-ibtn cw-ibtn-send">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
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

<script>
(function () {
    'use strict';
    function sleep(ms) { return new Promise(function(r){ setTimeout(r, ms); }); }

    async function showEl(id, display) {
        var el = document.getElementById(id);
        if (!el) return;
        el.style.display = display || 'block';
        await sleep(30);
        el.classList.add('cw-on');
    }

    async function hideEl(id) {
        var el = document.getElementById(id);
        if (!el) return;
        el.classList.remove('cw-on');
        await sleep(430);
        el.style.display = 'none';
    }

    async function runLoop() {
        while (true) {
            await sleep(1200);
            await showEl('cw-msg-user');

            await sleep(1100);
            await showEl('cw-typing', 'flex');

            await sleep(1900);
            await hideEl('cw-typing');
            await showEl('cw-msg-ai');

            await sleep(900);
            await showEl('cw-publish-bar');

            await sleep(3400);

            await Promise.all([
                hideEl('cw-msg-user'),
                hideEl('cw-msg-ai'),
                hideEl('cw-publish-bar'),
            ]);

            await sleep(600);
        }
    }

    var target = document.getElementById('cw-chat-msgs');
    if (!target) return;

    var obs = new IntersectionObserver(function(entries) {
        if (entries[0].isIntersecting) {
            runLoop();
            obs.disconnect();
        }
    }, { threshold: 0.3 });
    obs.observe(target);
}());
</script>
