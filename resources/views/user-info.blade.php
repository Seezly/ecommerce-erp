@php
	$countries = [
	    1 => [
	        'name' => 'Venezuela',
	        'flag' => '...',
	    ],
	];
@endphp

<x-layouts::dashboard :title="__('Mi Perfil')">
	<h1 class="mb-8 text-2xl font-bold">Mi Perfil</h1>
	<form action="" class="flex flex-col gap-4">
		<flux:input :label="__('Nombre completo')" type="text" :value="__('Nombre del usuario')" disabled />
		<flux:input :label="__('Correo electrónico')" type="email" :value="__('Email del usuario')" />
		<flux:input :label="__('Número de teléfono')" type="text" :value="__('Número del usuario')" />
		<flux:select name="country" :label="__('País')" value="Venezuela" required placeholder="Selecciona tu país">
			@foreach ($countries as $country)
				<flux:select.option value="{{ $country['name'] }}">
					<div class="flex items-center gap-2">
						<flux:icon.shield-check variant="mini" class="text-zinc-400" /> {{ $country['name'] }}
					</div>
				</flux:select.option>
			@endforeach
		</flux:select>
		<flux:button class="mt-4">Guardar</flux:button>
	</form>
</x-layouts::dashboard>
