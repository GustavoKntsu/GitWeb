import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';



const container = document.getElementById('carouselContainer');
const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');

const cardWidth = 270;

nextBtn.addEventListener('click', () => {
    container.scrollBy({ left: cardWidth, behavior: 'smooth' });
});prevBtn.addEventListener('click', () => {
    container.scrollBy({ left: cardWidth, behavior: 'smooth' });
});


