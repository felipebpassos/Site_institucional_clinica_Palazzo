document.addEventListener("DOMContentLoaded", function () {
    let isFirstTime = true;

    const lines = document.querySelectorAll('.line');

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                if (isFirstTime) {
                    // Atraso de 1400 milissegundos (1,4 segundos) apenas na primeira vez
                    setTimeout(() => {
                        animateTitle(entry.target);
                        isFirstTime = false;
                    }, 1400);
                } else {
                    animateTitle(entry.target);
                }
            } else {
                
            }
        });
    });

    lines.forEach(line => {
        observer.observe(line);
    });
});


function animateTitle(line) {
    const words = line.innerText.split(' ');

    // Salvar o HTML original como um atributo de dados
    line.dataset.originalHTML = line.innerHTML;

    line.innerHTML = words.map(word => `<span class="animated-word">${word}</span>`).join('&nbsp;');

    const animatedWords = line.querySelectorAll('.animated-word');

    animatedWords.forEach((word, index) => {
        const delay = index * 200;

        setTimeout(() => {
            word.style.transform = "rotate(0deg) translateY(0)";
            word.style.opacity = 1;
        }, delay);
    });
}

// Função para redefinir a animação
function resetAnimation() {
    
}

// Chamada da função resetAnimation ao passar para um novo slide
// Suponha que você tenha alguma lógica para detectar a mudança de slide
// Por exemplo, ao clicar nos botões de navegação
// Coloque o seguinte código no ponto onde você detecta a mudança de slide
resetAnimation();
