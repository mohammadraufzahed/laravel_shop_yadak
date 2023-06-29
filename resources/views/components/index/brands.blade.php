<div class="flex flex-col gap-10 items-center justify-center pt-7 sm:pt-24 lg:pt-4">
    <h2 class="font-bold text-4xl sm:text-6xl">برند ها</h2>
    <div
        class="grid grid-cols-1 place-items-center gap-y-10 gap-x-5 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 lg:gap-x-10">
        @for ($i = 1; $i <= 5; $i++)
            <img src={{ Vite::asset('resources/images/cars/' . $i . '.png') }} alt=""
                class="w-56 aspect-auto lg:grayscale transition-all duration-300 hover:grayscale-0">
        @endfor
    </div>
</div>
