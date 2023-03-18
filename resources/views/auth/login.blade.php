@extends('auth.layouts.app')

@section('content')
	<form method="POST" action="{{ route('login') }}">
		@csrf
		<div class="text-[32px] font-medium">Войти</div>
		<div class="mb-[22px] text-[16px] font-light">
			<span>Новый пользователь?</span>
			<a href="{{ route('register') }}" class="text-[#2A449E]">Создать учетную запись</a>
		</div>
		<input name="email" type="text" placeholder="Введите свою почту" class="mb-[10px] w-full appearance-none border border-[#ACACAC] p-[10px] text-[16px] text-gray-700 placeholder:text-[16px] placeholder:font-light focus:outline-none" />
		<input name="password" type="password" placeholder="Введите свой пароль" class="mb-[18px] w-full appearance-none border border-[#ACACAC] p-[10px] text-[16px] text-gray-700 placeholder:text-[16px] placeholder:font-light focus:outline-none" />
		<div class="mb-[40px] text-[12px] font-light">
			<span>Забыли пароль?</span>
			<a href="{{ route('password.request') }}" class="text-[#2A449E]">Восстановить</a>
		</div>
		<button type="submit" class="h-[50px] w-full bg-[#282828] text-[16px] font-semibold text-white">Войти</button>
	</form>
@endsection
