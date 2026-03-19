@php
    $items = [
        1 => [
            'image' =>
                'https://plus.unsplash.com/premium_photo-1686247805255-324dfc4e230a?q=80&w=387&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'title' => 'Some product',
            'category' => 'Category',
            'description' => 'Some description',
            'stock' => '16',
            'price' => '2.30',
            'discountPrice' => '2.00',
            'discount' => '20',
        ],
        2 => [
            'image' =>
                'https://plus.unsplash.com/premium_photo-1686247805255-324dfc4e230a?q=80&w=387&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'title' => 'Some product',
            'category' => 'Category',
            'description' => 'Some description',
            'stock' => '16',
            'price' => '2.30',
            'discountPrice' => '2.00',
            'discount' => '20',
        ],
        3 => [
            'image' =>
                'https://plus.unsplash.com/premium_photo-1686247805255-324dfc4e230a?q=80&w=387&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'title' => 'Some product',
            'category' => 'Category',
            'description' => 'Some description',
            'stock' => '16',
            'price' => '2.30',
            'discountPrice' => '0.00',
            'discount' => '0',
        ],
        4 => [
            'image' =>
                'https://plus.unsplash.com/premium_photo-1686247805255-324dfc4e230a?q=80&w=387&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'title' => 'Some product',
            'category' => 'Category',
            'description' => 'Some description',
            'stock' => '16',
            'price' => '2.30',
            'discountPrice' => '2.00',
            'discount' => '20',
        ],
        5 => [
            'image' =>
                'https://plus.unsplash.com/premium_photo-1686247805255-324dfc4e230a?q=80&w=387&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'title' => 'Some product',
            'category' => 'Category',
            'description' => 'Some description',
            'stock' => '16',
            'price' => '2.30',
            'discountPrice' => '0.00',
            'discount' => '0',
        ],
    ];

    $countries = [
        1 => [
            'name' => 'Venezuela',
            'flag' => 'icon',
        ],
    ];
@endphp

<x-layouts::index title="Checkout">
    <section class="w-2xl mx-auto">
        <h1 class="text-2xl font-bold text-center">Resumen del pedido</h1>
        <div class="border-b my-4"></div>
        <div class="w-full overflow-auto mb-8">
            @foreach ($items as $item)
                <x-product-horizontal-card :item="$item" type="cart" />
            @endforeach
        </div>
        <div class="w-full flex justify-between items-center mb-8">
            <p class="text-xl font-medium">Total: $10.00</p>
            <button>Comprar</button>
        </div>
        <div class="border-b my-4"></div>
        <div class="mb-8">
            <form method="POST" action="{{ route('register.store') }}" class="flex flex-col gap-6">
                @csrf
                <!-- Name -->
                <flux:input name="name" :label="__('Nombre completo')" :value="old('name')" type="text" required
                    autofocus autocomplete="name" :placeholder="__('Nombre Completo')" />

                <!-- Email Address -->
                <flux:input name="email" :label="__('Correo electrónico')" :value="old('email')" type="email"
                    required autocomplete="email" placeholder="email@ejemplo.com" />

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
                <flux:input name="password" :label="__('Contraseña')" type="password" required
                    autocomplete="new-password" :placeholder="__('Contraseña')" viewable />

                <!-- Confirm Password -->
                <flux:input name="password_confirmation" :label="__('Confirmar Contraseña')" type="password" required
                    autocomplete="new-password" :placeholder="__('Confirmar Contraseña')" viewable />
            </form>
        </div>
        <div class="mb-8">
            <form action="" class="mb-4">
                @csrf
                <flux:checkbox.group label="Métodos de pago" variant="buttons">
                    <flux:checkbox checked value="newsletter" class="w-32 [&>span]:block [&>span]:w-full">
                        <div class="flex justify-between items-center w-full">
                            <flux:icon name="bolt" class="size-8" />
                            <p>Binance</p>
                        </div>
                    </flux:checkbox>
                    <flux:checkbox checked value="newsletter" class="w-32 [&>span]:block [&>span]:w-full">
                        <div class="flex justify-between items-center w-full">
                            <flux:icon name="bolt" class="size-8" />
                            <p>Binance</p>
                        </div>
                    </flux:checkbox>
                    <flux:checkbox checked value="newsletter" class="w-32 [&>span]:block [&>span]:w-full">
                        <div class="flex justify-between items-center w-full">
                            <flux:icon name="bolt" class="size-8" />
                            <p>Binance</p>
                        </div>
                    </flux:checkbox>
                </flux:checkbox.group>
            </form>
            <div class="relative rounded-lg border px-8 py-4">
                <div class="w-full flex justify-center items-center">
                    <h3 class="font-bold text-2xl">Binance</h3>
                    <div><img src="" alt=""></div>
                </div>
                <div>
                    Datos
                </div>
                <div class="absolute right-8 top-4">
                    <flux:icon name="clipboard" />
                </div>
            </div>
        </div>
    </section>
</x-layouts::index>
