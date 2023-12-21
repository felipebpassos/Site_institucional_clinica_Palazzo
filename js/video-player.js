var videoPlayer = document.getElementById('videoPlayer');
var modalVideo = document.getElementById('modalVideo');

function openVideoModal(videoSrc) {
    videoPlayer.style.display = 'flex'; // ou 'block', dependendo do seu layout
    modalVideo.src = videoSrc;
    // Restaurar overflow padrão no body
    document.body.style.overflow = "hidden";
}

function closeVideoModal() {
    videoPlayer.style.display = 'none';
    modalVideo.pause();
    modalVideo.src = ""; // Limpar o src para interromper a reprodução do vídeo
    // Restaurar overflow padrão no body
    document.body.style.overflow = "auto";
}


