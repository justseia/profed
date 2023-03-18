<header>
	<div class="shadow">
		<div class="mx-auto flex w-[1080px] items-center gap-[20px] py-[18px]">
			<a href="{{ route('home.index') }}">
				<div class="text-[22px] font-medium">{{ config('app.name') }}</div>
			</a>
			<input type="search" placeholder="Введите свой запрос" class="w-full appearance-none rounded-[12px] border border-[#ACACAC] px-[15px] py-[8px] text-[12px] text-gray-700 placeholder:text-[12px] placeholder:font-light focus:outline-none"/>
			<nav>
				<ul class="flex gap-[22px] whitespace-nowrap">
					<li>
						<a href="{{ route('home.index') }}" class="{{ Request::segment(1) == '' ? 'font-semibold text-[#FF4141]' : '' }} text-[16px]">Главная</a>
					</li>
					<li>
						<a href="{{ route('profession.index') }}" class="{{ Request::segment(1) == 'professions' ? 'font-semibold text-[#FF4141]' : '' }} text-[16px]">Професии</a>
					</li>
					<li>
						<a href="{{ route('course.index') }}" class="{{ Request::segment(1) == 'courses' ? 'font-semibold text-[#FF4141]' : '' }} text-[16px]">Курсы</a>
					</li>
					<li>
						<a href="{{ route('profile.index') }}" class="{{ Request::segment(1) == 'profile' ? 'font-semibold text-[#FF4141]' : '' }} text-[16px]">Личный кабинет</a>
					</li>
					<li>
						<a href="{{ route('about.index') }}" class="{{ Request::segment(1) == 'about' ? 'font-semibold text-[#FF4141]' : '' }} text-[16px]">О нас</a>
					</li>
				</ul>
			</nav>
		</div>
	</div>
</header>