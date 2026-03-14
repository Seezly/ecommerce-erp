@php
	$slider = [
	    1 => [
	        'url' =>
	            'https://images.unsplash.com/photo-1545569341-9eb8b30979d9?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8amFwYW58ZW58MHx8MHx8fDA%3D',
	        'alt' => 'Picture\'s description',
	    ],
	    2 => [
	        'url' =>
	            'https://images.unsplash.com/photo-1542051841857-5f90071e7989?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8amFwYW58ZW58MHx8MHx8fDA%3D',
	        'alt' => 'Picture\'s description',
	    ],
	    3 => [
	        'url' =>
	            'https://images.unsplash.com/photo-1528164344705-47542687000d?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8amFwYW58ZW58MHx8MHx8fDA%3D',
	        'alt' => 'Picture\'s description',
	    ],
	];

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

	$categories = [
	    1 => [
	        'title' => 'One title',
	        'url' => '#',
	    ],
	    2 => [
	        'title' => 'One title',
	        'url' => '#',
	    ],
	    3 => [
	        'title' => 'One title',
	        'url' => '#',
	    ],
	];
@endphp

<x-layouts::index :title="__('Inicio')">
	<x-slider :slider="$slider" />
	{{-- <x-filter /> --}}
	<x-card-container>
		@foreach ($items as $item)
			<x-product-card :item="$item" />
		@endforeach
	</x-card-container>
	<x-card-container cols="6">
		@foreach ($categories as $item)
			<x-category-card :item="$item" />
		@endforeach
	</x-card-container>
	<x-card-slider>
		@foreach ($items as $item)
			<div class="w-full shrink-0 md:basis-[calc(50%-1rem)] lg:basis-[calc(25%-1rem)]">
				<x-product-card type="slide" :item="$item" />
			</div>
		@endforeach
	</x-card-slider>
	<x-card-slider>
		@foreach ($categories as $item)
			<div class="w-full shrink-0 md:basis-[calc(25%-1rem)] lg:basis-[calc(17.5%-1rem)]">
				<x-category-card :item="$item" />
			</div>
		@endforeach
	</x-card-slider>
</x-layouts::index>
