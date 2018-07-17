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
  // Route::get('/report/monthly/January/KantorPusat','')->name('month.January.kp');
  // Route::get('/report/monthly/January/Kanwil-1','')->name('month.January.kan1');
  // Route::get('/report/monthly/January/Kanwil-2','')->name('month.January.kan2');
  // Route::get('/report/monthly/January/Kanwil-3','')->name('month.January.kan3');
  // Route::get('/report/monthly/January/Kanwil-4','')->name('month.January.kan4');
  // Route::get('/report/monthly/January/Kanwil-5','')->name('month.January.kan5');
  // Route::get('/report/monthly/January/Kanwil-6','')->name('month.January.kan6');
  // Route::get('/report/monthly/January/Kanwil-7','')->name('month.January.kan7');
  // Route::get('/report/monthly/January/Kanwil-8','')->name('month.January.kan8');
  // Route::get('/report/monthly/January/Kanwil-9','')->name('month.January.kan9');
  // Route::get('/report/monthly/January/Kanwil-10','')->name('month.January.kan10');
  // Route::get('/report/monthly/January/Kanwil-11','')->name('month.January.kan11');
  // Route::get('/report/monthly/January/Kanwil-12','')->name('month.January.kan12');


  Route::get('/report/monthly/February','monthController@showFebruary')->name('month.February');
  // Route::get('/report/monthly/February/KantorPusat','')->name('month.February.kp');
  // Route::get('/report/monthly/February/Kanwil-1','')->name('month.February.kan1');
  // Route::get('/report/monthly/February/Kanwil-2','')->name('month.February.kan2');
  // Route::get('/report/monthly/February/Kanwil-3','')->name('month.February.kan3');
  // Route::get('/report/monthly/February/Kanwil-4','')->name('month.February.kan4');
  // Route::get('/report/monthly/February/Kanwil-5','')->name('month.February.kan5');
  // Route::get('/report/monthly/February/Kanwil-6','')->name('month.February.kan6');
  // Route::get('/report/monthly/February/Kanwil-7','')->name('month.February.kan7');
  // Route::get('/report/monthly/February/Kanwil-8','')->name('month.February.kan8');
  // Route::get('/report/monthly/February/Kanwil-9','')->name('month.February.kan9');
  // Route::get('/report/monthly/February/Kanwil-10','')->name('month.February.kan10');
  // Route::get('/report/monthly/February/Kanwil-11','')->name('month.February.kan11');
  // Route::get('/report/monthly/February/Kanwil-12','')->name('month.February.kan12');


  Route::get('/report/monthly/March','monthController@showMarch')->name('month.March');
  Route::get('/report/monthly/March/KantorPusat','kanwilMarchController@showMarchKp')->name('month.March.kp');
  Route::get('/report/monthly/March/Kanwil-1','kanwilMarchController@showMarchKanwil1')->name('month.March.kan1');
  Route::get('/report/monthly/March/Kanwil-2','kanwilMarchController@showMarchKanwil2')->name('month.March.kan2');
  Route::get('/report/monthly/March/Kanwil-3','kanwilMarchController@showMarchKanwil3')->name('month.March.kan3');
  Route::get('/report/monthly/March/Kanwil-4','kanwilMarchController@showMarchKanwil4')->name('month.March.kan4');
  Route::get('/report/monthly/March/Kanwil-5','kanwilMarchController@showMarchKanwil5')->name('month.March.kan5');
  Route::get('/report/monthly/March/Kanwil-6','kanwilMarchController@showMarchKanwil6')->name('month.March.kan6');
  Route::get('/report/monthly/March/Kanwil-7','kanwilMarchController@showMarchKanwil7')->name('month.March.kan7');
  Route::get('/report/monthly/March/Kanwil-8','kanwilMarchController@showMarchKanwil8')->name('month.March.kan8');
  Route::get('/report/monthly/March/Kanwil-9','kanwilMarchController@showMarchKanwil9')->name('month.March.kan9');
  Route::get('/report/monthly/March/Kanwil-10','kanwilMarchController@showMarchKanwil10')->name('month.March.kan10');
  Route::get('/report/monthly/March/Kanwil-11','kanwilMarchController@showMarchKanwil11')->name('month.March.kan11');
  Route::get('/report/monthly/March/Kanwil-12','kanwilMarchController@showMarchKanwil12')->name('month.March.kan12');


  Route::get('/report/monthly/April','monthController@showApril')->name('month.April');
  // Route::get('/report/monthly/April/KantorPusat','')->name('month.April.kp');
  // Route::get('/report/monthly/April/Kanwil-1','')->name('month.April.kan1');
  // Route::get('/report/monthly/April/Kanwil-2','')->name('month.April.kan2');
  // Route::get('/report/monthly/April/Kanwil-3','')->name('month.April.kan3');
  // Route::get('/report/monthly/April/Kanwil-4','')->name('month.April.kan4');
  // Route::get('/report/monthly/April/Kanwil-5','')->name('month.April.kan5');
  // Route::get('/report/monthly/April/Kanwil-6','')->name('month.April.kan6');
  // Route::get('/report/monthly/April/Kanwil-7','')->name('month.April.kan7');
  // Route::get('/report/monthly/April/Kanwil-8','')->name('month.April.kan8');
  // Route::get('/report/monthly/April/Kanwil-9','')->name('month.April.kan9');
  // Route::get('/report/monthly/April/Kanwil-10','')->name('month.April.kan10');
  // Route::get('/report/monthly/April/Kanwil-11','')->name('month.April.kan11');
  // Route::get('/report/monthly/April/Kanwil-12','')->name('month.April.kan12');


  Route::get('/report/monthly/May','monthController@showMay')->name('month.May');
  // Route::get('/report/monthly/May/KantorPusat','')->name('month.May.kp');
  // Route::get('/report/monthly/May/Kanwil-1','')->name('month.May.kan1');
  // Route::get('/report/monthly/May/Kanwil-2','')->name('month.May.kan2');
  // Route::get('/report/monthly/May/Kanwil-3','')->name('month.May.kan3');
  // Route::get('/report/monthly/May/Kanwil-4','')->name('month.May.kan4');
  // Route::get('/report/monthly/May/Kanwil-5','')->name('month.May.kan5');
  // Route::get('/report/monthly/May/Kanwil-6','')->name('month.May.kan6');
  // Route::get('/report/monthly/May/Kanwil-7','')->name('month.May.kan7');
  // Route::get('/report/monthly/May/Kanwil-8','')->name('month.May.kan8');
  // Route::get('/report/monthly/May/Kanwil-9','')->name('month.May.kan9');
  // Route::get('/report/monthly/May/Kanwil-10','')->name('month.May.kan10');
  // Route::get('/report/monthly/May/Kanwil-11','')->name('month.May.kan11');
  // Route::get('/report/monthly/May/Kanwil-12','')->name('month.May.kan12');


  Route::get('/report/monthly/June','monthController@showJune')->name('month.June');
  // Route::get('/report/monthly/June/KantorPusat','')->name('month.June.kp');
  // Route::get('/report/monthly/June/Kanwil-1','')->name('month.June.kan1');
  // Route::get('/report/monthly/June/Kanwil-2','')->name('month.June.kan2');
  // Route::get('/report/monthly/June/Kanwil-3','')->name('month.June.kan3');
  // Route::get('/report/monthly/June/Kanwil-4','')->name('month.June.kan4');
  // Route::get('/report/monthly/June/Kanwil-5','')->name('month.June.kan5');
  // Route::get('/report/monthly/June/Kanwil-6','')->name('month.June.kan6');
  // Route::get('/report/monthly/June/Kanwil-7','')->name('month.June.kan7');
  // Route::get('/report/monthly/June/Kanwil-8','')->name('month.June.kan8');
  // Route::get('/report/monthly/June/Kanwil-9','')->name('month.June.kan9');
  // Route::get('/report/monthly/June/Kanwil-10','')->name('month.June.kan10');
  // Route::get('/report/monthly/June/Kanwil-11','')->name('month.June.kan11');
  // Route::get('/report/monthly/June/Kanwil-12','')->name('month.June.kan12');

  Route::get('/report/monthly/July','monthController@showJuly')->name('month.July');
  Route::get('/report/monthly/July/KantorPusat','kanwilJulyController@showJulyKp')->name('month.July.kp');
  Route::get('/report/monthly/July/Kanwil-1','kanwilJulyController@showJulyKanwil1')->name('month.July.kan1');
  Route::get('/report/monthly/July/Kanwil-2','kanwilJulyController@showJulyKanwil2')->name('month.July.kan2');
  Route::get('/report/monthly/July/Kanwil-3','kanwilJulyController@showJulyKanwil3')->name('month.July.kan3');
  Route::get('/report/monthly/July/Kanwil-4','kanwilJulyController@showJulyKanwil4')->name('month.July.kan4');
  Route::get('/report/monthly/July/Kanwil-5','kanwilJulyController@showJulyKanwil5')->name('month.July.kan5');
  Route::get('/report/monthly/July/Kanwil-6','kanwilJulyController@showJulyKanwil6')->name('month.July.kan6');
  Route::get('/report/monthly/July/Kanwil-7','kanwilJulyController@showJulyKanwil7')->name('month.July.kan7');
  Route::get('/report/monthly/July/Kanwil-8','kanwilJulyController@showJulyKanwil8')->name('month.July.kan8');
  Route::get('/report/monthly/July/Kanwil-9','kanwilJulyController@showJulyKanwil9')->name('month.July.kan9');
  Route::get('/report/monthly/July/Kanwil-10','kanwilJulyController@showJulyKanwil10')->name('month.July.kan10');
  Route::get('/report/monthly/July/Kanwil-11','kanwilJulyController@showJulyKanwil11')->name('month.July.kan11');
  Route::get('/report/monthly/July/Kanwil-12','kanwilJulyController@showJulyKanwil12')->name('month.July.kan12');

  Route::get('/report/monthly/August','monthController@showAugust')->name('month.August');
  Route::get('/report/monthly/August/KantorPusat','kanwilAugustController@showAugustKp')->name('month.August.kp');
  Route::get('/report/monthly/August/Kanwil-1','kanwilAugustController@showAugustKanwil1')->name('month.August.kan1');
  Route::get('/report/monthly/August/Kanwil-2','kanwilAugustController@showAugustKanwil2')->name('month.August.kan2');
  Route::get('/report/monthly/August/Kanwil-3','kanwilAugustController@showAugustKanwil3')->name('month.August.kan3');
  Route::get('/report/monthly/August/Kanwil-4','kanwilAugustController@showAugustKanwil4')->name('month.August.kan4');
  Route::get('/report/monthly/August/Kanwil-5','kanwilAugustController@showAugustKanwil5')->name('month.August.kan5');
  Route::get('/report/monthly/August/Kanwil-6','kanwilAugustController@showAugustKanwil6')->name('month.August.kan6');
  Route::get('/report/monthly/August/Kanwil-7','kanwilAugustController@showAugustKanwil7')->name('month.August.kan7');
  Route::get('/report/monthly/August/Kanwil-8','kanwilAugustController@showAugustKanwil8')->name('month.August.kan8');
  Route::get('/report/monthly/August/Kanwil-9','kanwilAugustController@showAugustKanwil9')->name('month.August.kan9');
  Route::get('/report/monthly/August/Kanwil-10','kanwilAugustController@showAugustKanwil10')->name('month.August.kan10');
  Route::get('/report/monthly/August/Kanwil-11','kanwilAugustController@showAugustKanwil11')->name('month.August.kan11');
  Route::get('/report/monthly/August/Kanwil-12','kanwilAugustController@showAugustKanwil12')->name('month.August.kan12');

  Route::get('/report/monthly/September','monthController@showSeptember')->name('month.September');
  // Route::get('/report/monthly/September/KantorPusat','')->name('month.September.kp');
  // Route::get('/report/monthly/September/Kanwil-1','')->name('month.September.kan1');
  // Route::get('/report/monthly/September/Kanwil-2','')->name('month.September.kan2');
  // Route::get('/report/monthly/September/Kanwil-3','')->name('month.September.kan3');
  // Route::get('/report/monthly/September/Kanwil-4','')->name('month.September.kan4');
  // Route::get('/report/monthly/September/Kanwil-5','')->name('month.September.kan5');
  // Route::get('/report/monthly/September/Kanwil-6','')->name('month.September.kan6');
  // Route::get('/report/monthly/September/Kanwil-7','')->name('month.September.kan7');
  // Route::get('/report/monthly/September/Kanwil-8','')->name('month.September.kan8');
  // Route::get('/report/monthly/September/Kanwil-9','')->name('month.September.kan9');
  // Route::get('/report/monthly/September/Kanwil-10','')->name('month.September.kan10');
  // Route::get('/report/monthly/September/Kanwil-11','')->name('month.September.kan11');
  // Route::get('/report/monthly/September/Kanwil-12','')->name('month.September.kan12');


  Route::get('/report/monthly/October','monthController@showOctober')->name('month.October');
  // Route::get('/report/monthly/October/KantorPusat','')->name('month.October.kp');
  // Route::get('/report/monthly/October/Kanwil-1','')->name('month.October.kan1');
  // Route::get('/report/monthly/October/Kanwil-2','')->name('month.October.kan2');
  // Route::get('/report/monthly/October/Kanwil-3','')->name('month.October.kan3');
  // Route::get('/report/monthly/October/Kanwil-4','')->name('month.October.kan4');
  // Route::get('/report/monthly/October/Kanwil-5','')->name('month.October.kan5');
  // Route::get('/report/monthly/October/Kanwil-6','')->name('month.October.kan6');
  // Route::get('/report/monthly/October/Kanwil-7','')->name('month.October.kan7');
  // Route::get('/report/monthly/October/Kanwil-8','')->name('month.October.kan8');
  // Route::get('/report/monthly/October/Kanwil-9','')->name('month.October.kan9');
  // Route::get('/report/monthly/October/Kanwil-10','')->name('month.October.kan10');
  // Route::get('/report/monthly/October/Kanwil-11','')->name('month.October.kan11');
  // Route::get('/report/monthly/October/Kanwil-12','')->name('month.October.kan12');

  Route::get('/report/monthly/November','monthController@showNovember')->name('month.November');
  // Route::get('/report/monthly/November/KantorPusat','')->name('month.November.kp');
  // Route::get('/report/monthly/November/Kanwil-1','')->name('month.November.kan1');
  // Route::get('/report/monthly/November/Kanwil-2','')->name('month.November.kan2');
  // Route::get('/report/monthly/November/Kanwil-3','')->name('month.November.kan3');
  // Route::get('/report/monthly/November/Kanwil-4','')->name('month.November.kan4');
  // Route::get('/report/monthly/November/Kanwil-5','')->name('month.November.kan5');
  // Route::get('/report/monthly/November/Kanwil-6','')->name('month.November.kan6');
  // Route::get('/report/monthly/November/Kanwil-7','')->name('month.November.kan7');
  // Route::get('/report/monthly/November/Kanwil-8','')->name('month.November.kan8');
  // Route::get('/report/monthly/November/Kanwil-9','')->name('month.November.kan9');
  // Route::get('/report/monthly/November/Kanwil-10','')->name('month.November.kan10');
  // Route::get('/report/monthly/November/Kanwil-11','')->name('month.November.kan11');
  // Route::get('/report/monthly/November/Kanwil-12','')->name('month.November.kan12');


  Route::get('/report/monthly/December','monthController@showDecember')->name('month.December');
  // Route::get('/report/monthly/December/KantorPusat','')->name('month.December.kp');
  // Route::get('/report/monthly/December/Kanwil-1','')->name('month.December.kan1');
  // Route::get('/report/monthly/December/Kanwil-2','')->name('month.December.kan2');
  // Route::get('/report/monthly/December/Kanwil-3','')->name('month.December.kan3');
  // Route::get('/report/monthly/December/Kanwil-4','')->name('month.December.kan4');
  // Route::get('/report/monthly/December/Kanwil-5','')->name('month.December.kan5');
  // Route::get('/report/monthly/December/Kanwil-6','')->name('month.December.kan6');
  // Route::get('/report/monthly/December/Kanwil-7','')->name('month.December.kan7');
  // Route::get('/report/monthly/December/Kanwil-8','')->name('month.December.kan8');
  // Route::get('/report/monthly/December/Kanwil-9','')->name('month.December.kan9');
  // Route::get('/report/monthly/December/Kanwil-10','')->name('month.December.kan10');
  // Route::get('/report/monthly/December/Kanwil-11','')->name('month.December.kan11');
  // Route::get('/report/monthly/December/Kanwil-12','')->name('month.December.kan12');

  Route::get('/report/monthly/kanwil_XII','featKanwilController@Kanwil_XII')->name('kanwil.XII');

});
