<x-app-layout>
	<x-slot name="header">
		<h2
			class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">{{ __('Dashboard') }}
		</h2>
	</x-slot>

	<div class="py-12 mx-8">
		<h1>{{ $bestAnimal }}</h1>
		<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
			@forelse($data as $item)
				<span>{{ $item }}</span>
			@empty
				<span>No data available</span>
			@endforelse
		</div>
	</div>
</x-app-layout>

