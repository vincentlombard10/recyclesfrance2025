import 'bootstrap/dist/js/bootstrap.min.js'
import Splide from '@splidejs/splide';

document.addEventListener('DOMContentLoaded', function () {
    if (document.querySelector('.splide') !== undefined) {
        console.log(document.querySelector('.splide'))
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
    }

    if (document.querySelector("#suppliers") !== undefined) {
        new Splide( '#suppliers', {
            type    : 'loop',
            autoplay: 'playing',
            perPage : 6,
            arrows: false,
            pagination: false,
        }).mount();
    }
})
