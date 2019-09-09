<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Basic_manage;
use Image;
use File;

class BasicController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth:admin');
  }

  public function index()
	{
		$basic_info = DB::table('basic_manages')->first();	
		$basic_manages = Basic_manage::orderBy('id', 'desc')->get();
		return view('admin.pages.basice_create', compact('basic_manages','basic_info'));
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

	// public function delete($id)
	// {

	// 	$slider = Slider::find($id);

	// 	if(!is_null($slider)){
	// 		if (File::exists('images/slider/' .$slider->image)) {
	// 		File::delete('images/slider/' .$slider->image);
	// 	}

	// 	$slider->delete();
	// 	}
	// 	session()->flash('success','Slider has delete successfully!!');
	// 	return back();
	// }
}
