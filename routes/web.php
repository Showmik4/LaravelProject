<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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

/*Route::get('/', function () {
    return view('welcome');
});
*/
/*Route::get('/', function () {
    return view('index');
});*/

Route::get('/','homecontroller@index');
Route::get('/BestSale','bestsalecontroller@index');


Route::get('/CS','catagorycontroller@cs');
Route::get('/EEE','catagorycontroller@EEE');
Route::get('/BBA','catagorycontroller@BBA');

  
//Route::get('/shop/shop/v1.html','homecontroller@shop');
//==============================ShopHome=========================///

Route::get('/Shop','homecontroller@shop');

Route::get('/Shophome','homecontroller@shophome');
Route::get('/author','homecontroller@author');

Route::get('/Product','homecontroller@product');

Route::get('/Owner','homecontroller@owner');


/*Route::get('', function () {
    return view('/ShopOwner');

});*/







//===========Catagory=================//

Route::get('/Back', function(){
    return view('ShopOwner');
}) ;
Route::get('/Catagory/Create', 'catagorycontroller@create');
Route::get('/Catagory/Create', 'catagorycontroller@create');
Route::post('/Catagory/Create', 'catagorycontroller@store');
Route::get('/AllCatagory', 'ShopOwnerController@allcatagory');



Route::get('/Catagory/edit/{Id}', 'catagoryController@catagory_edit');
Route::post('/Catagory/edit/{Id}', 'CatagoryController@catagory_update');



Route::get('/Catagory/delete/{Id}', 'catagoryController@catagory_delete') ;
Route::get('/Catagory/delete/{Id}', 'catagoryController@catagory_destroy') ;


//================Books==================//


Route::get('/book_list', 'BooksController@index') ;
Route::get('/Book/Create', 'BooksController@addbook');
Route::post('/Book/Create', 'BooksController@store');
Route::get('/Book/delete/{Id}', 'BooksController@book_destroy');

Route::get('/Book/detail/{Id}', 'BooksController@show');

Route::get('/Book/edit/{Id}', 'BooksController@book_edit');
Route::post('/Book/edit/{Id}', 'BooksController@book_update');
Route::get('/Search', 'BooksController@book_search');


//Route::get('/Catagory/details/{id}', 'ShopOwnerController@catagory_details') ;

//Route::get('/Catagory/edit/{Id}', 'ShopOwnerController@catagory_edit');
//Route::post('/Catagory/edit/{Id}', 'ShopOwnerController@catagory_update');
//Route::get('/Book/delete/{Id}', 'BooksController@book_destroy');

//Route::get('/Book/delete/{Id}', 'ShopOwnerController@catagory_delete') ;
//Route::get('/Book/delete/{Id}', 'ShopOwnerController@catagory_destroy') ;



//======================Shop Owner==================//
Route::get('/owner_list', 'OwnerController@index');
Route::get('/ShopOwner/Create', 'OwnerController@owner_create');
Route::post('/ShopOwner/Create', 'OwnerController@store');
Route::get('/ShopOwner/delete/{Id}', 'OwnerController@owner_destroy');
Route::get('/ShopOwner/edit/{Id}', 'OwnerController@owner_edit');
Route::post('/ShopOwner/edit/{Id}', 'OwnerController@owner_update');




//===============================Deal======================//

Route::get('/deal_list', 'DealController@index');

Route::get('/Deal/Create', 'DealController@deal_create');
Route::post('/Deal/Create', 'DealController@store');
Route::get('/Deal/delete/{Deal_Id}', 'DealController@deal_destroy');

Route::get('/Deal/edit/{Deal_Id}', 'DealController@deal_edit');
Route::post('/Deal/edit/{Deal_Id}', 'DealController@deal_update');



//==========================Blog====================//

Route::get('/blog_list', 'BlogController@index');
Route::get('/Blog/Create', 'BlogController@blog_create');
Route::post('/Blog/Create', 'BlogController@store');
Route::get('Blog/edit/{Id}', 'BlogController@edit_blog');
Route::post('Blog/edit/{Id}', 'BlogController@update_blog');




//=======================Order===============//
Route::get('/chart', 'OrderController@index');



//================================Login=====================//

Route::get('/ShopOwner', 'OwnerController@Shop_Owner_Page')->middleware( 'loginSession'); 
//Route::get('/login','logincontroller@login_page');
  Route::get('/login',function(){

    return view('Login.LoginPage');


  }) ;
Route::post('/login', 'logincontroller@verify');

Route::get('/logout', function (Request $request) {
    $request->session()->flush();
    return redirect('/login');
});

//====================================Registration======================//
Route::get('/Registration', 'RegistrationController@index');
Route::post('/Registration', 'RegistrationController@store');
Route::get('/BackToLogin',function(){

    return redirect('/login');
});



//====================Profile Settings==============//

Route::get('/user_list', 'ProfileController@index');
Route::get('/Profile/Create','ProfileController@create');
Route::post('/Profile/Create', 'ProfileController@store');
Route::get('/Profile/delete/{Id}', 'ProfileController@book_destroy');


Route::get('/Profile/edit/{Id}', 'ProfileController@profile_edit');
Route::post('/Profile/edit/{Id}', 'ProfileController@profile_update');



//======================Best Selling=================//
Route::get('/Bbook_list', 'bestsalecontroller@index');

Route::get('/BBook/Create', 'bestsalecontroller@addbook');
Route::post('/BBook/Create', 'bestsalecontroller@store');
Route::get('/BBook/detail/{Id}', 'bestsalecontroller@show');
Route::get('/BBook/delete/{Id}', 'bestsalecontroller@book_destroy');


Route::get('/BBook/edit/{Id}', 'bestsalecontroller@book_edit');
Route::post('/BBook/edit/{Id}', 'bestsalecontroller@book_update');
Route::get('/Search', 'bestsalecontroller@book_search');










Route::get('/dealer', 'ShopOwnerController@bookdealer') ;
Route::get('/deal', 'ShopOwnerController@bookdeal') ;
Route::get('/shopowners', 'ShopOwnerController@Owner') ;

       
       


