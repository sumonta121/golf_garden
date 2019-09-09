<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

  // Gard  set start
  public function __construct()
  {
      $this->middleware('auth:admin');
  }
  // Gard set end

   public function index()
	{
    $basic_info = DB::table('basic_manages')->first();  
    return view('admin.pages.dashboard', compact('basic_manages','basic_info'));		
	}


}
