@extends('auth.layouts.app')

@section('content')
	<form method="POST" action="{{ route('password.email') }}">
		<div class="mb-[22px] text-[32px] font-medium">Восстановление</div>
		<div class="mb-[22px] text-[16px] font-light">Мы отправим код на вашу почту или на номер вашего мобильного телефона. Пожалуйста никому не сообщайте свой код!</div>
		<input type="text" placeholder="Введите свою почту или номер" class="mb-[22px] w-full appearance-none border border-[#ACACAC] p-[10px] text-[16px] text-gray-700 placeholder:text-[16px] placeholder:font-light focus:outline-none"/>
		<div class="flex h-[50px] items-center text-center">
			<a href="{{ route('login') }}" class="w-full text-[16px]">Назад</a>
		</div>
		<button type="submit" class="h-[50px] w-full bg-[#282828] text-[16px] font-semibold text-white">Отправить</button>
	</form>
@endsection