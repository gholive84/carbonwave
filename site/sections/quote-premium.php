<style>
/* ── Carbonwave · quote-premium ──────────────────────── */
.cw-ql-wrap { overflow: hidden; }
.cw-ql {
    display: block;
    transform: translateY(110%);
    transition: transform 1s cubic-bezier(.16,1,.3,1);
}
.cw-ql.cw-ql-on {
    transform: translateY(0);
}
</style>

<section class="py-[160px] text-white relative overflow-hidden" style="background:#070E26">

    <!-- Glow -->
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute left-0 top-0 w-[500px] h-[500px]"
             style="background:radial-gradient(ellipse at 0% 0%,rgba(0,102,255,.10) 0%,transparent 65%)"></div>
    </div>

    <div class="max-w-[1200px] mx-auto px-6 relative z-10" id="cw-quote-root">
        <div class="cw-ql-wrap">
            <span class="cw-ql font-extrabold uppercase tracking-[-0.03em] leading-[1.0] text-white/25"
                  style="font-size:clamp(2.75rem,7vw,5.5rem)">Do briefing</span>
        </div>
        <div class="cw-ql-wrap">
            <span class="cw-ql font-extrabold uppercase tracking-[-0.03em] leading-[1.0] text-white"
                  style="font-size:clamp(2.75rem,7vw,5.5rem)">ao crescimento,</span>
        </div>
        <div class="cw-ql-wrap" style="margin-top:clamp(.5rem,1.5vw,1.25rem)">
            <span class="cw-ql font-extrabold uppercase tracking-[-0.03em] leading-[1.0] text-action"
                  style="font-size:clamp(2.75rem,7vw,5.5rem)">cada detalhe</span>
        </div>
        <div class="cw-ql-wrap">
            <span class="cw-ql font-extrabold uppercase tracking-[-0.03em] leading-[1.0] text-action"
                  style="font-size:clamp(2.75rem,7vw,5.5rem)">é intencional.</span>
        </div>
    </div>

</section>

<script>
(function () {
    var root = document.getElementById('cw-quote-root');
    if (!root) return;

    var lines = root.querySelectorAll('.cw-ql-wrap');

    var obs = new IntersectionObserver(function (entries) {
        if (!entries[0].isIntersecting) return;
        lines.forEach(function (wrap, i) {
            var el = wrap.querySelector('.cw-ql');
            if (!el) return;
            setTimeout(function () {
                el.style.transitionDelay = (i * 0.14) + 's';
                el.classList.add('cw-ql-on');
            }, 60);
        });
        obs.disconnect();
    }, { threshold: 0.2 });

    obs.observe(root);
}());
</script>
