@props([
    'title' => 'Resumen del carrito',
    'type' => 'favorite',
])

<div>
	<div class="z-2 fixed bottom-0 left-0 right-0 top-0 bg-gray-900/25 backdrop-blur-sm"></div>
	<aside class="w-lg fixed right-0 top-0 z-10 flex h-screen flex-col items-start justify-start bg-gray-100">
		<div class="h-1/12 relative flex w-full items-center justify-center border-b px-8 py-4 text-center">
			<h3 class="text-2xl font-bold">{{ $title }}</h3>
			<button class="absolute right-4 cursor-pointer p-2"><svg xmlns="http://www.w3.org/2000/svg" class="size-4"
					viewBox="0 0 640 640"><!--!Font Awesome Free v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.-->
					<path
						d="M504.6 148.5C515.9 134.9 514.1 114.7 500.5 103.4C486.9 92.1 466.7 93.9 455.4 107.5L320 270L184.6 107.5C173.3 93.9 153.1 92.1 139.5 103.4C125.9 114.7 124.1 134.9 135.4 148.5L278.3 320L135.4 491.5C124.1 505.1 125.9 525.3 139.5 536.6C153.1 547.9 173.3 546.1 184.6 532.5L320 370L455.4 532.5C466.7 546.1 486.9 547.9 500.5 536.6C514.1 525.3 515.9 505.1 504.6 491.5L361.7 320L504.6 148.5z" />
				</svg></button>
		</div>
		<div
			{{ $attributes->class(['w-full overflow-auto px-8 py-4', 'h-10/12' => $type === 'cart', 'h-11/12' => $type === 'favorite']) }}>
			{{ $slot }}
		</div>
		@if ($type === 'cart')
			<div class="h-1/12 flex w-full items-center justify-between border-t px-8 py-4">
				<p class="text-xl font-medium">Total: $10.00</p>
				<button>Comprar</button>
			</div>
		@endif
	</aside>
</div>
