<x-layouts::dashboard :title="__('Seguridad')">
	<h1 class="mb-8 text-2xl font-bold">Seguridad del Perfil</h1>
	<form action="" class="flex flex-col gap-4">
		<!-- Password -->
		<flux:input name="password" :label="__('Contraseña')" type="password" required autocomplete="new-password"
			:placeholder="__('Contraseña')" viewable />

		<!-- Confirm Password -->
		<flux:input name="new-password" :label="__('Contraseña Nueva')" type="password" required autocomplete="new-password"
			:placeholder="__('Contraseña Nueva')" viewable />

		<!-- Confirm Password -->
		<flux:input name="password_confirmation" :label="__('Confirmar Contraseña')" type="password" required
			autocomplete="new-password" :placeholder="__('Confirmar Contraseña')" viewable />
		<flux:button class="mt-4">Guardar</flux:button>
	</form>
	<div class="my-8 border-b"></div>
	<h2 class="mb-4 text-xl font-medium">Eliminar cuenta</h2>
	<p class="mb-4 text-sm font-light">Por favor, tenga en cuenta que ésta acción es irreversible, y por lo tanto, perderá
		TODOS
		los datos asociados a su perfil; incluyendo: cuentas, códigos, gift cards, saldo, etc...</p>
	<form action="">
		<flux:button>Eliminar cuenta</flux:button>
	</form>
</x-layouts::dashboard>
