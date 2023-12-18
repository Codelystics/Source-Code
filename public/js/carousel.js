document.addEventListener("DOMContentLoaded", function () {
    const detailsElements = document.querySelectorAll("details");

    detailsElements.forEach((details) => {
        details.addEventListener("click", () => {
            detailsElements.forEach((element) => {
                if (element !== details && element.open) {
                    element.open = false;
                }
            });
        });
    });
});

window.addEventListener('DOMContentLoaded', () => {
    const slideRows = document.querySelectorAll('.slide-row');

    slideRows.forEach(slideRow => {
        slideRow.addEventListener('animationiteration', () => {
            slideRow.style.animationPlayState = 'paused'; // Pause the animation at the end of each iteration
            setTimeout(() => {
                slideRow.style.animationPlayState = 'running'; // Resume the animation after a short delay
            }, 0); // Adjust the delay if needed
        });
    });
});