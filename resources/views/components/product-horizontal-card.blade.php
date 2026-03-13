@props([
    'items' => [],
])

@foreach ($items as $item)
	<div class="relative flex h-48 w-full items-start justify-start gap-4 border-b px-4 py-2">
		<div class="size-44 overflow-hidden">
			<img class="h-full w-full object-cover" src="{{ $item['image'] }}" alt="{{ $item['title'] }}">
		</div>
		<div class="flex h-full w-2/3 flex-col items-start gap-2">
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
			<button class="w-fit cursor-pointer">Eliminar</button>
		</div>
	</div>
@endforeach
