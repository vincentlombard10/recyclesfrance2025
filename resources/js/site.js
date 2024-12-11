import 'bootstrap/dist/js/bootstrap.min.js'
import Splide from '@splidejs/splide';

new Splide( '.splide', {
    type    : 'loop',
    autoplay: 'playing',
    perPage : 1,
}).mount();

new Splide( '#suppliers', {
    type    : 'loop',
    autoplay: 'playing',
    perPage : 6,
    arrows: false,
    pagination: false,
}).mount();
