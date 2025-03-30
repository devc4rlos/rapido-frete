import anime from "animejs";

document.addEventListener("DOMContentLoaded", animate);

function animate() {
    const elements = document.querySelectorAll(".animate");

    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                animateHandle(entry.target);

                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.2 });

    elements.forEach((el) => observer.observe(el));
}

function animateHandle(element) {
    if (element.classList.contains("from-right") || element.classList.contains("from-left")) {
        return animateX(element);
    }

    return animateY(element);
}

function animateY(element) {
    anime({
        targets: element,
        opacity: [0, 1],
        translateY: [50, 0],
        duration: 1000,
        easing: "easeOutQuad",
    });
}

function animateX(element) {
    let direction = element.classList.contains("from-right") ? 100 : -100;

    anime({
        targets: element,
        opacity: [0, 1],
        translateX: [direction, 0],
        duration: 1500,
        easing: "easeOutExpo",
    });
}
