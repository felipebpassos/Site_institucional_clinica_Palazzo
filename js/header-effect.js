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

