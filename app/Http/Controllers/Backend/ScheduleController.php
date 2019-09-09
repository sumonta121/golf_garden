<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Basic_manage;
use App\Booking;

class ScheduleController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth:admin');
  }

  public function index()
	{
		$basic_info    = DB::table('basic_manages')->first();	
		$booking	   = Booking::orderBy('id', 'desc')->get();
		return view('admin.pages.schedule', compact('basic_manages','basic_info','booking'));
	}

	public function store(Request $request)
	{

		$request->validate([
			'name' => 'required',
			'phone' => 'required',
			'image' => 'nullable|image',
		]);

		$Basic_manage 			= new Basic_manage();
		$Basic_manage->title 		= $request->name;
		$Basic_manage->phone 		= $request->phone;

		// images also insert image
    	if(($request->image > 0)){
        $image = $request->file('image');
  		$img = time() . '.' . $image->getClientOriginalExtension();
  		$location = public_path('images/slider/' .$img);
  		Image::make($image)->save($location);
  		$Basic_manage->logo 	= $img;
        }


		$Basic_manage->save();

		session()->flash('success','Basic insert successfully!!');
		return redirect()->route('admin.basic.create');
	}

	public function edit($id)
	{
		$slider = Slider::find($id);
		return view('admin.pages.slider_edit')->with('slider', $slider);
	}

	public function update(Request $request, $id)
	{

		$request->validate([
			'name' => 'required',
			'phone' => 'required',
			'image' => 'nullable|image',
		]);


		$Basic_manage 				= Basic_manage::find($id);
		$Basic_manage->title 		= $request->name;
		$Basic_manage->phone 		= $request->phone;

		//Delete the old image from folder
		if(($request->image > 0)){
			if (File::exists('images/slider/' .$Basic_manage->logo)) 
			{
				File::delete('images/slider/' .$Basic_manage->logo);
			}

			$image = $request->file('image');
			$img = time() . '.' . $image->getClientOriginalExtension();
			$location = public_path('images/slider/' .$img);
			Image::make($image)->save($location);
			$Basic_manage->logo 	= $img;
  		}

		$Basic_manage->save();

		session()->flash('success','Basic information Update successfully!!');
		return redirect()->route('admin.basic.create');
	}

	public function insert($jsDate)
	{
		$expire_time = substr($jsDate, 0, strpos($jsDate, 'GMT'));
		echo $jsDate = date('Y-m-d', strtotime($expire_time));
	}
}
