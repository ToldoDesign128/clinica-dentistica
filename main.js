// Prova
// Menu Animation

jQuery( "#hamburger" ).on('click', function() {
  jQuery(".menu-mobile").toggleClass("open-menu");
  jQuery("#hamburger").toggleClass("hamburger-active");
});
// Quote
const swiperQuote = new Swiper('.swiperQuote', {
    // Optional parameters
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,

    breakpoints: {
        1024: {
            slidesPerView: 2,
            spaceBetween: 50,
        },
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});