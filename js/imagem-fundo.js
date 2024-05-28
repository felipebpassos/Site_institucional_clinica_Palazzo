let shouldApplyParallax = false; // Estado para controlar se o parallax deve ser aplicado
let lastScrollTop = 0; // para armazenar a última posição de scroll
let totalTranslateY = 0; // acumula o total de translateY aplicado
let iniciate = false;
let defined = false;

function applyParallax() {
    const spaceElement = document.querySelector('.foto-fixa');

    window.addEventListener('scroll', function () {
        if (!shouldApplyParallax) {
            return; // Não faz nada se o parallax não deve ser aplicado
        }

        const st = window.pageYOffset || document.documentElement.scrollTop; // Obtém a posição atual do scroll

        if (!iniciate && lastScrollTop == 0) {
            totalTranslateY = 0;
            iniciate = true;
        } else if (st > lastScrollTop) {
            if (!defined) {
                // Define o estilo inicial baseado na direção do scroll na primeira visibilidade
                spaceElement.style.top = '85%';
                spaceElement.style.bottom = 'auto';
                defined = true;
            }
            // Scroll para baixo
            totalTranslateY += (st - lastScrollTop) * (-1.08); // acumula o translateY
        } else if (st < lastScrollTop) {
            // Scroll para cima
            if (!defined) {
                spaceElement.style.bottom = '85%';
                spaceElement.style.top = 'auto';
                // Define o estilo inicial baseado na direção do scroll na primeira visibilidade
                defined = true;
            }
            totalTranslateY -= (lastScrollTop - st) * (-1.08); // acumula o translateY

        }
        lastScrollTop = st; // Atualiza a última posição do scroll

        spaceElement.style.transform = `translateY(${totalTranslateY}px)`; // Aplica o transform acumulado
    }, false);
}

const observer = new IntersectionObserver(function (entries) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            shouldApplyParallax = true; // Habilita o parallax
        } else {
            shouldApplyParallax = false; // Desabilita o parallax
            totalTranslateY = 0;
            iniciate = false;
            defined = false;
        }
    });
}, { threshold: 0.1 });

applyParallax();

observer.observe(document.querySelector('.espaço'));
