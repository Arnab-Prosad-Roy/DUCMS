<?php

namespace App\Http\Controllers\slider;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\cms_Sliders;

class sliderController extends Controller
{
    public function index()
    {
    	$getSlider = cms_Sliders::get();
    	return view('admin_side.slider.index', ['getSlider' => $getSlider]);
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'title'=>['required', 'string', 'between:5,100'],
            'title_text'=>['required', 'string', 'between:5,200'],
            'status'=>['string', 'in:publish,unpublish'],
            'sliderImage'=> ['required','image','mimes:jpg,jpeg,png,webp','max:600'],
        ],[
            'title.required' => 'Whoops Buddy Wrong Turn...!',
            'title.between' => 'Title will be 5-100 characters!!',

            'title_text.required' => 'Whoops Buddy Wrong Turn...!',
            'title_text.between' => 'Text will be 5-100 characters!!',

            'status.in' => 'Whoops Buddy Wrong Turn...!',

            'sliderImage.required' => 'Slider Image Required',
            'sliderImage.image' => 'Slider Image will be jpg/jpeg/png file',
            'sliderImage.mimes' => 'Slider Image will be jpg/jpeg/png file',
            'sliderImage.max' => 'Slider Image will be in 600kb',            
        ]);   
        
        if ($validator->fails()) {
          return back()
                ->withErrors($validator)
                ->with('modalError','modal-animation-10');
        }

        $image = $request->file('sliderImage');
        if($image == true){
             $newName = Str::random(40).time().'.'.$image->getClientOriginalExtension();
             Storage::disk('public')->putFileAs('sliderImages', $image, $newName);
             $imagePath = 'public/sliderImages/'.$newName;
        }else{
            $validator->getMessageBag()->add('sliderImage','Wrong Image, Pls Upload Good one');
             return back()
                ->withErrors($validator)
                ->withInput()
                ->with('modalError','modal-animation-10');
        }
        
        $newSlider = cms_Sliders::create([
        				'title' => $request->title,
        				'text' => $request->title_text,
        				'image' => $imagePath,
        				'publicity' => $request->status,
        				'createdBy' => Auth::user()->id,
        				]);
        	return back()->with('success', 'Slider Added Successfully!!');

    }

    public function edit(Request $request)
    {
    	$contains = Arr::has($request, 'cms_Sliders.sliderImage');

    	$data = cms_Sliders::where('id', $request->slider_Key)->exists();

    	if ($data == false) {
    		return back()->with('error', 'Opps!! Wrong Turn...');
    	}

    	$validator = Validator::make($request->all(),[
		            'title'=>['required', 'string', 'between:5,100'],
		            'title_text'=>['required', 'string', 'between:5,200'],
		            'status'=>['string', 'in:publish,unpublish'],
		            'sliderImage'=> ['image','mimes:jpg,jpeg,png,webp','max:600'],
		        ],[
		            'title.required' => 'Whoops Buddy Wrong Turn...!',
		            'title.between' => 'Title will be 5-100 characters!!',

		            'title_text.required' => 'Whoops Buddy Wrong Turn...!',
		            'title_text.between' => 'Text will be 5-100 characters!!',

		            'status.in' => 'Whoops Buddy Wrong Turn...!',

		            'sliderImage.image' => 'Slider Image will be jpg/jpeg/png file',
		            'sliderImage.mimes' => 'Slider Image will be jpg/jpeg/png file',
		            'sliderImage.max' => 'Slider Image will be in 600kb',            
		        ]);
    		if ($validator->fails()) {
		          return back()
		                ->withErrors($validator)
		                ->with('modalError', 'modal-animation-11'.$request->slider_Key);
		        }	

		    if ($contains) 
		    {
				        $image = $request->file('sliderImage');
				        if($image == true){
				             $newName = Str::random(40).time().'.'.$image->getClientOriginalExtension();
				             Storage::disk('public')->putFileAs('sliderImages', $image, $newName);
				             $imagePath = 'public/sliderImages/'.$newName;
				        }else{
				            $validator->getMessageBag()->add('sliderImage','Wrong Image, Pls Upload Good one');
				             return back()
				                ->withErrors($validator)
				                ->withInput()
				                ->with('modalError', 'modal-animation-11'.$dataId);
				        }
		                $updateSlider = cms_Sliders::where(['id'=>$request->slider_Key])
		                                 ->update([
		        				'title' => $request->title,
		        				'text' => $request->title_text,
		        				'image' => $imagePath,
		        				'publicity' => $request->status,
		        				'createdBy' => Auth::user()->id,
		                       ]);
		                if ($updateSlider) 
		                {
		                	return back()->with('success', 'Slider Updated Successfully');
		                }else{
		                	return back()->with('error', 'Opps!! Wrong Turn...');
		                }  
		    }
		    else
		    {
    			$updateSlider = cms_Sliders::where(['id'=>$request->slider_Key])
                                 ->update([
        				'title' => $request->title,
        				'text' => $request->title_text,
        				'publicity' => $request->status,
        				'createdBy' => Auth::user()->id,
                        ]);
                if ($updateSlider) 
                {
                	return back()->with('success', 'Slider Updated Successfully');
                }else{
                	return back()->with('error', 'Opps!! Wrong Turn...');
                } 
		    }
    }

    public function destroy(Request $request)
    {
    	$data = cms_Sliders::where('id', $request->slider_Key)->exists();
    	if ($data == true) {
    		$sliderRemove = cms_Sliders::where('id',$request->slider_Key)->delete();
    		    if ($sliderRemove) 
                {
                	return back()->with('success', 'Slider Removed Successfully');
                }else{
                	return back()->with('error', 'Opps!! Wrong Turn...');
                } 
    	}
    }
}
