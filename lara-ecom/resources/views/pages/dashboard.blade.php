<x-app-layout>
	<x-slot name="title">Dashboard</x-slot>
	<x-slot name="header">
		Dashboard
	</x-slot>


	<div class="flex flex-col sm:flex-row sm:gap-x-2 gap-y-2">
		<div class="card w-full sm:w-1/3 bg-green-500 shadow-xl">
			<div class="card-body text-white">
				<h2 class="card-title">Manage Products</h2>
				<span>23 Products ordered</span>
			</div>
		</div>
		<div class="card w-full sm:w-1/3 bg-yellow-500 shadow-xl">
			<div class="card-body">
				<h2 class="card-title">Manage Orders</h2>
			</div>
		</div>
		<div class="card w-full sm:w-1/3 bg-red-500 shadow-xl">
			<div class="card-body">
				<h2 class="card-title">Manage Users</h2>
			</div>
		</div>
	</div>


</x-app-layout>

