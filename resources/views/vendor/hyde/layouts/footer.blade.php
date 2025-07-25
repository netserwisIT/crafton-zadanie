@if(config('hyde.footer') !== false)
    <footer aria-label="Stopka" class="dark:bg-dark bg-white text-dark dark:text-white px-6 py-4">
        <div class="container mx-auto px-6">
            <div class="space-y-4 text-center max-w-7xl mx-auto">
                <p class="text-body-sm">
                    &copy; {{ date('Y') }} {{ config('theme.footerCopyright', 'Crafton') }}
                </p>
                <p class="text-body-sm">
                    Projekt i realizacja: <a href="https://crafton.pl" rel="nofollow noopener" class="hover:underline font-semibold">Crafton</a>
                </p>
                <p class="text-body-xs max-w-4xl mx-auto">
                    {{ config('theme.footerText') ?? '' }}
                </p>
                @if(Features::hasDarkmode())
                    <div class="flex justify-center">
                        <button type="button" @click="toggleTheme(); console.log('click')" class="flex items-center px-2 py-1" title="Zmień motyw">
                            <span class="sr-only">Zmień motyw</span>
                            <svg width="1.25rem" height="1.25rem" class="w-5 h-5 hidden dark:block" fill="#FFFFFF" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
                            <svg width="1.25rem" height="1.25rem" class="w-5 h-5 block dark:hidden" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
                        </button>
                    </div>
                @endif
            </div>
        </div>
    </footer>
@endif