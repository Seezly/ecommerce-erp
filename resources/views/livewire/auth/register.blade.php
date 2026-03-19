@php
    $countries = [
        1 => [
            'name' => 'Venezuela',
            'flag' => '...',
        ],
    ];
@endphp

<x-layouts::auth :title="__('Regístrate')">
    <div class="flex flex-col gap-6">
        <x-auth-header :title="__('Crear una cuenta')" :description="__('Ingresa tus datos abajo para crear una cuenta')" />

        <!-- Session Status -->
        <x-auth-session-status class="text-center" :status="session('status')" />

        <form method="POST" action="{{ route('register.store') }}" class="flex flex-col gap-4">
            @csrf
            <!-- Name -->
            <flux:input name="name" :label="__('Nombre completo')" :value="old('name')" type="text" required
                autofocus autocomplete="name" :placeholder="__('Nombre Completo')" />

            <!-- Email Address -->
            <flux:input name="email" :label="__('Correo electrónico')" :value="old('email')" type="email" required
                autocomplete="email" placeholder="email@ejemplo.com" />

            <!-- Phone Number -->
            <flux:input name="phone-number" :label="__('Número de teléfono')" :value="old('phone-number')"
                type="text" required autocomplete="phone-number" placeholder="+58 (424) 541-2882" />

            <!-- Country -->
            <flux:select name="country" :label="__('País')" required placeholder="Selecciona tu país">
                @foreach ($countries as $country)
                    <flux:select.option>
                        <div class="flex items-center gap-2">
                            <flux:icon.shield-check variant="mini" class="text-zinc-400" /> {{ $country['name'] }}
                        </div>
                    </flux:select.option>
                @endforeach
            </flux:select>

            <!-- Password -->
            <flux:input name="password" :label="__('Contraseña')" type="password" required autocomplete="new-password"
                :placeholder="__('Contraseña')" viewable />

            <!-- Confirm Password -->
            <flux:input name="password_confirmation" :label="__('Confirmar Contraseña')" type="password" required
                autocomplete="new-password" :placeholder="__('Confirmar Contraseña')" viewable />

            <div class="flex items-center justify-end">
                <flux:button type="submit" variant="primary" class="w-full" data-test="register-user-button">
                    {{ __('Crear cuenta') }}
                </flux:button>
            </div>
        </form>

        <div class="space-x-1 text-center text-sm text-zinc-600 rtl:space-x-reverse dark:text-zinc-400">
            <span>{{ __('¿Ya tienes una cuenta?') }}</span>
            <flux:link :href="route('login')" wire:navigate>{{ __('Inicia sesión') }}</flux:link>
        </div>
    </div>
</x-layouts::auth>
