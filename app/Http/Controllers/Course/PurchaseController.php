<?php

namespace App\Http\Controllers\Course;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function __invoke(Course $course)
    {
        $course = Course::where('id', $course->id)->with('user')->first();
        return view('course-purchase')->with(compact('course'));
    }
}
