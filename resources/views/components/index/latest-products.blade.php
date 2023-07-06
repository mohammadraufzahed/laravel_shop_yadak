@props(['products' => []])

<div class="w-full h-max px-6 py-16 bg-green-400 flex flex-col items-center">
    <h2 class="font-bold text-4xl sm:text-6xl text-white text-center">جدید ترین محصولات ما</h2>
    <div
        class="w-full h-max grid grid-cols-1 place-items-center place-content-center gap-5 mt-10 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 lg:mt-24">
        @foreach ($products as $product)
            <div class=" cursor-pointer w-56 h-max bg-white border-[1px] border-green-500 rounded-xl overflow-hidden">
                <img class="w-full aspect-auto border-b-[1px] border-b-green-500 max-h-[200px]"
                    src={{ $product->getMedia('images')->first()->getUrl() }} />
                <div class="flex flex-col items-center justify-center gap-5 px-2 py-6">
                    <span class="font-bold text-base">{{ $product->title }}</span>
                    <div>
                        <span class="font-semibold text-sm">قیمت:</span>‌
                        <span class="font-light text-xs text-green-600">
                            {{ formatPrice($product->price) }}
                        </span>
                    </div>
                </div>
            </div>
            <div class="w-56 h-max bg-white border-[1px] border-green-500 rounded-xl overflow-hidden">
                <img class="w-full aspect-auto border-b-[1px] border-b-green-500 max-h-[200px]"
                    src={{ $product->getMedia('images')->first()->getUrl() }} />
                <div class="flex flex-col items-center justify-center gap-5 px-2 py-6">
                    <span class="font-bold text-base">{{ $product->title }}</span>
                    <div>
                        <span class="font-semibold text-sm">قیمت:</span>‌
                        <span class="font-light text-xs text-green-600">
                            {{ formatPrice($product->price) }}
                        </span>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
