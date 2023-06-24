<div class='py-2 w-max h-full relative xl:hidden' x-data='{ open: false }' x-bind:data-open='open ? "true" : "false"'>
    <div class="peer w-max h-max cursor-pointer flex flex-col items-center justify-center gap-1.5" @click='open = !open'>
        <div class="w-8 h-[1px] bg-black transition-all delay-75 duration-300"
            x-bind:class='open ? "-rotate-45 translate-y-3.5" : ""'>
        </div>
        <div class="w-8 h-[1px] bg-black transition-all duration-300" x-bind:class='open ? "opacity-0" : ""'></div>
        <div class="w-8 h-[1px] bg-black transition-all delay-70s duration-300" x-bind:class='open ? "rotate-45" : ""'>
        </div>
    </div>
    <div class='peer fixed w-48 h-screen bg-white left-0 top-0 z-20 transition-transform duration-500'
        x-bind:class='open ? "translate-x-0" : "-translate-x-48"'>
        <x-sidebar-items href="/">
            صفحه اصلی
        </x-sidebar-items>
        <x-sidebar-items href="#" dropdown :items="[
            [
                'label' => 'قطعات آریو',
                'href' => '#',
                'dropdown' => true,
                'items' => [['label' => 'لوازم یدکی آریو z300', 'href' => '#']],
            ],
            [
                'label' => 'قطعات برلیانس',
                'href' => '#',
                'dropdown' => true,
                'items' => [
                    ['label' => 'لوازم یدکی آریو z300', 'href' => '#'],
                    ['label' => 'c3', 'href' => '#'],
                    ['label' => 'h220', 'href' => '#'],
                    ['label' => 'h230', 'href' => '#'],
                    ['label' => 'h320', 'href' => '#'],
                    ['label' => 'h330', 'href' => '#'],
                    ['label' => 'v5', 'href' => '#'],
                ],
            ],
            [
                'label' => 'قطعات چانگان',
                'href' => '#',
                'dropdown' => true,
                'items' => [['label' => 'cs35', 'href' => '#']],
            ],
            [
                'label' => 'قطعات دانگ فنگ',
                'href' => '#',
                'dropdown' => true,
        
                'items' => [['label' => 'h30cross', 'href' => '#']],
            ],
        ]">
            محصول
        </x-sidebar-items>
        <x-sidebar-items href="#">
            بلاگ
        </x-sidebar-items>
        <x-sidebar-items href="#">
            تماس با ما
        </x-sidebar-items>
        <x-sidebar-items href="#">
            درباره ما
        </x-sidebar-items>
    </div>
    <div class="fixed z-10 w-screen h-screen bg-black/50 top-0 left-0" x-bind:class='open ? "block" : "hidden"'
        @click='open = !open'></div>
</div>
