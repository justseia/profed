@extends('layouts.app')

@section('content')
	<div class="mx-auto w-[1080px] py-[45px] text-center">
		<div class="mb-[32px] flex justify-center rounded-[10px] shadow-xl">
			<div class="text-center">
				<img src="{{ asset('assets/img/test.png') }}" class="mb-[28px] h-[250px] w-[1080px] rounded-t-[10px] object-cover object-center" />
				<div class="mb-[30px] text-[32px]">Вам подходит!</div>
				<div class="mb-[42px] text-[36px] text-[#65C680]">{{ $result }}</div>
			</div>
		</div>
		<a href="{{ route('course.index') }}" class="inline-flex items-center rounded-[10px] bg-[#4ABA84] px-[40px] py-[20px] text-[16px] font-semibold text-white">Перейти к курсам</a>
	</div>
@endsection
