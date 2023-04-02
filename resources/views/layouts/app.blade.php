<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>{{ config('app.name') }}</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
{{--	@vite('resources/css/app.css')--}}
	<link rel="stylesheet" href="{{ asset('build/assets/app-2d2501a8.css') }}">
	<script src="{{ asset('build/assets/app-4ed993c7.js') }}"></script>
</head>
<body>

<x-header/>

<main>
	@yield('content')
</main>

<x-footer/>

</body>
</html>