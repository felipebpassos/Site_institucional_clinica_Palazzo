document.addEventListener("DOMContentLoaded", function () {
    var row = document.getElementById('professional-row');
    var quadros = document.querySelectorAll('.quadro');
    var scrollWidth = quadros[0].offsetWidth; // Assuming all blocks are the same width
    var currentIndex = 0;

    document.querySelector('.nav-btn-galeria-left').addEventListener('click', function () {
        if (currentIndex > 0) {
            currentIndex--;
            row.style.transform = `translateX(${-currentIndex * scrollWidth}px)`;
        }
    });

    document.querySelector('.nav-btn-galeria-right').addEventListener('click', function () {
        if (currentIndex < quadros.length - 2) { // Adjust this as per your layout requirements
            currentIndex++;
            row.style.transform = `translateX(${-currentIndex * scrollWidth}px)`;
        }
    });
});
