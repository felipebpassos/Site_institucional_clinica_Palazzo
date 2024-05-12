window.addEventListener('scroll', function () {
    var headerPage = document.getElementById('page-header');
    var scrollTop = window.scrollY;

    if (scrollTop === 0 && !headerPage.classList.contains('hovered')) {
        headerPage.classList.add('transparente');
    } else {
        headerPage.classList.remove('transparente');
    }
});

window.addEventListener('load', function () {
    var headerPage = document.getElementById('page-header');

    headerPage.addEventListener('mouseover', function () {
        this.classList.add('hovered');
    });

    headerPage.addEventListener('mouseleave', function () {
        this.classList.remove('hovered');
        // Adiciona a classe .transparente após 4 segundos
        setTimeout(function () {
            if (!headerPage.classList.contains('hovered')) {
                headerPage.classList.add('transparente');
            }
        }, 4000);
    });
});

let lastScrollPosition = 0;
let isFixed = false;

const body = document.querySelector("body");

window.addEventListener("scroll", function () {
    const header = document.querySelector("header");
    const scrollPosition = window.scrollY;

    if (scrollPosition > 0 && scrollPosition < lastScrollPosition) {
        // O usuário está rolando para cima, fixe o cabeçalho no topo da janela.
        header.classList.add("header-fixed");
        header.style.top = 0;
        isFixed = true;
    } else {
        // O usuário está rolando para baixo.
        if (isFixed) {
            // Volte a ser absolute com o valor de top fixo.
            header.classList.remove("header-fixed");
            header.style.top = scrollPosition + "px";
            isFixed = false;
        }
    }

    lastScrollPosition = scrollPosition;
});

