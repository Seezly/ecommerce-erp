@props([
    'cols' => '4',
])

<section
	{{ $attributes->class([
	    'mb-8 grid w-full gap-4 p-4',
	    'grid-cols-2' => $cols == 2,
	    'grid-cols-3' => $cols == 3,
	    'grid-cols-4' => $cols == 4,
	    'grid-cols-5' => $cols == 5,
	    'grid-cols-6' => $cols == 6,
	]) }}>
	{{ $slot }}
</section>
