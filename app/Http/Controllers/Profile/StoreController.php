<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $user = User::where('id', auth()->user()->id)->first();
        $user->update([
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
