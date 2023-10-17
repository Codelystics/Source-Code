function animateNumbers(element, start, end, duration) {
    let range = end - start;
    let current = start;
    let increment = end > start ? 1 : -1;
    let stepTime = Math.abs(Math.floor(duration / range));
    let timer = setInterval(function() {
        current += increment;
        element.textContent = current;
        if (current == end) {
            clearInterval(timer);
            document.getElementById('achievement-plus').style.opacity = 1; // Show "++"
        }
    }, stepTime);
}

function handleIntersection(entries, observer) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            animateNumbers(document.getElementById('achievement-counter'), 1000, 1200, 0);
            observer.unobserve(entry.target);
        }
    });
}

let observer = new IntersectionObserver(handleIntersection, { threshold: 0.5 });
let achievementsSection = document.getElementById('number');
observer.observe(achievementsSection);
