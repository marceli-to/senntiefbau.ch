import Swiper from 'swiper';
import { Autoplay, EffectFade } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/effect-fade';

document.addEventListener('DOMContentLoaded', () => {
  new Swiper('.swiper-hero', {
    modules: [Autoplay, EffectFade],
    slidesPerView: 1,
    loop: true,
    effect: 'fade',
    fadeEffect: {
      crossFade: true,
    },
    speed: 1200,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
  });
});
