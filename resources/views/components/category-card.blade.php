@props([
    'item' => []
])

<a class="w-1/6 p-4 flex justify-center items-center rounded-full shadow-lg" href="{{ $item['url'] }}">
    <p>{{ $item['title'] }}</p>
</a>