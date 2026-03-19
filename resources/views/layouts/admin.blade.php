@php
	$groups = [
	    [
	        'name' => 'Inicio',
	        'links' => [['route' => 'admin', 'label' => 'Inicio', 'active' => true]],
	    ],
	    [
	        'name' => 'Catálogo',
	        'links' => [
	            ['route' => 'admin', 'label' => 'Categorías', 'active' => false],
	            ['route' => 'admin', 'label' => 'Subcategorías', 'active' => false],
	            ['route' => 'admin', 'label' => 'Atributos', 'active' => false],
	            ['route' => 'admin', 'label' => 'Productos', 'active' => false],
	        ],
	    ],
	    [
	        'name' => 'Ventas',
	        'links' => [
	            ['route' => 'admin', 'label' => 'Ventas totales', 'active' => false],
	            ['route' => 'admin', 'label' => 'Pedidos por aprobar', 'active' => false],
	        ],
	    ],
	    [
	        'name' => 'Cuentas',
	        'links' => [['route' => 'admin', 'label' => 'Cuentas', 'active' => false]],
	    ],
	    [
	        'name' => 'Notificaciones',
	        'links' => [
	            ['route' => 'admin', 'label' => 'Enviar WhatsApp', 'active' => false],
	            ['route' => 'admin', 'label' => 'Enviar Email', 'active' => false],
	        ],
	    ],
	    [
	        'name' => 'Clientes',
	        'links' => [['route' => 'admin', 'label' => 'Clientes', 'active' => false]],
	    ],
	    [
	        'name' => 'Proveedores',
	        'links' => [['route' => 'admin', 'label' => 'Proveedores', 'active' => false]],
	    ],
	    [
	        'name' => 'Logs',
	        'links' => [
	            ['route' => 'admin', 'label' => 'Todos los logs', 'active' => false],
	            ['route' => 'admin', 'label' => 'Historial de pagos', 'active' => false],
	        ],
	    ],
	    [
	        'name' => 'Reportes',
	        'links' => [
	            ['route' => 'admin', 'label' => 'Históricos', 'active' => false],
	            ['route' => 'admin', 'label' => 'Por fecha', 'active' => false],
	        ],
	    ],
	    [
	        'name' => 'Usuarios',
	        'links' => [['route' => 'admin', 'label' => 'Usuarios', 'active' => false]],
	    ],
	    [
	        'name' => 'Configuración',
	        'links' => [
	            ['route' => 'admin', 'label' => 'General', 'active' => false],
	            ['route' => 'admin', 'label' => 'Tienda', 'active' => false],
	            ['route' => 'admin', 'label' => 'Correo', 'active' => false],
	            ['route' => 'admin', 'label' => 'WhatsApp', 'active' => false],
	            ['route' => 'admin', 'label' => 'Métodos de pago', 'active' => false],
	            ['route' => 'admin', 'label' => 'Plantillas', 'active' => false],
	        ],
	    ],
	];
@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>{{ $title }} - {{ config('app.name', 'Laravel') }}</title>

		<link rel="icon" href="/favicon.ico" sizes="any">
		<link rel="icon" href="/favicon.svg" type="image/svg+xml">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">

		<!-- Fonts -->
		<link rel="preconnect" href="https://fonts.bunny.net">
		<link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

		@vite(['resources/css/app.css', 'resources/js/app.js'])
	</head>

	<body class="flex min-h-screen flex-col items-center bg-[#FDFDFC] text-[#1b1b18] dark:bg-[#181818]">
		<x-navbar />
		<div class="flex w-full items-start justify-between">
			<x-sidebar :groups="$groups" />
			<main class="mx-auto w-2/3">
				{{ $slot }}
			</main>
		</div>
	</body>

</html>
