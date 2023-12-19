let slideIndex = 0;
const slides = document.querySelectorAll('.apresentação-principal .imagens img');

function showSlide(index) {
    slides.forEach(slide => {
        slide.classList.remove('inactive');
    });

    slides[index].classList.add('inactive');
}

function changeSlide(index) {
    slideIndex = index;
    showSlide(slideIndex);
}

function autoChangeSlide() {
    slideIndex = (slideIndex + 1) % slides.length;
    showSlide(slideIndex);
}

// Mostrar o primeiro slide inicialmente
showSlide(slideIndex);

// Mudar de slide a cada 5 segundos (5000 milissegundos)
setInterval(autoChangeSlide, 8000);