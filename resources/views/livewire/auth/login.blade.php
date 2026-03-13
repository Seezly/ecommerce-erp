<x-layouts::auth :title="__('Iniciar Sesión')">
	<div class="flex flex-col gap-6">
		<x-auth-header :title="__('Inicia sesión en tu cuenta')" :description="__('Ingresa tu correo y contraseña abajo para continuar')" />

		<!-- Session Status -->
		<x-auth-session-status class="text-center" :status="session('status')" />

		<form method="POST" action="{{ route('login.store') }}" class="flex flex-col gap-6">
			@csrf

			<!-- Email Address -->
			<flux:input name="email" :label="__('Correo electrónico')" :value="old('email')" type="email" required autofocus
				autocomplete="email" placeholder="email@ejemplo.com" />

			<!-- Password -->
			<div class="relative">
				<flux:input name="password" :label="__('Password')" type="password" required autocomplete="current-password"
					:placeholder="__('Password')" viewable />

				@if (Route::has('password.request'))
					<flux:link class="absolute end-0 top-0 text-sm" :href="route('password.request')" wire:navigate>
						{{ __('¿Olvidaste tu contraseña?') }}
					</flux:link>
				@endif
			</div>

			<!-- Remember Me -->
			<flux:checkbox name="remember" :label="__('Recuérdame')" :checked="old('remember')" />

			<div class="flex items-center justify-end">
				<flux:button variant="primary" type="submit" class="w-full" data-test="login-button">
					{{ __('Iniciar Sesión') }}
				</flux:button>
			</div>
		</form>

		@if (Route::has('register'))
			<div class="space-x-1 text-center text-sm text-zinc-600 rtl:space-x-reverse dark:text-zinc-400">
				<span>{{ __('¿No tienes una cuenta?') }}</span>
				<flux:link :href="route('register')" wire:navigate>{{ __('Regístrate') }}</flux:link>
			</div>
		@endif
	</div>
</x-layouts::auth>
