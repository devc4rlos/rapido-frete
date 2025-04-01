const sectionStep = document.querySelector("#listStep");
const progress = document.querySelector(".bar .progress");
const entrypoint = Array.from({ length: 6 }, (_, i) => i === 0 ? 3 : i * 20);
const tolerance = 500;

window.addEventListener("scroll", changeProgressBarTheSectionStep)

function changeProgressBarTheSectionStep() {
    const offsetTopSection = sectionStep.offsetTop;
    const heightSection = sectionStep.offsetHeight;
    const scrollEntryPosition = (offsetTopSection - window.innerHeight) + tolerance;
    const scrollLeavePosition = (heightSection + offsetTopSection) - tolerance;
    const scrollY = window.scrollY;
    const sectionScrollSize = Math.abs(scrollLeavePosition - scrollEntryPosition);
    const positionScrollSection = scrollY - scrollEntryPosition;

    if (scrollY >= scrollEntryPosition) {
        let percentage = Math.ceil(Math.abs(positionScrollSection * 100 / sectionScrollSize)).toFixed(2)
        percentage = percentage >= 100 ? '100' : percentage;
        progress.style.height = `${percentage}%`;

        toggleClassActiveTheCards(percentage);
    }
}

function toggleClassActiveTheCards(percentage) {
    entrypoint.forEach((item, i) => {
        const card = document.querySelectorAll('.card')[i];

        if (percentage >= item){
            card.classList.add('active');
            return;
        }

        card.classList.remove('active');
    })
}

window.addEventListener("DOMContentLoaded", () => {
    changeProgressBarTheSectionStep();
})
