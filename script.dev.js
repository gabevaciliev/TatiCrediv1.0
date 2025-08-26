"use strict";

function redirecionar(url) {
  window.location.href = url;
}

function destacar(element) {
  element.classList.add('ativo');
  setTimeout(function () {
    element.classList.remove('ativo');
  }, 300);
}

document.addEventListener('DOMContentLoaded', function () {
  var reveals = document.querySelectorAll('.reveal');

  function revealOnScroll() {
    for (var i = 0; i < reveals.length; i++) {
      var windowHeight = window.innerHeight;
      var elementTop = reveals[i].getBoundingClientRect().top;
      var elementVisible = 100;

      if (elementTop < windowHeight - elementVisible) {
        reveals[i].classList.add('visible');
      }
    }
  }

  window.addEventListener('scroll', revealOnScroll);
  revealOnScroll();
});
//# sourceMappingURL=script.dev.js.map
