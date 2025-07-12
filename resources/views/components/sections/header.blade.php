<header 
  id="header" 
  x-data="{
    open: false,
    sticky: false,
    lastScrollY: 0
    }" 
  @scroll.window="
    const currentScrollY = window.scrollY;
    if (currentScrollY > lastScrollY) {
      if (currentScrollY > 460) sticky = true;
    } else {
      if (currentScrollY < 400) sticky = false;
    }
    lastScrollY = currentScrollY;
  "
  class="bg-white border-b border-stroke-base dark:bg-dark dark:border-stroke-on-dark z-10"
  :class="sticky ? ' sticky top-0 py-1' : 'py-4'"
>
  <div class="container mx-auto px-6">
    <nav class="mx-auto flex max-w-7xl items-center justify-between" aria-label="Główna nawigacja">
      <x-partials.logo class="h-5 w-[101px]" />
      <x-partials.navigation class="hidden xl:flex flex-1 justify-center" />
      <div class="flex items-center gap-3 justify-end">
        <button @click="open = !open" class="navbar-burger self-center flex items-center gap-2 my-2 xl:hidden dark:text-white hover:text-primary-hovered">
          <span class="sr-only">MENU</span>
          <svg class="size-6 shrink-0" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M3 12H21M3 6H21M9 18H21" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </button>
        <div class="hidden md:flex">
          <x-elements.button-link href="#" text="Kontakt" type="primary-sm" icon="true" />
        </div>
      </div>
    </nav>
  </div>
  <x-partials.mobile-menu />
</header>
