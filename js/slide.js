let slideIndex = 1;
let slideInterval;
let startX; // Para armazenar a posição inicial do toque
let threshold = 50; // Distância mínima para considerar o movimento como um swipe

function initializeSlider() {
    showSlides(slideIndex);
    startSlideShow();
    addSwipeListeners(); // Adicionar ouvintes de swipe
}

function startSlideShow() {
    clearInterval(slideInterval);
    slideInterval = setInterval(function() {
        plusSlides(1);
    }, 8000);
}

function plusSlides(n) {
    showSlides(slideIndex += n);
    startSlideShow();
}

function currentSlide(n) {
    showSlides(slideIndex = n);
    startSlideShow();
}

function showSlides(n) {
    let slides = document.getElementsByClassName("slide");
    let dots = document.getElementsByClassName("dot");
    let winiciusHero = document.getElementById("winicius-hero");
    let heroParentSlide = winiciusHero.closest('.slide');

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

    if (heroParentSlide === slides[slideIndex - 1]) {
        winiciusHero.classList.remove('scale-loop');
        void winiciusHero.offsetWidth; // Forçar reflow
        winiciusHero.classList.add('scale-loop');
    }
}

function addSwipeListeners() {
    let sliderContainer = document.querySelector('.slider'); // Certifique-se de ter a classe correta no container dos slides

    sliderContainer.addEventListener('touchstart', function(e) {
        startX = e.touches[0].clientX;
    });

    sliderContainer.addEventListener('touchend', function(e) {
        let endX = e.changedTouches[0].clientX;
        handleSwipe(startX, endX);
    });
}

function handleSwipe(start, end) {
    let diff = start - end;

    if (Math.abs(diff) > threshold) {
        if (diff > 0) {
            // Swipe para a esquerda
            plusSlides(1);
            console.log('esquerda')
        } else {
            // Swipe para a direita
            plusSlides(-1);
            console.log('direita')
        }
    }
}

// Inicializar o slider quando a página carregar
initializeSlider();
