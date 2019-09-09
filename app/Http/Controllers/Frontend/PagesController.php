<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slider;
use App\Category;
use App\Sub_category;
use App\Product;
use DB;

class PagesController extends Controller
{

	public function index()
	{
		$categories = Category::orderBy('id', 'desc')->get();
		$categories2 = Category::orderBy('id', 'desc')->get();
		$sliders = Slider::orderBy('id', 'desc')->get();
		$great_offerproducts = Product::where('offer_price', '>', 0)->orderBy('id', 'desc')->get();
		return view('pages.index', compact('sliders', 'categories', 'categories2', 'great_offerproducts'));
	}


	public function products_details($slug)
	{
		$categories = Category::orderBy('id', 'desc')->get();
		$Product_detail = Product::where('slug', $slug)->first();
		return view('pages.product_details', compact('Product_detail', 'categories'));
	}


	public function Category_details(Request $request){

		$cat = $request->category_id;
		$category_details = Sub_category::where('category_id', $cat)->get();
		$category = Category::find($cat);
		
		return view('pages.category_details', compact('category_details', 'category'));
     }
	 
	 
	 public function Sub_category_details(Request $request){

		$subcat = $request->Sub_category_id;
		$subcategory_details = Product::where('sub_category_id', $subcat)->get();
		$subcategoryidByname = Sub_category::find($subcat);
		
		return view('pages.sub_category_details', compact('subcategory_details', 'subcategoryidByname'));
     }
	 
	 
	 public function Product_search(Request $request){

		$header_search_value = $request->header_search_value;
		$products = Product::orWhere('title', 'like', '%'.$header_search_value.'%')->orderBy('title', 'asc')->get();
		
		return view('pages.product_searching', compact('header_search_value', 'products'));
     }
	 
	 
}
