
function parallaxScroll() {
    if (window.innerWidth <= 768) {
        return;
    }
    const banner = document.querySelector('.banner');
    const video = banner.querySelector('.video');
    const fallbackImage = banner.querySelector('.fallback-image');
    const logo = banner.querySelector('.logo-header');
    const scrollPosition = window.pageYOffset || document.documentElement.scrollTop;
    const videoHeight = video.offsetHeight;
    const fallbackImageHeight = fallbackImage.offsetHeight;
    const logoHeight = logo.offsetHeight;
    const maxOffsetVideo = videoHeight - logoHeight;
    const maxOffsetImage = fallbackImageHeight - logoHeight;
    const parallaxOffsetVideo = Math.max(0, Math.min(scrollPosition * 0.4, maxOffsetVideo));
    const parallaxOffsetImage = Math.max(0, Math.min(scrollPosition * 0.4, maxOffsetImage));

    video.style.transform = `translate3D(0, -${parallaxOffsetVideo}px, 0)`;
    fallbackImage.style.transform = `translate3D(0, -${parallaxOffsetImage}px, 0)`;
    logo.style.transform = `translate3D(0, ${Math.max(parallaxOffsetVideo, parallaxOffsetImage)}px, 0)`;
    console.log(video.style.transform)
    console.log(logo.style.transform)
    console.log(parallaxOffsetImage)
}

window.addEventListener('scroll', parallaxScroll);
