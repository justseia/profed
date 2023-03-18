<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        Test::create([
            'name' => json_encode($course)
        ]);
        $course = Test::all();
        return response()->json(json_decode($course));
    }
}
