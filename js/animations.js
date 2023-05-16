function isElementInViewport(el) {
    const rect = el.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

function updateAnimationSpeed() {
    const elements = document.querySelectorAll('.story__article, #studio h2, .story h2, .oscar');
    const fasterDuration = "3s";

    elements.forEach(element => {
        if (isElementInViewport(element)) {
            element.style.setProperty('--animation-duration', fasterDuration);
            console.log(element, isElementInViewport(element))
        } else {
            element.style.removeProperty('--animation-duration');
            console.log(element, isElementInViewport(element))
        }
    });
}

window.addEventListener('scroll', (e) => {
    updateAnimationSpeed()
    console.log(e)
});

function moveClouds() {
    const clouds = document.querySelectorAll('.little-cloud, .big-cloud');
    clouds.forEach(cloud => {
        if (isElementInViewport(cloud)) {
            cloud.classList.add('scrolling');
            console.log(cloud);
        } else {
            cloud.classList.remove('scrolling');
        }
    });
}

window.addEventListener('scroll', moveClouds);


