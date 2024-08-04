let currentPlayingVideo = null;

const cards = Array.from(document.querySelectorAll('.roleta-card'));

// Função para atualizar a classe dos cartões
function updateCardClasses(activeCard) {
    cards.forEach((card, index) => {
        if (card === activeCard) {
            card.classList.add('active');
            card.classList.remove('inactive-left', 'inactive-right');
        } else if (index < cards.indexOf(activeCard)) {
            card.classList.add('inactive-left');
            card.classList.remove('active', 'inactive-right');
        } else {
            card.classList.add('inactive-right');
            card.classList.remove('active', 'inactive-left');
        }
    });
}

// Play video on card click
cards.forEach(card => {
    card.addEventListener('click', () => {
        const video = card.querySelector('video');
        const thumbnail = card.querySelector('.thumbnail');
        const videoControls = card.querySelector('.video-controls');
        const muteBtn = card.querySelector('.mute-btn');

        if (currentPlayingVideo && currentPlayingVideo !== video) {
            currentPlayingVideo.pause();
            currentPlayingVideo.parentNode.querySelector('.thumbnail').style.display = 'block';
            currentPlayingVideo.style.display = 'none';
            currentPlayingVideo.muted = true;
            currentPlayingVideo.parentNode.querySelector('.video-controls').style.display = 'none';
        }

        if (video.paused) {
            video.style.display = 'block';
            thumbnail.style.display = 'none';
            video.play();
            videoControls.style.display = 'flex';
            currentPlayingVideo = video;
            if (video.muted) {
                muteBtn.innerHTML = '<i class="fas fa-volume-up"></i>';
            } else {
                muteBtn.innerHTML = '<i class="fas fa-volume-mute"></i>';
            }
            video.muted = false;
            updateCardClasses(card);
        } else {
            video.pause();
            video.style.display = 'none';
            thumbnail.style.display = 'block';
            videoControls.style.display = 'none';
            currentPlayingVideo = null;
            if (video.muted) {
                muteBtn.innerHTML = '<i class="fas fa-volume-up"></i>';
            } else {
                muteBtn.innerHTML = '<i class="fas fa-volume-mute"></i>';
            }
            video.muted = true;
        }
    });

    // Maximize button
    const maximizeBtn = card.querySelector('.maximize-btn');
    maximizeBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        const video = card.querySelector('video');
        if (video.requestFullscreen) {
            video.requestFullscreen();
        } else if (video.webkitRequestFullscreen) { /* Safari */
            video.webkitRequestFullscreen();
        } else if (video.msRequestFullscreen) { /* IE11 */
            video.msRequestFullscreen();
        }
    });

    // Mute/Unmute button
    const muteBtn = card.querySelector('.mute-btn');
    muteBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        const video = card.querySelector('video');
        if (video.muted) {
            video.muted = false;
            muteBtn.innerHTML = '<i class="fas fa-volume-up"></i>';
        } else {
            video.muted = true;
            muteBtn.innerHTML = '<i class="fas fa-volume-mute"></i>';
        }
    });
});
