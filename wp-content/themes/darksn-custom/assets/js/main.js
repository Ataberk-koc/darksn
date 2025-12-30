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

  // About alanı animasyonları (başlık, metin, özellikler)
  const aboutAnimElements = document.querySelectorAll('.about-animate');
  if (aboutAnimElements.length > 0) {
    const aboutObserver = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('show');
        }
      });
    }, { threshold: 0.2 });
    aboutAnimElements.forEach(el => aboutObserver.observe(el));
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
// Sayaç kutusu animasyonu
function animateCounter(id, target, duration = 2000) {
  const el = document.getElementById(id);
  if (!el) return;
  let start = 0;
  const step = Math.ceil(target / (duration / 16));
  function update() {
    start += step;
    if (start >= target) {
      el.textContent = target.toLocaleString('tr-TR');
    } else {
      el.textContent = start.toLocaleString('tr-TR');
      requestAnimationFrame(update);
    }
  }
  update();
}

// Sayaç kutusu görünür olunca başlat
document.addEventListener('DOMContentLoaded', function () {
  const counterBox = document.querySelector('.counter-box');
  if (!counterBox) return;
  let started = false;
  const observer = new window.IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting && !started) {
        started = true;
        animateCounter('happyCustomers', 5000, 1800);
      }
    });
  }, { threshold: 0.5 });
  observer.observe(counterBox);
});
document.addEventListener('DOMContentLoaded', function () {
    var swiper = new Swiper(".myHeroSwiper", {
        slidesPerView: 1,
        loop: true, // Sonsuz döngü
        effect: "fade", // Geçiş efekti (fade veya slide yapabilirsiniz)
        speed: 1000, // Geçiş hızı
        autoplay: {
            delay: 5000, // 5 saniyede bir değişsin
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
});
