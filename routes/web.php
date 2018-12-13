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
Route::group(['middleware'=>'web'],function()
{
Auth::routes();

Route::group(['middleware'=>'auth'],function()
{
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
  Route::get('/report/monthly/January/KantorPusat','kanwilJanuaryController@showJanuaryKp')->name('month.January.kp');
  Route::get('/report/monthly/January/Kanwil-1','kanwilJanuaryController@showJanuaryKanwil1')->name('month.January.kan1');
  Route::get('/report/monthly/January/Kanwil-2','kanwilJanuaryController@showJanuaryKanwil2')->name('month.January.kan2');
  Route::get('/report/monthly/January/Kanwil-3','kanwilJanuaryController@showJanuaryKanwil3')->name('month.January.kan3');
  Route::get('/report/monthly/January/Kanwil-4','kanwilJanuaryController@showJanuaryKanwil4')->name('month.January.kan4');
  Route::get('/report/monthly/January/Kanwil-5','kanwilJanuaryController@showJanuaryKanwil5')->name('month.January.kan5');
  Route::get('/report/monthly/January/Kanwil-6','kanwilJanuaryController@showJanuaryKanwil6')->name('month.January.kan6');
  Route::get('/report/monthly/January/Kanwil-7','kanwilJanuaryController@showJanuaryKanwil7')->name('month.January.kan7');
  Route::get('/report/monthly/January/Kanwil-8','kanwilJanuaryController@showJanuaryKanwil8')->name('month.January.kan8');
  Route::get('/report/monthly/January/Kanwil-9','kanwilJanuaryController@showJanuaryKanwil9')->name('month.January.kan9');
  Route::get('/report/monthly/January/Kanwil-10','kanwilJanuaryController@showJanuaryKanwil10')->name('month.January.kan10');
  Route::get('/report/monthly/January/Kanwil-11','kanwilJanuaryController@showJanuaryKanwil11')->name('month.January.kan11');
  Route::get('/report/monthly/January/Kanwil-12','kanwilJanuaryController@showJanuaryKanwil12')->name('month.January.kan12');


  Route::get('/report/monthly/February','monthController@showFebruary')->name('month.February');
  Route::get('/report/monthly/February/KantorPusat','kanwilFebruaryController@showFebruaryKp')->name('month.February.kp');
  Route::get('/report/monthly/February/Kanwil-1','kanwilFebruaryController@showFebruaryKanwil1')->name('month.February.kan1');
  Route::get('/report/monthly/February/Kanwil-2','kanwilFebruaryController@showFebruaryKanwil2')->name('month.February.kan2');
  Route::get('/report/monthly/February/Kanwil-3','kanwilFebruaryController@showFebruaryKanwil3')->name('month.February.kan3');
  Route::get('/report/monthly/February/Kanwil-4','kanwilFebruaryController@showFebruaryKanwil4')->name('month.February.kan4');
  Route::get('/report/monthly/February/Kanwil-5','kanwilFebruaryController@showFebruaryKanwil5')->name('month.February.kan5');
  Route::get('/report/monthly/February/Kanwil-6','kanwilFebruaryController@showFebruaryKanwil6')->name('month.February.kan6');
  Route::get('/report/monthly/February/Kanwil-7','kanwilFebruaryController@showFebruaryKanwil7')->name('month.February.kan7');
  Route::get('/report/monthly/February/Kanwil-8','kanwilFebruaryController@showFebruaryKanwil8')->name('month.February.kan8');
  Route::get('/report/monthly/February/Kanwil-9','kanwilFebruaryController@showFebruaryKanwil9')->name('month.February.kan9');
  Route::get('/report/monthly/February/Kanwil-10','kanwilFebruaryController@showFebruaryKanwil10')->name('month.February.kan10');
  Route::get('/report/monthly/February/Kanwil-11','kanwilFebruaryController@showFebruaryKanwil11')->name('month.February.kan11');
  Route::get('/report/monthly/February/Kanwil-12','kanwilFebruaryController@showFebruaryKanwil12')->name('month.February.kan12');


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
  Route::get('/report/monthly/April/KantorPusat','kanwilAprilController@showAprilKp')->name('month.April.kp');
  Route::get('/report/monthly/April/Kanwil-1','kanwilAprilController@showAprilKanwil1')->name('month.April.kan1');
  Route::get('/report/monthly/April/Kanwil-2','kanwilAprilController@showAprilKanwil2')->name('month.April.kan2');
  Route::get('/report/monthly/April/Kanwil-3','kanwilAprilController@showAprilKanwil3')->name('month.April.kan3');
  Route::get('/report/monthly/April/Kanwil-4','kanwilAprilController@showAprilKanwil4')->name('month.April.kan4');
  Route::get('/report/monthly/April/Kanwil-5','kanwilAprilController@showAprilKanwil5')->name('month.April.kan5');
  Route::get('/report/monthly/April/Kanwil-6','kanwilAprilController@showAprilKanwil6')->name('month.April.kan6');
  Route::get('/report/monthly/April/Kanwil-7','kanwilAprilController@showAprilKanwil7')->name('month.April.kan7');
  Route::get('/report/monthly/April/Kanwil-8','kanwilAprilController@showAprilKanwil8')->name('month.April.kan8');
  Route::get('/report/monthly/April/Kanwil-9','kanwilAprilController@showAprilKanwil9')->name('month.April.kan9');
  Route::get('/report/monthly/April/Kanwil-10','kanwilAprilController@showAprilKanwil10')->name('month.April.kan10');
  Route::get('/report/monthly/April/Kanwil-11','kanwilAprilController@showAprilKanwil11')->name('month.April.kan11');
  Route::get('/report/monthly/April/Kanwil-12','kanwilAprilController@showAprilKanwil12')->name('month.April.kan12');


  Route::get('/report/monthly/May','monthController@showMay')->name('month.May');
  Route::get('/report/monthly/May/KantorPusat','kanwilMayController@showMayKp')->name('month.May.kp');
  Route::get('/report/monthly/May/Kanwil-1','kanwilMayController@showMayKanwil1')->name('month.May.kan1');
  Route::get('/report/monthly/May/Kanwil-2','kanwilMayController@showMayKanwil2')->name('month.May.kan2');
  Route::get('/report/monthly/May/Kanwil-3','kanwilMayController@showMayKanwil3')->name('month.May.kan3');
  Route::get('/report/monthly/May/Kanwil-4','kanwilMayController@showMayKanwil4')->name('month.May.kan4');
  Route::get('/report/monthly/May/Kanwil-5','kanwilMayController@showMayKanwil5')->name('month.May.kan5');
  Route::get('/report/monthly/May/Kanwil-6','kanwilMayController@showMayKanwil6')->name('month.May.kan6');
  Route::get('/report/monthly/May/Kanwil-7','kanwilMayController@showMayKanwil7')->name('month.May.kan7');
  Route::get('/report/monthly/May/Kanwil-8','kanwilMayController@showMayKanwil8')->name('month.May.kan8');
  Route::get('/report/monthly/May/Kanwil-9','kanwilMayController@showMayKanwil9')->name('month.May.kan9');
  Route::get('/report/monthly/May/Kanwil-10','kanwilMayController@showMayKanwil10')->name('month.May.kan10');
  Route::get('/report/monthly/May/Kanwil-11','kanwilMayController@showMayKanwil11')->name('month.May.kan11');
  Route::get('/report/monthly/May/Kanwil-12','kanwilMayController@showMayKanwil12')->name('month.May.kan12');


  Route::get('/report/monthly/June','monthController@showJune')->name('month.June');
  Route::get('/report/monthly/June/KantorPusat','kanwilJuneController@showJuneKp')->name('month.June.kp');
  Route::get('/report/monthly/June/Kanwil-1','kanwilJuneController@showJuneKanwil1')->name('month.June.kan1');
  Route::get('/report/monthly/June/Kanwil-2','kanwilJuneController@showJuneKanwil2')->name('month.June.kan2');
  Route::get('/report/monthly/June/Kanwil-3','kanwilJuneController@showJuneKanwil3')->name('month.June.kan3');
  Route::get('/report/monthly/June/Kanwil-4','kanwilJuneController@showJuneKanwil4')->name('month.June.kan4');
  Route::get('/report/monthly/June/Kanwil-5','kanwilJuneController@showJuneKanwil5')->name('month.June.kan5');
  Route::get('/report/monthly/June/Kanwil-6','kanwilJuneController@showJuneKanwil6')->name('month.June.kan6');
  Route::get('/report/monthly/June/Kanwil-7','kanwilJuneController@showJuneKanwil7')->name('month.June.kan7');
  Route::get('/report/monthly/June/Kanwil-8','kanwilJuneController@showJuneKanwil8')->name('month.June.kan8');
  Route::get('/report/monthly/June/Kanwil-9','kanwilJuneController@showJuneKanwil9')->name('month.June.kan9');
  Route::get('/report/monthly/June/Kanwil-10','kanwilJuneController@showJuneKanwil10')->name('month.June.kan10');
  Route::get('/report/monthly/June/Kanwil-11','kanwilJuneController@showJuneKanwil11')->name('month.June.kan11');
  Route::get('/report/monthly/June/Kanwil-12','kanwilJuneController@showJuneKanwil12')->name('month.June.kan12');

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
  Route::get('/report/monthly/September/KantorPusat','kanwilSeptemberController@showSeptemberKp')->name('month.September.kp');
  Route::get('/report/monthly/September/Kanwil-1','kanwilSeptemberController@showSeptemberKanwil1')->name('month.September.kan1');
  Route::get('/report/monthly/September/Kanwil-2','kanwilSeptemberController@showSeptemberKanwil2')->name('month.September.kan2');
  Route::get('/report/monthly/September/Kanwil-3','kanwilSeptemberController@showSeptemberKanwil3')->name('month.September.kan3');
  Route::get('/report/monthly/September/Kanwil-4','kanwilSeptemberController@showSeptemberKanwil4')->name('month.September.kan4');
  Route::get('/report/monthly/September/Kanwil-5','kanwilSeptemberController@showSeptemberKanwil5')->name('month.September.kan5');
  Route::get('/report/monthly/September/Kanwil-6','kanwilSeptemberController@showSeptemberKanwil6')->name('month.September.kan6');
  Route::get('/report/monthly/September/Kanwil-7','kanwilSeptemberController@showSeptemberKanwil7')->name('month.September.kan7');
  Route::get('/report/monthly/September/Kanwil-8','kanwilSeptemberController@showSeptemberKanwil8')->name('month.September.kan8');
  Route::get('/report/monthly/September/Kanwil-9','kanwilSeptemberController@showSeptemberKanwil9')->name('month.September.kan9');
  Route::get('/report/monthly/September/Kanwil-10','kanwilSeptemberController@showSeptemberKanwil10')->name('month.September.kan10');
  Route::get('/report/monthly/September/Kanwil-11','kanwilSeptemberController@showSeptemberKanwil11')->name('month.September.kan11');
  Route::get('/report/monthly/September/Kanwil-12','kanwilSeptemberController@showSeptemberKanwil12')->name('month.September.kan12');


  Route::get('/report/monthly/October','monthController@showOctober')->name('month.October');
  Route::get('/report/monthly/October/KantorPusat','kanwilOctoberController@showOctoberKp')->name('month.October.kp');
  Route::get('/report/monthly/October/Kanwil-1','kanwilOctoberController@showOctoberKanwil1')->name('month.October.kan1');
  Route::get('/report/monthly/October/Kanwil-2','kanwilOctoberController@showOctoberKanwil2')->name('month.October.kan2');
  Route::get('/report/monthly/October/Kanwil-3','kanwilOctoberController@showOctoberKanwil3')->name('month.October.kan3');
  Route::get('/report/monthly/October/Kanwil-4','kanwilOctoberController@showOctoberKanwil4')->name('month.October.kan4');
  Route::get('/report/monthly/October/Kanwil-5','kanwilOctoberController@showOctoberKanwil5')->name('month.October.kan5');
  Route::get('/report/monthly/October/Kanwil-6','kanwilOctoberController@showOctoberKanwil6')->name('month.October.kan6');
  Route::get('/report/monthly/October/Kanwil-7','kanwilOctoberController@showOctoberKanwil7')->name('month.October.kan7');
  Route::get('/report/monthly/October/Kanwil-8','kanwilOctoberController@showOctoberKanwil8')->name('month.October.kan8');
  Route::get('/report/monthly/October/Kanwil-9','kanwilOctoberController@showOctoberKanwil9')->name('month.October.kan9');
  Route::get('/report/monthly/October/Kanwil-10','kanwilOctoberController@showOctoberKanwil10')->name('month.October.kan10');
  Route::get('/report/monthly/October/Kanwil-11','kanwilOctoberController@showOctoberKanwil11')->name('month.October.kan11');
  Route::get('/report/monthly/October/Kanwil-12','kanwilOctoberController@showOctoberKanwil12')->name('month.October.kan12');

  Route::get('/report/monthly/November','monthController@showNovember')->name('month.November');
  Route::get('/report/monthly/November/KantorPusat','kanwilNovemberController@showNovemberKanwilKp')->name('month.November.kp');
  Route::get('/report/monthly/November/Kanwil-1','kanwilNovemberController@showNovemberKanwil1')->name('month.November.kan1');
  Route::get('/report/monthly/November/Kanwil-2','kanwilNovemberController@showNovemberKanwil2')->name('month.November.kan2');
  Route::get('/report/monthly/November/Kanwil-3','kanwilNovemberController@showNovemberKanwil3')->name('month.November.kan3');
  Route::get('/report/monthly/November/Kanwil-4','kanwilNovemberController@showNovemberKanwil4')->name('month.November.kan4');
  Route::get('/report/monthly/November/Kanwil-5','kanwilNovemberController@showNovemberKanwil5')->name('month.November.kan5');
  Route::get('/report/monthly/November/Kanwil-6','kanwilNovemberController@showNovemberKanwil6')->name('month.November.kan6');
  Route::get('/report/monthly/November/Kanwil-7','kanwilNovemberController@showNovemberKanwil7')->name('month.November.kan7');
  Route::get('/report/monthly/November/Kanwil-8','kanwilNovemberController@showNovemberKanwil8')->name('month.November.kan8');
  Route::get('/report/monthly/November/Kanwil-9','kanwilNovemberController@showNovemberKanwil9')->name('month.November.kan9');
  Route::get('/report/monthly/November/Kanwil-10','kanwilNovemberController@showNovemberKanwil10')->name('month.November.kan10');
  Route::get('/report/monthly/November/Kanwil-11','kanwilNovemberController@showNovemberKanwil11')->name('month.November.kan11');
  Route::get('/report/monthly/November/Kanwil-12','kanwilNovemberController@showNovemberKanwil12')->name('month.November.kan12');


  Route::get('/report/monthly/December','monthController@showDecember')->name('month.December');
  Route::get('/report/monthly/December/KantorPusat','kanwilDecemberController@showDecemberKp')->name('month.December.kp');
  Route::get('/report/monthly/December/Kanwil-1','kanwilDecemberController@showDecemberKanwil1')->name('month.December.kan1');
  Route::get('/report/monthly/December/Kanwil-2','kanwilDecemberController@showDecemberKanwil2')->name('month.December.kan2');
  Route::get('/report/monthly/December/Kanwil-3','kanwilDecemberController@showDecemberKanwil3')->name('month.December.kan3');
  Route::get('/report/monthly/December/Kanwil-4','kanwilDecemberController@showDecemberKanwil4')->name('month.December.kan4');
  Route::get('/report/monthly/December/Kanwil-5','kanwilDecemberController@showDecemberKanwil5')->name('month.December.kan5');
  Route::get('/report/monthly/December/Kanwil-6','kanwilDecemberController@showDecemberKanwil6')->name('month.December.kan6');
  Route::get('/report/monthly/December/Kanwil-7','kanwilDecemberController@showDecemberKanwil7')->name('month.December.kan7');
  Route::get('/report/monthly/December/Kanwil-8','kanwilDecemberController@showDecemberKanwil8')->name('month.December.kan8');
  Route::get('/report/monthly/December/Kanwil-9','kanwilDecemberController@showDecemberKanwil9')->name('month.December.kan9');
  Route::get('/report/monthly/December/Kanwil-10','kanwilDecemberController@showDecemberKanwil10')->name('month.December.kan10');
  Route::get('/report/monthly/December/Kanwil-11','kanwilDecemberController@showDecemberKanwil11')->name('month.December.kan11');
  Route::get('/report/monthly/December/Kanwil-12','kanwilDecemberController@showDecemberKanwil12')->name('month.December.kan12');

  Route::get('/report/monthly/kanwil_XII','featKanwilController@Kanwil_XII')->name('kanwil.XII');

  Route::post('checknip','NIPController@checknip')->name('checknip');
  Route::get('form/{data}','showController@formemployee')->name('data.form');
  Route::get('service','EtcController@service')->name('service');
  Route::get('category/{category}','EtcController@category')->name('category');
  Route::get('subcategory/{subcategory}','EtcController@subcategory')->name('subcategory');
  Route::prefix('admin')->group(function()
  {
    Route::middleware(['role:2'])->group(function()
    {
      Route::get('/',function(){
        return view('backend.home');})
        ->name('admin.home');
        Route::get('user/deleteduser','UserController@deleteduser')->name('admin.user.deleted');
        Route::get('user/deleted/list','UserController@deletedlist')->name('admin.user.deletedlist');
        Route::post('user/restoreuser/{id}', 'UserController@restore')->name('admin.user.restore');
        Route::resource('user','UserController',['as'=>'admin']);
        Route::get('user/manageuser/list','UserController@list')->name('backend.user.list');


        Route::resource('call','callController',['as'=>'admin']);
        Route::get('call/manageCall/list','callController@list')->name('backend.call.list');




    });
  });
});
});
});
