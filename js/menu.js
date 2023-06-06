const burger = document.getElementById('burger-btn');
const fullscreenMenu = document.getElementById('menu-fullscreen');

burger.addEventListener('click', () => {
    burger.classList.toggle('active');
    fullscreenMenu.classList.toggle('active');
});

const menuLinks = document.querySelectorAll("#menu-fullscreen ul li a");

menuLinks.forEach((link) => {
    link.addEventListener('click', () => {
        burger.classList.remove('active');
        fullscreenMenu.classList.remove('active');

    });
});