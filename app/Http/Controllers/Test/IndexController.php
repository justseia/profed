<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use App\Models\Test;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $tests = Test::all();
        return view('test')->with(compact('tests'));
    }
}
