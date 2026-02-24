<div class="relative pb-40 lg:pb-60">
  <div class="absolute inset-0 bg-sand h-[25%]"></div>
  <div class="absolute inset-0 bg-granite top-[25%]"></div>
  <div class="px-20 sm:px-0" data-appear>
    <div class="swiper swiper-gallery" role="region" aria-label="Galerie" aria-roledescription="Karussell">
      <div class="swiper-wrapper">
        @foreach (range(1, 8) as $i)
          <div class="swiper-slide" role="group" aria-roledescription="Folie" aria-label="Bild {{ $i }} von 8">
            <picture>
              <source type="image/avif" srcset="/img/senntiefbau-galerie-{{ $i }}-768w.avif" />
              <source type="image/webp" srcset="/img/senntiefbau-galerie-{{ $i }}-768w.webp" />
              <img src="/img/senntiefbau-galerie-{{ $i }}-768w.jpg" alt="Galeriebild {{ $i }}" class="w-full h-auto rounded-xl" loading="lazy" />
            </picture>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</div>