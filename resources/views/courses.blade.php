@extends('layouts.app')

@section('content')
	<x-welcome-section/>
	<section>
		<div class="mx-auto w-[1080px] py-[45px]">
			<h3 class="mb-[40px] text-[26px] font-medium">Курсы</h3>
			<div class="mb-[22px] grid grid-cols-3 gap-[34px]">
				@foreach($courses as $course)
					<x-course-card :course="$course"/>
				@endforeach
			</div>
		</div>
	</section>
@endsection
