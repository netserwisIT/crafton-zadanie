<!DOCTYPE html>
<html lang="{{ config('hyde.language', 'en') }}">
<head>
    @include('hyde::layouts.head')
</head>
<body id="app" class="relative w-full overflow-x-clip" x-data>
    <x-sections.header />

    @yield('content')

    @include('hyde::layouts.footer')

    @include('hyde::layouts.scripts')
    <a 
        href="#app" 
        aria-label="Przewiń do góry" 
        x-data="{show: false}"
        @scroll.window="show = (window.scrollY > 300)"
        :class="show ? 'flex' : 'hidden'"
        class="fixed bottom-4 right-4 z-50 bg-white dark:bg-dark w-10 h-10 items-center justify-center rounded-full shadow-lg hover:shadow-xl transition-shadow duration-300"
    >
        <svg width="1.5rem" height="1.5rem" role="presentation" class="fill-current text-primary dark:text-text-on-dark h-5 w-5 shrink-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path d="M7.41 15.41L12 10.83l4.59 4.58L18 14l-6-6-6 6z" />
        </svg>
        <span class="sr-only">Przewiń do góry</span>
    </a>
</body>
</html>
