@props(['title' => ''])

<div
    {{ $attributes->merge(['class' => 'text-white bg-green-400 transition-colors duration-300 hover:bg-green-400/80 cursor-pointer gap-4 w-full py-6 rounded-md flex flex-col items-center justify-center']) }}>
    {{ $slot }}
    <span class="font-bold text-xs">{{ $title }}</span>
</div>
