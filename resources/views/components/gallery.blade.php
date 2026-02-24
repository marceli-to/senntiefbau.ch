<div class="relative pb-40 lg:pb-60">
  <div class="absolute inset-0 bg-sand h-[25%]"></div>
  <div class="absolute inset-0 bg-granite top-[25%]"></div>
  <div class="px-20 sm:px-0">
    <div class="swiper swiper-gallery">
      <div class="swiper-wrapper">
        @foreach (range(1, 8) as $i)
          @php $slug = 'senntiefbau-galerie-' . str_pad($i, 2, '0', STR_PAD_LEFT); @endphp
          <div class="swiper-slide">
            <picture>
              <source type="image/avif" srcset="/img/{{ $slug }}-768w.avif" />
              <source type="image/webp" srcset="/img/{{ $slug }}-768w.webp" />
              <img src="/img/{{ $slug }}-768w.jpg" alt="" class="w-full h-auto rounded-xl" />
            </picture>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</div>