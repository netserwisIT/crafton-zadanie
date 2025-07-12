@php
    $href = $href ?? '#';
    $text = $text ?? '';
    $type = $type ?? 'primary';
    $class = match($type) {
        'primary-sm' => 'px-6 lg:px-7 py-[13px] bg-primary text-white hover:bg-primary-hovered active:bg-primary-clicked rounded-theme focus:outline focus:outline-2 focus:outline-offset-2 focus:outline-primary-clicked leading-none max-w-sm:w-full',
        'primary' => 'px-6 lg:px-8 py-4 lg:py-[18px] bg-primary text-white hover:bg-primary-hovered active:bg-primary-clicked rounded-theme focus:outline focus:outline-2 focus:outline-offset-2 focus:outline-primary-clicked leading-none max-w-sm:w-full',
        'secondary' => 'px-6 lg:px-8 py-4 lg:py-[18px] text-dark dark:text-white bg-transparent ring ring-stroke-base ring-inset hover:text-text-on-dark active:text-background-medium-surface rounded-theme focus:outline focus:outline-2 focus:outline-offset-2 focus:outline-primary-clicked leading-none max-w-sm:w-full',
        'ghost' => 'text-dark hover:text-text active:text-stroke-on-dark focus:outline-none focus:underline focus:decoration-primary-clicked leading-none',
    };
    $class .= ' font-heading whitespace-nowrap inline-flex items-center justify-center transition-colors duration-300 text-[15px]';
@endphp
<a href="{{ $href }}" {{ $attributes->merge(['class' => $class]) }}>
    {!! $text !!}
    @if(isset($icon))
        <span class="ml-2.5">
            <x-elements.button-icon class="w-4 h-4" />
        </span>
    @endif  
</a>