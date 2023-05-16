// document.addEventListener('DOMContentLoaded', (event) => {

//     const swiper = new Swiper(".swiper-container", {
//         // Optional parameters
//         // direction: "horizontal",

//         // // Responsive breakpoints
//         // breakpoints: {
//         //     // when window width is >= 320px
//         //     320: {
//         //         slidesPerView: 2,
//         //         spaceBetween: 20
//         //     },
//         //     // when window width is >= 480px
//         //     480: {
//         //         slidesPerView: 2,
//         //         spaceBetween: 30
//         //     },
//         //     // when window width is >= 640px
//         //     640: {
//         //         slidesPerView: 3,
//         //         spaceBetween: 10
//         //     }
//         // },

//         // Enable touch drag
//         touch: {
//             enabled: true,
//         },
//     });

// });

const swiper = new Swiper(".swiper-container", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
    },

});