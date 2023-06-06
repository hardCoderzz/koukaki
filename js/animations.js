
function isElementInViewport(el) {
    const rect = el.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

// ELEMENTS SPEED UP ON SCROLL WHEN IN VIEWPORT

function updateAnimationSpeed() {
    const elements = document.querySelectorAll('.story__article, #studio h2, .story h2, .oscar');
    const fasterDuration = "3s";

    elements.forEach(element => {
        if (isElementInViewport(element)) {
            element.style.setProperty('--animation-duration', fasterDuration);
        } else {
            element.style.removeProperty('--animation-duration');
        }
    });
}

window.addEventListener('scroll', () => {
    updateAnimationSpeed()
});

// CLOUDS ANIMATION ON SCROLL

function moveClouds() {
    const clouds = document.querySelectorAll('.little-cloud, .big-cloud');
    clouds.forEach(cloud => {
        if (isElementInViewport(cloud)) {
            cloud.classList.add('scrolling');
        } else {
            cloud.classList.remove('scrolling');
        }
    });
}

window.addEventListener('scroll', moveClouds);

// ON SCROLL LOADING SECTIONS WITH FADE-IN

let observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('fade-in');
        }
    });
});

const sections = ['story', 'characters', 'place', 'studio', 'oscar'];
sections.forEach(id => {
    const section = document.getElementById(id);
    observer.observe(section);
});
