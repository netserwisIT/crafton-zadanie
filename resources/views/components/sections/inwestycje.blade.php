<section class="relative w-full dark:bg-dark">
    <div class="container mx-auto px-6 space-y-8 lg:space-y-20">
        <header class="max-w-7xl mx-auto text-center space-y-5">
            <x-elements.heading 
                class="text-dark dark:text-white text-h2 uppercase font-medium font-heading"
                level="h2"
                text="{{ config('theme.investmentsHeading') ?? '' }}"
            />
            <p class="text-body-base text-pretty max-w-3xl lg:mx-auto text-text dark:text-text-on-dark">{{ config('theme.investmentsDescription') ?? '' }}</p>
        </header>
        <div class="max-w-7xl mx-auto no-scrollbar"
            x-data="{
                init() {
                    new Glide(this.$refs.glide, {
                        perView: 1,
                        rewind: false,
                        rewindDuration: 2000,
                        animationDuration: 1000,
                        type: 'slider',
                    }).mount()
                },
            }"
        >
        <div x-ref="glide" class="glide block relative">
            <div class="glide__track bg-white border border-stroke-base dark:bg-dark dark:border-stroke-on-dark rounded-theme-inner overflow-hidden" data-glide-el="track">
                <ul class="glide__slides">
                    @foreach(config('theme.investments') as $investment)
                        <li class="whitespace-normal w-full">
                            <div class="grid lg:grid-cols-12 gap-4">
                                <div class="lg:col-span-5 flex flex-col justify-center p-6 space-y-8">
                                    <div class="space-y-4 xl:-mt-16 xl:pr-8">
                                        <div class="flex items-center gap-2">
                                            <span aria-hidden="true" class="relative w-[50px] h-[50px] shrink-0 flex items-center text-primary bg-background-medium-surface rounded-full border-[7px] border-stroke-subtle justify-center overflow-hidden">
                                                <span class="absolute size-6 left-1/2 top-1/2 transform -translate-1/2 bg-gradient-to-t from-dark to-background-medium-surface blur opacity-20 skew-12"></span>
                                                <svg class="w-[14px] h-[19px] shrink-0" width="14" height="20" viewBox="0 0 14 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.05078 16.7188C9.16331 16.5081 9.42608 16.4253 9.63867 16.542C10.2107 16.8569 10.582 17.3082 10.582 17.834C10.5819 18.4329 10.1147 18.9207 9.4043 19.2432C8.74824 19.5408 7.89412 19.7002 7 19.7002C6.10589 19.7002 5.25173 19.5408 4.5957 19.2432C3.88542 18.9207 3.41808 18.4329 3.41797 17.834C3.41797 17.3092 3.78802 16.8582 4.3584 16.543L4.44043 16.5088C4.63455 16.4489 4.8485 16.5346 4.94727 16.7197C5.05912 16.9297 4.98352 17.1931 4.77441 17.3096L4.77344 17.3105C4.59615 17.4085 4.46965 17.5092 4.38965 17.6035C4.30982 17.6976 4.28418 17.7754 4.28418 17.834C4.28426 17.902 4.32146 17.999 4.43945 18.1162C4.55607 18.232 4.73609 18.3517 4.97852 18.459C5.46261 18.6732 6.16327 18.8261 7 18.8262C7.83663 18.8262 8.53736 18.6732 9.02148 18.459C9.26409 18.3516 9.44491 18.2321 9.56152 18.1162C9.67949 17.999 9.71574 17.9019 9.71582 17.834C9.71582 17.7753 9.69055 17.6968 9.61035 17.6025C9.52997 17.5081 9.40252 17.4075 9.22461 17.3096C9.01505 17.1938 8.93852 16.9292 9.05078 16.7188ZM7 0.299805C10.4221 0.299912 13.2002 3.13253 13.2002 6.60645C13.2001 6.93569 13.057 7.4353 12.8311 8.03613C12.6014 8.64669 12.2745 9.39067 11.8828 10.2207C11.0993 11.8812 10.0517 13.9008 8.99316 15.916C8.80372 16.2767 8.63427 16.5985 8.49023 16.875L8.1377 17.5605C7.91736 18.0023 7.49037 18.2705 7 18.2705C6.5094 18.2704 6.08266 18.0025 5.8623 17.5605C5.65612 17.1476 5.30621 16.4893 4.89941 15.7227C3.86843 13.7801 2.84741 11.8297 2.08398 10.21C1.70235 9.40024 1.38307 8.66973 1.15918 8.06152C0.938183 7.46117 0.799805 6.95534 0.799805 6.60645C0.799838 3.13253 3.57781 0.299805 7 0.299805ZM7 1.1748C4.0623 1.17491 1.66602 3.60867 1.66602 6.60645C1.66608 6.7303 1.69967 6.91897 1.77246 7.1709C1.84429 7.41946 1.94977 7.71641 2.08203 8.05078C2.34649 8.71934 2.7151 9.52781 3.12891 10.3838C3.9563 12.0952 4.95941 13.9856 5.66211 15.3096C6.06915 16.0765 6.42302 16.7428 6.63477 17.167C6.70933 17.3163 6.83925 17.3964 7 17.3965C7.16084 17.3965 7.29064 17.3164 7.36523 17.167C7.54799 16.8014 7.84959 16.2284 8.22852 15.5068C8.95024 14.1325 9.98083 12.17 10.8311 10.4102C11.2562 9.53008 11.6353 8.70365 11.9072 8.02832C12.0432 7.69054 12.1507 7.39294 12.2246 7.14746C12.2999 6.89723 12.335 6.71701 12.335 6.60645C12.3349 3.60785 9.93776 1.1748 7 1.1748ZM7 2.58008C9.18688 2.58008 10.9599 4.38958 10.96 6.60645C10.96 8.82334 9.1869 10.6328 7 10.6328C4.81319 10.6327 3.04004 8.82327 3.04004 6.60645C3.04007 4.38965 4.81321 2.58018 7 2.58008ZM7 3.4541C5.29759 3.45421 3.90628 4.865 3.90625 6.60645C3.90625 8.34792 5.29757 9.75868 7 9.75879C8.7025 9.75879 10.0947 8.3476 10.0947 6.60645C10.0947 4.86531 8.70248 3.4541 7 3.4541Z" fill="#316FAF" stroke="currentColor" stroke-width="0.4"/>
                                                </svg>
                                            </span>
                                            <span class="font-heading font-medium text-[15px] text-dark dark:text-text-on-dark">{{ $investment->label }}</span>
                                        </div>
                                        <x-elements.heading level="h3" text="{{ $investment->title }}" class="text-h3 uppercase font-heading font-semibold mb-4 dark:text-white" />
                                        <p class="text-text dark:text-text-on-dark mb-4">{{ $investment->description }}</p>
                                    </div>
                                    <div>
                                        <x-elements.button-link href="{{ $investment->link }}" text="Poznaj szczegóły" type="primary" icon="true" class="uppercase" />
                                    </div>
                                </div>
                                <div class="lg:col-span-7">
                                    <x-elements.image 
                                        source="{{ $investment->image_source ?? null }}"
                                        compiled="{{ $investment->image_compiled ?? null }}"
                                        alt="{{ $investment->title }}" 
                                        class="w-full h-[540px] object-cover object-center lg:rounded-r-theme-inner"
                                    />
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="glide__arrows pointer-events-none xl:absolute xl:bottom-0 xl:left-0 gap-4 p-8 flex items-center justify-center xl:justify-between z-10" data-glide-el="controls">
                <!-- Previous Button -->
                <button
                    class="glide__arrow glide__arrow--left pointer-events-auto cursor-pointer w-[53px] h-[53px] disabled:opacity-30 rounded-theme border border-dark dark:border-stroke-on-dark dark:bg-background-section dark:text-white hover:border-stroke-on-dark hover:text-stroke-on-dark active:border-text-on-dark active:text-text-on-dark p-1 inline-flex items-center justify-center"
                    data-glide-dir="<"
                >
                    <span aria-hidden="true">
                        <svg width="12" height="24" viewBox="0 0 12 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.548 6.57999L8.487 5.51999L2.708 11.297C2.61484 11.3896 2.54091 11.4996 2.49047 11.6209C2.44002 11.7421 2.41405 11.8722 2.41405 12.0035C2.41405 12.1348 2.44002 12.2648 2.49047 12.3861C2.54091 12.5073 2.61484 12.6174 2.708 12.71L8.487 18.49L9.547 17.43L4.123 12.005L9.548 6.57999Z" fill="currentColor"/>
                        </svg>
                    </span>
                    <span class="sr-only">Przejdź do poprzedniego widoku</span>
                </button>
    
                <!-- Next Button -->
                <button
                    class="glide__arrow glide__arrow--left pointer-events-auto cursor-pointer w-[53px] h-[53px] disabled:opacity-30 rounded-theme border border-dark dark:border-stroke-on-dark dark:bg-background-section dark:text-white hover:border-stroke-on-dark hover:text-stroke-on-dark active:border-text-on-dark active:text-text-on-dark p-1 inline-flex items-center justify-center"
                    data-glide-dir=">"
                >
                    <span aria-hidden="true">
                        <svg width="12" height="24" viewBox="0 0 12 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.452 6.57999L3.513 5.51999L9.292 11.297C9.38516 11.3896 9.45909 11.4996 9.50953 11.6209C9.55998 11.7421 9.58595 11.8722 9.58595 12.0035C9.58595 12.1348 9.55998 12.2648 9.50953 12.3861C9.45909 12.5073 9.38516 12.6174 9.292 12.71L3.513 18.49L2.453 17.43L7.877 12.005L2.452 6.57999Z" fill="currentColor"/>
                        </svg>
                    </span>
                    <span class="sr-only">Przejdź do kolejnego widoku</span>
                </button>
            </div>
        </div>
    </div>
</section>