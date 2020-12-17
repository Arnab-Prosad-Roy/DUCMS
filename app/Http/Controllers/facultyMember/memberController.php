<?php

namespace App\Http\Controllers\facultyMember;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\facultyMembers;
use App\Post;
class memberController extends Controller
{
    public function index()
    {
    	return view('admin_side.facultyMembers.index');
    }

  public function store(Request $request)
  {
     $input = $request->all();
     $request->validate([
       'name' => 'required',
       'email' => 'required',
       'phone' => 'required'
     ]);
     $check = Post::create($input);
     $arr = array('msg' => 'Something goes to wrong. Please try again later', 'status' =>false);
     if($check){ 
        $arr = array('msg' => 'Successfully Form Submit', 'status' => true);
     }
    return response()->json($arr);
  }
}
