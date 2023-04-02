@extends('layouts.app')

@section('content')
	<x-profession-info :profession="$profession"/>
	<section>
		<div class="mx-auto w-[1080px] py-[45px]">
			<div class="mb-[45px]">
				<nav class="flex w-fit text-[22px]">
					<div class="profession-link border border-black px-[74px] py-[7px] text-black active">ВУЗ</div>
					<div class="profession-link border border-black px-[74px] py-[7px] text-black">Колледжи</div>
					<div class="profession-link border border-black px-[74px] py-[7px] text-black">Курсы</div>
				</nav>
				<hr class="mt-[-1px] border-0 border-b border-black"/>
			</div>
			<div class="profession-tab mb-[34px] flex-col gap-[10px] flex">
				@foreach($profession->universities as $univercity)
					@if($univercity->type == 1)
						<div class="rounded-[10px] border border-black px-[45px] py-[18px] text-[22px]">{{ $univercity->full_info }}</div>
					@endif
				@endforeach
			</div>
			<div class="profession-tab mb-[34px] flex-col gap-[10px] hidden">
				@foreach($profession->universities as $univercity)
					@if($univercity->type == 2)
						<div class="rounded-[10px] border border-black px-[45px] py-[18px] text-[22px]">{{ $univercity->full_info }}</div>
					@endif
				@endforeach
			</div>
			<div class="profession-tab mb-[34px] flex-col gap-[10px] hidden">
{{--				<div class="rounded-[10px] border border-black px-[45px] py-[18px] text-[22px]">JavaScript. Профессиональная разработка веб-интерфейсов</div>--}}
			</div>
		</div>
	</section>

	<style>
        .active {
            background-color: #000000;
            color: #FFFFFF;
        }
	</style>

	<script>
        const professionLink = document.querySelectorAll('.profession-link')
        const professionTab = document.querySelectorAll('.profession-tab')
        for (let i = 0; i < professionLink.length; i++) {
            professionLink[i].addEventListener('click', function () {
                for (let j = 0; j < professionLink.length; j++) {
                    professionLink[j].classList.remove('active')
                    professionTab[j].classList.replace('flex', 'hidden')
                }
                this.classList.add('active')
                professionTab[i].classList.replace('hidden', 'flex')
            })
        }
	</script>
@endsection