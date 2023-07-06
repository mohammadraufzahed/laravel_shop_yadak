@props(['title' => ''])

<div
    class="text-white bg-green-400 min-w-max w-full flex flex-col items-center justify-center gap-2 rounded-md border-[1px] border-green-400 py-6">
    {{ $slot }}
    <span>{{ $title }}</span>
</div>
