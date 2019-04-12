$(document).ready(function(){
    //Các phương thức jQuery nằm trong này
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 1,
        loopedSlides:2,
        spaceBetween: 0,
        parallax: true,
        autoplay: 5000,
        speed: 800,
        autoplayDisableOnInteraction: false,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });


});