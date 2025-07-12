@php
    $level = $level ?? 'h2';
    $text = $text ?? '';
    $class = $class ?? '';
@endphp
<{{ $level }} class="{{ $class }}">
    {!! $text !!}
</{{ $level }}>