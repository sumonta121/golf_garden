<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Rent_setup;
use App\Expense;
use App\Expense_detail;
use Image;
use File;

class RentmanageController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth:admin');
  }

  public function index()
	{
		$basic_info = DB::table('basic_manages')->first();			
		$rent_setup = Expense::orderBy('id', 'desc')->get();			
		$expense    = Expense_detail::orderBy('id', 'asc')->get();
		return view('admin.pages.rent_setup', compact('rent_setup','basic_info','expense'));
	}


   public function store(Request $request)
	{
		$expense    = Expense_detail::orderBy('id', 'asc')->get();
		foreach($expense as $expenses){
			 	$row = $expenses->table_name;
				if( $expenses->table_name == 'column_1'){
					$request->validate([				
						$row  	    => 'required',				
					]);
				}else{
					$request->validate([				
						$row  	    => 'integer|min:0',				
					]);
				}
				
		 } 
		$Expen 	= new Expense();	
		foreach($expense as $expenses){
			 	$row = $expenses->table_name;
			 	$Expen->$row = $request->$row;
		 } 		
		$Expen->save();
		session()->flash('success','Rent inserted successfully!!');
		return redirect()->route('admin.rent_setup.create');
	}

	public function edit($id)
	{
		$categories = Category::orderBy('id', 'desc')->get();
		$subcategories = Sub_category::orderBy('id', 'desc')->get();
		$brands = Brand::orderBy('id', 'desc')->get();
		$product = Product::find($id);
		return view('admin.pages.product_edit', compact('product','categories','subcategories','brands'));
	}

	public function update(Request $request, $id)
	{	
		$expense    = Expense_detail::orderBy('id', 'asc')->get();
		foreach($expense as $expenses){
			 	$row = $expenses->table_name;
				if( $expenses->table_name == 'column_1'){
					$request->validate([				
						$row  	    => 'required',				
					]);
				}else{
					$request->validate([				
						$row  	    => 'integer|min:0',				
					]);
				}				
		 } 
		
		$Expen  = Expense::find($id);		
		foreach($expense as $expenses){
			 	$row = $expenses->table_name;
			 	$Expen->$row = $request->$row;
		 } 		
		$Expen->save();

		session()->flash('success','Rent setup updated successfully!!');
		return redirect()->route('admin.rent_setup.create');
	}

	
}
