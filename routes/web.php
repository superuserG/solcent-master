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
  Route::get('/report/annualy','showController@showAnnualy')->name('annualyReport');
  Route::post('/Post/Create','CRUDController@store')->name('create.post');
  Route::get('/Post/Detail/{post}','CRUDController@detail')->name('detail.post');
  Route::post('editPost','CRUDController@detailModal');
  Route::get('/Post/{post}/Review','CRUDController@edit')->name('edit.post');
  Route::patch('/Post/{post}/Update','CRUDController@update')->name('update.post');

  Route::get('/report/monthly/January','monthController@showJanuary')->name('month.January');
  Route::get('/report/monthly/February','monthController@showFebruary')->name('month.February');
  Route::get('/report/monthly/March','monthController@showMarch')->name('month.March');
  Route::get('/report/monthly/April','monthController@showApril')->name('month.April');
  Route::get('/report/monthly/May','monthController@showMay')->name('month.May');
  Route::get('/report/monthly/June','monthController@showJune')->name('month.June');
  Route::get('/report/monthly/July','monthController@showJuly')->name('month.July');
  Route::get('/report/monthly/August','monthController@showAugust')->name('month.August');
  Route::get('/report/monthly/September','monthController@showSeptember')->name('month.September');
  Route::get('/report/monthly/October','monthController@showOctober')->name('month.October');
  Route::get('/report/monthly/November','monthController@showNovember')->name('month.November');
  Route::get('/report/monthly/December','monthController@showDecember')->name('month.December');

  Route::get('/report/monthly/kanwil_XII','featKanwilController@Kanwil_XII')->name('kanwil.XII');

});
