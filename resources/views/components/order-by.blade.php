<form class="flex w-64 items-center justify-start gap-4 justify-self-end" action="">
	<label for="order-by">Ordenar por:</label>
	<flux:select class="w-32" name="order-by">
		<flux:select.option value="1">Nuevo</flux:select.option>
		<flux:select.option value="2">Viejo</flux:select.option>
		<flux:select.option value="3">Destacados</flux:select.option>
		<flux:select.option value="4">Más barato primero</flux:select.option>
		<flux:select.option value="5">Más caro primero</flux:select.option>
	</flux:select>
</form>
