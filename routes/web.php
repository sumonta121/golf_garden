<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/*
| Frontend route start
*/

Route::get('/', 'Frontend\PagesController@index')->name('index');
Route::get('/Contact', 'Frontend\PagesController@Contact')->name('Contact');
Route::get('/products', 'Frontend\PagesController@products')->name('Product');
// User route start
Route::get('user/token/{token}', 'Frontend\VerificationController@verify')->name('user.verification');
// User route end


// User Profile route Gard start
Route::get('user/dashboard/', 'Frontend\UserController@dashboard')->name('user.dashboard');
// new route
// User Profile route Gard end

// Product Details Route start
Route::get('/Product_details/{slug}', 'Frontend\PagesController@products_details')->name('Product_details');
// Product Details Route End

// Category Details Route start
Route::get('/Category_details/','Frontend\PagesController@Category_details')->name('Cat_details');
// Category Details Route End

// Sub Category Details Route start
Route::get('/Sub_category_details/','Frontend\PagesController@Sub_category_details')->name('Sub_cat_details');
// Sub Category Details Route End

// Product Search Route start
Route::get('/Product_search/','Frontend\PagesController@Product_search')->name('Product_search');
// Product Search Route End

//Carts Start
Route::get('/carts', 'Frontend\CartsController@index')->name('carts');
Route::post('/carts/store', 'Frontend\CartsController@store')->name('carts.store');
//Carts End


















/*
| Frontend route end
*/

/*
| Backend route start
*/
//Route::get('/', 'Frontend\PagesController@index')->name('index');
Route::get('/', 'Auth\Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login/submit', 'Auth\Admin\LoginController@login')->name('admin.login.submit');
Route::post('/admin/logout/submit', 'Auth\Admin\LoginController@logout')->name('admin.logout');
Route::get('/admin/logout/submit', 'Auth\Admin\LoginController@logout')->name('admin.logout');


Route::get('/admin', 'Backend\AdminController@index')->name('admin.index');

// Basic index,create,edit,update,delete start
Route::get('/admin/Basic/create', 'Backend\BasicController@index')->name('admin.basic.create');
Route::post('/admin/Basic/create', 'Backend\BasicController@store')->name('admin.basic.store');
Route::get('/admin/Basic/edit/{id}', 'Backend\BasicController@edit')->name('admin.basic.edit');
Route::post('/admin/Basic/edit/{id}', 'Backend\BasicController@update')->name('admin.basic.update');
Route::post('/admin/Basic/delete/{id}', 'Backend\BasicController@delete')->name('admin.basic.delete');


// Expense index,create,edit,update,delete start
Route::get('/admin/Expense/create', 'Backend\ExpenseController@index')->name('admin.expense.create');
Route::post('/admin/Expense/up', 'Backend\ExpenseController@up')->name('admin.expense.up');
Route::get('/admin/Expense/edit/{id}', 'Backend\ExpenseController@edit')->name('admin.expense.edit');
Route::post('/admin/Expense/edit/{id}', 'Backend\ExpenseController@update')->name('admin.expense.update');
Route::post('/admin/Expense/delete/{id}', 'Backend\ExpenseController@delete')->name('admin.expense.delete');


// rent Setup index,create,edit,update,delete start
Route::get('/admin/Rent_setup/create', 'Backend\RentmanageController@index')->name('admin.rent_setup.create');
Route::post('/admin/Rent_setup/create', 'Backend\RentmanageController@store')->name('admin.rent_setup.store');
Route::get('/admin/Rent_setup/edit/{id}', 'Backend\RentmanageController@edit')->name('admin.rent_setup.edit');
Route::post('/admin/Rent_setup/edit/{id}', 'Backend\RentmanageController@update')->name('admin.rent_setup.update');
Route::post('/admin/Rent_setup/delete/{id}', 'Backend\RentmanageController@delete')->name('admin.basic.delete');


// Booking index,create,edit,update,delete start
Route::get('/admin/Booking/create', 'Backend\BookingController@index')->name('admin.booking.create');
Route::post('/admin/Booking/create_session', 'Backend\BookingController@session_create')->name('admin.booking.create_session');
Route::post('/admin/Booking/create', 'Backend\BookingController@create')->name('admin.booking.create');
Route::get('/admin/Booking/edit/{id}', 'Backend\BookingController@edit')->name('admin.booking.edit');
Route::post('/admin/Booking/edit/{id}', 'Backend\BookingController@update')->name('admin.booking.update');
Route::post('/admin/Booking/delete/{id}', 'Backend\BookingController@delete')->name('admin.booking.delete');
Route::post('/user-check', 'Backend\BookingController@user_check')->name('admin.booking.user_check');
Route::post('/user-exists', 'Backend\BookingController@user_exists')->name('admin.booking.user_exists');
//Route::get('/admin/Booking/booking_form/{id}', 'Backend\BookingController@booking_form');
Route::get('/setup-booking-schedule/{id}','Backend\BookingController@booking_form');

