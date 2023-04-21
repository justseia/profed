<div class="rounded-[6px] bg-cover bg-center bg-no-repeat" style="background-image: url({{ $course->image }})">
	<div class="rounded-[6px] h-full bg-black bg-opacity-40 p-[18px]">
		<div class="mb-[10px] text-[24px] overflow-auto font-bold text-white">{{ $course->name }}</div>
		<div class="flex gap-[4px]">
			@foreach(json_decode($course->category) as $category)
				<div class="mb-[30px] inline-block rounded-full border border-white px-[22px] py-[4px] text-[12px] text-white">{{ $category->name }}</div>
			@endforeach
		</div>
		<div class="flex h-[40px] items-center rounded-[6px] text-center text-white">
			<a href="{{ route('course.show', $course) }}" class="w-full text-[13px]">содержание курса</a>
		</div>
		<div>
			<a href="{{ route('course.purchase', $course) }}" class="flex h-[30px] w-full items-center justify-center rounded-[6px] bg-[#E74D69] text-[13px] font-medium text-white">Приобрести курс</a>
		</div>
	</div>
</div>