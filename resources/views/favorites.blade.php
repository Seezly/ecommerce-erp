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
@endphp

<x-layouts::dashboard :title="__('Favoritos')">
	<h1 class="mb-4 text-2xl font-bold">Mis favoritos</h1>
	<div class="h-full w-full overflow-y-auto">
		@foreach ($items as $item)
			<x-product-horizontal-card :item="$item" />
		@endforeach
	</div>
</x-layouts::dashboard>
