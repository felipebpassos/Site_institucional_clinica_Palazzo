let slideIndex = 1;
let slideInterval;

function initializeSlider() {
    showSlides(slideIndex);
    startSlideShow();
}

function startSlideShow() {
    // Clear existing interval, if any
    clearInterval(slideInterval);
    // Start a new interval to change slides every 8 seconds
    slideInterval = setInterval(function() {
        plusSlides(1);
    }, 8000);
}

function plusSlides(n) {
    showSlides(slideIndex += n);
    startSlideShow(); // Restart interval when user changes slide
}

function currentSlide(n) {
    showSlides(slideIndex = n);
    startSlideShow(); // Restart interval when user selects a specific slide
}

function showSlides(n) {
    let slides = document.getElementsByClassName("slide");
    let dots = document.getElementsByClassName("dot");
    let winiciusHero = document.getElementById("winicius-hero"); // Access the specific element
    let heroParentSlide = winiciusHero.closest('.slide'); // Get the parent slide of winicius-hero

    if (n > slides.length) { slideIndex = 1; }
    if (n < 1) { slideIndex = slides.length; }

    for (let i = 0; i < slides.length; i++) {
        slides[i].classList.remove('viewed');
    }

    slides[slideIndex - 1].classList.add('viewed');

    for (let i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    dots[slideIndex - 1].className += " active";

    // Check if the parent slide of winicius-hero is the viewed one
    if (heroParentSlide === slides[slideIndex - 1]) {
        winiciusHero.classList.remove('scale-loop');
        void winiciusHero.offsetWidth; // Force reflow
        winiciusHero.classList.add('scale-loop');
    }
}

// Initialize the slider when the page loads
initializeSlider();
