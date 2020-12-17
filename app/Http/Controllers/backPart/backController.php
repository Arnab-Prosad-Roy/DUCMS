<?php

namespace App\Http\Controllers\backPart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class backController extends Controller
{
    public function index()
    {
    	return view('admin_side.home');
    }
}
