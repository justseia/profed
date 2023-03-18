@extends('layouts.app')

@section('content')
	<section>
		<div class="mx-auto w-[1080px] py-[45px]">
			<h3 class="mb-[40px] text-[26px] font-medium">Выберите тариф</h3>
			<div class="mb-[45px] grid grid-cols-3 gap-[10px]">
				<div class="rounded-[10px] p-[20px] bg-cover bg-center bg-no-repeat" style="background-image: url({{ asset('assets/img/price.png') }})">
					<div class="mb-[10px] text-[36px] font-bold text-white">Тариф 1</div>
					<ul class="mb-[90px] flex flex-col gap-[14px] text-white">
						<li>Вводный курс</li>
						<li>
							3 Гайда:
							<ul class="mt-[4px] flex flex-col gap-[6px] pl-[26px]">
								<li>Обзор профессий</li>
								<li>Как выбрать своё русло?</li>
								<li>Жизнь после обучения</li>
							</ul>
						</li>
						<li>1 ознакомительное видео</li>
						<li>Отсутствует проверка<br/>домашних работ</li>
					</ul>
					<div class="flex h-[40px] items-center justify-center text-center text-[18px] text-white">10 000 тенге</div>
					<div>
						<a href="{{ route('course.buy', $course) }}" class="flex h-[48px] w-full items-center justify-center rounded-[6px] bg-[#E74D69] text-[16px] font-medium text-white">Продолжить покупку</a>
					</div>
				</div>
			</div>
			<div class="grid grid-cols-3 gap-[10px]">
				<div class="flex justify-between rounded-[10px] border border-black px-[30px] py-[18px]">
					<div class="flex flex-col justify-center gap-[10px] text-[22px]">
						<div class="font-medium">Автор курса</div>
						<div class="font-light">{{ $course->user->full_name }}</div>
					</div>
					@if($course->user->image)
						<img src="{{ $course->user->image }}" alt="profile image" class="flex h-[85px] w-[85px] rounded-full object-cover"/>
					@else
						<img src="{{ "https://api.dicebear.com/5.x/initials/svg?seed=".$course->user->full_name }}" alt="profile image" class="flex h-[85px] w-[85px] rounded-full object-cover"/>
					@endif
				</div>
				<div class="flex flex-col justify-center gap-[10px] rounded-[10px] border border-black px-[30px] py-[18px] text-[22px]">
					<div class="font-medium">Длительность курса:</div>
					<div class="font-light">{{ $course->duration }}</div>
				</div>
				<div class="flex flex-col items-center justify-center gap-[10px] rounded-[10px] border border-black px-[30px] py-[18px] text-[15px]">
					<img src="{{ asset('assets/icons/unlocked.svg') }}" alt="unlocked" class="w-[27px]">
					<div class="text-center">Материалы будут<br/>доступны после покупки</div>
				</div>
			</div>
		</div>

	</section>
@endsection
