<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExpertConnectController extends Controller
{
    public function __invoke()
    {
        return view('profile-expert-connect');
    }
}
