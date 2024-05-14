document.querySelectorAll('.card').forEach(card => {
    card.addEventListener('mouseenter', () => {
        card.classList.add('expand');   // Adiciona a classe que expande o after
         // Garante que a classe de retração seja removida
    });

    card.addEventListener('mouseleave', () => {
        card.classList.remove('expand'); // Garante que a classe de expansão seja removida
    });
});
