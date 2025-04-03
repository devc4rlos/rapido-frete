import InputMask from "inputmask";
import Toastify from "toastify-js";
import "toastify-js/src/toastify.css";
import anime from "animejs";

const form = document.getElementById("contactForm");
const messageFeedback = document.getElementById("messageFeedback");
const phoneInput = document.getElementById("phone");
InputMask("(99) 99999-9999").mask(phoneInput);

form.addEventListener('submit', (e) => {
    const messageFeedbackSuccess = "Sua mensagem foi enviada com sucesso!";

    e.preventDefault();

    clearForm();

    notificationMessageForm(messageFeedbackSuccess);
    notificationToastify(messageFeedbackSuccess);
})

function clearForm() {
    form.querySelectorAll('input').forEach(input => {
        input.value = '';
    })

    form.querySelector('textarea').value = '';
    form.querySelector('select').selectedIndex = 0;
}

function notificationToastify(text) {
    Toastify({
        text: text,
        gravity: "top",
        position: "right",
        duration: 5000,
    }).showToast();
}

function notificationMessageForm(messageFeedbackSuccess) {
    messageFeedback.innerText = messageFeedbackSuccess;
    anime({
        targets: messageFeedback,
        opacity: 1,
        duration: 1000,
        easing: "easeOutExpo",
    })

    setTimeout(() => {
        anime({
            targets: messageFeedback,
            opacity: 0,
            duration: 1000,
            easing: "easeOutExpo",
            complete: () => {
                messageFeedback.innerText = "";
            },
        })
    }, 5000)
}
