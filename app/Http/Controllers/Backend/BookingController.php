<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Booking;
use App\Basic_manage;
use App\Expense;
use App\Expense_detail;


class BookingController extends Controller
{
	 public function __construct()
    {
       $this->middleware('auth:admin');
    }


    public function index()
	{		
		$last_invoice	 = DB::table('bookings')->latest('id')->first();	
		if(!empty($last_invoice)){
			$invoice_no = $last_invoice->id + 1; 
		}else{
			$invoice_no = 1; 
		}
			
	   		
		$basic_info      = DB::table('basic_manages')->first();		
		$expense         = Expense::orderBy('id', 'asc')->get();		
		$expense_detail  = Expense_detail::orderBy('id', 'asc')->get();		
		$book_list  	 = Booking::orderBy('id', 'desc')->get();		
		
		return view('admin.pages.booking_create', compact('basic_info','expense', 'expense_detail','invoice_no','book_list'));
	}

	public function create(Request $request)
	{
	$request->validate([
		
		'shift'  		 => 'required',			
		'user_id'  		 => 'required',			
		'cust_id' 		 => 'required',			
		'mobile_number'  => 'required',			
		'email'  		 => 'required',			
		'mem_addres'  	 => 'required',			
		'purpose'  		 => 'required',			
		'guest_amount'   => 'required',			
		'available_check'=> 'required',			
		'member_cat'  	 => 'required',			
		'total'  		 => 'required',			
			
	]);	

		$last_invoice	 = DB::table('bookings')->latest('id')->first();	
		if(!empty($last_invoice)){
			$invoice_no = $last_invoice->id + 1; 
		}else{
			$invoice_no = 1; 
		}

		$expense_detail 		= Expense_detail::orderBy('id', 'asc')->get();			
		$booking 				= new Booking();
		$booking->book_no 		= $invoice_no;
		$booking->book_date 	= date('Y-m-d');
		$booking->shift			= $request->shift;
		$booking->member_name 	= $request->user_id;
		$booking->member_id		= $request->cust_id;		
		$booking->member_cat 	= $request->member_cat;
		$booking->member_cell 	= $request->mobile_number;
		$booking->member_mail 	= $request->email;
		$booking->member_addrs	= $request->mem_addres;
		$booking->purpose 		= $request->purpose;		
		$booking->date_of_reserv= date('Y-m-d', strtotime(str_replace('-', '-', $request->available_check)));
		$booking->guest_no  	= $request->guest_amount;	
		$booking->payment_type 	= $request->method;	
		$booking->total 		= $request->total;

		//$dateSort			= date('Y-m-d', strtotime(str_replace('-', '-', $request->book_date)));
  	
  	   	$value  			    = DB::table('bookings')->where('date_of_reserv', $booking->date_of_reserv)->where('shift', $request->shift)->first();

  	   	if (empty($value)) {
			foreach($expense_detail as $ex){
				$row = $ex->table_name;			
				$booking->$row = $request->$row;
			}

			$booking->save();
			session()->flash('success','Booking has been confirmed.');
			$inserted_id	   = $booking->id;		
			$print_payslip 	   = DB::table('bookings')->where('id', $inserted_id)->first();		
			$expense_detail    = Expense_detail::orderBy('id', 'asc')->get();
			$basic_info        = DB::table('basic_manages')->first();		
			
			
		} else {
			session()->flash('failed','This schedule is already booked!!!');
		}

		
		return view('admin.pages.payslip_print_page', compact('basic_info', 'print_payslip', 'expense_detail'));
	}



	
	public function user_exists(Request $request)
  	{
  	   $dateSort = date('Y-m-d', strtotime(str_replace('-', '-', $request->datepicker3)));  	
  	   $value    = DB::table('bookings')->where('date_of_reserv', $dateSort)->where('shift', $request->shift_check)->first();
      
        if (!empty($value)) {
            echo 'ok';
        } else {          
            echo 'no';
        }
	}

	public function user_check(Request $request)
  	{
  	   $user_id			 = $request->cust_id;
  	   $json 			 = file_get_contents('http://gcms.issit.org/api/member_data/'.$user_id);	
	   echo $json;
	}


	  public function booking_form($jsDate)
	{	

		
		$last_invoice	 = DB::table('bookings')->latest('id')->first();	
		if(!empty($last_invoice)){
			$invoice_no = $last_invoice->id + 1; 
		}else{
			$invoice_no = 1; 
		}
		
		$expire_time 	 = substr($jsDate, 0, strpos($jsDate, 'GMT'));
		$jsDate 		 = date('d-m-Y', strtotime($expire_time));	
	   	

		$basic_info      = DB::table('basic_manages')->first();		
		$expense         = Expense::orderBy('id', 'asc')->get();		
		$expense_detail  = Expense_detail::orderBy('id', 'asc')->get();		
		$book_list  	 = Booking::orderBy('id', 'asc')->get();	

		return view('admin.pages.booking_create_2', compact('basic_info','expense', 'expense_detail','invoice_no','book_list','jsDate'));		
	}



}
