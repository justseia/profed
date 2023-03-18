<section>
	<div class="rounded-[18px] bg-cover bg-center bg-no-repeat" style="background-image: url({{ $profession->image }})">
		<div class="mx-auto flex w-[1080px] gap-[44px] py-[30px]">
			<div class="w-full">
				<h1 class="mb-[20px] text-[58px] font-semibold uppercase text-white">{{ $profession->name }}</h1>
				<div class="mb-[30px] inline-block rounded-full border border-white px-[22px] py-[4px] text-[12px] text-white">{{ $profession->salary }}</div>
			</div>
		</div>
	</div>
	<div class="mx-auto flex w-[1080px] gap-[44px] py-[30px]">
		<div class="flex w-full flex-col gap-[10px] text-[14px] text-black">
			<div>{{ $profession->body }}</div>
			@foreach(json_decode($profession->description) as $description)
				<div>{{ $description->body }}</div>
			@endforeach
		</div>
	</div>
</section>