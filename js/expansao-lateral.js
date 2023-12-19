window.addEventListener('scroll', function() {
  const treatments = document.querySelectorAll('.tratamento');
  const windowHeight = window.innerHeight;
  
  treatments.forEach(treatment => {
    const treatmentTop = treatment.getBoundingClientRect().top;
    
    if (treatmentTop < windowHeight) {
      treatment.classList.add('expanded');
    }
  });
});