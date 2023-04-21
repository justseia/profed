<div class="rounded-[6px] bg-cover bg-center bg-no-repeat" style="background-image: url({{ $profession->image }})">
	<div class="flex flex-col justify-between rounded-[6px] h-full bg-black bg-opacity-40 p-[18px]">
		<div>
			<div class="mb-[10px] text-[24px] font-bold text-white">{{ $profession->name }}</div>
			<div class="mb-[10px] text-[18px] text-white line-clamp-3">{{ $profession->body }}</div>
			<div class="flex gap-[4px]">
				<div class="mb-[30px] inline-block rounded-full border border-white px-[22px] py-[4px] text-[12px] text-white">{{ $profession->salary }}</div>
			</div>
		</div>
		<div>
			<a href="{{ route('profession.show', $profession) }}" class="flex h-[30px] w-full items-center justify-center rounded-[6px] bg-white text-[13px] font-medium text-black">Прочитать полностью</a>
		</div>
	</div>
</div>