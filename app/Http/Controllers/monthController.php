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

    //call
    $present = DB::table('report_calls')
          ->select('presentedCall as presented')
          ->where('months','=','February')
          ->get()->toArray();
    $present = array_column($present,'presented');

    $handle = DB::table('report_calls')
          ->select('handledCall as handled')
          ->where('months','=','February')
          ->get()->toArray();
    $handle = array_column($handle,'handled');

    $abandon = DB::table('report_calls')
          ->select('abandonedCall as abandoned')
          ->where('months','=','February')
          ->get()->toArray();
    $abandon = array_column($abandon,'abandoned');

    // compare
    $callFeb = DB::table('report_calls')
          ->select('presentedCall as call')
          ->where('months','=','February')
          ->get()->toArray();
    $callFeb = array_column($callFeb,'call');

    $ticket_feb = DB::table('report_solcents')
          ->select(DB::raw('Count(WO_ID) as ticket'))
          ->whereMonth('Submit_Date','=',date('02'))
          ->get()->toArray();
    $ticket_feb = array_column($ticket_feb,'ticket');

    $question = DB::table('report_solcents')
              ->select(array(DB::raw('count(Category_1) as Question')))
              ->whereMonth('Submit_Date','=',date('02'))
              ->groupBy('Category_1')
              ->orderBy('Question','desc')
              ->get()->toArray();
    $question = array_column($question, 'Question');

    $cat = DB::table('report_solcents')
            ->select(array('Category_1 as Cat', DB::raw('count(Category_1) as result')))
            ->whereMonth('Submit_Date','=',date('02'))
            ->take(10)
            ->groupBy('Category_1')
            ->orderBy('Result','desc')
            ->get()->toArray();
    $cat = array_column($cat, 'Cat');

    return view('Page_Month.february')
    ->with('present',json_encode($present,JSON_NUMERIC_CHECK))
    ->with('handle',json_encode($handle,JSON_NUMERIC_CHECK))
    ->with('abandon',json_encode($abandon,JSON_NUMERIC_CHECK))
    ->with('callFeb',json_encode($callFeb,JSON_NUMERIC_CHECK))
    ->with('ticket_feb',json_encode($ticket_feb,JSON_NUMERIC_CHECK))
    ->with('question',json_encode($question,JSON_NUMERIC_CHECK))
    ->with('cat',json_encode($cat,JSON_NUMERIC_CHECK))
    ;
  }

  public function showMarch(){
    //call
    $present = DB::table('report_calls')
          ->select('presentedCall as presented')
          ->where('months','=','Maret')
          ->get()->toArray();
    $present = array_column($present,'presented');

    $handle = DB::table('report_calls')
          ->select('handledCall as handled')
          ->where('months','=','Maret')
          ->get()->toArray();
    $handle = array_column($handle,'handled');

    $abandon = DB::table('report_calls')
          ->select('abandonedCall as abandoned')
          ->where('months','=','Maret')
          ->get()->toArray();
    $abandon = array_column($abandon,'abandoned');

    // compare
    $callMar = DB::table('report_calls')
          ->select('presentedCall as call')
          ->where('months','=','Maret')
          ->get()->toArray();
    $callMar = array_column($callMar,'call');

    $ticket_mar = DB::table('report_solcents')
          ->select(DB::raw('Count(WO_ID) as ticket'))
          ->whereMonth('Submit_Date','=',date('03'))
          ->get()->toArray();
    $ticket_mar = array_column($ticket_mar,'ticket');

    $question = DB::table('report_solcents')
              ->select(array(DB::raw('count(Category_1) as Question')))
              ->whereMonth('Submit_Date','=',date('03'))
              ->groupBy('Category_1')
              ->orderBy('Question','desc')
              ->get()->toArray();
    $question = array_column($question, 'Question');

    $cat = DB::table('report_solcents')
            ->select(array('Category_1 as Cat', DB::raw('count(Category_1) as result')))
            ->whereMonth('Submit_Date','=',date('03'))
            ->take(10)
            ->groupBy('Category_1')
            ->orderBy('Result','desc')
            ->get()->toArray();
    $cat = array_column($cat, 'Cat');


    return view('Page_Month.march')
    ->with('present',json_encode($present,JSON_NUMERIC_CHECK))
    ->with('handle',json_encode($handle,JSON_NUMERIC_CHECK))
    ->with('abandon',json_encode($abandon,JSON_NUMERIC_CHECK))
    ->with('callMar',json_encode($callMar,JSON_NUMERIC_CHECK))
    ->with('ticket_mar',json_encode($ticket_mar,JSON_NUMERIC_CHECK))
    ->with('question',json_encode($question,JSON_NUMERIC_CHECK))
    ->with('cat',json_encode($cat,JSON_NUMERIC_CHECK))
    ;
  }

  public function showApril(){
    //call
    $present = DB::table('report_calls')
          ->select('presentedCall as presented')
          ->where('months','=','April')
          ->get()->toArray();
    $present = array_column($present,'presented');

    $handle = DB::table('report_calls')
          ->select('handledCall as handled')
          ->where('months','=','April')
          ->get()->toArray();
    $handle = array_column($handle,'handled');

    $abandon = DB::table('report_calls')
          ->select('abandonedCall as abandoned')
          ->where('months','=','April')
          ->get()->toArray();
    $abandon = array_column($abandon,'abandoned');

    // compare
    $callApr = DB::table('report_calls')
          ->select('presentedCall as call')
          ->where('months','=','April')
          ->get()->toArray();
    $callApr = array_column($callApr,'call');

    $ticket_apr = DB::table('report_solcents')
          ->select(DB::raw('Count(WO_ID) as ticket'))
          ->whereMonth('Submit_Date','=',date('04'))
          ->get()->toArray();
    $ticket_apr = array_column($ticket_apr,'ticket');

    $question = DB::table('report_solcents')
              ->select(array(DB::raw('count(Category_1) as Question')))
              ->whereMonth('Submit_Date','=',date('04'))
              ->groupBy('Category_1')
              ->orderBy('Question','desc')
              ->get()->toArray();
    $question = array_column($question, 'Question');

    $cat = DB::table('report_solcents')
            ->select(array('Category_1 as Cat', DB::raw('count(Category_1) as result')))
            ->whereMonth('Submit_Date','=',date('04'))
            ->take(10)
            ->groupBy('Category_1')
            ->orderBy('Result','desc')
            ->get()->toArray();
    $cat = array_column($cat, 'Cat');

    return view('Page_Month.april')
    ->with('present',json_encode($present,JSON_NUMERIC_CHECK))
    ->with('handle',json_encode($handle,JSON_NUMERIC_CHECK))
    ->with('abandon',json_encode($abandon,JSON_NUMERIC_CHECK))
    ->with('callApr',json_encode($callApr,JSON_NUMERIC_CHECK))
    ->with('ticket_apr',json_encode($ticket_apr,JSON_NUMERIC_CHECK))
    ->with('question',json_encode($question,JSON_NUMERIC_CHECK))
    ->with('cat',json_encode($cat,JSON_NUMERIC_CHECK))
    ;
  }

  public function showMay(){
    // //call
    // $present = DB::table('report_calls')
    //       ->select('presentedCall as presented')
    //       ->where('months','=','May')
    //       ->get()->toArray();
    // $present = array_column($present,'presented');
    //
    // $handle = DB::table('report_calls')
    //       ->select('handledCall as handled')
    //       ->where('months','=','May')
    //       ->get()->toArray();
    // $handle = array_column($handle,'handled');
    //
    // $abandon = DB::table('report_calls')
    //       ->select('abandonedCall as abandoned')
    //       ->where('months','=','May')
    //       ->get()->toArray();
    // $abandon = array_column($abandon,'abandoned');

    // compare
    // $callMay = DB::table('report_calls')
    //       ->select('presentedCall as call')
    //       ->where('months','=','May')
    //       ->get()->toArray();
    // $callMay = array_column($callMay,'call');

    $ticket_may = DB::table('report_solcents')
          ->select(DB::raw('Count(WO_ID) as ticket'))
          ->whereMonth('Submit_Date','=',date('05'))
          ->get()->toArray();
    $ticket_may = array_column($ticket_may,'ticket');

    $question = DB::table('report_solcents')
              ->select(array(DB::raw('count(Category_1) as Question')))
              ->whereMonth('Submit_Date','=',date('05'))
              ->groupBy('Category_1')
              ->orderBy('Question','desc')
              ->get()->toArray();
    $question = array_column($question, 'Question');

    $cat = DB::table('report_solcents')
            ->select(array('Category_1 as Cat', DB::raw('count(Category_1) as result')))
            ->whereMonth('Submit_Date','=',date('05'))
            ->take(10)
            ->groupBy('Category_1')
            ->orderBy('Result','desc')
            ->get()->toArray();
    $cat = array_column($cat, 'Cat');

    return view('Page_Month.may')
    // ->with('present',json_encode($present,JSON_NUMERIC_CHECK))
    // ->with('handle',json_encode($handle,JSON_NUMERIC_CHECK))
    // ->with('abandon',json_encode($abandon,JSON_NUMERIC_CHECK))
    // ->with('callMay',json_encode($callMay,JSON_NUMERIC_CHECK))
    ->with('ticket_may',json_encode($ticket_may,JSON_NUMERIC_CHECK))
    ->with('question',json_encode($question,JSON_NUMERIC_CHECK))
    ->with('cat',json_encode($cat,JSON_NUMERIC_CHECK))
    ;
  }

  public function showJune(){
    // //call
    // $present = DB::table('report_calls')
    //       ->select('presentedCall as presented')
    //       ->where('months','=','June')
    //       ->get()->toArray();
    // $present = array_column($present,'presented');
    //
    // $handle = DB::table('report_calls')
    //       ->select('handledCall as handled')
    //       ->where('months','=','June')
    //       ->get()->toArray();
    // $handle = array_column($handle,'handled');
    //
    // $abandon = DB::table('report_calls')
    //       ->select('abandonedCall as abandoned')
    //       ->where('months','=','June')
    //       ->get()->toArray();
    // $abandon = array_column($abandon,'abandoned');

    // compare
    // $callJune = DB::table('report_calls')
    //       ->select('presentedCall as call')
    //       ->where('months','=','June')
    //       ->get()->toArray();
    // $callJune = array_column($callJune,'call');

    $ticket_june = DB::table('report_solcents')
          ->select(DB::raw('Count(WO_ID) as ticket'))
          ->whereMonth('Submit_Date','=',date('06'))
          ->get()->toArray();
    $ticket_june = array_column($ticket_june,'ticket');

    $question = DB::table('report_solcents')
              ->select(array(DB::raw('count(Category_1) as Question')))
              ->whereMonth('Submit_Date','=',date('06'))
              ->groupBy('Category_1')
              ->orderBy('Question','desc')
              ->get()->toArray();
    $question = array_column($question, 'Question');

    $cat = DB::table('report_solcents')
            ->select(array('Category_1 as Cat', DB::raw('count(Category_1) as result')))
            ->whereMonth('Submit_Date','=',date('06'))
            ->take(10)
            ->groupBy('Category_1')
            ->orderBy('Result','desc')
            ->get()->toArray();
    $cat = array_column($cat, 'Cat');

    return view('Page_Month.june')
    // ->with('present',json_encode($present,JSON_NUMERIC_CHECK))
    // ->with('handle',json_encode($handle,JSON_NUMERIC_CHECK))
    // ->with('abandon',json_encode($abandon,JSON_NUMERIC_CHECK))
    // ->with('callJune',json_encode($callJune,JSON_NUMERIC_CHECK))
    ->with('ticket_june',json_encode($ticket_june,JSON_NUMERIC_CHECK))
    ->with('question',json_encode($question,JSON_NUMERIC_CHECK))
    ->with('cat',json_encode($cat,JSON_NUMERIC_CHECK))
    ;
  }

  public function showJuly(){
    $present = DB::table('report_calls')
          ->select('presentedCall as presented')
          ->where('months','=','July')
          ->get()->toArray();
    $present = array_column($present,'presented');

    $handle = DB::table('report_calls')
          ->select('handledCall as handled')
          ->where('months','=','July')
          ->get()->toArray();
    $handle = array_column($handle,'handled');

    $abandon = DB::table('report_calls')
          ->select('abandonedCall as abandoned')
          ->where('months','=','July')
          ->get()->toArray();
    $abandon = array_column($abandon,'abandoned');

    // compare
    $calljan = DB::table('report_calls')
          ->select('presentedCall as call')
          ->where('months','=','July')
          ->get()->toArray();
    $calljan = array_column($calljan,'call');

    $ticket_jan = DB::table('report_solcents')
          ->select(DB::raw('Count(WO_ID) as ticket'))
          ->whereMonth('Submit_Date','=',date('07'))
          ->get()->toArray();
    $ticket_jan = array_column($ticket_jan,'ticket');

    // top question
    $question = DB::table('report_solcents')
              ->select(array(DB::raw('count(Category_1) as Question')))
              ->whereMonth('Submit_Date','=',date('07'))
              ->groupBy('Category_1')
              ->orderBy('Question','desc')
              ->get()->toArray();
    $question = array_column($question, 'Question');

    $cat = DB::table('report_solcents')
            ->select(array('Category_1 as Cat', DB::raw('count(Category_1) as result')))
            ->whereMonth('Submit_Date','=',date('07'))
            ->take(10)
            ->groupBy('Category_1')
            ->orderBy('Result','desc')
            ->get()->toArray();
    $cat = array_column($cat, 'Cat');


    return view('Page_Month.july')
    ->with('present',json_encode($present,JSON_NUMERIC_CHECK))
    ->with('handle',json_encode($handle,JSON_NUMERIC_CHECK))
    ->with('abandon',json_encode($abandon,JSON_NUMERIC_CHECK))
    ->with('calljan',json_encode($calljan,JSON_NUMERIC_CHECK))
    ->with('ticket_jan',json_encode($ticket_jan,JSON_NUMERIC_CHECK))
    ->with('question',json_encode($question,JSON_NUMERIC_CHECK))
    ->with('cat',json_encode($cat,JSON_NUMERIC_CHECK))
    ;
  }

  public function showAugust(){
    $present = DB::table('report_calls')
          ->select('presentedCall as presented')
          ->where('months','=','August')
          ->get()->toArray();
    $present = array_column($present,'presented');

    $handle = DB::table('report_calls')
          ->select('handledCall as handled')
          ->where('months','=','August')
          ->get()->toArray();
    $handle = array_column($handle,'handled');

    $abandon = DB::table('report_calls')
          ->select('abandonedCall as abandoned')
          ->where('months','=','August')
          ->get()->toArray();
    $abandon = array_column($abandon,'abandoned');

    // compare
    $calljan = DB::table('report_calls')
          ->select('presentedCall as call')
          ->where('months','=','August')
          ->get()->toArray();
    $calljan = array_column($calljan,'call');

    $ticket_jan = DB::table('report_solcents')
          ->select(DB::raw('Count(WO_ID) as ticket'))
          ->whereMonth('Submit_Date','=',date('08'))
          ->get()->toArray();
    $ticket_jan = array_column($ticket_jan,'ticket');

    // top question
    $question = DB::table('report_solcents')
              ->select(array(DB::raw('count(Category_1) as Question')))
              ->whereMonth('Submit_Date','=',date('08'))
              ->groupBy('Category_1')
              ->orderBy('Question','desc')
              ->get()->toArray();
    $question = array_column($question, 'Question');

    $cat = DB::table('report_solcents')
            ->select(array('Category_1 as Cat', DB::raw('count(Category_1) as result')))
            ->whereMonth('Submit_Date','=',date('08'))
            ->take(10)
            ->groupBy('Category_1')
            ->orderBy('Result','desc')
            ->get()->toArray();
    $cat = array_column($cat, 'Cat');

    return view('Page_Month.august')
    ->with('present',json_encode($present,JSON_NUMERIC_CHECK))
    ->with('handle',json_encode($handle,JSON_NUMERIC_CHECK))
    ->with('abandon',json_encode($abandon,JSON_NUMERIC_CHECK))
    ->with('calljan',json_encode($calljan,JSON_NUMERIC_CHECK))
    ->with('ticket_jan',json_encode($ticket_jan,JSON_NUMERIC_CHECK))
    ->with('question',json_encode($question,JSON_NUMERIC_CHECK))
    ->with('cat',json_encode($cat,JSON_NUMERIC_CHECK))
    ;  }

  public function showSeptember(){
    $present = DB::table('report_calls')
          ->select('presentedCall as presented')
          ->where('months','=','September')
          ->get()->toArray();
    $present = array_column($present,'presented');

    $handle = DB::table('report_calls')
          ->select('handledCall as handled')
          ->where('months','=','September')
          ->get()->toArray();
    $handle = array_column($handle,'handled');

    $abandon = DB::table('report_calls')
          ->select('abandonedCall as abandoned')
          ->where('months','=','September')
          ->get()->toArray();
    $abandon = array_column($abandon,'abandoned');

    // compare
    $calljan = DB::table('report_calls')
          ->select('presentedCall as call')
          ->where('months','=','September')
          ->get()->toArray();
    $calljan = array_column($calljan,'call');

    $ticket_jan = DB::table('report_solcents')
          ->select(DB::raw('Count(WO_ID) as ticket'))
          ->whereMonth('Submit_Date','=',date('09'))
          ->get()->toArray();
    $ticket_jan = array_column($ticket_jan,'ticket');

    // top question
    $question = DB::table('report_solcents')
              ->select(array(DB::raw('count(Category_1) as Question')))
              ->whereMonth('Submit_Date','=',date('09'))
              ->groupBy('Category_1')
              ->orderBy('Question','desc')
              ->get()->toArray();
    $question = array_column($question, 'Question');

    $cat = DB::table('report_solcents')
            ->select(array('Category_1 as Cat', DB::raw('count(Category_1) as result')))
            ->whereMonth('Submit_Date','=',date('09'))
            ->take(10)
            ->groupBy('Category_1')
            ->orderBy('Result','desc')
            ->get()->toArray();
    $cat = array_column($cat, 'Cat');

    return view('Page_Month.september')
    ->with('present',json_encode($present,JSON_NUMERIC_CHECK))
    ->with('handle',json_encode($handle,JSON_NUMERIC_CHECK))
    ->with('abandon',json_encode($abandon,JSON_NUMERIC_CHECK))
    ->with('calljan',json_encode($calljan,JSON_NUMERIC_CHECK))
    ->with('ticket_jan',json_encode($ticket_jan,JSON_NUMERIC_CHECK))
    ->with('question',json_encode($question,JSON_NUMERIC_CHECK))
    ->with('cat',json_encode($cat,JSON_NUMERIC_CHECK))
    ;
  }

  public function showOctober(){
    $present = DB::table('report_calls')
          ->select('presentedCall as presented')
          ->where('months','=','October')
          ->get()->toArray();
    $present = array_column($present,'presented');

    $handle = DB::table('report_calls')
          ->select('handledCall as handled')
          ->where('months','=','October')
          ->get()->toArray();
    $handle = array_column($handle,'handled');

    $abandon = DB::table('report_calls')
          ->select('abandonedCall as abandoned')
          ->where('months','=','October')
          ->get()->toArray();
    $abandon = array_column($abandon,'abandoned');

    // compare
    $calljan = DB::table('report_calls')
          ->select('presentedCall as call')
          ->where('months','=','October')
          ->get()->toArray();
    $calljan = array_column($calljan,'call');

    $ticket_jan = DB::table('report_solcents')
          ->select(DB::raw('Count(WO_ID) as ticket'))
          ->whereMonth('Submit_Date','=',date('10'))
          ->get()->toArray();
    $ticket_jan = array_column($ticket_jan,'ticket');

    // top question
    $question = DB::table('report_solcents')
              ->select(array(DB::raw('count(Category_1) as Question')))
              ->whereMonth('Submit_Date','=',date('10'))
              ->groupBy('Category_1')
              ->orderBy('Question','desc')
              ->get()->toArray();
    $question = array_column($question, 'Question');

    $cat = DB::table('report_solcents')
            ->select(array('Category_1 as Cat', DB::raw('count(Category_1) as result')))
            ->whereMonth('Submit_Date','=',date('10'))
            ->take(10)
            ->groupBy('Category_1')
            ->orderBy('Result','desc')
            ->get()->toArray();
    $cat = array_column($cat, 'Cat');

    return view('Page_Month.october')
    ->with('present',json_encode($present,JSON_NUMERIC_CHECK))
    ->with('handle',json_encode($handle,JSON_NUMERIC_CHECK))
    ->with('abandon',json_encode($abandon,JSON_NUMERIC_CHECK))
    ->with('calljan',json_encode($calljan,JSON_NUMERIC_CHECK))
    ->with('ticket_jan',json_encode($ticket_jan,JSON_NUMERIC_CHECK))
    ->with('question',json_encode($question,JSON_NUMERIC_CHECK))
    ->with('cat',json_encode($cat,JSON_NUMERIC_CHECK))
    ;
  }

  public function showNovember(){
    $present = DB::table('report_calls')
          ->select('presentedCall as presented')
          ->where('months','=','November')
          ->get()->toArray();
    $present = array_column($present,'presented');

    $handle = DB::table('report_calls')
          ->select('handledCall as handled')
          ->where('months','=','November')
          ->get()->toArray();
    $handle = array_column($handle,'handled');

    $abandon = DB::table('report_calls')
          ->select('abandonedCall as abandoned')
          ->where('months','=','November')
          ->get()->toArray();
    $abandon = array_column($abandon,'abandoned');

    // compare
    $calljan = DB::table('report_calls')
          ->select('presentedCall as call')
          ->where('months','=','November')
          ->get()->toArray();
    $calljan = array_column($calljan,'call');

    $ticket_jan = DB::table('report_solcents')
          ->select(DB::raw('Count(WO_ID) as ticket'))
          ->whereMonth('Submit_Date','=',date('11'))
          ->get()->toArray();
    $ticket_jan = array_column($ticket_jan,'ticket');

    // top question
    $question = DB::table('report_solcents')
              ->select(array(DB::raw('count(Category_1) as Question')))
              ->whereMonth('Submit_Date','=',date('11'))
              ->groupBy('Category_1')
              ->orderBy('Question','desc')
              ->get()->toArray();
    $question = array_column($question, 'Question');

    $cat = DB::table('report_solcents')
            ->select(array('Category_1 as Cat', DB::raw('count(Category_1) as result')))
            ->whereMonth('Submit_Date','=',date('11'))
            ->take(10)
            ->groupBy('Category_1')
            ->orderBy('Result','desc')
            ->get()->toArray();
    $cat = array_column($cat, 'Cat');

    return view('Page_Month.november')
    ->with('present',json_encode($present,JSON_NUMERIC_CHECK))
    ->with('handle',json_encode($handle,JSON_NUMERIC_CHECK))
    ->with('abandon',json_encode($abandon,JSON_NUMERIC_CHECK))
    ->with('calljan',json_encode($calljan,JSON_NUMERIC_CHECK))
    ->with('ticket_jan',json_encode($ticket_jan,JSON_NUMERIC_CHECK))
    ->with('question',json_encode($question,JSON_NUMERIC_CHECK))
    ->with('cat',json_encode($cat,JSON_NUMERIC_CHECK))
    ;
  }

  public function showDecember(){
    $present = DB::table('report_calls')
          ->select('presentedCall as presented')
          ->where('months','=','December')
          ->get()->toArray();
    $present = array_column($present,'presented');

    $handle = DB::table('report_calls')
          ->select('handledCall as handled')
          ->where('months','=','December')
          ->get()->toArray();
    $handle = array_column($handle,'handled');

    $abandon = DB::table('report_calls')
          ->select('abandonedCall as abandoned')
          ->where('months','=','December')
          ->get()->toArray();
    $abandon = array_column($abandon,'abandoned');

    // compare
    $calljan = DB::table('report_calls')
          ->select('presentedCall as call')
          ->where('months','=','December')
          ->get()->toArray();
    $calljan = array_column($calljan,'call');

    $ticket_jan = DB::table('report_solcents')
          ->select(DB::raw('Count(WO_ID) as ticket'))
          ->whereMonth('Submit_Date','=',date('12'))
          ->get()->toArray();
    $ticket_jan = array_column($ticket_jan,'ticket');

    // top question
    $question = DB::table('report_solcents')
              ->select(array(DB::raw('count(Category_1) as Question')))
              ->whereMonth('Submit_Date','=',date('12'))
              ->groupBy('Category_1')
              ->orderBy('Question','desc')
              ->get()->toArray();
    $question = array_column($question, 'Question');

    $cat = DB::table('report_solcents')
            ->select(array('Category_1 as Cat', DB::raw('count(Category_1) as result')))
            ->whereMonth('Submit_Date','=',date('12'))
            ->take(10)
            ->groupBy('Category_1')
            ->orderBy('Result','desc')
            ->get()->toArray();
    $cat = array_column($cat, 'Cat');

    return view('Page_Month.december')
    ->with('present',json_encode($present,JSON_NUMERIC_CHECK))
    ->with('handle',json_encode($handle,JSON_NUMERIC_CHECK))
    ->with('abandon',json_encode($abandon,JSON_NUMERIC_CHECK))
    ->with('calljan',json_encode($calljan,JSON_NUMERIC_CHECK))
    ->with('ticket_jan',json_encode($ticket_jan,JSON_NUMERIC_CHECK))
    ->with('question',json_encode($question,JSON_NUMERIC_CHECK))
    ->with('cat',json_encode($cat,JSON_NUMERIC_CHECK))
    ;
  }

}