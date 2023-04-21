<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $image_name = null;
        $certificate_name = null;

        if ($request->certificate) {
            $certificate = $request->file('certificate');
            $certificate_name = $certificate->hashName();
            $certificate->storeAs('public', $certificate_name);
            $certificate_name = route('home.index') . Storage::url($certificate_name);
            auth()->user()->update([
                'certificate' => $certificate_name,
            ]);
        }

        if ($request->image) {
            $image = $request->file('image');
            $image_name = $image->hashName();
            $image->storeAs('public', $image_name);
            $image_name = route('home.index') . Storage::url($image_name);
            auth()->user()->update([
                'image' => $image_name,
            ]);
        }

        auth()->user()->update([
            'full_name' => $request->full_name,
            'birthday_day' => $request->birthday_day,
            'birthday_month' => $request->birthday_month,
            'birthday_year' => $request->birthday_year,
            'country' => $request->country,
            'city' => $request->city,
            'nationality' => $request->nationality,
            'cost_works' => $request->cost_works,
            'work_experience' => $request->work_experience,
            'training_format' => $request->training_format,
            'education' => $request->education,
            'specialization' => $request->specialization,
        ]);
        return redirect()->route('profile.index');
    }
}
