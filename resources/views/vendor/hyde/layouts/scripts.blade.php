{{-- Confetti.js for celebratory form effects --}}
<script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.4.0/dist/confetti.browser.min.js"></script>
{{-- The compiled Vite scripts --}}
@if(Vite::running())
    {{ Vite::assets(['resources/assets/app.js']) }}
@elseif(Asset::exists('app.js'))
    <script type="module" defer src="{{ Asset::get('app.js') }}"></script>
@endif

{{-- Glide.js for the carousel --}}
<script defer src="https://cdn.jsdelivr.net/npm/@glidejs/glide@3.5.x"></script>
{{-- Alpine.js --}}
<script defer src="https://unpkg.com/@alpinejs/ui@3.14.9/dist/cdn.min.js"></script>
<script defer src="https://unpkg.com/@alpinejs/focus@3.14.9/dist/cdn.min.js"></script>
<script defer src="https://unpkg.com/@colinaut/alpinejs-plugin-simple-validate@1/dist/alpine.validate.min.js"></script>
<script defer src="https://unpkg.com/alpinejs@3.14.9/dist/cdn.min.js"></script>

<script>
    function toggleTheme() {
        if (localStorage.getItem('color-theme') === 'dark' || !('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches) {
            document.documentElement.classList.remove("dark");
            localStorage.setItem('color-theme', 'light');
            document.getElementById('meta-color-scheme').setAttribute('content', 'light');
        } else {
            document.documentElement.classList.add("dark");
            localStorage.setItem('color-theme', 'dark');
            document.getElementById('meta-color-scheme').setAttribute('content', 'dark');
        }
    }
</script>

{{-- Add any extra scripts to include before the closing <body> tag --}}
@stack('scripts')

{{-- If the user has defined any custom scripts, render them here --}}
{!! config('hyde.scripts') !!}
{!! Includes::html('scripts') !!}
