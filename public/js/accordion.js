const items = document.querySelectorAll('.accordion-item');

items.forEach(item => {
    item.addEventListener('click', () => {
        const toggle = item.querySelector('.toggle');
        const arrows = item.querySelectorAll('.arrow');

        toggle.classList.toggle('hidden');
        arrows.forEach(arrow => {
            arrow.classList.toggle('hidden');
        });
    });
});