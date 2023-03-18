@extends('layouts.app')

@section('content')
	<div class="flex items-center h-full p-16">
		<div class="container flex flex-col items-center justify-center px-5 mx-auto my-8">
			<div class="max-w-md text-center">
				<h2 class="mb-8 font-extrabold text-9xl">
					<span class="sr-only">Ошибка</span>404
				</h2>
				<p class="text-2xl font-semibold">Извините, мы не смогли найти эту страницу.</p>
				<p class="mt-4 mb-8">Но не волнуйтесь, вы можете найти много других вещей на нашей домашней странице.</p>
				<a href="{{ route('home.index') }}" class="px-8 py-3 font-semibold rounded">Вернуться на главную страницу</a>
			</div>
		</div>
	</div>
@endsection
