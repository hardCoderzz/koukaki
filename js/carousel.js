const swiper = new Swiper('.swiper', {
    effect: 'coverflow',
    grabCursor: true,
    spaceBetween: 30,
    slidesPerView: 'auto',
    centeredSlides: true,
    //     coverflowEffect: {
    //         rotate: 0,
    //         stretch: 0,
    //         depth: 100,
    //         modifier: 1,
    //         slideShadows: false,
    //     }
})

// swiper.on('touchStart', function () {
//     document.body.style.overflow = 'hidden';
// });

// swiper.on('touchEnd', function () {
//     document.body.style.overflow = '';
// });

// const swiperContainer = document.querySelector('.swiper-container');

// swiperContainer.addEventListener('touchmove', function (e) {
//     e.preventDefault();
// }, { passive: false });