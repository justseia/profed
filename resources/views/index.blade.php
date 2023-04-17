@extends('layouts.app')

@section('content')
    <x-welcome-section />
    {{-- @if (!auth()->user() || !auth()->user()->test)
		<x-index-hidden-first-section/>
		<x-index-hidden-second-section/>
	@else --}}
    <section>
        <div class="mx-auto w-[1080px] py-[45px]">
            <h3 class="mb-[40px] text-[26px] font-medium">Курсы которые вам подходят</h3>
            <div class="mb-[22px] grid grid-cols-3 gap-[34px]">
                @foreach ($courses as $course)
                    <x-course-card :course="$course" />
                @endforeach
            </div>
        </div>
    </section>
    <section>
        <div class="mx-auto w-[1080px] pb-[45px]">
            <h3 class="mb-[30px] text-[26px] font-medium">Выберите эксперта</h3>
            <div class="mb-[22px] grid grid-cols-4 gap-[54px]">
                <div class="col-span-1">
                    <x-filter-experts />
                </div>
                <div class="col-span-3 grid auto-rows-max grid-cols-3 gap-[28px]">
                    @foreach ($experts as $expert)
                        <x-expert-card :expert="$expert" />
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    {{-- @endif --}}
@endsection
