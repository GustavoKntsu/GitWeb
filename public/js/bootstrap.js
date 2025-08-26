import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

let currentIndex = 0;
const images = document.querySelectorAll('.carousel-img');
const totalImages = images.length;

function rotateCarousel() {
    // Esconde todas as imagens
    images.forEach(img => img.style.display = 'none');

    // Mostra apenas a imagem atual
    images[currentIndex].style.display = 'block';

    // Atualiza o índice
    currentIndex = (currentIndex + 1) % totalImages;
}

// Inicia a rotação a cada 3 segundos
setInterval(rotateCarousel, 3000);

// Inicializa o carousel
rotateCarousel();


const container = document.getElementById('carouselContainer');
const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');

nextBtn.addEventListener('click', () => {
    container.scrollBy({ left: 250, behavior: 'smooth' });
});prevBtn.addEventListener('click', () => {
    container.scrollBy({ left: -250, behavior: 'smooth' });
});


