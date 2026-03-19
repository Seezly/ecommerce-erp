<x-layouts::admin :title="__('Admin')">
	<div class="mb-8 flex w-full items-center justify-between">
		<h1 class="text-2xl font-bold">Dashboard</h1>
		<button class="cursor-pointer">+ Crear</button>
	</div>
	<div class="flex w-full items-center justify-between space-y-4">
		<details class="group relative overflow-hidden rounded border border-gray-300 shadow-sm">
			<summary
				class="[&amp;::-webkit-details-marker]:hidden flex items-center justify-between gap-2 p-3 text-gray-700 transition-colors hover:text-gray-900">
				<span class="text-sm font-medium"> Availability </span>

				<span class="transition-transform group-open:-rotate-180">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
						class="size-4">
						<path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
					</svg>
				</span>
			</summary>

			<div class="divide-y divide-gray-300 border-t border-gray-300 bg-white">
				<div class="flex items-center justify-between px-3 py-2">
					<span class="text-sm text-gray-700"> 0 Selected </span>

					<button type="button" class="text-sm text-gray-700 underline transition-colors hover:text-gray-900">
						Reset
					</button>
				</div>

				<fieldset class="p-3">
					<legend class="sr-only">Checkboxes</legend>

					<div class="flex flex-col items-start gap-3">
						<label for="Option1" class="inline-flex items-center gap-3">
							<input type="checkbox" class="size-5 rounded border-gray-300 shadow-sm" id="Option1">

							<span class="text-sm font-medium text-gray-700"> Option 1 </span>
						</label>

						<label for="Option2" class="inline-flex items-center gap-3">
							<input type="checkbox" class="size-5 rounded border-gray-300 shadow-sm" id="Option2">

							<span class="text-sm font-medium text-gray-700"> Option 2 </span>
						</label>

						<label for="Option3" class="inline-flex items-center gap-3">
							<input type="checkbox" class="size-5 rounded border-gray-300 shadow-sm" id="Option3">

							<span class="text-sm font-medium text-gray-700"> Option 3 </span>
						</label>
					</div>
				</fieldset>
			</div>
		</details>

		<details class="group relative overflow-hidden rounded border border-gray-300 shadow-sm">
			<summary
				class="[&amp;::-webkit-details-marker]:hidden flex items-center justify-between gap-2 p-3 text-gray-700 transition-colors hover:text-gray-900">
				<span class="text-sm font-medium"> Price </span>

				<span class="transition-transform group-open:-rotate-180">
					<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
						class="size-4">
						<path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"></path>
					</svg>
				</span>
			</summary>

			<div class="divide-y divide-gray-300 border-t border-gray-300 bg-white">
				<div class="flex items-center justify-between px-3 py-2">
					<span class="text-sm text-gray-700"> Max price is $600 </span>

					<button type="button" class="text-sm text-gray-700 underline transition-colors hover:text-gray-900">
						Reset
					</button>
				</div>

				<div class="flex items-center gap-3 p-3">
					<label for="MinPrice">
						<span class="text-sm text-gray-700"> Min </span>

						<input type="number" id="MinPrice" value="0"
							class="mt-0.5 w-full rounded border-gray-300 shadow-sm sm:text-sm">
					</label>

					<label for="MaxPrice">
						<span class="text-sm text-gray-700"> Max </span>

						<input type="number" id="MaxPrice" value="600"
							class="mt-0.5 w-full rounded border-gray-300 shadow-sm sm:text-sm">
					</label>
				</div>
			</div>
		</details>
	</div>
	<div>
		<article class="rounded-lg border border-gray-100 bg-white p-6">
			<div class="flex items-center justify-between">
				<div>
					<p class="text-sm text-gray-500">Profit</p>

					<p class="text-2xl font-medium text-gray-900">$240.94</p>
				</div>

				<span class="rounded-full bg-blue-100 p-3 text-blue-600">
					<svg xmlns="http://www.w3.org/2000/svg" class="size-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"
						stroke-width="2">
						<path stroke-linecap="round" stroke-linejoin="round"
							d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z">
						</path>
					</svg>
				</span>
			</div>

			<div class="mt-1 flex gap-1 text-green-600">
				<svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
				</svg>

				<p class="flex gap-2 text-xs">
					<span class="font-medium"> 67.81% </span>

					<span class="text-gray-500"> Since last week </span>
				</p>
			</div>
		</article>

		<article class="rounded-lg border border-gray-100 bg-white p-6">
			<div class="flex items-center justify-between">
				<div>
					<p class="text-sm text-gray-500">Profit</p>

					<p class="text-2xl font-medium text-gray-900">$240.94</p>
				</div>

				<span class="rounded-full bg-blue-100 p-3 text-blue-600">
					<svg xmlns="http://www.w3.org/2000/svg" class="size-8" fill="none" viewBox="0 0 24 24"
						stroke="currentColor" stroke-width="2">
						<path stroke-linecap="round" stroke-linejoin="round"
							d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z">
						</path>
					</svg>
				</span>
			</div>

			<div class="mt-1 flex gap-1 text-red-600">
				<svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="none" viewBox="0 0 24 24"
					stroke="currentColor">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 17h8m0 0V9m0 8l-8-8-4 4-6-6">
					</path>
				</svg>

				<p class="flex gap-2 text-xs">
					<span class="font-medium"> 67.81% </span>

					<span class="text-gray-500"> Since last week </span>
				</p>
			</div>
		</article>
	</div>
	<div class="mb-8 grid h-32 grid-cols-12 gap-4">
		<div class="col-span-3 rounded-lg bg-gray-400"></div>
		<div class="col-span-3 rounded-lg bg-gray-400"></div>
		<div class="col-span-3 rounded-lg bg-gray-400"></div>
		<div class="col-span-3 rounded-lg bg-gray-400"></div>
	</div>
	<div class="overflow-x-auto">
		<table class="min-w-full divide-y-2 divide-gray-200 dark:divide-gray-700">
			<thead class="ltr:text-left rtl:text-right">
				<tr class="*:font-medium *:text-gray-900 dark:*:text-white">
					<th class="whitespace-nowrap px-3 py-2">Name</th>
					<th class="whitespace-nowrap px-3 py-2">DoB</th>
					<th class="whitespace-nowrap px-3 py-2">Role</th>
					<th class="whitespace-nowrap px-3 py-2">Salary</th>
					<th class="whitespace-nowrap px-3 py-2">Actions</th>
				</tr>
			</thead>

			<tbody class="divide-y divide-gray-200 *:even:bg-gray-50 dark:divide-gray-700 dark:*:even:bg-gray-800">
				<tr class="*:text-gray-900 *:first:font-medium dark:*:text-white">
					<td class="whitespace-nowrap px-3 py-2">Nandor the Relentless</td>
					<td class="whitespace-nowrap px-3 py-2">04/06/1262</td>
					<td class="whitespace-nowrap px-3 py-2">Vampire Warrior</td>
					<td class="whitespace-nowrap px-3 py-2">$0</td>
					<td class="whitespace-nowrap px-3 py-2">...</td>
				</tr>

				<tr class="*:text-gray-900 *:first:font-medium dark:*:text-white">
					<td class="whitespace-nowrap px-3 py-2">Laszlo Cravensworth</td>
					<td class="whitespace-nowrap px-3 py-2">19/10/1678</td>
					<td class="whitespace-nowrap px-3 py-2">Vampire Gentleman</td>
					<td class="whitespace-nowrap px-3 py-2">$0</td>
					<td class="whitespace-nowrap px-3 py-2">...</td>
				</tr>

				<tr class="*:text-gray-900 *:first:font-medium dark:*:text-white">
					<td class="whitespace-nowrap px-3 py-2">Nadja</td>
					<td class="whitespace-nowrap px-3 py-2">15/03/1593</td>
					<td class="whitespace-nowrap px-3 py-2">Vampire Seductress</td>
					<td class="whitespace-nowrap px-3 py-2">$0</td>
					<td class="whitespace-nowrap px-3 py-2">...</td>
				</tr>

				<tr class="*:text-gray-900 *:first:font-medium dark:*:text-white">
					<td class="whitespace-nowrap px-3 py-2">Colin Robinson</td>
					<td class="whitespace-nowrap px-3 py-2">01/09/1971</td>
					<td class="whitespace-nowrap px-3 py-2">Energy Vampire</td>
					<td class="whitespace-nowrap px-3 py-2">$53,000</td>
					<td class="whitespace-nowrap px-3 py-2">...</td>
				</tr>

				<tr class="*:text-gray-900 *:first:font-medium dark:*:text-white">
					<td class="whitespace-nowrap px-3 py-2">Guillermo de la Cruz</td>
					<td class="whitespace-nowrap px-3 py-2">18/11/1991</td>
					<td class="whitespace-nowrap px-3 py-2">Familiar/Vampire Hunter</td>
					<td class="whitespace-nowrap px-3 py-2">$0</td>
					<td class="whitespace-nowrap px-3 py-2">...</td>
				</tr>
			</tbody>
		</table>
	</div>
</x-layouts::admin>
