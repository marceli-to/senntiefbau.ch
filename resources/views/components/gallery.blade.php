<div class="relative pb-40 lg:pb-60">
  <div class="absolute inset-0 bg-sand h-[25%]"></div>
  <div class="absolute inset-0 bg-granite top-[25%]"></div>
  <div class="px-20 sm:px-0">
    <div class="swiper swiper-gallery">
      <div class="swiper-wrapper">
        @foreach (range(1, 8) as $i)
          <div class="swiper-slide">
            <picture>
              <source type="image/avif" srcset="/img/senntiefbau-galerie-{{ $i }}-768w.avif" />
              <source type="image/webp" srcset="/img/senntiefbau-galerie-{{ $i }}-768w.webp" />
              <img src="/img/senntiefbau-galerie-{{ $i }}-768w.jpg" alt="" class="w-full h-auto rounded-xl" />
            </picture>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</div>