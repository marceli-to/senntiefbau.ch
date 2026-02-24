import Swiper from 'swiper';
import { Autoplay } from 'swiper/modules';
import 'swiper/css';

new Swiper('.swiper-gallery', {
  modules: [Autoplay],
  slidesPerView: 1,
  spaceBetween: 20,
  loop: true,
  autoplay: {
    delay: 3000,
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
      spaceBetween: 40,
      centeredSlides: true,
    },
  },
});