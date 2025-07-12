<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=instrument-sans:400,600" rel="stylesheet" />
{{-- Prevent Alpine.js flashes --}}
<style>[x-cloak] {display: none!important}</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@glidejs/glide@3.5.x/dist/css/glide.core.min.css">
{{-- The compiled Tailwind/App styles --}}
@if(Vite::running())
    {{ Vite::assets(['resources/assets/app.css']) }}
@else
    <link rel="stylesheet" href="{{ Asset::get('app.css') }}">
@endif

{{-- Add any extra styles to include after the others --}}
@stack('styles')