<div class="relative pb-40 lg:pb-60">
  <div class="absolute inset-0 bg-sand h-[25%]"></div>
  <div class="absolute inset-0 bg-granite top-[25%]"></div>
  <div class="px-20 md:px-0">
    <div class="swiper swiper-gallery">
      <div class="swiper-wrapper">
        @foreach ([1, 2, 3, 4, 5, 6, 8, 9] as $i)
          <div class="swiper-slide">
            <img src="/img/senntiefbau-galerie-{{ str_pad($i, 2, '0', STR_PAD_LEFT) }}.jpg" alt="" class="w-full h-auto rounded-xl" />
          </div>
        @endforeach
      </div>
    </div>
  </div>
</div>