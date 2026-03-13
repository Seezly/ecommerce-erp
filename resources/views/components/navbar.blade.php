<header
	class="flex w-full items-center justify-start gap-8 bg-[#FDFDFC] px-[10%] py-2 text-[#181818] dark:bg-[#181818] dark:text-[#fdfdfc]">
	<div class="">
		<a class="rounded-lg px-4 py-2 hover:bg-[#181818]/10 dark:hover:bg-[#fdfdfc]/10" href="">
			<img src="" alt="Logo">
		</a>
	</div>
	<div class="">
		<nav class="flex items-center justify-center gap-2">
			<a class="rounded-lg px-4 py-2 hover:bg-[#181818]/10 dark:hover:bg-[#fdfdfc]/10" href="">Juegos</a>
			<a class="rounded-lg px-4 py-2 hover:bg-[#181818]/10 dark:hover:bg-[#fdfdfc]/10" href="">Plataformas</a>
			<a class="rounded-lg px-4 py-2 hover:bg-[#181818]/10 dark:hover:bg-[#fdfdfc]/10" href="">Servicios</a>
		</nav>
	</div>
	<div class="ml-auto">
		<nav class="flex items-center justify-center gap-2">
			<x-search />
			<a class="rounded-lg px-4 py-2 hover:bg-[#181818]/10 dark:hover:bg-[#fdfdfc]/10" href=""><svg
					xmlns="http://www.w3.org/2000/svg" class="size-6"
					viewBox="0 0 640 640"><!--!Font Awesome Free v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.-->
					<path
						d="M24 48C10.7 48 0 58.7 0 72C0 85.3 10.7 96 24 96L69.3 96C73.2 96 76.5 98.8 77.2 102.6L129.3 388.9C135.5 423.1 165.3 448 200.1 448L456 448C469.3 448 480 437.3 480 424C480 410.7 469.3 400 456 400L200.1 400C188.5 400 178.6 391.7 176.5 380.3L171.4 352L475 352C505.8 352 532.2 330.1 537.9 299.8L568.9 133.9C572.6 114.2 557.5 96 537.4 96L124.7 96L124.3 94C119.5 67.4 96.3 48 69.2 48L24 48zM208 576C234.5 576 256 554.5 256 528C256 501.5 234.5 480 208 480C181.5 480 160 501.5 160 528C160 554.5 181.5 576 208 576zM432 576C458.5 576 480 554.5 480 528C480 501.5 458.5 480 432 480C405.5 480 384 501.5 384 528C384 554.5 405.5 576 432 576z" />
				</svg></a>
			@auth
				<a class="rounded-lg px-4 py-2 hover:bg-[#181818]/10 dark:hover:bg-[#fdfdfc]/10" href=""><svg
						xmlns="http://www.w3.org/2000/svg" class="size-6"
						viewBox="0 0 640 640"><!--!Font Awesome Free v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.-->
						<path
							d="M442.9 144C415.6 144 389.9 157.1 373.9 179.2L339.5 226.8C335 233 327.8 236.7 320.1 236.7C312.4 236.7 305.2 233 300.7 226.8L266.3 179.2C250.3 157.1 224.6 144 197.3 144C150.3 144 112.2 182.1 112.2 229.1C112.2 279 144.2 327.5 180.3 371.4C221.4 421.4 271.7 465.4 306.2 491.7C309.4 494.1 314.1 495.9 320.2 495.9C326.3 495.9 331 494.1 334.2 491.7C368.7 465.4 419 421.3 460.1 371.4C496.3 327.5 528.2 279 528.2 229.1C528.2 182.1 490.1 144 443.1 144zM335 151.1C360 116.5 400.2 96 442.9 96C516.4 96 576 155.6 576 229.1C576 297.7 533.1 358 496.9 401.9C452.8 455.5 399.6 502 363.1 529.8C350.8 539.2 335.6 543.9 320 543.9C304.4 543.9 289.2 539.2 276.9 529.8C240.4 502 187.2 455.5 143.1 402C106.9 358.1 64 297.7 64 229.1C64 155.6 123.6 96 197.1 96C239.8 96 280 116.5 305 151.1L320 171.8L335 151.1z" />
					</svg></a>
				<a class="rounded-lg px-4 py-2 hover:bg-[#181818]/10 dark:hover:bg-[#fdfdfc]/10" href=""><svg
						xmlns="http://www.w3.org/2000/svg" class="size-6"
						viewBox="0 0 640 640"><!--!Font Awesome Free v7.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2026 Fonticons, Inc.-->
						<path
							d="M470.5 463.6C451.4 416.9 405.5 384 352 384L288 384C234.5 384 188.6 416.9 169.5 463.6C133.9 426.3 112 375.7 112 320C112 205.1 205.1 112 320 112C434.9 112 528 205.1 528 320C528 375.7 506.1 426.2 470.5 463.6zM430.4 496.3C398.4 516.4 360.6 528 320 528C279.4 528 241.6 516.4 209.5 496.3C216.8 459.6 249.2 432 288 432L352 432C390.8 432 423.2 459.6 430.5 496.3zM320 576C461.4 576 576 461.4 576 320C576 178.6 461.4 64 320 64C178.6 64 64 178.6 64 320C64 461.4 178.6 576 320 576zM320 304C297.9 304 280 286.1 280 264C280 241.9 297.9 224 320 224C342.1 224 360 241.9 360 264C360 286.1 342.1 304 320 304zM232 264C232 312.6 271.4 352 320 352C368.6 352 408 312.6 408 264C408 215.4 368.6 176 320 176C271.4 176 232 215.4 232 264z" />
					</svg></a>
			@endauth
			<a class="rounded-lg px-4 py-2 hover:bg-[#181818]/10 dark:hover:bg-[#fdfdfc]/10" href="">Iniciar
				Sesión</a>
			<a class="rounded-lg px-4 py-2 hover:bg-[#181818]/10 dark:hover:bg-[#fdfdfc]/10" href="">Regístrate</a>
		</nav>
	</div>
</header>
