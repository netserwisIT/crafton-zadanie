<section class="relative w-full py-16 lg:py-20 bg-white dark:bg-dark">
    <div class="container mx-auto px-6">
        <div class="space-y-5 max-w-7xl mx-auto">
            <x-elements.heading 
                class="text-dark dark:text-white text-h1-hero uppercase font-medium font-heading"
                level="h1"
                text="{!! config('theme.hero.title') !!}"
            />
            <p class="text-body-lg text-pretty max-w-2xl text-text dark:text-text-on-dark">{!! config('theme.hero.description') !!}</p>
            <div class="pt-2.5 flex flex-col sm:flex-row gap-4">
                <x-elements.button-link 
                    href="#"
                    text="Nasze inwestycje"
                    type="primary"
                    icon="true"
                    class="uppercase"
                />
                <x-elements.button-link 
                    href="#"
                    text="Poznajmy się"
                    type="secondary"
                    icon="true"
                    class="uppercase"
                />
            </div>
        </div>
    </div>
</section>