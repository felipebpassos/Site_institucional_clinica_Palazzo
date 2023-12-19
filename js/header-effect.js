function handleScrollStyle() {
    var header = document.querySelector('header'); // Seleciona o elemento header
    var apresentacao = document.querySelector('.apresentação-principal');
    var scrollPosition = window.scrollY || window.pageYOffset;

    if (scrollPosition > 40) {
        header.classList.add('header-scroll');
        apresentacao.classList.add('apresentacao-scroll');
    } else {
        header.classList.remove('header-scroll');
        apresentacao.classList.remove('apresentacao-scroll');
    }
}

// Verifique quando o usuário faz scroll
window.addEventListener('scroll', handleScrollStyle);

// Execute a função inicialmente para verificar a posição de scroll na carga da página
window.addEventListener('load', handleScrollStyle);