@extends('layouts.app')

@section('content')
	<div class="mx-auto w-[1080px] py-[45px]">
		<div class="flex flex-col">
			<div class="flex flex-col gap-[18px]">
				<div class="grid grid-cols-3 gap-[45px]">
					<div class="col-span-1 flex-col rounded-[10px] border border-black p-[40px]">
						<div class="mb-[15px] flex gap-[22px]">
							<img src="https://shorturl.at/blrR1" alt="profile image" class="h-[72px] w-[72px] rounded-full object-cover"/>
							<div>
								<div class="w-[180px] truncate text-[22px] font-medium">Димаш Адилет</div>
								<div class="w-[180px] truncate text-[18px] font-light text-[#848484]">dimashadilet@gmai.com</div>
							</div>
						</div>
						<div class="mb-[10px]">
							<a href="#" class="flex h-[30px] w-full items-center justify-center rounded-[6px] bg-[#E74D69] text-[12px] font-medium text-white">Найти эксперта</a>
						</div>
						<div class="mb-[45px] flex justify-center">
							<a href="#" class="border-b border-[#848484] text-[13px] text-[#848484]">Редактировать профиль</a>
						</div>
						<div class="grid grid-cols-1 gap-[22px] text-[14px]">
							<a href="" class="profile-link active">Расписание занятий</a>
							<a href="" class="profile-link">Избранное</a>
							<a href="" class="profile-link">Материалы</a>
							<a href="" class="profile-link">Мои курсы</a>
						</div>
					</div>
					<div class="col-span-2 h-fit flex-col rounded-[10px] border border-black p-[25px]">
						<div class="profile-tab block">
							<div class="mb-[38px] text-[22px] font-semibold">Расписание занятий</div>
							<div class="grid grid-cols-1 gap-[14px]">
								<div class="grid grid-cols-3 rounded-[10px] border border-black px-[16px] py-[10px] text-[14px]">
									<div class="col-span-1">
										<div class="mb-[10px] flex-col">
											<div class="font-semibold">Дата урока</div>
											<div>3 марта, 2023 года</div>
										</div>
										<div class="flex-col">
											<div class="font-semibold">Время урока</div>
											<div>15:00</div>
										</div>
									</div>
									<div class="col-span-2">
										<div class="mb-[10px] flex-col">
											<div class="font-semibold">Название курса</div>
											<div>Язык программирования Python</div>
										</div>
										<div class="flex-col">
											<div class="font-semibold">Эксперт</div>
											<div>Айнур Омарова</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="profile-tab hidden">
							<div class="mb-[38px] text-[22px] font-semibold">Избранное</div>
							<div class="grid grid-cols-1 gap-[14px]">
								<div class="flex justify-between rounded-[10px] border border-black px-[16px] py-[10px] text-[18px] font-semibold">
									<div>Front-end специалист</div>
									<div class="text-end">
										<div class="mb-[22px] font-semibold">Заработок: <span class="font-normal">500 000 тенге</span></div>
										<div class="text-[12px] font-light text-[#FF5757]">Убрать из избранное</div>
									</div>
								</div>
							</div>
						</div>
						<div class="profile-tab hidden">
							<div class="mb-[38px] text-[22px] font-semibold">Материалы</div>
							<div class="grid grid-cols-1 gap-[14px]">
								<div class="flex justify-between rounded-[10px] border border-black bg-[#FFEFC6] px-[18px] py-[20px] text-[18px]">
									<div>Вводный урок от курса...</div>
									<svg class="w-[18px] text-[#000]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
										<path d="M288 32c0-17.7-14.3-32-32-32s-32 14.3-32 32V274.7l-73.4-73.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l128 128c12.5 12.5 32.8 12.5 45.3 0l128-128c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L288 274.7V32zM64 352c-35.3 0-64 28.7-64 64v32c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V416c0-35.3-28.7-64-64-64H346.5l-45.3 45.3c-25 25-65.5 25-90.5 0L165.5 352H64zm368 56a24 24 0 1 1 0 48 24 24 0 1 1 0-48z"/>
									</svg>
								</div>
							</div>
						</div>
						<div class="profile-tab hidden">
							<div class="mb-[38px] text-[22px] font-semibold">Мои курсы</div>
							<div class="grid grid-cols-1 gap-[14px]">
								<div class="grid grid-cols-2 items-end rounded-[10px] border border-black bg-[#7e672d] p-[16px] text-[18px] font-bold text-white">
									<div>JavaScript. Профессиональная разработка веб-интерфейсов</div>
									<div class="text-[18px] font-medium">
										55%
										<div class="h-1.5 w-full rounded-full bg-black bg-opacity-10">
											<div class="h-1.5 rounded-full bg-white" style="width: 55%"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<style>
	    .active {
	        color: #FF5757;
	    }
	</style>

	<script>
	    const professionLink = document.querySelectorAll('.profile-link')
	    const professionTab = document.querySelectorAll('.profile-tab')
	    for (let i = 0; i < professionLink.length; i++) {
	        professionLink[i].addEventListener('click', function () {
	            for (let j = 0; j < professionLink.length; j++) {
	                professionLink[j].classList.remove('active')
	                professionTab[j].classList.replace('block', 'hidden')
	            }
	            this.classList.add('active')
	            professionTab[i].classList.replace('hidden', 'block')
	        })
	    }
	</script>
@endsection