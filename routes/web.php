<?php

Route::get('/', function () {
    return view('welcome');
});

//User Interface
Route::get('/home', 'dashboard@index');
Route::get('/route', 'dashboard@index1');

// //User Log Ins
// Route::get('/login', 'dashboard@login');
Route::get('/login', 'dashboard@login')->name('login');
Route::post('/login', 'dashboard@signin');
//dd(@signin);
//About Root Product
Route::get('/product', 'dashboard@product');
//user signup
Route::get('/regis', 'dashboard@regis');
Route::post('/regis', 'dashboard@signup');
// Route::post('/login' 'dashboard@insert_data');

Route::get('/production', 'dashboard@view');
Route::get('/product_detail', 'dashboard@detail');
Route::post('/product_detail', 'dashboard@input');

//user logout
Route::get('logout', function(){
  \Auth::logout();
  return \Redirect::to('/home');
});
