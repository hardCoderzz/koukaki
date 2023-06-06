const observer_title = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('down-up');
        }
    });
});

const titles = ['.studio-text', '.koukaki-text', '.the-story-title'];
titles.forEach(title => {
    const elements = document.querySelectorAll(title);
    elements.forEach(element => {
        observer_title.observe(element);
    });
});
