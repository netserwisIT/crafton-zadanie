<ul class="flex gap-3 {{ $class ?? '' }}">
    @foreach(config('theme.navigationItems') as $item)
        <li class="relative group" @if(isset($item->children)) x-data x-popover="true" @endif>
            @if(isset($item->children))
                <button type="button" class="flex items-center whitespace-nowrap cursor-pointer gap-1 px-4 py-2 text-base font-heading text-[15px] uppercase text-dark dark:text-white hover:text-primary" x-popover:button aria-haspopup="true" aria-expanded="false">
                    <span>{{ $item->title }}</span>
                    <span aria-hidden="true" class="menu-nav-item-icon pl-1">
                        <svg class="w-[9px] h-[7px] shrink-0" width="9" height="7" viewBox="0 0 9 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 1.515L7.9425 0.4575L4.5 3.8925L1.0575 0.4575L0 1.515L4.5 6.015L9 1.515Z" fill="currentColor"/>
                        </svg>
                    </span>
                </button>
                <ul 
                    x-popover:panel 
                    x-cloak
                    class="absolute left-0 min-w-48 rounded-lg shadow-sm mt-2 z-10 origin-top-left bg-white p-1.5 outline-none"
                    >
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