import 'bootstrap/dist/js/bootstrap.min.js'
import Splide from '@splidejs/splide';

new Splide( '.splide', {
    type    : 'loop',
    autoplay: 'playing',
    padding: '8rem',
    perPage : 1,
    breakpoints: {
        992: {padding: '3rem'},
        767: {padding: 0}
    }
}).mount();

new Splide( '#suppliers', {
    type    : 'loop',
    autoplay: 'playing',
    perPage : 6,
    arrows: false,
    pagination: false,
}).mount();
