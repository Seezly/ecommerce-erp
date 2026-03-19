@props([
    'item' => [],
    'type' => 'favorite',
])

<div class="relative flex w-full items-start justify-start gap-4 border-b py-2">
	<div class="size-28 overflow-hidden">
		<img class="h-full w-full object-cover" src="{{ $item['image'] }}" alt="{{ $item['title'] }}">
	</div>
	<div class="relative flex h-full flex-1 flex-col items-start gap-2">
		<p class="text-lg">{{ $item['title'] }}</p>
		<div class="flex flex-col items-start justify-between">
			@if ($item['discountPrice'] > 0)
				<span class="text-xs font-extralight text-red-500 line-through">${{ $item['price'] }}</span>
				<p class="text-2xl font-medium">${{ $item['discountPrice'] }}</p>
			@else
				<p class="text-2xl font-medium">${{ $item['price'] }}</p>
			@endif
		</div>
		@if ($item['stock'] < 5)
			<span class="w-fit rounded-full bg-gray-300 px-2 py-1 text-sm font-extralight">Pocos
				disponibles</span>
		@endif
		<button class="absolute right-0 top-0 w-fit cursor-pointer">
			<svg xmlns="http://www.w3.org/2000/svg" class="size-4"
				viewBox="0 0 640 640"><!--!Font Awesome Free v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.-->
				<path
					d="M232.7 69.9L224 96L128 96C110.3 96 96 110.3 96 128C96 145.7 110.3 160 128 160L512 160C529.7 160 544 145.7 544 128C544 110.3 529.7 96 512 96L416 96L407.3 69.9C402.9 56.8 390.7 48 376.9 48L263.1 48C249.3 48 237.1 56.8 232.7 69.9zM512 208L128 208L149.1 531.1C150.7 556.4 171.7 576 197 576L443 576C468.3 576 489.3 556.4 490.9 531.1L512 208z" />
			</svg>
		</button>
		@if ($type === 'cart')
			<div class="flex w-32 items-center justify-between overflow-hidden rounded-full border bg-white">
				<button class="h-full w-4/12 cursor-pointer px-2">-</button>
				<input class="w-4/12 py-2" type="number" min="1" required>
				<button class="h-full w-4/12 cursor-pointer px-2">+</button>
			</div>
		@endif
	</div>
</div>
