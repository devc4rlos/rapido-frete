const messagesWarning = document.querySelectorAll('.message-warning');

messagesWarning.forEach(message => {
    message.addEventListener('click', (e) => {
        e.target.closest("#containerMessageWarning").classList.toggle('active');
    })
})

