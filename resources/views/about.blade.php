@extends('layouts.app')

@section('content')
	<section>
		<div class="bg-cover bg-center bg-no-repeat" style="background-image: url({{ asset('assets/img/about_us.png') }})">
			<div class="mx-auto w-[1080px] py-[90px]">
				<div class="flex flex-col items-center text-white text-center">
					<div class="mb-[20px] text-[86px] font-bold">О НАС</div>
					<div class="mb-[30px] font-light">Приветствуем Вас на нашей профориентационной платформе Profed!</div>
					<a href="#" class="flex h-[60px] w-[400px] items-center justify-center border border-white text-[18px] font-medium">Исследовать</a>
				</div>
			</div>
		</div>
		<div class="mx-auto w-[1080px] py-[30px]">
			<div class="flex flex-row gap-[40px] divide-x divide-black">
				<div class="py-[15px]">По данным Национальной ассоциации профессиональных консультантов (National Career Development Association), люди, проходившие профориентацию, имеют на 2,67 раза больше шансов найти работу, которая соответствует их интересам и талантам, по сравнению с теми, кто не проходил профориентацию.</div>
				<div class="py-[15px] pl-[40px]">Исследование, проведенное Министерством труда США, показало, что люди, которые проходят профориентацию, имеют более высокий уровень дохода, по сравнению с теми, кто не проходил профориентацию. Кроме того, они также имеют более высокий уровень удовлетворенности своей работой.</div>
				<div class="py-[15px] pl-[40px]">Исследование, проведенное Канадской ассоциацией профессиональных консультантов (Canadian Career Development Foundation), показало, что профориентация может помочь людям принимать более информированные решения о выборе профессии и образования, что в свою очередь приводит к более успешной карьере.</div>
			</div>
		</div>
		<div class="mx-auto w-[1080px] py-[30px]">
			<div class="flex justify-between gap-[40px]">
				<div>
					<div class="mb-[10px] text-[34px] font-medium">Подробнее о нашей компании</div>
					<div class="text-[22px] font-light">Мы – команда профессионалов, которые знают, насколько важно выбрать свою будущую профессию правильно. Мы предлагаем инновационное решение для тех, кто хочет узнать больше о своих профессиональных интересах и возможностях. Наша миссия – помочь людям стать счастливыми экспертами. Мы верим, что каждый человек имеет уникальный набор навыков и интересов, и что настоящее удовлетворение от работы может быть достигнуто только тогда, когда эти качества сочетаются в выбранной профессии. Наша цель – предоставить профессиональную помощь в выборе карьеры. Мы предлагаем услуги опытных профориентаторов, которые помогут вам разобраться в мире профессий и выбрать наиболее подходящую для вас. Мы также предлагаем интенсивный курс по выбору профессии на казахском языке, разработанный совместно с нашим экспертом-профориентатором. Наши уроки помогут вам лучше понять свои интересы и возможности, чтобы принять правильное решение о своей будущей карьере. Мы готовы помочь вам стать счастливым экспертом!</div>
				</div>
				<img src="{{ asset('assets/img/about_company.png') }}" alt="about us"/>
			</div>
		</div>
	</section>
@endsection
