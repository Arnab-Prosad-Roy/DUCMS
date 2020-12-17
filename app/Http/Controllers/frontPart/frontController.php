<?php

namespace App\Http\Controllers\frontPart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class frontController extends Controller
{
    public function index()
    {
    	return view('user_side.home');
    }
}
