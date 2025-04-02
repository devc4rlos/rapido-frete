let timeCurrent = 0;

document.addEventListener('fullscreenchange', e => {
    const mode = document.fullscreenElement ? 'full' : 'min';

    changeVideo(e.target, mode);
});

function changeVideo(video, mode) {
    timeCurrent = video.currentTime;

    const source = video.querySelector(`source[src="${video.currentSrc}"]`);

    const pattern = /^(.*assets\/)(.*?)(?:-full)?\.(\w+)$/;
    const match = video.currentSrc.match(pattern);
    const path = match[1];
    const extension = '.' + match[3];
    let nameFile = match[2];

    if (mode === 'full') {
        nameFile = nameFile + '-full'
    }

    source.src = path + nameFile + extension;
    video.load();
    video.currentTime = timeCurrent;
    video.play();
}
