<div x-data='{expand: false}' <a {{ $attributes->merge(['href' => '#']) }}>
    <div
        class="w-full h-10 flex items-center cursor-pointer transition-colors duration-200 justify-start pr-2 border-b-[1px] border-gray-300 hover:bg-gray-100">

        <a class="text-sm" {{ $attributes->merge(['href' => '#']) }}>{{ $slot }}</a>
        @if ($dropdown)
            <div class="h-full w-[1px] mr-auto ml-0" x-bind:class='expand ? "bg-red-500" : "bg-gray-400"'></div>
            <div class="group p-3 h-max items-center justify-center transition-colors duration-300"
                x-bind:data-expanded='expand ? "true" : "false"' @click='expand = !expand'
                x-bind:class='expand ? "bg-red-500 text-white" : "text-gray-400"'>
                <x-iconsax-lin-arrow-left-1
                    class="w-4 h-4 transition-transform duration-300 group-data-[expanded='true']:rotate-90" />
            </div>
        @endif
    </div>

    @if ($dropdown)
        @foreach ($items as $item)
            <div class="opacity-70" x-bind:class='expand ? "block" : "hidden"'>
                <x-sidebar-items :items="$item['items'] ?? []" :hef="$item['href'] ?? '#'" :dropdown="$item['dropdown'] ?? false">{{ $item['label'] }}
                </x-sidebar-items>
            </div>
        @endforeach

    @endif
</div>
