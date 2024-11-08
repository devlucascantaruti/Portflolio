$(document).ready(function(){

    // init Scroll Magic 
    var controller = new ScrollMagic.Controller();

    // criar scene
    $(".welcome, .about-me, .projects, .skills, .contact").each(function () {
      new ScrollMagic.Scene({
        triggerElement: this, // Elemento que ativa a cena
        triggerHook: 0.5, // Quando a seção atinge o centro da tela
        reverse: false, // Não repetir a animação ao rolar para cima
      })
        .setClassToggle(this, "fade-in") // Adiciona classe para animação
        .addTo(controller);
    });

});

const swiper = new Swiper(".swiper-container", {
  loop: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});