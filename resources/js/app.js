import './bootstrap';
import 'bootstrap';
import Swiper from 'swiper/bundle';


console.log('funziono');
// SWIPER+++***++++***

var swiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  var swiper2 = new Swiper(".mySwiper2", {
    slidesPerView: 5,
    spaceBetween: 10,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      renderBullet: function (index, className) {
        return '<span class="' + className + '">' + (index + 1) + '</span>';
      }
    },
    // breakpoints: {
    //   "@0.00": {
    //     slidesPerView: 1,
    //     spaceBetween: 10,
    //   },
    //   "@0.75": {
    //     slidesPerView: 2,
    //     spaceBetween: 20,
    //   },
    //   "@1.00": {
    //     slidesPerView: 3,
    //     spaceBetween: 40,
    //   },
    //   "@1.50": {
    //     slidesPerView: 4,
    //     spaceBetween: 50,
    //   },
    // },
  });