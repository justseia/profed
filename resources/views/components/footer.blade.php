<footer>
	<div class="bg-[#171717] py-[30px]">
		<div class="mx-auto flex w-[1080px] flex-col gap-[22px]">
			<a href="{{ route('home.index') }}">
				<div class="text-[22px] font-medium text-white">{{ config('app.name') }}</div>
			</a>
			<nav>
				<ul class="flex flex-col gap-[8px] whitespace-nowrap text-white">
					<li>
						<a href="{{ route('home.index') }}" class="text-[16px]">Главная</a>
					</li>
					<li>
						<a href="{{ route('profession.index') }}" class="text-[16px]">Професии</a>
					</li>
					<li>
						<a href="{{ route('course.index') }}" class="text-[16px]">Курсы</a>
					</li>
					<li>
						<a href="{{ route('profile.index') }}" class="text-[16px]">Личный кабинет</a>
					</li>
					<li>
						<a href="{{ route('about.index') }}" class="text-[16px]">О нас</a>
					</li>
				</ul>
			</nav>
			<div class="text-center text-[18px] text-white">All rights reserved</div>
		</div>
	</div>
</footer>