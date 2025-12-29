document.addEventListener("DOMContentLoaded", () => {
  console.log("Tema JS yüklendi!");
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
