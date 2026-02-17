// script.js

document.addEventListener('DOMContentLoaded', function() {
    const panel = document.querySelector('.horizontal-panel');
    let isDown = false;
    let startX;
    let scrollLeft;

    panel.addEventListener('mousedown', (e) => {
        isDown = true;
        panel.classList.add('active');
        startX = e.pageX - panel.offsetLeft;
        scrollLeft = panel.scrollLeft;
    });

    panel.addEventListener('mouseleave', () => {
        isDown = false;
        panel.classList.remove('active');
    });

    panel.addEventListener('mouseup', () => {
        isDown = false;
        panel.classList.remove('active');
    });

    panel.addEventListener('mousemove', (e) => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - panel.offsetLeft;
        const walk = (x - startX) * 2; //scroll-fast
        panel.scrollLeft = scrollLeft - walk;
    });
});
