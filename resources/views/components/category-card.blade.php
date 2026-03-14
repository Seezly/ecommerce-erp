@props([
    'item' => [],
])

<a class="flex items-center justify-center rounded-full p-4 shadow-lg" href="{{ $item['url'] }}">
	<p>{{ $item['title'] }}</p>
</a>
