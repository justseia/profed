@extends('layouts.app')

@section('content')
	<div class="mx-auto w-[1080px] py-[45px]">
		@foreach($tests as $test)
			<div class="mb-[40px] w-full rounded-[8px] bg-[#F2F2F2] px-[26px] py-[24px]">
				<div class="text-[18px]">
					<div class="mb-[22px] font-light">{{ $test->question }}</div>
					<nav class="mb-[22px]">
						<ul class="flex flex-col gap-[10px]">
								<li>
									<input type="radio"/>
									<span class="ml-[10px]">{{ json_decode($test->body)->body[0] }}</span>
								</li>
								<li>
									<input type="radio"/>
									<span class="ml-[10px]">{{ json_decode($test->body)->body[1] }}</span>
								</li>
								<li>
									<input type="radio"/>
									<span class="ml-[10px]">{{ json_decode($test->body)->body[2] }}</span>
								</li>
								<li>
									<input type="radio"/>
									<span class="ml-[10px]">{{ json_decode($test->body)->body[3] }}</span>
								</li>
						</ul>
					</nav>
					<input type="text" placeholder="Написать свой вариант" class="w-2/3 border-b border-black bg-transparent px-[8px] py-[4px] outline-none"/>
				</div>
			</div>
		@endforeach
		<div class="flex justify-between">
			<a href="#" class="flex items-center border border-black px-[40px] py-[20px] text-[16px] font-semibold">Назад</a>
			<a href="#" class="flex items-center bg-[#4ABA84] px-[40px] py-[20px] text-[16px] font-semibold text-white">Следующий вопрос</a>
		</div>
	</div>
@endsection
