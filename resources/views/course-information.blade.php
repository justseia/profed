@extends('layouts.app')

@section('content')
	<section>
		<div class="rounded-[18px] bg-cover bg-center bg-no-repeat" style="background-image: url({{ $course->image }})">
			<div class="mx-auto flex w-[1080px] gap-[44px] py-[30px]">
				<div>
					<h1 class="mb-[6px] text-[58px] font-semibold uppercase text-white">{{ $course->name }}</h1>
					<div class="mb-[38px] flex gap-[6px]">
						@foreach(json_decode($course->category) as $category)
							<div class="inline-block rounded-full border border-white px-[22px] py-[4px] text-[12px] text-white">{{ $category->name }}</div>
						@endforeach
						<div class="inline-block rounded-full border border-white px-[22px] py-[4px] text-[12px] text-white">{{ $course->duration }}</div>
					</div>
					<a href="{{ route('course.purchase', $course) }}" class="flex h-[44px] w-[205px] items-center justify-center rounded-[6px] bg-[#E74D69] text-[13px] font-medium text-white">Приобрести курс</a>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="mx-auto w-[1080px] py-[45px]">
			<div class="flex flex-col gap-[18px]">
				@foreach(json_decode($course->topic) as $topic)
					<details class="group rounded-[10px] border border-black px-[45px] py-[30px] [&_summary::-webkit-details-marker]:hidden">
						<summary class="flex cursor-pointer items-center justify-between">
							<h2 class="text-[28px] font-semibold">{{ $topic->title }}</h2>
							<div class="relative ml-1.5 h-5 w-5 flex-shrink-0">
								<img src="{{ asset('assets/icons/plus.svg') }}" alt="plus" class="absolute inset-0 h-5 w-5 opacity-100 group-open:opacity-0">
								<img src="{{ asset('assets/icons/minus.svg') }}" alt="minus" class="absolute inset-0 h-5 w-5 opacity-0 group-open:opacity-100">
							</div>
						</summary>
						<p class="mt-[18px] text-[22px] font-light">{{ $topic->body }}</p>
					</details>
				@endforeach
			</div>
		</div>
	</section>
@endsection
