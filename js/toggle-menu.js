document.addEventListener('DOMContentLoaded', function () {
    const menuToggle = document.getElementById('menu-toggle');
    const menu = document.querySelector('.menu');
    const overlay = document.getElementById('overlay'); // Seleciona a div de sobreposição
    let isOpen

    // Verifica quando o botão de abrir o menu é clicado
    menuToggle.addEventListener('click', function () {

        if (!isOpen) {

            menu.classList.toggle('show-menu');
            isOpen = true; // O menu foi aberto pelo botão de toggle

        } else {

            menu.classList.remove('show-menu');
            isOpen = false; // O menu foi aberto pelo botão de toggle

        }

        updateOverlayVisibility();
    });

    // Adiciona um ouvinte de evento ao overlay
    overlay.addEventListener('click', function () {
        menu.classList.remove('show-menu');
        isOpen = false;
        updateOverlayVisibility();
    });

    function updateOverlayVisibility() {
        if (isOpen) {
            overlay.style.display = 'block'; // Mostra a sobreposição
        } else {
            overlay.style.display = 'none'; // Oculta a sobreposição
        }
    }

    // Adiciona um ouvinte de evento à página inteira para fechar o menu ao clicar fora
    document.addEventListener('click', function (event) {
        const target = event.target;
        if (isOpen && target !== menuToggle && !menuToggle.contains(target)) {
            menu.classList.remove('show-menu');
            isOpen = false;
            updateOverlayVisibility();
        }
    });
});