<section class="relative w-full py-16 lg:py-20 bg-white dark:bg-dark">
    <div class="container mx-auto px-6 space-y-16 lg:space-y-20">
        <header class="max-w-7xl mx-auto space-y-5">
            <x-elements.heading 
                class="text-dark dark:text-white text-h2 uppercase font-medium font-heading"
                level="h2"
                text="{!! config('theme.articlesHeading') ?? '' !!}"
            />
        </header>
        <div class="max-w-7xl mx-auto flex overflow-x-auto snap-x snap-mandatory gap-8">
            @foreach(config('theme.articles') as $article)
                <div class="bg-white dark:bg-dark/90 p-6 border rounded-theme-inner border-stroke-base dark:border-stroke-on-dark space-y-5 shrink-0 w-10/12 md:w-[405px] snap-start">
                    <x-elements.image 
                        source="{{ $article->image_source ?? null }}"
                        compiled="{{ $article->image_compiled ?? null }}"
                        alt="{{ $article->title }}" 
                        class="w-full h-56 object-cover object-center rounded-theme-inner"
                    />
                    <x-elements.heading level="h3" text="{{ $article->title }}" class="text-body-lg uppercase font-heading dark:text-text-on-dark pt-5" />
                    <div class="pt-8">
                        <x-elements.button-link href="#" text="Przejdź do artykułu" type="secondary" class="uppercase" />
                    </div>
                </div>
            @endforeach
        </div>
        <div class="max-w-7xl mx-auto text-center">
            <x-elements.button-link 
                href="#"
                text="Więcej poradników"
                type="primary"
                icon="true"
                class="uppercase"
            />
        </div>
    </div>
</section>