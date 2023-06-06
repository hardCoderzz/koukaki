var swiper = new Swiper(".swiper-container", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    spaceBetween: 40,
    watchOverflow: true,
    coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,

    },


});

swiper.on('touchStart', function () {
    document.body.style.overflow = 'hidden';
});

swiper.on('touchEnd', function () {
    document.body.style.overflow = '';
});

const swiperContainer = document.querySelector('.swiper-container');

swiperContainer.addEventListener('touchmove', function (e) {
    e.preventDefault();
}, { passive: false });