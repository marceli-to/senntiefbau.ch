<section class="relative" aria-label="Titelbild">
  <div class="swiper swiper-hero aspect-[2/2.5] sm:aspect-[16/9] md:aspect-[16/8] xl:aspect-[16/7]" role="region" aria-label="Titelbild-Galerie" aria-roledescription="Karussell">
    <div class="swiper-wrapper">
      @foreach (range(1, 3) as $i)
        <div class="swiper-slide" role="group" aria-roledescription="Folie" aria-label="Bild {{ $i }} von 3">
          <picture>
            <source
              type="image/avif"
              srcset="/img/senntiefbau-visual-{{ $i }}-480w.avif 480w, /img/senntiefbau-visual-{{ $i }}-768w.avif 768w, /img/senntiefbau-visual-{{ $i }}-1024w.avif 1024w, /img/senntiefbau-visual-{{ $i }}-1440w.avif 1440w"
              sizes="100vw" />
            <source
              type="image/webp"
              srcset="/img/senntiefbau-visual-{{ $i }}-480w.webp 480w, /img/senntiefbau-visual-{{ $i }}-768w.webp 768w, /img/senntiefbau-visual-{{ $i }}-1024w.webp 1024w, /img/senntiefbau-visual-{{ $i }}-1440w.webp 1440w"
              sizes="100vw" />
            <source
              type="image/jpeg"
              srcset="/img/senntiefbau-visual-{{ $i }}-480w.jpg 480w, /img/senntiefbau-visual-{{ $i }}-768w.jpg 768w, /img/senntiefbau-visual-{{ $i }}-1024w.jpg 1024w, /img/senntiefbau-visual-{{ $i }}-1440w.jpg 1440w"
              sizes="100vw" />
            <img src="/img/senntiefbau-visual-{{ $i }}-1024w.jpg" alt="Bagger bei Tiefbauarbeiten auf einer Baustelle" class="w-full h-full object-cover" @if ($i === 1) fetchpriority="high" @else loading="lazy" @endif />
          </picture>
        </div>
      @endforeach
    </div>
  </div>

  <div class="absolute inset-0 bg-black/30 flex items-end z-10 pointer-events-none">
    <x-layout.container class="w-full pb-60 lg:pb-80 xl:pb-120">
      <div class="flex flex-col items-center gap-y-40" data-appear="hero" data-appear-delay="150">
        <x-headings.h1>
          Wir schaffen Platz für Neues.<br class="hidden sm:block">Und sichern, was bleibt.
        </x-headings.h1>
        <x-icons.logo class="w-full h-auto mx-auto max-w-160 lg:max-w-185 2xl:max-w-210" aria-label="Senn Tiefbau AG Logo" role="img" />
      </div>
    </x-layout.container>
  </div>
</section>
