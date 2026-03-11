@props([
    'type' => 'container',
    'component' => 'product',
    'items' => []
])

<section class="w-full flex items-center p-4 mb-8 gap-[3.33%] {{ $type === 'container' ? 'justify-start flex-wrap' : 'relative overflow-hidden' }}">
    @foreach ($items as $item)
        @if ($component === 'product')
            <div class="w-[22.5%] h-100 mb-4 flex flex-col items-center justify-between rounded-lg{{ $type === 'slider' ? ' shrink-0' : '' }} shadow-lg overflow-hidden">
                <x-product-card :item="$item" />
            </div>
        @else
            <x-category-card :item="$item" />
        @endif
    @endforeach
    @if ($type === 'slider')
        <div class="absolute w-full top-[50%] left-0 right-0 transform -translate-y-[50%] flex justify-between items-center">
            <div class="size-10 rounded-full bg-gray-400 p-2 flex justify-center items-center"><</div>
            <div class="size-10 rounded-full bg-gray-400 p-2 flex justify-center items-center">></div>
        </div>
    @endif
</section>