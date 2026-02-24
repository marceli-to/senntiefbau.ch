@props(['icon'])
<div {{ $attributes->merge(['class' => 'relative bg-silver rounded-2xl px-20 pt-40 text-granite text-center']) }}>
  <div class="absolute -top-45 left-1/2 -translate-x-1/2 w-90 h-90 bg-white rounded-full flex items-center justify-center text-teal">
    <x-dynamic-component :component="'icons.' . $icon" class="w-50 h-auto" aria-hidden="true" />
  </div>
  <div class="mt-20 px-20 xl:px-15 pb-40">
    <x-headings.h3 class="mb-10">
      {{ $title }}
    </x-headings.h3>
    <p class="text-xxs lg:text-sm leading-snug font-medium">
      {{ $text }}
    </p>
  </div>
</div>