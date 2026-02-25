import Swiper from 'swiper';
import { Autoplay } from 'swiper/modules';
import 'swiper/css';

document.addEventListener('DOMContentLoaded', () => {
new Swiper('.swiper-gallery', {
  modules: [Autoplay],
  slidesPerView: 1,
  spaceBetween: 20,
  loop: true,
  speed: 2000,
  autoplay: {
    delay: 2000,
    disableOnInteraction: false,
  },
  breakpoints: {
    640: {
      slidesPerView: 4,
      spaceBetween: 20,
      centeredSlides: true,
    },
    1024: {
      slidesPerView: 4,
      spaceBetween: 20,
      centeredSlides: true,
    },
    1280: {
      slidesPerView: 4,
      spaceBetween: 40,
      centeredSlides: true,
    },
  },
});
});