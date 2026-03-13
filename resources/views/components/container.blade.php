@props([
    'type' => 'container',
    'component' => 'product',
    'items' => [],
])

<section
	class="{{ $type === 'container' ? 'justify-start flex-wrap' : 'relative overflow-hidden' }} @container mb-8 flex w-full items-center gap-[3.33%] p-4">
	@foreach ($items as $item)
		@if ($component === 'product')
			<div
				class="h-100 rounded-lg{{ $type === 'slider' ? ' shrink-0' : '' }} @6xl:w-[22.5%] mb-4 flex w-[30%] flex-col items-center justify-between overflow-hidden shadow-lg">
				<x-product-card :item="$item" />
			</div>
		@else
			<x-category-card :item="$item" />
		@endif
	@endforeach
	@if ($type === 'slider')
		<div
			class="absolute left-0 top-[50%] flex size-10 -translate-y-[50%] transform items-center justify-center rounded-full bg-gray-400 p-2">
			<svg xmlns="http://www.w3.org/2000/svg"
				viewBox="0 0 640 640"><!--!Font Awesome Free v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.-->
				<path
					d="M169.4 297.4C156.9 309.9 156.9 330.2 169.4 342.7L361.4 534.7C373.9 547.2 394.2 547.2 406.7 534.7C419.2 522.2 419.2 501.9 406.7 489.4L237.3 320L406.6 150.6C419.1 138.1 419.1 117.8 406.6 105.3C394.1 92.8 373.8 92.8 361.3 105.3L169.3 297.3z" />
			</svg>
		</div>
		<div
			class="absolute right-0 top-[50%] flex size-10 -translate-y-[50%] transform items-center justify-center rounded-full bg-gray-400 p-2">
			<svg xmlns="http://www.w3.org/2000/svg"
				viewBox="0 0 640 640"><!--!Font Awesome Free v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.-->
				<path
					d="M471.1 297.4C483.6 309.9 483.6 330.2 471.1 342.7L279.1 534.7C266.6 547.2 246.3 547.2 233.8 534.7C221.3 522.2 221.3 501.9 233.8 489.4L403.2 320L233.9 150.6C221.4 138.1 221.4 117.8 233.9 105.3C246.4 92.8 266.7 92.8 279.2 105.3L471.2 297.3z" />
			</svg>
		</div>
	@endif
</section>
