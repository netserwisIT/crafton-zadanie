<div
    x-dialog
    x-model="open"
    style="display: none"
    class="fixed inset-0 overflow-hidden z-50"
>
    <!-- Overlay -->
    <div
        x-dialog:overlay
        x-transition.opacity
        class="fixed inset-0 bg-white/50 z-50"
    ></div>

    <!-- Panel -->
    <div class="fixed inset-y-0 right-0 max-w-lg px-0 w-full z-50">
        <div
            x-dialog:panel x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="translate-x-full"
            x-transition:enter-end="translate-x-0"
            x-transition:leave="transition ease-in duration-300"
            x-transition:leave-start="translate-x-0"
            x-transition:leave-end="translate-x-full"
            class="h-full w-full"
        >
            <div class="h-full flex flex-col justify-between bg-white dark:bg-dark shadow-lg relative">
                <div class="flex items-center justify-between gap-2 px-12 py-2 z-10 border-b border-stroke-base dark:border-stroke-on-dark">
                    <x-partials.logo class="h-5 w-[101px]" />
                    <!-- Close Button -->
                    <div class="relative flex items-center gap-2">
                        <button type="button" @click="$dialog.close()" class=" p-2 text-dark dark:text-white hover:text-primary focus:outline-none focus:ring-2 focus:ring-primary-clicked rounded-full">
                            <span class="sr-only">Zamknij menu</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                </div>
                <!-- Body -->
                <div class="space-y-6 flex-1 px-8 pt-8 flex flex-col justify-start gap-4 overflow-y-auto pb-16">
                    <ul class="flex flex-col gap-3">
                        @foreach(config('theme.navigationItems') as $item)
                            <li class="relative w-full group">
                                @if(isset($item->children))
                                    <span class="flex items-center whitespace-nowrap cursor-pointer gap-1 px-4 py-2 text-base font-heading text-[15px] uppercase text-background-medium-surface">
                                        <span>{{ $item->title }}</span>
                                    </span>
                                    <ul class="ml-4 border-l border-stroke-base dark:border-stroke-on-dark space-y-2">
                                        @foreach ($item->children as $child) 
                                        <li>
                                            <x-partials.navigation-link 
                                                :href="$child->link" 
                                                :text="$child->title" 
                                            />
                                        </li>
                                        @endforeach
                                    </ul>
                                @else
                                    <x-partials.navigation-link 
                                        :href="$item->link" 
                                        :text="$item->title" 
                                    />
                                @endif
                            </li>
                        @endforeach
                    </ul>
                    <x-elements.button-link href="#" text="Kontakt" type="primary-sm" class="text-sm/6 font-semibold" icon="true" />
                </div>
            </div>
        </div>
    </div>
</div>