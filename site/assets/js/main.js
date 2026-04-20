// ---- Reveal on scroll ----
const revealObserver = new IntersectionObserver((entries) => {
  entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('visible'); revealObserver.unobserve(e.target); } });
}, { threshold: 0.12 });
document.querySelectorAll('.reveal').forEach(el => revealObserver.observe(el));

// ---- Header scroll shadow ----
const header = document.getElementById('header');
if (header) {
  window.addEventListener('scroll', () => {
    header.classList.toggle('shadow-md', window.scrollY > 20);
  }, { passive: true });
}

// ---- Mobile menu ----
const hamburger = document.getElementById('hamburger');
const drawer    = document.getElementById('navDrawer');
const overlay   = document.getElementById('navOverlay');

function openMenu() {
  drawer.style.right = '0';
  overlay.classList.remove('hidden');
  hamburger.setAttribute('aria-expanded', 'true');
  document.body.style.overflow = 'hidden';
}
function closeMenu() {
  drawer.style.right = '-100%';
  overlay.classList.add('hidden');
  hamburger.setAttribute('aria-expanded', 'false');
  document.body.style.overflow = '';
}

if (hamburger) {
  hamburger.addEventListener('click', () => {
    const isOpen = hamburger.getAttribute('aria-expanded') === 'true';
    isOpen ? closeMenu() : openMenu();
  });
}
if (overlay) overlay.addEventListener('click', closeMenu);
drawer && drawer.querySelectorAll('a').forEach(a => a.addEventListener('click', closeMenu));
