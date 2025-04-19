<footer class="w-full flex flex-col justify-center items-center p-3 border-t-2 border-gray-200 mt-5">
	<a href="https://azaber.com/" target="_blank">Made by
		<?php echo date('Y'); ?>
		Azaber</a>

	@guest

		<div class="flex justify-center">
			<a href="{{ route('login') }}" class="text-gray-700 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium">Login</a>
			<a href="{{ route('register') }}" class="text-gray-700 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium">Register</a>
		</div>

	@endguest

</footer>

