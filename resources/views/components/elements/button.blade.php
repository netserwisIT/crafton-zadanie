@php
    $text = $text ?? '';
    $type = $type ?? 'button';
@endphp
<button type="{{ $type }}" {{ $attributes->merge(['class' => 'px-6 lg:px-8 py-4 lg:py-[18px] bg-primary text-white hover:bg-primary-hovered active:bg-primary-clicked rounded-theme focus:outline focus:outline-2 focus:outline-offset-2 focus:outline-primary-clicked leading-none max-w-sm:w-full font-heading whitespace-nowrap inline-flex items-center justify-center transition-colors duration-300 text-[15px]']) }}>
    {!! $text !!}
    @if(isset($icon))
        <span class="ml-2.5">
            <x-elements.button-icon class="w-4 h-4" />
        </span>
    @endif  
</button>