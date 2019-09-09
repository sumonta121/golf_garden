<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;
use App\Expense;
use App\Expense_detail;


class ExpenseController extends Controller
{
		
    public function index()
	{

		$basic_info 		= DB::table('basic_manages')->first();			
		$expense    		= Expense::orderBy('id', 'asc')->get();
		$expense_detail     = Expense_detail::orderBy('id', 'asc')->get();
		return view('admin.pages.expense', compact('expense','basic_info','expense_detail'));
	}

   
    public function up(Request $request)
    {
    	$request->validate([
			'expense_name'	 	=> 'required',
		]); 	
      		
      	
      	 $expense_details		= DB::table('expense_details')->latest('id')->first();
    	
    	 if(empty($expense_details)){
    	 	$table_name = 'column_1';
    	 }else{
    	 	$increament = $expense_details->id+1;
    	 	$table_name = 'column_'.$increament;
    	 }	
	   
	    $expense_detail 			   = new Expense_detail;
		$expense_detail->expense_name  = $request->expense_name;		
		$expense_detail->table_name    = $table_name;
		$expense_detail->save();

        Schema::table('expenses', function (Blueprint $table) use($table_name) {             
            $table->double($table_name, 15, 8);
        });    

        Schema::table('bookings', function (Blueprint $table) use($table_name) {             
            $table->double($table_name, 15, 8);
        });        

        session()->flash('success','Expense name inserted successfully!!');      
        return redirect()->route('admin.expense.create');
    }

  	public function update(Request $request, $id)
	{

		$request->validate([
			'expense_name' => 'required',			
		]);

		$expense_detail 				= Expense_detail::find($id);
		$expense_detail->expense_name 	= $request->expense_name;
		$expense_detail->save();	

		session()->flash('success','Rent Expense Updated successfully!!');
		return redirect()->route('admin.expense.create');
	}



}
