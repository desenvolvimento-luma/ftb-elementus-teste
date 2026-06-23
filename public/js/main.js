document.querySelectorAll('.carousel').forEach(function(el) {
  bootstrap.Carousel.getOrCreateInstance(el, { touch: true });
});

document.querySelectorAll('.faq-header').forEach(function(header) {
  header.addEventListener('click', function() {
    var item = this.closest('.faq-item');
    var isOpen = item.classList.contains('open');

    document.querySelectorAll('.faq-item').forEach(function(el) {
      el.classList.remove('open');
      el.querySelector('.faq-header').setAttribute('aria-expanded', 'false');
    });

    if (!isOpen) {
      item.classList.add('open');
      this.setAttribute('aria-expanded', 'true');
    }
  });
});

document.querySelectorAll('.product-mob-accordion').forEach(function(card) {
  card.addEventListener('click', function() {
    var isOpen = this.classList.contains('open');
    document.querySelectorAll('.product-mob-accordion').forEach(function(c) {
      c.classList.remove('open');
    });
    if (!isOpen) this.classList.add('open');
  });
});

document.querySelectorAll('.product-select-card').forEach(function(card) {
  card.addEventListener('click', function() {
    var img = document.getElementById('produto-img');
    var titulo = document.getElementById('produto-titulo');
    var desc = document.getElementById('produto-desc');

    var currentImg = img.src;
    var currentTitulo = titulo.textContent;
    var currentDesc = desc.textContent;

    var newImg = this.dataset.img;
    var newTitulo = this.dataset.titulo;
    var newDesc = this.dataset.desc;

    this.dataset.img = currentImg;
    this.dataset.titulo = currentTitulo;
    this.dataset.desc = currentDesc;
    this.querySelector('.ps-title').textContent = currentTitulo;
    this.querySelector('.ps-desc').textContent = currentDesc;

    img.style.opacity = '0';
    setTimeout(function() {
      img.src = newImg;
      img.onload = function() { img.style.opacity = '1'; };
      img.style.opacity = '1';
    }, 150);
    titulo.textContent = newTitulo;
    desc.textContent = newDesc;
  });
});

document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
  anchor.addEventListener('click', function(e) {
    var target = document.querySelector(this.getAttribute('href'));
    if (target) {
      e.preventDefault();
      target.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
  });
});
