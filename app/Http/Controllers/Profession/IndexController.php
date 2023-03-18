<?php

namespace App\Http\Controllers\Profession;

use App\Http\Controllers\Controller;
use App\Models\Profession;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $professions = Profession::all();
        return view('professions')
            ->with(compact('professions'));
    }
}
