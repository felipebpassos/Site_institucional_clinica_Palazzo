document.addEventListener('DOMContentLoaded', () => {
    const links = document.querySelectorAll('.tratamentos .container a');

    links.forEach(link => {
        const child = link.querySelector('.tratamento');

        if (child) {
            link.addEventListener('mouseover', () => {
                child.classList.add('rotate');
            });

            link.addEventListener('mouseleave', () => {
                child.classList.remove('rotate');
            });
        } else {
            console.error('Elemento filho não encontrado dentro do link.');
        }
    });
});