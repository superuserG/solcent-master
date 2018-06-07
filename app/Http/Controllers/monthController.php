<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class monthController extends Controller
{
  public function showJanuary(){

    //call
    $present = DB::table('report_calls')
          ->select('presentedCall as presented')
          ->where('months','=','Januari')
          ->get()->toArray();
    $present = array_column($present,'presented');

    $handle = DB::table('report_calls')
          ->select('handledCall as handled')
          ->where('months','=','Januari')
          ->get()->toArray();
    $handle = array_column($handle,'handled');

    $abandon = DB::table('report_calls')
          ->select('abandonedCall as abandoned')
          ->where('months','=','Januari')
          ->get()->toArray();
    $abandon = array_column($abandon,'abandoned');

    // compare
    $calljan = DB::table('report_calls')
          ->select('presentedCall as call')
          ->where('months','=','Januari')
          ->get()->toArray();
    $calljan = array_column($calljan,'call');

    $ticket_jan = DB::table('report_solcents')
          ->select(DB::raw('Count(WO_ID) as ticket'))
          ->whereMonth('Submit_Date','=',date('01'))
          ->get()->toArray();
    $ticket_jan = array_column($ticket_jan,'ticket');

    // top question
    $question = DB::table('report_solcents')
              ->select(array(DB::raw('count(Category_1) as Question')))
              ->whereMonth('Submit_Date','=',date('01'))
              ->groupBy('Category_1')
              ->orderBy('Question','desc')
              ->get()->toArray();
    $question = array_column($question, 'Question');

    $cat = DB::table('report_solcents')
            ->select(array('Category_1 as Cat', DB::raw('count(Category_1) as result')))
            ->whereMonth('Submit_Date','=',date('01'))
            ->take(10)
            ->groupBy('Category_1')
            ->orderBy('Result','desc')
            ->get()->toArray();
    $cat = array_column($cat, 'Cat');


    return view('Page_Month.january')
    ->with('present',json_encode($present,JSON_NUMERIC_CHECK))
    ->with('handle',json_encode($handle,JSON_NUMERIC_CHECK))
    ->with('abandon',json_encode($abandon,JSON_NUMERIC_CHECK))
    ->with('calljan',json_encode($calljan,JSON_NUMERIC_CHECK))
    ->with('ticket_jan',json_encode($ticket_jan,JSON_NUMERIC_CHECK))
    ->with('question',json_encode($question,JSON_NUMERIC_CHECK))
    ->with('cat',json_encode($cat,JSON_NUMERIC_CHECK))
    ;
  }

  public function showFebruary(){
    return view('Page_Month.february');
  }

  public function showMarch(){
    return view('Page_Month.march');
  }

  public function showApril(){
    return view('Page_Month.april');
  }

  public function showMay(){
    return view('Page_Month.may');
  }

  public function showJune(){
    return view('Page_Month.june');
  }

  public function showJuly(){
    return view('Page_Month.july');
  }

  public function showAugust(){
    return view('Page_Month.august');
  }

  public function showSeptember(){
    return view('Page_Month.september');
  }

  public function showOctober(){
    return view('Page_Month.october');
  }

  public function showNovember(){
    return view('Page_Month.november');
  }

  public function showDecember(){
    return view('Page_Month.december');
  }

}
