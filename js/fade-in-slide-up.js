// Função para verificar se um elemento está visível na tela
function isElementInViewport(el) {
    var rect = el.getBoundingClientRect();
    return (
        rect.top + 60 <= ((window.innerHeight || document.documentElement.clientHeight))
    );
}

// Função para adicionar a classe 'active' aos elementos visíveis
function handleScrollAnimations() {
    var elements = document.querySelectorAll('.fade-in-slide-up');
    elements.forEach(function(element) {
        if (isElementInViewport(element)) {
            element.classList.add('ativo');
        }
    });
}

// Verifique quando o usuário faz scroll
window.addEventListener('scroll', handleScrollAnimations);

// Execute a função inicialmente para verificar elementos visíveis na carga da página
window.addEventListener('load', handleScrollAnimations);