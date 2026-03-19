@props([
    'groups' => [
        [
            'name' => 'Inicio',
            'links' => [['route' => 'admin', 'label' => 'Inicio']],
        ],
        [
            'name' => 'Mis cuentas',
            'links' => [['route' => 'admin', 'label' => 'Mis cuentas']],
        ],
        [
            'name' => 'Pedidos',
            'links' => [['route' => 'admin', 'label' => 'Pedidos']],
        ],
        [
            'name' => 'Carrito',
            'links' => [['route' => 'admin', 'label' => 'Carrito']],
        ],
        [
            'name' => 'Favoritos',
            'links' => [['route' => 'admin', 'label' => 'Favoritos']],
        ],
    ],
    'userMenu' => [
        1 => [
            'href' => '#',
            'label' => 'Información de la cuenta',
        ],
        2 => [
            'href' => '#',
            'label' => 'Seguridad',
        ],
        3 => [
            'href' => '#',
            'label' => 'Cerrar sesión',
        ],
    ],
])

<div class="w-sm sticky left-0 top-0 flex h-screen flex-col justify-between border-e border-gray-100 bg-white">
	<div class="px-8 py-4">
		<ul class="mt-6 space-y-1">
			@foreach ($groups as $group)
				@if (count($group['links']) === 1)
					<li>
						<a href="{{ route($group['links'][0]['route']) }}"
							class="{{ Route::is($group['links'][0]['route']) ? 'bg-gray-100 text-gray-700' : 'text-gray-500 hover:bg-gray-100 hover:text-gray-700' }} block rounded-lg px-4 py-2 text-sm font-medium">{{ $group['links'][0]['label'] }}</a>
					</li>
				@else
					<li>
						<details class="group">
							<summary
								class="flex cursor-pointer items-center justify-between rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">
								{{ $group['name'] }}
								<span class="shrink-0 transition duration-300 group-open:rotate-180">
									<svg xmlns="http://www.w3.org/2000/svg" class="size-4" viewBox="0 0 20 20" fill="currentColor">
										<path fill-rule="evenodd"
											d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
											clip-rule="evenodd"></path>
									</svg>
								</span>
							</summary>
							<ul class="space-y-1 pl-4">
								@foreach ($group['links'] as $link)
									<li>
										<a href="{{ route($link['route']) }}"
											class="{{ Route::is($link['route']) ? 'bg-gray-100 text-gray-700' : 'text-gray-500 hover:bg-gray-100 hover:text-gray-700' }} block rounded-lg px-4 py-2 text-sm font-medium">{{ $link['label'] }}</a>
									</li>
								@endforeach
							</ul>
						</details>
					</li>
				@endif
			@endforeach
		</ul>
	</div>

	<div class="sticky inset-x-0 bottom-0 border-t border-gray-100">
		<details class="[&amp;_summary::-webkit-details-marker]:hidden group">
			<summary
				class="flex cursor-pointer items-center justify-between rounded-lg px-8 py-2 text-gray-500 hover:bg-gray-100 hover:text-gray-700">
				<div class="flex items-center gap-2 p-4">
					<div>
						<p class="text-xs">
							<strong class="block font-medium">Eric Frusciante</strong>

							<span> eric@frusciante.com </span>
						</p>
					</div>
				</div>

				<span class="shrink-0 transition duration-300 group-open:-rotate-180">
					<svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 20 20" fill="currentColor">
						<path fill-rule="evenodd"
							d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
							clip-rule="evenodd"></path>
					</svg>
				</span>
			</summary>

			<ul class="absolute left-8 top-[-9em] mt-2 space-y-1 rounded-lg bg-gray-100 px-4 py-2">
				@foreach ($userMenu as $link)
					<li>
						<a href="{{ $link['href'] }}"
							class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">{{ $link['label'] }}</a>
					</li>
				@endforeach
			</ul>
		</details>
	</div>
</div>
