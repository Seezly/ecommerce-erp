<div class="relative flex w-full items-start justify-start gap-4 border-b py-2">
	<div class="size-28 overflow-hidden">
		<img class="h-full w-full object-cover" src="{{ $item['image'] }}" alt="{{ $item['title'] }}">
	</div>
	<div class="relative flex h-full flex-1 flex-col items-start gap-2">
		<p class="text-lg">{{ $item['title'] }}</p>
		<div class="flex flex-col items-start justify-between">
			<p>${{ $item['price'] }}</p>
			<p class="text-2xl font-medium">Subtotal: ${{ $item['subtotal'] }}</p>
		</div>
		<div class="flex flex-col items-start justify-between">
			<p>Cantidad: {{ $item['quantity'] }}</p>
		</div>
		<span
			class="absolute right-0 top-0 w-fit rounded-full bg-gray-300 px-2 py-1 text-sm font-extralight">{{ $item['status'] }}</span>
		<button class="absolute bottom-0 right-0">Ver</button>
	</div>
</div>
