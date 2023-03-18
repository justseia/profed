<?php

namespace App\Http\Controllers\Course;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function __invoke(Request $request)
    {
        $categories = $request->categories;
        $course = [];
        foreach ($categories as $category) {
            $course[] = [
                'name' => $category
            ];
        }
        Course::create([
            'category' => json_encode($course)
        ]);
        return redirect()->back()->with('message', 'Успешно');
    }
}