// schedule index,create,edit,update,delete start
Route::get('/admin/Schedule/create', 'Backend\ScheduleController@index')->name('admin.schedule.create');
Route::post('/admin/Schedule/create', 'Backend\ScheduleController@create')->name('admin.schedule.create');
Route::get('/admin/Schedule/edit/{id}', 'Backend\ScheduleController@edit')->name('admin.schedule.edit');
Route::post('/admin/Schedule/edit/{id}', 'Backend\ScheduleController@update')->name('admin.schedule.update');
Route::post('/admin/Schedule/delete/{id}', 'Backend\ScheduleController@delete')->name('admin.schedule.delete');
Route::GET('/admin/Schedule/insert/{id}', 'Backend\ScheduleController@insert');




// slider index,create,edit,update,delete start
Route::get('/admin/slider/create', 'Backend\SliderController@index')->name('admin.slider.create');
Route::post('/admin/slider/create', 'Backend\SliderController@store')->name('admin.slider.store');
Route::get('/admin/slider/edit/{id}', 'Backend\SliderController@edit')->name('admin.slider.edit');
Route::post('/admin/slider/edit/{id}', 'Backend\SliderController@update')->name('admin.slider.update');
Route::post('/admin/slider/delete/{id}', 'Backend\SliderController@delete')->name('admin.slider.delete');
// slider index,create,edit,update,delete end

// category index,create,edit,update,delete start
Route::get('/admin/category/create', 'Backend\CategoryController@index')->name('admin.category.create');
Route::post('/admin/category/create', 'Backend\CategoryController@store')->name('admin.category.store');
Route::get('/admin/category/edit/{id}', 'Backend\CategoryController@edit')->name('admin.category.edit');
Route::post('/admin/category/edit/{id}', 'Backend\CategoryController@update')->name('admin.category.update');
Route::post('/admin/category/delete/{id}', 'Backend\CategoryController@delete')->name('admin.category.delete');
// category index,create,edit,update,delete end

// Sub Category index,create,edit,update,delete start
Route::get('/admin/subcategory/create', 'Backend\SubCategoryController@index')->name('admin.subcategory.create');
Route::post('/admin/subcategory/create', 'Backend\SubCategoryController@store')->name('admin.subcategory.store');
Route::get('/admin/subcategory/edit/{id}', 'Backend\SubCategoryController@edit')->name('admin.subcategory.edit');
Route::post('/admin/subcategory/edit/{id}', 'Backend\SubCategoryController@update')->name('admin.subcategory.update');
Route::post('/admin/subcategory/delete/{id}', 'Backend\SubCategoryController@delete')->name('admin.subcategory.delete');
// Sub Category index,create,edit,update,delete end

// Brand index,create,edit,update,delete start
Route::get('/admin/brand/create', 'Backend\BrandController@index')->name('admin.brand.create');
Route::post('/admin/brand/create', 'Backend\BrandController@store')->name('admin.brand.store');
Route::get('/admin/brand/edit/{id}', 'Backend\BrandController@edit')->name('admin.brand.edit');
Route::post('/admin/brand/edit/{id}', 'Backend\BrandController@update')->name('admin.brand.update');
Route::post('/admin/brand/delete/{id}', 'Backend\BrandController@delete')->name('admin.brand.delete');
// Sub Category index,create,edit,update,delete end

// Product index,create,edit,update,delete start
Route::get('/admin/product/create', 'Backend\AdminproductController@index')->name('admin.product.create');
Route::get('/admin/product/edit/{id}', 'Backend\AdminproductController@edit')->name('admin.product.edit');
Route::post('/admin/product/create', 'Backend\AdminproductController@store')->name('admin.product.store');
Route::post('/admin/product/edit/{id}', 'Backend\AdminproductController@update')->name('admin.product.update');
Route::post('/admin/product/delete/{id}', 'Backend\AdminproductController@delete')->name('admin.product.delete');
// Product index,create,edit,update,delete end


//API Route category id Wise Sub category name show
Route::get('get-category/{id}', function($id){
  return json_encode(App\Sub_category::where('category_id', $id)->get());
});

/*
| Backend route End
*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
