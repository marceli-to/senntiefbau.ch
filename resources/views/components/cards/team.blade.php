@props(['image', 'alt' => ''])
<figure>
  <img src="{{ $image }}" alt="{{ $alt }}" class="w-full h-auto rounded-xl" />
  <x-headings.h3 class="text-teal mt-10 text-center">
    {{ $name }}
  </x-headings.h3>
  <div class="text-center text-xxs lg:text-xs">{{ $role }}</div>
</figure>