<div class="w-max h-full flex flex-row items-center justify-center gap-8">
    <x-sidebar-items-desktop href="/">
        صفحه اصلی
    </x-sidebar-items-desktop>
    <x-sidebar-items-desktop dropdown :items="[
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
    </x-sidebar-items-desktop>
    <x-sidebar-items-desktop>
        بلاگ
    </x-sidebar-items-desktop>
    <x-sidebar-items-desktop>
        تماس با ما
    </x-sidebar-items-desktop>
    <x-sidebar-items-desktop>
        درباره ما
    </x-sidebar-items-desktop>
</div>
