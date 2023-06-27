<div x-data="{ open: false }" @click.away="open = false" @mouseleave="open = false" @mouseenter="open = true"
    class="w-full min-w-max relative">
    <a @click="open = !open"
        class="relative flex items-center gap-1 after:w-0 after:transition-all after:duration-300 after:h-[2px] after:bg-black after:absolute after:bottom-0 after:left-0 hover:after:w-full"
        {{ $attributes->merge(['href' => '#']) }}>
        {{ $slot }}
        @if ($dropdown)
            <x-iconsax-out-arrow-down-1 class="w-3 h-3 text-gray-500" />
        @endif
    </a>
    @if ($dropdown)
        <div x-show="open"
            class="flex flex-col gap-4 items-start justify-center w-[200px] h-max px-4 py-4 bg-gray-50 rounded-sm absolute top-7 drop-shadow-md {{ $first ? 'right-0' : 'right-full' }}">
            @foreach ($items as $item)
                <x-sidebar-items-desktop :hover="$item['href'] ?? '#'" :dropdown="$item['dropdown'] ?? false" :items="$item['items'] ?? []">
                    {{ $item['label'] }}
                </x-sidebar-items-desktop>
            @endforeach
        </div>
    @endif
</div>
