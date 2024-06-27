// Quote
const swiperQuote = new Swiper('.swiperQuote', {
    // Optional parameters
    slidesPerView: 1,
    spaceBetween: 30,
    autoplay: {
    delay: 3000,
  },
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

// Service
const swiperService = new Swiper('.swiperService', {
    // Optional parameters
    slidesPerView: 1,
    spaceBetween: 30,
    autoplay: {
    delay: 5000,
  },
    loop: true,

    breakpoints: {
        1024: {
            slidesPerView: 2,
            spaceBetween: 30,
        },
        1280: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
    },

    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});