import anime from "animejs";

const textPopupWhatsapp = document.getElementById("textPopupWhatsapp");
const containerLoading = document.getElementById("containerLoading");
const questionPopup = document.getElementById("questionPopup");
const closePopupWhatsapp = document.getElementById("closePopupWhatsapp");
const circles = document.querySelectorAll('.circle-loading');
const popups = document.querySelectorAll('.popup-whatsapp');
const durationAnimation = 750;

animationStartPopupWhatsapp();
animationLoading();

closePopupWhatsapp.addEventListener("click", e => {
    e.preventDefault();
    animationClosePopupWhatsapp();
})

popups.forEach((element) => {
    element.addEventListener('click', () => {
        animationClosePopupWhatsapp();
    })
})

setTimeout(function () {
    showMessagePopupWhatsapp();
}, durationAnimation * 2.6)

function animationStartPopupWhatsapp() {
    anime({
        targets: '#iconPopupWhatsapp',
        opacity: [0, 1],
        translateY: [50, 0],
        delay: 1000,
        duration: durationAnimation,
        easing: "easeOutQuad",
    });

    anime({
        targets: textPopupWhatsapp,
        opacity: [0, 1],
        translateX: [-20, 0],
        delay: 1200,
        duration: durationAnimation - 200,
        easing: "easeOutQuad",
    });
}

function animationLoading() {
    circles.forEach((circle, index) => {
        setTimeout(function () {
            anime({
                targets: circle,
                opacity: [0.8, 1],
                scale: [0.8, 1],
                backgroundColor: ['#ece6e6', '#b4aeae'],
                loop: true,
                duration: durationAnimation,
                easing: "easeInOutQuad",
            });
        },  (durationAnimation / circles.length) * index)
    });
}

function showMessagePopupWhatsapp() {
    containerLoading.classList.add('hidden');
    questionPopup.classList.remove('hidden');

    anime({
        targets: textPopupWhatsapp,
        opacity: [1, 0],
        delay: 60000,
        duration: 750,
        easing: "easeOutQuad",
    });
}

function animationClosePopupWhatsapp() {
    anime({
        targets: textPopupWhatsapp,
        opacity: [1, 0],
        duration: 750,
        easing: "easeOutQuad",
        complete: () => {
            textPopupWhatsapp.classList.add('hidden');
        }
    });
}
