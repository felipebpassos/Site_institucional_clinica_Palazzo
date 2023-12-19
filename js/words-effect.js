document.addEventListener("DOMContentLoaded", function () {
    animateTitle();
});

function animateTitle() {
    const lines = document.querySelectorAll('.line');

    lines.forEach((line, lineIndex) => {
        const words = line.innerText.split(' ');

        line.innerHTML = words.map(word => `<span class="animated-word">${word}</span>`).join('&nbsp;');

        const animatedWords = line.querySelectorAll('.animated-word');

        animatedWords.forEach((word, index) => {
            const delay = (lineIndex * 500) + (index * 200); // Ajuste os milissegundos de atraso para cada palavra

            setTimeout(() => {
                word.style.transform = "rotate(0deg) translateY(0)"; // Transformação final
                word.style.opacity = 1;
            }, delay + 1400);
        });
    });
}