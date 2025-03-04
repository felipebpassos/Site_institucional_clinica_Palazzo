document.addEventListener("DOMContentLoaded", function () {
    var row = document.getElementById('professional-row');
    var quadros = document.querySelectorAll('.quadro');
    var scrollWidth = quadros[0].offsetWidth;
    var currentIndex = 0;

    // Função para obter a margem esquerda e direita combinadas
    function getMargin(element) {
        var style = window.getComputedStyle(element);
        var marginLeft = parseInt(style.marginLeft);
        var marginRight = parseInt(style.marginRight);
        return marginLeft + marginRight;
    }

    var margin = getMargin(quadros[0]);

    var leftArrow = document.querySelector('.nav-btn-galeria-left');
    var rightArrow = document.querySelector('.nav-btn-galeria-right');

    // Função para atualizar a visibilidade dos botões
    function updateArrows() {
        if (currentIndex === 0) {
            leftArrow.style.display = 'none';
        } else {
            leftArrow.style.display = 'block';
        }

        if (currentIndex >= quadros.length - 1) {
            rightArrow.style.display = 'none';
        } else {
            rightArrow.style.display = 'block';
        }
    }

    // Inicializa a visibilidade dos botões
    updateArrows();

    leftArrow.addEventListener('click', function () {
        if (currentIndex > 0) {
            currentIndex--;
            row.style.transform = `translateX(${-currentIndex * (scrollWidth + margin)}px)`;
            updateArrows();
        }
    });

    rightArrow.addEventListener('click', function () {
        if (currentIndex < quadros.length - 1) {
            currentIndex++;
            row.style.transform = `translateX(${-currentIndex * (scrollWidth + margin)}px)`;
            updateArrows();
        }
    });
});
