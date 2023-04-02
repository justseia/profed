<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use App\Models\Test;
use App\Models\User;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function __invoke(Request $request)
    {
        $test = [
            'Курс + консультация',
            'Консультация с профориентатором',
            'Курс по выбору профессии',
            'Консультация с карьерным консультантом'
        ];

        auth()->user()->update([
            'test' => true,
        ]);

        return view('test-success')->with('result', $test[random_int(1, 3)]);
    }
}
