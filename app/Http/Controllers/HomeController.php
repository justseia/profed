<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        $courses = Course::all();
        $experts = User::where('type', 2)->get();
        return view('index')
            ->with(compact('experts'))
            ->with(compact('courses'));
    }
}
