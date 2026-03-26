@php
	$items = [
	    1 => [
	        'image' =>
	            'https://plus.unsplash.com/premium_photo-1686247805255-324dfc4e230a?q=80&w=387&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
	        'title' => 'Some product',
	        'category' => 'Category',
	        'description' => 'Some description',
	        'stock' => '16',
	        'price' => '2.30',
	        'discountPrice' => '2.00',
	        'discount' => '20',
	    ],
	    2 => [
	        'image' =>
	            'https://plus.unsplash.com/premium_photo-1686247805255-324dfc4e230a?q=80&w=387&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
	        'title' => 'Some product',
	        'category' => 'Category',
	        'description' => 'Some description',
	        'stock' => '16',
	        'price' => '2.30',
	        'discountPrice' => '2.00',
	        'discount' => '20',
	    ],
	    3 => [
	        'image' =>
	            'https://plus.unsplash.com/premium_photo-1686247805255-324dfc4e230a?q=80&w=387&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
	        'title' => 'Some product',
	        'category' => 'Category',
	        'description' => 'Some description',
	        'stock' => '16',
	        'price' => '2.30',
	        'discountPrice' => '0.00',
	        'discount' => '0',
	    ],
	    4 => [
	        'image' =>
	            'https://plus.unsplash.com/premium_photo-1686247805255-324dfc4e230a?q=80&w=387&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
	        'title' => 'Some product',
	        'category' => 'Category',
	        'description' => 'Some description',
	        'stock' => '16',
	        'price' => '2.30',
	        'discountPrice' => '2.00',
	        'discount' => '20',
	    ],
	    5 => [
	        'image' =>
	            'https://plus.unsplash.com/premium_photo-1686247805255-324dfc4e230a?q=80&w=387&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
	        'title' => 'Some product',
	        'category' => 'Category',
	        'description' => 'Some description',
	        'stock' => '16',
	        'price' => '2.30',
	        'discountPrice' => '0.00',
	        'discount' => '0',
	    ],
	];

	$item = [
	    'image' =>
	        'https://plus.unsplash.com/premium_photo-1686247805255-324dfc4e230a?q=80&w=387&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
	    'title' => 'Some product',
	    'category' => 'Category',
	    'description' => 'Some description',
	    'stock' => '4',
	    'price' => '2.30',
	    'discountPrice' => '2.00',
	    'discount' => '20',
	];
@endphp

<x-layouts::index :title="$item['title']">
	<div class="relative mb-8 grid grid-cols-2 gap-8">
		<div class="sticky left-0 top-0 col-span-1 aspect-square overflow-hidden">
			<img class="h-full w-full object-cover" src="{{ $item['image'] }}" alt="{{ $item['title'] }}">
		</div>
		<div class="flex flex-col items-start justify-start overflow-y-auto">
			<div class="flex w-full flex-col items-start justify-start">
				<div class="mb-4">
					<h1 class="text-2xl font-bold">{{ $item['title'] }}</h1>
					@if ($item['discount'] > 0)
						<span
							class="absolute right-0 top-0 rounded-full bg-gray-300 px-2 py-1 text-sm font-extralight">-{{ $item['discount'] }}%</span>
					@endif
				</div>
				<div class="mb-4">
					<form action="">
						<flux:checkbox.group variant="buttons" :label="__('Seleccione la duración')">
							<flux:checkbox icon="check">1 Mes</flux:checkbox>
							<flux:checkbox icon="check">3 Meses</flux:checkbox>
							<flux:checkbox icon="check">6 Meses</flux:checkbox>
							<flux:checkbox icon="check">1 año</flux:checkbox>
						</flux:checkbox.group>
					</form>
				</div>
				<div class="mb-4">
					@if ($item['discountPrice'] > 0)
						<span class="text-xs font-extralight text-red-500 line-through">${{ $item['price'] }}</span>
						<p class="text-2xl font-medium">${{ $item['discountPrice'] }}</p>
					@else
						<p class="text-2xl font-medium">${{ $item['price'] }}</p>
					@endif
				</div>
				<div class="mb-4 flex w-full items-center justify-between">
					<div class="flex w-32 items-center justify-between overflow-hidden rounded-full border bg-white">
						<button class="h-full w-4/12 cursor-pointer px-2">-</button>
						<input class="w-4/12 py-2 text-center" type="number" min="1" value="1" required>
						<button class="h-full w-4/12 cursor-pointer px-2">+</button>
					</div>
					@if ($item['stock'] < 5)
						<span class="w-fit rounded-full bg-gray-300 px-2 py-1 text-sm font-extralight">Pocos
							disponibles</span>
					@endif
				</div>
				<div class="mb-4 flex w-full items-center justify-between gap-4">
					<flux:button class="flex-1">Comprar ahora</flux:button>
					<flux:button class="flex-1">Añadir al carrito</flux:button>
				</div>
			</div>
			<div class="my-8 w-full border-b"></div>
			<div class="mb-8">
				<h2 class="mb-4 text-lg font-medium">Descripción del producto</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat magni asperiores facilis quisquam reprehenderit
					neque, quia sunt iure doloremque qui, veritatis blanditiis et placeat, consequuntur non. Quidem porro aperiam vel.
					Exercitationem blanditiis perspiciatis labore a commodi eveniet omnis placeat dolor minus, ut veniam nostrum illo
					voluptas ex dolore accusantium suscipit esse molestias? Ipsum dolores reprehenderit repellat consectetur tempora
					quis ut.
					Non rerum hic dicta iure laborum alias ipsa minus quidem aspernatur quia nemo amet corporis, quam aliquid, nihil
					necessitatibus enim sit deserunt suscipit excepturi sed. Minima maxime optio nisi eligendi.
					Temporibus ex dignissimos numquam quaerat quisquam, labore incidunt aspernatur corrupti ipsa reiciendis expedita
					voluptates dolorum id porro qui dolorem eius cumque sapiente laborum dicta consequatur? Expedita, iste.
					Exercitationem, eum suscipit.
					Placeat maxime unde tempore temporibus ad quam cum dolore, deserunt inventore a at culpa rem magnam impedit quasi
					consequatur dolorem eius ipsum! Nobis minus nostrum reprehenderit similique aut fugiat odio.
					Fuga delectus rerum optio, quam error neque quidem quibusdam fugiat nobis fugit. Beatae temporibus officiis quidem
					fuga voluptates consequatur tempora ipsam aut dicta accusamus. Cupiditate doloribus rem id magnam earum.</p>
			</div>
			<div class="my-8 w-full border-b"></div>
			<div class="w-full">
				<h2 class="text-xl font-medium">También te puede interesar...</h2>
				<x-card-container cols="2">
					@foreach ($items as $item)
						<x-product-card :item="$item" />
					@endforeach
				</x-card-container>
			</div>
		</div>
	</div>
</x-layouts::index>
