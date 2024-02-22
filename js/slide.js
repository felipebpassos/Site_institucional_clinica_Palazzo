let slideIndex = 1;
let slideTimer;

showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("slides");
    let overlays = document.getElementsByClassName("overlay-main");
    let headlines = document.getElementsByClassName("headline");

    // Cancela o temporizador anterior, se existir
    if (slideTimer) {
        clearTimeout(slideTimer);
    }

    if (n > slides.length) {
        slideIndex = 1;
    }

    if (n < 1) {
        slideIndex = slides.length;
    }

    // Oculta todos os overlays
    for (i = 0; i < overlays.length; i++) {
        overlays[i].style.display = 'none';
        headlines[i].style.display = 'none';
    }

    // Exibe apenas o overlay correspondente ao slide atual
    overlays[slideIndex - 1].style.display = 'block'; 
    headlines[slideIndex - 1].style.display = 'block'; 

    for (i = 0; i < slides.length; i++) {
        slides[i].style.opacity = 0;
        slides[i].style.zIndex = 1;
    }

    slides[slideIndex - 1].style.opacity = 1;
    slides[slideIndex - 1].style.zIndex = 5;
}