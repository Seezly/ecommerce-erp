@props([
    'type' => 'container',
    'items' => []
])

<section class="w-full flex items-center p-4 mb-8 gap-[3.33%] {{ $type === 'container' ? 'justify-start flex-wrap' : 'relative overflow-hidden' }}">
    @foreach ($items as $item)
        <div class="w-[22.5%] h-100 mb-4 flex flex-col items-center justify-between rounded-lg{{ $type === 'slider' ? ' shrink-0' : '' }} shadow-lg overflow-hidden">
            <div class="w-full h-5/12 relative mb-4 overflow-hidden">
                @if ($item['discount'] > 0)
                    <span class="absolute top-4 left-6 rounded-full bg-gray-300 p-1 text-sm font-extralight">{{ $item['discount'] }}%</span>
                @endif
                <img class="w-full h-full object-cover" src="{{ $item['image'] }}" alt="{{ $item['title'] }}">
            </div>
            <div class="w-full h-5/12 px-6 flex flex-col justify-between items-start">
                <span class="rounded-full bg-gray-300 p-1 text-sm font-extralight">{{ $item['category'] }}</span>
                <div class="my-4">
                    <h3 class="text-2xl font-bold">{{ $item['title'] }}</h3>
                    <p>{{ $item['description'] }}</p>
                </div>
                <span class="rounded-full bg-gray-300 p-1 text-sm font-extralight">{{ $item['stock'] }} unidades</span>
            </div>
            <div class="w-full border-b my-2"></div>
            <div class="w-full h-2/12 px-6 flex justify-between items-center gap-8">
                <div class="flex flex-col justify-between items-start">
                    @if ($item['discountPrice'] > 0)
                        <span class="text-xs font-extralight text-red-500 line-through">${{ $item['price'] }}</span>
                        <p class="text-xl font-bold">${{ $item['discountPrice'] }}$</p>
                    @else
                        <p class="text-xl font-bold">${{ $item['price'] }}$</p>
                    @endif
                </div>
                <div class="flex justify-end gap-2 items-center">
                    <a href="#" class="p-2 bg-gray-600 rounded-lg"><svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 640 640"><!--!Font Awesome Free v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path d="M24 48C10.7 48 0 58.7 0 72C0 85.3 10.7 96 24 96L69.3 96C73.2 96 76.5 98.8 77.2 102.6L129.3 388.9C135.5 423.1 165.3 448 200.1 448L456 448C469.3 448 480 437.3 480 424C480 410.7 469.3 400 456 400L200.1 400C188.5 400 178.6 391.7 176.5 380.3L171.4 352L475 352C505.8 352 532.2 330.1 537.9 299.8L568.9 133.9C572.6 114.2 557.5 96 537.4 96L124.7 96L124.3 94C119.5 67.4 96.3 48 69.2 48L24 48zM208 576C234.5 576 256 554.5 256 528C256 501.5 234.5 480 208 480C181.5 480 160 501.5 160 528C160 554.5 181.5 576 208 576zM432 576C458.5 576 480 554.5 480 528C480 501.5 458.5 480 432 480C405.5 480 384 501.5 384 528C384 554.5 405.5 576 432 576z"/></svg></a>
                    <a href="#" class="p-2 bg-gray-600 rounded-lg"><svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 640 640"><!--!Font Awesome Free v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.--><path d="M442.9 144C415.6 144 389.9 157.1 373.9 179.2L339.5 226.8C335 233 327.8 236.7 320.1 236.7C312.4 236.7 305.2 233 300.7 226.8L266.3 179.2C250.3 157.1 224.6 144 197.3 144C150.3 144 112.2 182.1 112.2 229.1C112.2 279 144.2 327.5 180.3 371.4C221.4 421.4 271.7 465.4 306.2 491.7C309.4 494.1 314.1 495.9 320.2 495.9C326.3 495.9 331 494.1 334.2 491.7C368.7 465.4 419 421.3 460.1 371.4C496.3 327.5 528.2 279 528.2 229.1C528.2 182.1 490.1 144 443.1 144zM335 151.1C360 116.5 400.2 96 442.9 96C516.4 96 576 155.6 576 229.1C576 297.7 533.1 358 496.9 401.9C452.8 455.5 399.6 502 363.1 529.8C350.8 539.2 335.6 543.9 320 543.9C304.4 543.9 289.2 539.2 276.9 529.8C240.4 502 187.2 455.5 143.1 402C106.9 358.1 64 297.7 64 229.1C64 155.6 123.6 96 197.1 96C239.8 96 280 116.5 305 151.1L320 171.8L335 151.1z"/></svg></a>
                </div>
            </div>
        </div>
    @endforeach
    @if ($type === 'slider')
        <div class="absolute w-full top-[50%] left-0 right-0 transform -translate-y-[50%] flex justify-between items-center">
            <div class="size-10 rounded-full bg-gray-400 p-2 flex justify-center items-center"><</div>
            <div class="size-10 rounded-full bg-gray-400 p-2 flex justify-center items-center">></div>
        </div>
    @endif
</section>