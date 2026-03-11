@php
    $slider = [
        1 => [
            'url' => 'https://images.unsplash.com/photo-1545569341-9eb8b30979d9?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8amFwYW58ZW58MHx8MHx8fDA%3D',
            'alt' => 'Picture\'s description'
        ],
        2 => [
            'url' => 'https://images.unsplash.com/photo-1542051841857-5f90071e7989?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8amFwYW58ZW58MHx8MHx8fDA%3D',
            'alt' => 'Picture\'s description'
        ],
        3 => [
            'url' => 'https://images.unsplash.com/photo-1528164344705-47542687000d?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8amFwYW58ZW58MHx8MHx8fDA%3D',
            'alt' => 'Picture\'s description'
        ],
    ];
@endphp

<x-layouts::index :title="__('Inicio')">
    <x-slider :slider="$slider"/>
</x-layouts::index>