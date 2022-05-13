var map = L.map('map').setView([40.1826467,44.5199467], 15);

L.tileLayer('https://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
    maxZoom: 20,
    minZoom: 2,
    subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
}).addTo(map);
var marker = L.marker([40.1826467,44.5199467]).addTo(map);


(function(){
    const header = document.querySelector('.header');
    const div = document.querySelector('.uav_navbar');
    window.onscroll = () => {
        if(window.pageYOffset > 50 || div.classList.contains('show')){
            header.classList.add('header_active');
        } else {
            header.classList.remove('header_active');
        }
    }
}());




// Scroll to anchors
(function () {

    const smoothScroll = function (targetEl, duration) {
        const headerElHeight =  document.querySelector('.header').clientHeight;
        let target = document.querySelector(targetEl);
        let targetPosition = target.getBoundingClientRect().top - headerElHeight;
        let startPosition = window.pageYOffset;
        let startTime = null;

        const ease = function(t,b,c,d) {
            t /= d / 2;
            if (t < 1) return c / 2 * t * t + b;
            t--;
            return -c / 2 * (t * (t - 2) - 1) + b;
        };

        const animation = function(currentTime){
            if (startTime === null) startTime = currentTime;
            const timeElapsed = currentTime - startTime;
            const run = ease(timeElapsed, startPosition, targetPosition, duration);
            window.scrollTo(0,run);
            if (timeElapsed < duration) requestAnimationFrame(animation);
        };
        requestAnimationFrame(animation);

    };

    const scrollTo = function () {
        const links = document.querySelectorAll('.js-scroll');
        links.forEach(each => {
            each.addEventListener('click', function () {
                const currentTarget = this.getAttribute('href');
                smoothScroll(currentTarget, 500);
            });
        });
    };
    scrollTo();
}());


$(document).ready(function(){
    $( ".navbar-toggler" ).click(function() {
        $('.header').addClass('header_active');
    });
})
