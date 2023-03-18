<div class="flex flex-col items-center rounded-[10px] border border-black p-[18px]">
	@if($expert->image)
		<img src="{{ $expert->image }}" alt="profile image" class="mb-[14px] h-[85px] w-[85px] rounded-full object-cover"/>
	@else
		<img src="{{ "https://api.dicebear.com/5.x/initials/svg?seed=".$expert->full_name }}" alt="profile image" class="mb-[14px] h-[85px] w-[85px] rounded-full object-cover"/>
	@endif
	<div class="mb-[10px] text-[16px]">{{ $expert->full_name }}</div>
	<div class="mb-[24px] text-[16px] font-semibold">{{ $expert->cost_works }}</div>
	<a href="{{ route('expert.enroll.index', $expert) }}" class="flex h-[32px] w-full items-center justify-center rounded-[5px] bg-[#4ABA84] text-[12px] font-medium text-white">Связаться</a>
</div>