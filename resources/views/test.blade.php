@extends('layouts.app')

@section('content')
	<form action="{{ route('test.result') }}" method="post">
		@csrf
		<div class="mx-auto w-[1080px] py-[45px]">
			@foreach($tests as $test)
				<div class="mb-[40px] w-full rounded-[8px] bg-[#F2F2F2] px-[26px] py-[24px]">
					<div class="text-[18px]">
						<div class="mb-[22px] font-light">{{ $test->question }}</div>
						<nav class="mb-[22px]">
							<ul class="flex flex-col gap-[10px]">
								<li>
									<input type="checkbox" name="A_{{ $test->id }}"/>
									<span class="ml-[10px]">{{ json_decode($test->body)->body[0] }}</span>
								</li>
								<li>
									<input type="checkbox" name="B_{{ $test->id }}"/>
									<span class="ml-[10px]">{{ json_decode($test->body)->body[1] }}</span>
								</li>
								<li>
									<input type="checkbox" name="C_{{ $test->id }}"/>
									<span class="ml-[10px]">{{ json_decode($test->body)->body[2] }}</span>
								</li>
								<li>
									<input type="checkbox" name="D_{{ $test->id }}"/>
									<span class="ml-[10px]">{{ json_decode($test->body)->body[3] }}</span>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			@endforeach
			<div class="flex justify-between">
				<a href="" class="previous-link flex items-center border border-black px-[40px] py-[20px] text-[16px] font-semibold">Назад</a>
				<button type="submit" class="flex items-center bg-[#4ABA84] px-[40px] py-[20px] text-[16px] font-semibold text-white">Результат</button>
			</div>
		</div>
	</form>

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
