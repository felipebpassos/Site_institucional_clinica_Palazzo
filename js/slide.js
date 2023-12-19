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

    for (i = 0; i < slides.length; i++) {
        slides[i].style.opacity = 0;
        slides[i].style.zIndex = 1;
    }

    slides[slideIndex - 1].style.opacity = 1;
    slides[slideIndex - 1].style.zIndex = 5;
}