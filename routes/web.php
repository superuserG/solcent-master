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

// Route::get('/', function () {
//     return view('home');
// });



// Route::get('/category','HomeController@test')->name('category.view');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::middleware('auth')->group(function(){
  Route::get('/home','showController@showHome')->name('index');
  Route::get('/workpage','showController@showForm')->name('form');
  Route::get('/tables','showController@showTable')->name('table');
  Route::get('/report/monthly','showController@showMonthly')->name('monthlyReport');
  Route::post('/Post/Create','CRUDController@store')->name('create.post');
  Route::get('/Post/Detail/{post}','CRUDController@detail')->name('detail.post');
  Route::post('editPost','CRUDController@detailModal');
  Route::get('/Post/{post}/Review','CRUDController@edit')->name('edit.post');
  Route::patch('/Post/{post}/Update','CRUDController@update')->name('update.post');
});
