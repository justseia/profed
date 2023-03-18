@extends('layouts.app')

@section('content')
	<x-welcome-section/>
	<section>
		<div class="mx-auto w-[1080px] py-[45px]">
			<h3 class="mb-[18px] text-[26px] font-medium">Профессии</h3>
			<p class="mb-[45px] text-[18px] font-light">В этой странице вы выберете себе профессию, а мы в свою очередь подбираем подходящую и ВУЗов для данной сферы </p>
			<div class="mb-[22px] grid grid-cols-3 gap-[34px]">
				@foreach($professions as $profession)
					<x-profession-card :profession="$profession"/>
				@endforeach
			</div>
		</div>
	</section>
@endsection