import anime from 'animejs';

const hamburger = document.getElementById('hamburger');
const menuMobile = document.getElementById('menuMobile');
const overlay = document.getElementById('overlay');
const closeOverlay = document.getElementsByClassName('close-overlay');
const backgroundOverlay = document.getElementById('backgroundOverlay');
const duration = 300;

hamburger.addEventListener('click', () => {
    openMenu();
})

Array.from(closeOverlay).forEach((close) => {
    close.addEventListener('click', () => {
        closeMenu();
    })
})

const openMenu = () => updateMenu(() => {
    overlay.classList.remove('hidden');
    overlay.classList.add('animation-progress');
    document.body.classList.add('overflow-hidden');
    animateOpenMenu();
    animateOpenBackgroundOverlay()
});

const closeMenu = () => updateMenu(() => {
    overlay.classList.add('animation-progress');
    document.body.classList.remove('overflow-hidden');
    animateCloseMenu();
    animateCloseBackgroundOverlay();
});

function animateOpenMenu() {
    anime({
        targets: menuMobile,
        translateX: '-100%',
        duration: duration,
        easing: 'easeOutQuad',
        complete: () => {
            overlay.classList.remove('animation-progress');
        }
    });
}

function animateCloseMenu() {
    anime({
        targets: menuMobile,
        translateX: '0',
        duration: duration,
        easing: 'easeOutQuad',
        complete: () => {
            overlay.classList.add('hidden');
            overlay.classList.remove('animation-progress');
        }
    });
}

function animateOpenBackgroundOverlay() {
    anime({
        targets: backgroundOverlay,
        opacity: '1',
        duration: duration,
        easing: 'easeOutQuad',
    });
}

function animateCloseBackgroundOverlay() {
    anime({
        targets: backgroundOverlay,
        opacity: '0',
        duration: duration,
        easing: 'easeOutQuad',
    });
}

function updateMenu(callback) {
    if (overlay.classList.contains('animation-progress')) {
        return false;
    }

    callback();
}
