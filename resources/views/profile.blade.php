@extends('layouts.app')

@section('content')
	<div class="mx-auto w-[1080px] py-[45px]">
		<div class="flex flex-col">
			<form action="{{ route('profile.store') }}" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="mb-[38px] text-[34px] font-semibold">Информация о вас</div>
				<div class="flex flex-col gap-[18px]">
					<div class="grid grid-cols-3">
						<div class="col-span-1 flex items-center text-[22px] font-medium">Ваше Ф.И.О</div>
						<div class="col-span-2">
							<input name="full_name" type="text" value="{{ $user->full_name }}" placeholder="Введите ваше Ф.И.О" class="w-full appearance-none border border-[#ACACAC] p-[10px] text-[16px] text-gray-700 placeholder:text-[16px] placeholder:font-light focus:outline-none"/>
						</div>
					</div>
					<div class="grid grid-cols-3">
						<div class="col-span-1 flex items-center text-[22px] font-medium">Дата рождения</div>
						<div class="col-span-2 grid grid-cols-3 gap-[22px]">
							<select name="birthday_day" class="w-full appearance-none border border-[#ACACAC] p-[10px] text-[16px] text-gray-700 focus:outline-none">
								<option {{ $user->birthday_day == null ? 'selected' : '' }}>день</option>
								@for($i = 1; $i <= 31; $i++)
									<option value="{{ $i }}" {{ $user->birthday_day == $i ? 'selected' : '' }}>{{ $i }}</option>
								@endfor
							</select>
							<select name="birthday_month" class="w-full appearance-none border border-[#ACACAC] p-[10px] text-[16px] text-gray-700 focus:outline-none">
								<option {{ $user->birthday_month == null ? 'selected' : '' }}>месяц</option>
								@for($i = 1; $i <= 12; $i++)
									<option value="{{ $i }}" {{ $user->birthday_month == $i ? 'selected' : '' }}>{{ $i }}</option>
								@endfor
							</select>
							<select name="birthday_year" class="w-full appearance-none border border-[#ACACAC] p-[10px] text-[16px] text-gray-700 focus:outline-none">
								<option {{ $user->birthday_year == null ? 'selected' : '' }}>год</option>
								@for($i = 1950; $i <= 2023; $i++)
									<option value="{{ $i }}" {{ $user->birthday_year == $i ? 'selected' : '' }}>{{ $i }}</option>
								@endfor
							</select>
						</div>
					</div>
					<div class="grid grid-cols-3">
						<div class="col-span-1 flex items-center text-[22px] font-medium">Город</div>
						<div class="col-span-2 grid grid-cols-2 gap-[22px]">
							<input name="country" type="text" value="{{ $user->country }}" placeholder="Казахстан" class="w-full appearance-none border border-[#ACACAC] p-[10px] text-[16px] text-gray-700 placeholder:text-[16px] placeholder:font-light focus:outline-none"/>
							<input name="city" type="text" value="{{ $user->city }}" placeholder="Алматы" class="w-full appearance-none border border-[#ACACAC] p-[10px] text-[16px] text-gray-700 placeholder:text-[16px] placeholder:font-light focus:outline-none"/>
						</div>
					</div>
					<div class="grid grid-cols-3">
						<div class="col-span-1 flex items-center text-[22px] font-medium">Гражданство</div>
						<div class="col-span-2">
							<input name="nationality" value="{{ $user->nationality }}" type="text" placeholder="Казахстан" class="w-full appearance-none border border-[#ACACAC] p-[10px] text-[16px] text-gray-700 placeholder:text-[16px] placeholder:font-light focus:outline-none"/>
						</div>
					</div>
					<div class="grid grid-cols-3">
						<div class="col-span-1 flex items-center text-[22px] font-medium">Стоимость работы</div>
						<div class="col-span-2">
							<input name="cost_works" value="{{ $user->cost_works }}" type="number" placeholder="Введите цену" class="w-full appearance-none border border-[#ACACAC] p-[10px] text-[16px] text-gray-700 placeholder:text-[16px] placeholder:font-light focus:outline-none"/>
						</div>
					</div>
					<div class="grid grid-cols-3">
						<div class="col-span-1 flex items-center text-[22px] font-medium">Опыт работы</div>
						<div class="col-span-2">
							<input name="work_experience" value="{{ $user->work_experience }}" type="number" placeholder="5 лет" class="w-full appearance-none border border-[#ACACAC] p-[10px] text-[16px] text-gray-700 placeholder:text-[16px] placeholder:font-light focus:outline-none"/>
						</div>
					</div>
					<div class="grid grid-cols-3">
						<div class="col-span-1 flex items-center text-[22px] font-medium">Формат обучения</div>
						<div class="col-span-2">
							<select name="training_format" class="w-full appearance-none border border-[#ACACAC] p-[10px] text-[16px] text-gray-700 focus:outline-none">
								<option {{ $user->training_format == null ? 'selected' : '' }}>Выберите какой формат удобен</option>
								<option value="offline" {{ $user->training_format == 'offline' ? 'selected' : '' }}>Офлайн</option>
								<option value="online" {{ $user->training_format == 'online' ? 'selected' : '' }}>Онлайн</option>
							</select>
						</div>
					</div>
					<div class="grid grid-cols-3">
						<div class="col-span-1 flex items-center text-[22px] font-medium">Образование</div>
						<div class="col-span-2">
							<input name="education" value="{{ $user->education }}" type="text" placeholder="ВУЗ или Колледж" class="w-full appearance-none border border-[#ACACAC] p-[10px] text-[16px] text-gray-700 placeholder:text-[16px] placeholder:font-light focus:outline-none"/>
						</div>
					</div>
					<div class="grid grid-cols-3">
						<div class="col-span-1 flex items-center">
							<div class="flex gap-[40px]">
								<div class="flex items-center">
									<input name="type" type="radio" {{ $user->type == 1 ? 'checked' : '' }} class="mr-[10px] h-[18px] w-[18px] cursor-pointer appearance-none border border-[#ACACAC] checked:bg-gray-400 focus:outline-none"/>
									<span class="text-[16px]">Школьник</span>
								</div>
								<div class="flex items-center">
									<input name="type" type="radio" {{ $user->type == 2 ? 'checked' : '' }} class="mr-[10px] h-[18px] w-[18px] cursor-pointer appearance-none border border-[#ACACAC] checked:bg-gray-400 focus:outline-none"/>
									<span class="text-[16px]">Эксперт</span>
								</div>
							</div>
						</div>
						<div class="col-span-2">
							<input name="specialization" value="{{ $user->specialization }}" type="text" placeholder="Специальность" class="w-full appearance-none border border-[#ACACAC] p-[10px] text-[16px] text-gray-700 placeholder:text-[16px] placeholder:font-light focus:outline-none"/>
						</div>
					</div>
					<div class="grid grid-cols-3">
						<div class="col-span-1 w-[320px]">
							<div class="flex w-full items-center justify-center mb-5">
								<label class="flex w-full min-h-[170px] cursor-pointer flex-col items-center justify-center rounded-[10px] border border-[#ACACAC] hover:bg-gray-100">
									<div class="flex flex-col items-center justify-center pt-5 pb-6">
										<div class="col-span-1 text-center text-[18px]">Загрузить<br/>фото</div>
									</div>
									<input id="imageFile" type="file" name="image" class="hidden"/>
								</label>
							</div>
							<img id="prevImage" src="{{ $user->image ? $user->image : '#' }}" class="w-full rounded-[10px]" alt="preview">
						</div>
						<div class="col-span-2">
							<div class="flex w-full items-center justify-center mb-5">
								<label class="flex w-full min-h-[170px] cursor-pointer flex-col items-center justify-center rounded-[10px] border border-[#ACACAC] hover:bg-gray-100">
									<div class="flex flex-col items-center justify-center pt-5 pb-6">
										<img src="{{ asset('assets/icons/upload.svg') }}" alt="upload" class="h-[32px]">
										<div class="col-span-1 text-center text-[18px]">Загрузить<br/>сертификат</div>
									</div>
									<input id="certificateFile" type="file" name="certificate" class="hidden"/>
								</label>
							</div>
							<img id="prevCertificate" src="{{ $user->certificate ? $user->certificate : '#' }}" class="w-full rounded-[10px]" alt="preview">
						</div>
					</div>
					<div class="grid grid-cols-3">
						<div class="col-span-1"></div>
						<div class="col-span-2 grid">
							<button type="submit" class="flex h-[54px] items-center justify-center bg-[#4ABA84] text-[16px] font-medium text-white">Сохранить</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
        function imageFile(input) {
            if (input.files && input.files[0]) {
                let reader = new FileReader();
                reader.onloadend = function (e) {
                    $('#prevImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        function certificateFile(input) {
            if (input.files && input.files[0]) {
                let reader = new FileReader();
                reader.onloadend = function (e) {
                    $('#prevCertificate').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#imageFile").change(function () {
            imageFile(this);
        });
        $("#certificateFile").change(function () {
            certificateFile(this);
        });
	</script>
	<style>
        img[src="#"] {
            display: none;
        }
	</style>
@endsection