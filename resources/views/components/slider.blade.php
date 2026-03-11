@props([
    'slider' => [],
    'text' => false,
    'pagination' => false,
    'arrows' => false,
    'autoplay' => true
])

<section class="relative w-full h-[50vh] flex overflow-hidden">
    @foreach ($slider as $slide)
        <div class="w-full h-full shrink-0">
            @if ($text)
                <div>
                    <h2>{{ $slide['title'] }}</h2>
                    <p>{{ $slide['description'] }}</p>
                    @if ($slide['buttons'])
                        <div>
                            @foreach ($slide['buttons'] as $button)
                                <a href="{{ $button['href'] }}">{{ $button['title'] }}</a>
                            @endforeach
                        </div>
                    @endif
                </div>
            @endif
            @if (isset($slider['link']))
                <a href="{{ $slide['link'] }}">
                    <img src="{{ $slide['url'] }}" alt="{{ $slide['alt'] }}">
                </a>
            @else
                <img src="{{ $slide['url'] }}" alt="{{ $slide['alt'] }}">
            @endif
        </div>
    @endforeach
    @if ($arrows)
        <div class="absolute w-full top-[50%] transform -translate-y-[50%] flex justify-between items-center">
            <div class="size-10 rounded-full bg-gray-400 p-2 flex justify-center items-center"><</div>
            <div class="size-10 rounded-full bg-gray-400 p-2 flex justify-center items-center">></div>
        </div>
    @endif
</section>