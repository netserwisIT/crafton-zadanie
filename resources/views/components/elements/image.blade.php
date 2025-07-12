<figure class="relative">
    @if(isset($compiled))
        <picture>
            <source srcset="{{ $compiled }}" type="image/webp" class="{{ $class ?? 'w-full h-auto' }}">
            <img src="{{ $source }}" alt="{{ $alt ?? 'Image' }}" class="{{ $class ?? 'w-full h-auto' }}">
        </picture>
    @else
        <img src="{{ $source }}" alt="{{ $alt ?? 'Image' }}" class="{{ $class ?? 'w-full h-auto' }}">
    @endif
    @if(isset($caption))
        <figcaption class="text-center text-sm text-text mt-2">{{ $caption }}</figcaption>
    @endif
</figure>