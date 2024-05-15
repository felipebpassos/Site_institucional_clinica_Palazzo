function ajustarAltura() {
    const cards = document.querySelectorAll('.img-card');
    cards.forEach(card => {
      const largura = card.offsetWidth; // Pega a largura atual do card
      const novaAltura = 1.25 * largura; // Calcula a nova altura como 2,5 vezes a largura
      card.style.height = `${novaAltura}px`; // Ajusta a altura do card
    });
  }
  
  // Executa a função ao carregar e sempre que a janela for redimensionada
  window.onload = ajustarAltura;
  window.onresize = ajustarAltura;