<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>{{ config('app.name') }}</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
{{--	@vite('resources/css/app.css')--}}
	<link rel="stylesheet" href="{{ asset('build/assets/app-7dc7e5c1.css') }}">
	<script src="{{ asset('build/assets/app-4ed993c7.js') }}"></script>
</head>
<body>

<main>
	<div class="flex h-screen w-screen items-center bg-cover bg-center bg-no-repeat" style="background-image: url({{ asset('assets/img/bg_auth.png') }});">
		<div class="mx-auto flex w-[1080px] items-center justify-between">
			<a href="{{ route('home.index') }}">
				<div class="text-[86px] font-medium uppercase text-white">{{ config('app.name') }}</div>
			</a>
			<div class="w-[480px] bg-white px-[50px] py-[40px]">

				@yield('content')

			</div>
		</div>
	</div>
</main>

</body>
</html>