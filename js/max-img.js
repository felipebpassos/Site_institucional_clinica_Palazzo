document.addEventListener("DOMContentLoaded", function () {
    var imgCards = document.querySelectorAll('.img-card');
    var imgOverlay = document.getElementById('img-overlay');
    var maxImg = document.getElementById('max-img');
    var closeBtn = document.getElementById('close-btn');

    imgCards.forEach(function (card) {
        card.addEventListener('click', function () {
            var imgSrc = card.querySelector('img').src;
            maxImg.src = imgSrc;
            imgOverlay.style.display = 'flex';
        });
    });

    closeBtn.addEventListener('click', function () {
        imgOverlay.style.display = 'none';
    });

    imgOverlay.addEventListener('click', function (e) {
        if (e.target === imgOverlay) {
            imgOverlay.style.display = 'none';
        }
    });
});
