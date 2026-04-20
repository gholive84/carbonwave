// ---- Reveal on scroll ----
const revealObserver = new IntersectionObserver((entries) => {
  entries.forEach(e => {
    if (e.isIntersecting) { e.target.classList.add('visible'); revealObserver.unobserve(e.target); }
  });
}, { threshold: 0.12 });
document.querySelectorAll('.reveal').forEach(el => revealObserver.observe(el));

// ---- Header: transparent on hero, white on scroll ----
const header = document.getElementById('header');
if (header) {
  const logo      = document.getElementById('headerLogo');
  const navLinks  = header.querySelectorAll('.nav-link');
  const hamburgerBars = header.querySelectorAll('.hamburger-bar');
  const waBtn     = header.querySelector('.header-wa-btn');
  const isHome    = document.querySelector('[data-hero]') !== null
                    || window.location.pathname === '/'
                    || window.location.pathname === '/index.php';

  function setTransparent() {
    header.classList.remove('bg-white', 'border-gray-200', 'shadow-md');
    header.classList.add('border-transparent');
    if (logo)   logo.classList.replace('text-navy', 'text-white');
    navLinks.forEach(l => { l.classList.remove('text-navy', 'hover:text-navy'); l.classList.add('text-white/80'); });
    hamburgerBars.forEach(b => b.classList.replace('bg-navy', 'bg-white'));
    if (waBtn) waBtn.classList.remove('border-navy/30', 'text-navy');
  }

  function setSolid() {
    header.classList.add('bg-white', 'border-gray-200', 'shadow-md');
    header.classList.remove('border-transparent');
    if (logo)   { logo.classList.remove('text-white'); logo.classList.add('text-navy'); }
    navLinks.forEach(l => { l.classList.remove('text-white/80'); l.classList.add('text-navy'); });
    hamburgerBars.forEach(b => b.classList.replace('bg-white', 'bg-navy'));
    if (waBtn) { waBtn.classList.add('border-navy/30', 'text-navy'); waBtn.classList.remove('border-white/25', 'text-white'); }
  }

  function updateHeader() {
    if (isHome && window.scrollY < 80) setTransparent();
    else setSolid();
  }

  if (!isHome) setSolid();
  else updateHeader();

  window.addEventListener('scroll', updateHeader, { passive: true });
}

// ---- Mobile menu ----
const hamburger = document.getElementById('hamburger');
const drawer    = document.getElementById('navDrawer');
const overlay   = document.getElementById('navOverlay');

function openMenu()  { if(drawer) drawer.style.right='0'; overlay?.classList.remove('hidden'); hamburger?.setAttribute('aria-expanded','true'); document.body.style.overflow='hidden'; }
function closeMenu() { if(drawer) drawer.style.right='-100%'; overlay?.classList.add('hidden'); hamburger?.setAttribute('aria-expanded','false'); document.body.style.overflow=''; }

hamburger?.addEventListener('click', () => hamburger.getAttribute('aria-expanded')==='true' ? closeMenu() : openMenu());
overlay?.addEventListener('click', closeMenu);
drawer?.querySelectorAll('a').forEach(a => a.addEventListener('click', closeMenu));

// ---- Contact form AJAX ----
const contactForm = document.getElementById('contactForm');
if (contactForm) {
  contactForm.addEventListener('submit', async (e) => {
    e.preventDefault();
    const btn = contactForm.querySelector('button[type="submit"]');
    const msg = document.getElementById('formMsg');
    btn.disabled = true;
    btn.textContent = 'Enviando...';

    try {
      const res  = await fetch('/cms/leads/submit.php', {
        method: 'POST',
        body: new FormData(contactForm),
      });
      const data = await res.json();

      msg.classList.remove('hidden', 'bg-red-500/20', 'text-red-400', 'bg-green-500/20', 'text-green-400');
      if (data.success) {
        msg.classList.add('bg-green-500/20', 'text-green-400');
        msg.textContent = 'Mensagem enviada! Retornaremos em breve.';
        contactForm.reset();
      } else {
        msg.classList.add('bg-red-500/20', 'text-red-400');
        msg.textContent = data.message || 'Erro ao enviar. Tente novamente.';
      }
      msg.classList.remove('hidden');
    } catch {
      msg.classList.remove('hidden');
      msg.classList.add('bg-red-500/20', 'text-red-400');
      msg.textContent = 'Erro de conexão. Tente novamente.';
    } finally {
      btn.disabled = false;
      btn.textContent = 'Enviar mensagem';
    }
  });
}
