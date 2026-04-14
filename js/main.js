/* ============================================================
   AKOL FAMILY WEBSITE — Shared JavaScript
   ============================================================ */

// ── MOBILE MENU TOGGLE ──
function initNav() {
  const hamburger = document.querySelector('.nav-hamburger');
  const mobileMenu = document.querySelector('.mobile-menu');
  if (!hamburger || !mobileMenu) return;

  hamburger.addEventListener('click', () => {
    mobileMenu.classList.toggle('open');
    const spans = hamburger.querySelectorAll('span');
    const isOpen = mobileMenu.classList.contains('open');
    spans[0].style.transform = isOpen ? 'rotate(45deg) translate(5px,5px)' : '';
    spans[1].style.opacity = isOpen ? '0' : '1';
    spans[2].style.transform = isOpen ? 'rotate(-45deg) translate(5px,-5px)' : '';
  });

  // Close on link click
  mobileMenu.querySelectorAll('a').forEach(a => {
    a.addEventListener('click', () => mobileMenu.classList.remove('open'));
  });
}

// ── ACTIVE NAV LINK ──
function setActiveNav() {
  const page = window.location.pathname.split('/').pop() || 'index.html';
  document.querySelectorAll('.nav-links a, .mobile-menu a').forEach(a => {
    const href = a.getAttribute('href');
    if (href === page || (page === 'index.html' && href === 'index.html')) {
      a.classList.add('active');
    }
  });
}

// ── SCROLL FADE-IN ──
function initScrollAnimations() {
  const io = new IntersectionObserver(entries => {
    entries.forEach(e => {
      if (e.isIntersecting) {
        e.target.classList.add('visible');
        io.unobserve(e.target);
      }
    });
  }, { threshold: 0.1 });
  document.querySelectorAll('.fade-up').forEach(el => io.observe(el));
}

// ── GALLERY MODAL ──
function initGalleryModal() {
  const modal = document.getElementById('gallery-modal');
  if (!modal) return;

  document.querySelectorAll('[data-gallery]').forEach(item => {
    item.addEventListener('click', () => {
      const title = item.dataset.title || '';
      const desc  = item.dataset.desc  || '';
      const imgId = item.dataset.imgId || '';
      modal.querySelector('.modal-title').textContent = title;
      modal.querySelector('.modal-desc').textContent  = desc;
      // Show the placeholder icon or actual img
      const ph = modal.querySelector('.modal-img');
      if (ph) ph.setAttribute('data-img-id', imgId);
      modal.classList.add('open');
    });
  });

  modal.addEventListener('click', e => {
    if (e.target === modal || e.target.classList.contains('modal-close')) {
      modal.classList.remove('open');
    }
  });
}

// ── CONTACT FORM ──
function initContactForm() {
  const form = document.getElementById('contact-form');
  if (!form) return;
  form.addEventListener('submit', e => {
    e.preventDefault();
    const btn = form.querySelector('button[type="submit"]');
    btn.textContent = '✓ Message Sent!';
    btn.style.background = '#1C4A1C';
    setTimeout(() => {
      btn.textContent = 'Send Message';
      btn.style.background = '';
      form.reset();
    }, 3500);
  });
}

// ── INIT ALL ──
document.addEventListener('DOMContentLoaded', () => {
  initNav();
  setActiveNav();
  initScrollAnimations();
  initGalleryModal();
  initContactForm();
});
