@props(['image', 'alt' => ''])
@php
  $base = Str::beforeLast($image, '.');
@endphp
<figure>
  <picture>
    <source type="image/avif" srcset="{{ $base }}.avif" />
    <source type="image/webp" srcset="{{ $base }}.webp" />
    <img src="{{ $image }}" alt="{{ $name }}" class="w-full h-auto rounded-xl" />
  </picture>
  <x-headings.h3 class="text-teal mt-10 text-center">
    {{ $name }}
  </x-headings.h3>
  <div class="text-center text-xxs lg:text-xs">{{ $role }}</div>
</figure>