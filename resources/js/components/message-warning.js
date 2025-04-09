import anime from "animejs";

const messagesWarning = document.querySelectorAll('.message-warning');
const messageWarningContent = document.getElementById('messageWarningContent');
const containerMessage = document.getElementById("containerMessageWarning")

messagesWarning.forEach(message => {
    message.addEventListener('click', () => {
        if(containerMessage.classList.contains('progress')){
            return;
        }

        if (containerMessage.classList.contains('active')) {
            hideMessageWarning();
            return;
        }

        activeMessageWarning();
    })
})

function hideMessageWarning() {
    containerMessage.classList.add('progress');
    anime({
        targets: messageWarningContent,
        opacity: [1, 0],
        translateX: ['-100%'],
        duration: 500,
        easing: "easeOutQuad",
        complete: () => {
            containerMessage.classList.remove('progress');
            messageWarningContent.classList.add('hidden');
        }
    });

    containerMessage.classList.remove('active');
}

function activeMessageWarning() {
    messageWarningContent.classList.remove('hidden');

    containerMessage.classList.add('progress');
    anime({
        targets: messageWarningContent,
        opacity: [0, 1],
        translateX: [0],
        duration: 500,
        easing: "easeOutQuad",
        complete: () => {
            containerMessage.classList.remove('progress');
        }
    });

    containerMessage.classList.add('active');
}
