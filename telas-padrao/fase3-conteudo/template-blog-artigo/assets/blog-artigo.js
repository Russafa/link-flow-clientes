/* Telas Padrão — Blog + Artigo (Fase 3)
   Reveal-on-scroll, filtro de categoria, TOC ativa no scroll. */
(function () {
  'use strict';

  /* ---------- Reveal on scroll ---------- */
  var revealEls = document.querySelectorAll('.rv');
  if (revealEls.length && 'IntersectionObserver' in window) {
    var io = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add('in');
            io.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.12 }
    );
    revealEls.forEach(function (el) { io.observe(el); });
  } else {
    revealEls.forEach(function (el) { el.classList.add('in'); });
  }

  /* ---------- Filtro de categoria (listagem do blog) ----------
     Categorias reais do catálogo Telas Padrão: todos, eletrosoldada,
     galvanizada, inox, protecao, peneiracao.
     (Não existe aba "construcao" — a Telas Padrão não trabalha com
     Malha POP nem telas para construção civil.) */
  var tabs = document.querySelectorAll('.filter-tab');
  var cards = document.querySelectorAll('.blog-grid .card');
  if (tabs.length && cards.length) {
    tabs.forEach(function (tab) {
      tab.addEventListener('click', function () {
        var cat = tab.getAttribute('data-cat');
        tabs.forEach(function (t) { t.classList.remove('active'); });
        tab.classList.add('active');
        cards.forEach(function (card) {
          var cardCat = card.getAttribute('data-cat');
          card.style.display = (cat === 'todos' || cardCat === cat) ? '' : 'none';
        });
      });
    });
  }

  /* ---------- TOC ativa conforme a seção visível ---------- */
  var tocLinks = document.querySelectorAll('.toc-link');
  if (tocLinks.length) {
    var targets = [];
    tocLinks.forEach(function (link) {
      var id = link.getAttribute('href').replace('#', '');
      var el = document.getElementById(id);
      if (el) targets.push({ link: link, el: el });
    });

    function onScroll() {
      var scrollPos = window.scrollY + 120;
      var current = null;
      targets.forEach(function (t) {
        if (t.el.offsetTop <= scrollPos) current = t;
      });
      tocLinks.forEach(function (link) { link.classList.remove('active'); });
      if (current) current.link.classList.add('active');
    }

    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
  }
})();
