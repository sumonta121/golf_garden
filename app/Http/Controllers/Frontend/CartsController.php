<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slider;
use App\Category;
use App\Sub_category;
use App\Product;
use App\Cart;
use Auth;
use DB;

class CartsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request)
    {
       
	  $cart = new Cart();
	  
	  if(Auth::check()){
	  	$cart->user_id 		= Auth::id();
	  }
	  $cart->product_id 		= $request->product_id;
	  $cart->ip_address 		= $request()->ip();
	  $cart->save();
	  
	  $cartlist = Cart::orderBy('id', 'asc')->get();
		
	  return view('pages.cart_store_html', compact('cartlist'));
	  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
     
   
   
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
