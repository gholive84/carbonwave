<section class="py-[100px] bg-navy text-white" id="contato">
    <div class="max-w-[1200px] mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-20 items-start">

            <!-- Left: text -->
            <div class="reveal">
                <p class="text-[0.6875rem] font-bold tracking-[0.14em] uppercase text-action mb-5">Fale Conosco</p>
                <h2 class="font-extrabold uppercase tracking-[-0.02em] leading-[1.05] mb-6"
                    style="font-size: clamp(1.75rem, 3vw, 2.75rem)">
                    Pronto para o<br><span class="text-action">próximo nível?</span>
                </h2>
                <p class="text-[1rem] text-white/60 leading-[1.75] mb-10">
                    Preencha o formulário ou fale diretamente pelo WhatsApp. Respondemos em até 24 horas.
                </p>

                <div class="flex flex-col gap-5">
                    <a href="https://wa.me/5541996481321"
                       target="_blank" rel="noopener"
                       class="flex items-center gap-4 group">
                        <div class="w-11 h-11 rounded-[4px] bg-[#25D366]/15 flex items-center justify-center shrink-0 group-hover:bg-[#25D366]/25 transition-colors">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="#25D366">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-[0.75rem] font-bold tracking-[0.08em] uppercase text-white/40 mb-[2px]">WhatsApp</p>
                            <p class="text-[1rem] font-semibold text-white group-hover:text-[#25D366] transition-colors">(41) 99648-1321</p>
                        </div>
                    </a>

                    <div class="flex items-center gap-4">
                        <div class="w-11 h-11 rounded-[4px] bg-white/8 flex items-center justify-center shrink-0">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="rgba(255,255,255,0.5)" stroke-width="2" stroke-linecap="round">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-[0.75rem] font-bold tracking-[0.08em] uppercase text-white/40 mb-[2px]">E-mail</p>
                            <p class="text-[1rem] font-semibold text-white/80">contato@carbonwave.com.br</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right: form -->
            <div class="reveal reveal-d2">
                <form id="contactForm" action="/cms/leads/submit.php" method="POST"
                      class="bg-[#141D3C] border border-white/10 rounded-[4px] p-8 flex flex-col gap-5">

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div class="flex flex-col gap-2">
                            <label class="text-[0.6875rem] font-bold tracking-[0.1em] uppercase text-white/40">Nome *</label>
                            <input type="text" name="nome" required placeholder="Seu nome"
                                   class="bg-white/5 border border-white/10 rounded-[4px] px-4 py-3 text-[0.9375rem] text-white placeholder-white/25
                                          focus:outline-none focus:border-action focus:bg-white/8 transition-colors">
                        </div>
                        <div class="flex flex-col gap-2">
                            <label class="text-[0.6875rem] font-bold tracking-[0.1em] uppercase text-white/40">Telefone *</label>
                            <input type="tel" name="telefone" required placeholder="(00) 00000-0000"
                                   class="bg-white/5 border border-white/10 rounded-[4px] px-4 py-3 text-[0.9375rem] text-white placeholder-white/25
                                          focus:outline-none focus:border-action focus:bg-white/8 transition-colors">
                        </div>
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="text-[0.6875rem] font-bold tracking-[0.1em] uppercase text-white/40">E-mail *</label>
                        <input type="email" name="email" required placeholder="seu@email.com"
                               class="bg-white/5 border border-white/10 rounded-[4px] px-4 py-3 text-[0.9375rem] text-white placeholder-white/25
                                      focus:outline-none focus:border-action focus:bg-white/8 transition-colors">
                    </div>

                    <div class="flex flex-col gap-2">
                        <label class="text-[0.6875rem] font-bold tracking-[0.1em] uppercase text-white/40">Mensagem</label>
                        <textarea name="mensagem_detalhes" rows="4" placeholder="Conte um pouco sobre seu projeto..."
                                  class="bg-white/5 border border-white/10 rounded-[4px] px-4 py-3 text-[0.9375rem] text-white placeholder-white/25
                                         focus:outline-none focus:border-action focus:bg-white/8 transition-colors resize-none"></textarea>
                    </div>

                    <input type="hidden" name="origem" value="site-contato">

                    <button type="submit"
                            class="mt-2 w-full py-4 text-[0.875rem] font-bold tracking-[0.06em] uppercase rounded-[4px]
                                   bg-action text-white hover:bg-action-dark transition-colors duration-200
                                   disabled:opacity-50 disabled:cursor-not-allowed">
                        Enviar mensagem
                    </button>

                    <div id="formMsg" class="hidden text-center text-sm font-semibold py-2 rounded-[4px]"></div>
                </form>
            </div>

        </div>
    </div>
</section>
