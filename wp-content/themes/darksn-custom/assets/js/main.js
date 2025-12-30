document.addEventListener("DOMContentLoaded", () => {
  console.log("Tema JS yüklendi!");

  // Hamburger Menü Aç/Kapat
  const hamburger = document.querySelector('.hamburger');
  const mainNav = document.querySelector('.main-nav');
  // Menüdeki li'lara animasyon indexi ata
  if (mainNav) {
    const menuItems = mainNav.querySelectorAll('.menu > li');
    menuItems.forEach((li, idx) => {
      li.style.setProperty('--i', idx);
    });
  }
  if (hamburger && mainNav) {
    hamburger.addEventListener('click', function() {
      const isOpen = mainNav.classList.toggle('open');
      hamburger.classList.toggle('active', isOpen);
      hamburger.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
      // Menü açıldığında animasyon indexlerini güncelle (dinamik menü için)
      if (isOpen) {
        const menuItems = mainNav.querySelectorAll('.menu > li');
        menuItems.forEach((li, idx) => {
          li.style.setProperty('--i', idx);
        });
      }
    });
    // Menüden bir linke tıklanınca menüyü kapat
    mainNav.querySelectorAll('a').forEach(link => {
      link.addEventListener('click', () => {
        if (window.innerWidth <= 900) {
          mainNav.classList.remove('open');
          hamburger.classList.remove('active');
          hamburger.setAttribute('aria-expanded', 'false');
        }
      });
    });
  }
});
const observer = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('show');
    }
  });
});

document.querySelectorAll('.service-card').forEach(card => {
  observer.observe(card);
});
