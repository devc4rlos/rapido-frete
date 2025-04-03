import anime from "animejs";

const questionResponseButton = document.querySelectorAll('.faq-question');
const durationAnimation = 1000;

questionResponseButton.forEach(questionButton => {
    questionButton.addEventListener('click', () => {
        const questionCard = questionButton.closest('.faq-question-response');
        const questionResponse = questionCard.querySelector('.faq-response');
        const questionIcon = questionCard.querySelector('.faq-question-icon');

        questionCard.classList.contains('active')
            ? closeQuestionResponse(questionResponse, questionIcon)
            : openQuestionResponse(questionResponse, questionIcon);

        questionCard.classList.toggle('active');
    })
})

function openQuestionResponse(question, questionIcon) {
    changeIcon(questionIcon);

    anime({
        targets: question,
        height: [ 0, '100%' ],
        opacity: [ 0, 1 ],
        duration: durationAnimation,
        easing: 'easeOutExpo',
    })
}

function closeQuestionResponse(question, questionIcon) {
    changeIcon(questionIcon, 'close');

    anime({
        targets: question,
        height: [ '100%', '0px' ],
        opacity: [ 1, 0 ],
        duration: durationAnimation,
        easing: 'easeOutExpo'
    })
}

function changeIcon(questionIcon, mode = 'open') {
    const iconOpen = questionIcon.querySelector('.icon-open');
    const iconClose = questionIcon.querySelector('.icon-close');

    if (mode === 'close') {
        iconOpen.classList.remove('hidden');
        iconClose.classList.add('hidden');
        return;
    }

    iconOpen.classList.add('hidden');
    iconClose.classList.remove('hidden');
}
