@extends('auth.layouts.app')

@section('content')
	<form method="POST" action="{{ route('register') }}">
		@csrf
		<div class="mb-[16px] text-[32px] font-medium">Регистрация</div>
		<input name="email" type="text" placeholder="Введите свою электронную почту" class="mb-[10px] w-full appearance-none border border-[#ACACAC] p-[10px] text-[16px] text-gray-700 placeholder:text-[16px] placeholder:font-light focus:outline-none" />
		<input name="number" type="text" placeholder="Введите номер свой номер" class="mb-[10px] w-full appearance-none border border-[#ACACAC] p-[10px] text-[16px] text-gray-700 placeholder:text-[16px] placeholder:font-light focus:outline-none" />
		<input name="password" type="password" placeholder="Придумайте пароль" class="mb-[10px] w-full appearance-none border border-[#ACACAC] p-[10px] text-[16px] text-gray-700 placeholder:text-[16px] placeholder:font-light focus:outline-none" />
		<input type="password" placeholder="Подвердите пароль" class="mb-[15px] w-full appearance-none border border-[#ACACAC] p-[10px] text-[16px] text-gray-700 placeholder:text-[16px] placeholder:font-light focus:outline-none" />
		<div class="mb-[22px] flex justify-between">
			<div class="flex items-center">
				<input name="type" type="radio" class="mr-[10px] h-[18px] w-[18px] cursor-pointer appearance-none border border-[#ACACAC] checked:bg-gray-400 focus:outline-none" />
				<span class="text-[16px]">Школьник</span>
			</div>
			<div class="flex items-center">
				<input name="type" type="radio" class="mr-[10px] h-[18px] w-[18px] cursor-pointer appearance-none border border-[#ACACAC] checked:bg-gray-400 focus:outline-none" />
				<span class="text-[16px]">Эксперт</span>
			</div>
		</div>
		<div class="mb-[22px] text-center">
			<a href="{{ route('login') }}" class="text-[16px] text-[#2A449E]">У меня уже есть аккаунт</a>
		</div>
		<button type="submit" class="h-[50px] w-full bg-[#282828] text-[16px] font-semibold text-white">Зарегистрироваться</button>
	</form>
@endsection