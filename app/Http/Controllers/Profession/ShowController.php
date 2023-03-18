<?php

namespace App\Http\Controllers\Profession;

use App\Http\Controllers\Controller;
use App\Models\Profession;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Profession $profession)
    {
        return view('profession-information')
            ->with(compact('profession'));
    }
}
