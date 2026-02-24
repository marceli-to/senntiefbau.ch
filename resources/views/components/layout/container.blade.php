@props(['width' => 'outer'])
<div {{ $attributes->merge(['class' => 'max-w-' . $width . ' mx-auto']) }}>
  {{ $slot }}
</div>