import anime from "animejs";

const storageKey = 'user_preference';
const expirationMinutes = 10;
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
        translateX: [0],
        duration: 500,
        easing: "easeOutQuad",
        complete: () => {
            containerMessage.classList.remove('progress');
            messageWarningContent.classList.add('hidden');
            setPreference('hide');
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
        translateX: ['100%'],
        duration: 500,
        easing: "easeOutQuad",
        complete: () => {
            containerMessage.classList.remove('progress');
            removePreference();
        }
    });

    containerMessage.classList.add('active');
}

function setPreference(value) {
    const data = {
        value: value,
        expiresAt: Date.now() + expirationMinutes * 60 * 1000
    };
    localStorage.setItem(storageKey, JSON.stringify(data));
}

function removePreference() {
    localStorage.removeItem(storageKey);
}

function getPreference() {
    const data = JSON.parse(localStorage.getItem(storageKey));
    if (!data) return null;

    if (Date.now() > data.expiresAt) {
        removePreference();
        return null;
    }

    return data.value;
}

const pref = getPreference();
if (pref === null) {
    activeMessageWarning()
}
