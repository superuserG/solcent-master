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
          ->where('months','=','January')
          ->get()->toArray();
    $present = array_column($present,'presented');

    $handle = DB::table('report_calls')
          ->select('handledCall as handled')
          ->where('months','=','January')
          ->get()->toArray();
    $handle = array_column($handle,'handled');

    $abandon = DB::table('report_calls')
          ->select('abandonedCall as abandoned')
          ->where('months','=','January')
          ->get()->toArray();
    $abandon = array_column($abandon,'abandoned');

    //kanwil
    $kanwil = DB::table('report_solcents')
              ->select(array(DB::raw('count(Wilayah) as wilayah')))
              ->whereMonth('created_at','=',date('01'))
              ->groupBy('Wilayah')
              ->orderBy('wilayah','desc')
              ->get()->toArray();
    $kanwil = array_column($kanwil, 'wilayah');

    $labelKanwil = DB::table('report_solcents')
            ->select(array('Wilayah as lblKanwil', DB::raw('count(Wilayah) as wilayah')))
            ->whereMonth('created_at','=',date('01'))
            ->take(10)
            ->groupBy('Wilayah')
            ->orderBy('wilayah','desc')
            ->get()->toArray();
    $labelKanwil = array_column($labelKanwil, 'lblKanwil');

    // compare
    $calljan = DB::table('report_calls')
          ->select('handledCall as call')
          ->where('months','=','January')
          ->get()->toArray();
    $calljan = array_column($calljan,'call');

    $ticket_jan = DB::table('report_solcents')
          ->select(DB::raw('Count(WO_ID) as ticket'))
          ->whereMonth('created_at','=',date('01'))
          ->get()->toArray();
    $ticket_jan = array_column($ticket_jan,'ticket');

    // top question
    $question = DB::table('report_solcents')
              ->select(array(DB::raw('count(Category_1) as Question')))
              ->where('Category_1','!=','Operator')
              ->where('Category_1','!=','Keluhan/Kritik/Saran')
              ->whereMonth('created_at','=',date('01'))
              ->groupBy('Category_1')
              ->orderBy('Question','desc')
              ->get()->toArray();
    $question = array_column($question, 'Question');

    $cat = DB::table('report_solcents')
            ->select(array('Category_1 as Cat', DB::raw('count(Category_1) as result')))
            ->where('Category_1','!=','Operator')
            ->where('Category_1','!=','Keluhan/Kritik/Saran')
            ->whereMonth('created_at','=',date('01'))
            ->take(10)
            ->groupBy('Category_1')
            ->orderBy('Result','desc')
            ->get()->toArray();
    $cat = array_column($cat, 'Cat');

    $subQuestion = DB::table('report_solcents')
              ->select(array(DB::raw('count(Category_2) as Question')))
              ->where('Category_2','!=','Unit Kerja Kantor Pusat Lainnya')
              ->whereMonth('created_at','=',date('01'))
              ->groupBy('Category_2')
              ->orderBy('Question','desc')
              ->get()->toArray();
    $subQuestion = array_column($subQuestion, 'Question');

    $cat2 = DB::table('report_solcents')
            ->select(array('Category_2 as Cat', DB::raw('count(Category_2) as result')))
            ->where('Category_2','!=','Unit Kerja Kantor Pusat Lainnya')
            ->whereMonth('created_at','=',date('01'))
            ->take(10)
            ->groupBy('Category_2')
            ->orderBy('Result','desc')
            ->get()->toArray();
    $cat2 = array_column($cat2, 'Cat');

    //KCU
    $kcu = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site) as kcu')))
              ->where('Cabang','=','True')
              ->whereMonth('created_at','=',date('01'))
              ->groupBy('Site','Wilayah')
              ->orderBy('kcu','desc')
              ->get()->toArray();
    $kcu = array_column($kcu, 'kcu');

    $labelKcu = DB::table('report_solcents')
            ->select(array('Site as lblKcu', DB::raw('count(Site) as kcu')))
            ->where('Cabang','=','True')
            ->whereMonth('created_at','=',date('01'))
            ->take(10)
            ->groupBy('Site','Wilayah')
            ->orderBy('kcu','desc')
            ->get()->toArray();
    $labelKcu = array_column($labelKcu, 'lblKcu');

    //KCP
    $kcp = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site) as kcp')))
              ->where('Cabang','=','False')
              ->whereMonth('created_at','=',date('01'))
              ->groupBy('Site','Wilayah')
              ->orderBy('kcp','desc')
              ->get()->toArray();
    $kcp = array_column($kcp, 'kcp');

    $labelKcp = DB::table('report_solcents')
            ->select(array('Site as lblKcp', DB::raw('count(Site) as kcp')))
            ->where('Cabang','=','False')
            ->whereMonth('created_at','=',date('01'))
            ->take(10)
            ->groupBy('Site','Wilayah')
            ->orderBy('kcp','desc')
            ->get()->toArray();
    $labelKcp = array_column($labelKcp, 'lblKcp');

    return view('Page_Month.january')
    ->with('present',json_encode($present,JSON_NUMERIC_CHECK))
    ->with('handle',json_encode($handle,JSON_NUMERIC_CHECK))
    ->with('abandon',json_encode($abandon,JSON_NUMERIC_CHECK))
    ->with('calljan',json_encode($calljan,JSON_NUMERIC_CHECK))
    ->with('ticket_jan',json_encode($ticket_jan,JSON_NUMERIC_CHECK))
    ->with('question',json_encode($question,JSON_NUMERIC_CHECK))
    ->with('cat',json_encode($cat,JSON_NUMERIC_CHECK))
    ->with('kanwil',json_encode($kanwil,JSON_NUMERIC_CHECK))
    ->with('labelKanwil',json_encode($labelKanwil,JSON_NUMERIC_CHECK))
    ->with('cat2',json_encode($cat2,JSON_NUMERIC_CHECK))
    ->with('subQuestion',json_encode($labelKanwil,JSON_NUMERIC_CHECK))
    ->with('kcu',json_encode($kcu,JSON_NUMERIC_CHECK))
    ->with('labelKcu',json_encode($labelKcu,JSON_NUMERIC_CHECK))
    ->with('kcp',json_encode($kcp,JSON_NUMERIC_CHECK))
    ->with('labelKcp',json_encode($labelKcp,JSON_NUMERIC_CHECK))
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

    //kanwil
    $kanwil = DB::table('report_solcents')
              ->select(array(DB::raw('count(Wilayah) as wilayah')))
              ->whereMonth('created_at','=',date('02'))
              ->groupBy('Wilayah')
              ->orderBy('wilayah','desc')
              ->get()->toArray();
    $kanwil = array_column($kanwil, 'wilayah');

    $labelKanwil = DB::table('report_solcents')
            ->select(array('Wilayah as lblKanwil', DB::raw('count(Wilayah) as wilayah')))
            ->whereMonth('created_at','=',date('02'))
            ->take(10)
            ->groupBy('Wilayah')
            ->orderBy('wilayah','desc')
            ->get()->toArray();
    $labelKanwil = array_column($labelKanwil, 'lblKanwil');

    // compare
    $callFeb = DB::table('report_calls')
          ->select('handledCall as call')
          ->where('months','=','February')
          ->get()->toArray();
    $callFeb = array_column($callFeb,'call');

    $ticket_feb = DB::table('report_solcents')
          ->select(DB::raw('Count(WO_ID) as ticket'))
          ->whereMonth('created_at','=',date('02'))
          ->get()->toArray();
    $ticket_feb = array_column($ticket_feb,'ticket');

    $question = DB::table('report_solcents')
              ->select(array(DB::raw('count(Category_1) as Question')))
              ->where('Category_1','!=','[BPO1] - Operator')
              ->whereMonth('created_at','=',date('02'))
              ->groupBy('Category_1')
              ->orderBy('Question','desc')
              ->get()->toArray();
    $question = array_column($question, 'Question');

    $cat = DB::table('report_solcents')
            ->select(array('Category_1 as Cat', DB::raw('count(Category_1) as result')))
            ->where('Category_1','!=','[BPO1] - Operator')
            ->whereMonth('created_at','=',date('02'))
            ->take(10)
            ->groupBy('Category_1')
            ->orderBy('Result','desc')
            ->get()->toArray();
    $cat = array_column($cat, 'Cat');

    $subQuestion = DB::table('report_solcents')
              ->select(array(DB::raw('count(Category_2) as Question')))
              ->where('Category_2','!=','Unit Kerja Kantor Pusat Lainnya')
              ->whereMonth('created_at','=',date('02'))
              ->groupBy('Category_2')
              ->orderBy('Question','desc')
              ->get()->toArray();
    $subQuestion = array_column($subQuestion, 'Question');

    $cat2 = DB::table('report_solcents')
            ->select(array('Category_2 as Cat', DB::raw('count(Category_2) as result')))
            ->where('Category_2','!=','Unit Kerja Kantor Pusat Lainnya')
            ->whereMonth('created_at','=',date('02'))
            ->take(10)
            ->groupBy('Category_2')
            ->orderBy('Result','desc')
            ->get()->toArray();
    $cat2 = array_column($cat2, 'Cat');

    //KCU
    $kcu = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site_Group) as kcu')))
              ->whereMonth('created_at','=',date('02'))
              ->groupBy('Site_Group','Wilayah')
              ->orderBy('kcu','desc')
              ->get()->toArray();
    $kcu = array_column($kcu, 'kcu');

    $labelKcu = DB::table('report_solcents')
            ->select(array('Site_Group as lblKcu', DB::raw('count(Site_Group) as kcu')))
            ->whereMonth('created_at','=',date('02'))
            ->take(10)
            ->groupBy('Site_Group','Wilayah')
            ->orderBy('kcu','desc')
            ->get()->toArray();
    $labelKcu = array_column($labelKcu, 'lblKcu');

    //KCP
    $kcp = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site) as kcp')))

              ->whereMonth('created_at','=',date('02'))
              ->groupBy('Site','Wilayah')
              ->orderBy('kcp','desc')
              ->get()->toArray();
    $kcp = array_column($kcp, 'kcp');

    $labelKcp = DB::table('report_solcents')
            ->select(array('Site as lblKcp', DB::raw('count(Site) as kcp')))
            ->whereMonth('created_at','=',date('02'))
            ->take(10)
            ->groupBy('Site','Wilayah')
            ->orderBy('kcp','desc')
            ->get()->toArray();
    $labelKcp = array_column($labelKcp, 'lblKcp');

    return view('Page_Month.february')
    ->with('present',json_encode($present,JSON_NUMERIC_CHECK))
    ->with('handle',json_encode($handle,JSON_NUMERIC_CHECK))
    ->with('abandon',json_encode($abandon,JSON_NUMERIC_CHECK))
    ->with('callFeb',json_encode($callFeb,JSON_NUMERIC_CHECK))
    ->with('ticket_feb',json_encode($ticket_feb,JSON_NUMERIC_CHECK))
    ->with('question',json_encode($question,JSON_NUMERIC_CHECK))
    ->with('cat',json_encode($cat,JSON_NUMERIC_CHECK))
    ->with('kanwil',json_encode($kanwil,JSON_NUMERIC_CHECK))
    ->with('labelKanwil',json_encode($labelKanwil,JSON_NUMERIC_CHECK))
    ->with('cat2',json_encode($cat2,JSON_NUMERIC_CHECK))
    ->with('subQuestion',json_encode($labelKanwil,JSON_NUMERIC_CHECK))
    ->with('kcu',json_encode($kcu,JSON_NUMERIC_CHECK))
    ->with('labelKcu',json_encode($labelKcu,JSON_NUMERIC_CHECK))
    ->with('kcp',json_encode($kcp,JSON_NUMERIC_CHECK))
    ->with('labelKcp',json_encode($labelKcp,JSON_NUMERIC_CHECK))
    ;
  }

  public function showMarch(){
    //call
    $present = DB::table('report_calls')
          ->select('presentedCall as presented')
          ->where('months','=','March')
          ->get()->toArray();
    $present = array_column($present,'presented');

    $handle = DB::table('report_calls')
          ->select('handledCall as handled')
          ->where('months','=','March')
          ->get()->toArray();
    $handle = array_column($handle,'handled');

    $abandon = DB::table('report_calls')
          ->select('abandonedCall as abandoned')
          ->where('months','=','March')
          ->get()->toArray();
    $abandon = array_column($abandon,'abandoned');

    //kanwil
    $kanwil = DB::table('report_solcents')
              ->select(array(DB::raw('count(Wilayah) as wilayah')))
              ->whereMonth('created_at','=',date('03'))
              ->groupBy('Wilayah')
              ->orderBy('wilayah','desc')
              ->get()->toArray();
    $kanwil = array_column($kanwil, 'wilayah');

    $labelKanwil = DB::table('report_solcents')
            ->select(array('Wilayah as lblKanwil', DB::raw('count(Wilayah) as wilayah')))
            ->whereMonth('created_at','=',date('03'))
            ->take(10)
            ->groupBy('Wilayah')
            ->orderBy('wilayah','desc')
            ->get()->toArray();
    $labelKanwil = array_column($labelKanwil, 'lblKanwil');

    // compare
    $callMar = DB::table('report_calls')
          ->select('handledCall as call')
          ->where('months','=','March')
          ->get()->toArray();
    $callMar = array_column($callMar,'call');

    $ticket_mar = DB::table('report_solcents')
          ->select(DB::raw('Count(WO_ID) as ticket'))
          ->whereMonth('created_at','=',date('03'))
          ->get()->toArray();
    $ticket_mar = array_column($ticket_mar,'ticket');

    $question = DB::table('report_solcents')
              ->select(array(DB::raw('count(Category_1) as Question')))
              ->where('Category_1','!=','[BPO1] - Operator')
              ->whereMonth('created_at','=',date('03'))
              ->groupBy('Category_1')
              ->orderBy('Question','desc')
              ->get()->toArray();
    $question = array_column($question, 'Question');

    $cat = DB::table('report_solcents')
            ->select(array('Category_1 as Cat', DB::raw('count(Category_1) as result')))
            ->where('Category_1','!=','[BPO1] - Operator')
            ->whereMonth('created_at','=',date('03'))
            ->take(10)
            ->groupBy('Category_1')
            ->orderBy('Result','desc')
            ->get()->toArray();
    $cat = array_column($cat, 'Cat');

    $subQuestion = DB::table('report_solcents')
              ->select(array(DB::raw('count(Category_2) as Question')))
              ->where('Category_2','!=','Unit Kerja Kantor Pusat Lainnya')
              ->whereMonth('created_at','=',date('03'))
              ->groupBy('Category_2')
              ->orderBy('Question','desc')
              ->get()->toArray();
    $subQuestion = array_column($subQuestion, 'Question');

    $cat2 = DB::table('report_solcents')
            ->select(array('Category_2 as Cat', DB::raw('count(Category_2) as result')))
            ->where('Category_2','!=','Unit Kerja Kantor Pusat Lainnya')
            ->whereMonth('created_at','=',date('03'))
            ->take(10)
            ->groupBy('Category_2')
            ->orderBy('Result','desc')
            ->get()->toArray();
    $cat2 = array_column($cat2, 'Cat');

    //KCU
    $kcu = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site_Group) as kcu')))
              ->whereMonth('created_at','=',date('03'))
              ->groupBy('Site_Group','Wilayah')
              ->orderBy('kcu','desc')
              ->get()->toArray();
    $kcu = array_column($kcu, 'kcu');

    $labelKcu = DB::table('report_solcents')
            ->select(array('Site_Group as lblKcu', DB::raw('count(Site_Group) as kcu')))
            ->whereMonth('created_at','=',date('03'))
            ->take(10)
            ->groupBy('Site_Group','Wilayah')
            ->orderBy('kcu','desc')
            ->get()->toArray();
    $labelKcu = array_column($labelKcu, 'lblKcu');

    //KCP
    $kcp = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site) as kcp')))

              ->whereMonth('created_at','=',date('03'))
              ->groupBy('Site','Wilayah')
              ->orderBy('kcp','desc')
              ->get()->toArray();
    $kcp = array_column($kcp, 'kcp');

    $labelKcp = DB::table('report_solcents')
            ->select(array('Site as lblKcp', DB::raw('count(Site) as kcp')))
            ->whereMonth('created_at','=',date('03'))
            ->take(10)
            ->groupBy('Site','Wilayah')
            ->orderBy('kcp','desc')
            ->get()->toArray();
    $labelKcp = array_column($labelKcp, 'lblKcp');

    return view('Page_Month.march')
    ->with('present',json_encode($present,JSON_NUMERIC_CHECK))
    ->with('handle',json_encode($handle,JSON_NUMERIC_CHECK))
    ->with('abandon',json_encode($abandon,JSON_NUMERIC_CHECK))
    ->with('callMar',json_encode($callMar,JSON_NUMERIC_CHECK))
    ->with('ticket_mar',json_encode($ticket_mar,JSON_NUMERIC_CHECK))
    ->with('question',json_encode($question,JSON_NUMERIC_CHECK))
    ->with('cat',json_encode($cat,JSON_NUMERIC_CHECK))
    ->with('kanwil',json_encode($kanwil,JSON_NUMERIC_CHECK))
    ->with('labelKanwil',json_encode($labelKanwil,JSON_NUMERIC_CHECK))
    ->with('subQuestion',json_encode($subQuestion,JSON_NUMERIC_CHECK))
    ->with('cat2',json_encode($cat2,JSON_NUMERIC_CHECK))
    ->with('kcu',json_encode($kcu,JSON_NUMERIC_CHECK))
    ->with('labelKcu',json_encode($labelKcu,JSON_NUMERIC_CHECK))
    ->with('kcp',json_encode($kcp,JSON_NUMERIC_CHECK))
    ->with('labelKcp',json_encode($labelKcp,JSON_NUMERIC_CHECK))
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

    //kanwil
    $kanwil = DB::table('report_solcents')
              ->select(array(DB::raw('count(Wilayah) as wilayah')))
              ->whereMonth('created_at','=',date('04'))
              ->groupBy('Wilayah')
              ->orderBy('wilayah','desc')
              ->get()->toArray();
    $kanwil = array_column($kanwil, 'wilayah');

    $labelKanwil = DB::table('report_solcents')
            ->select(array('Wilayah as lblKanwil', DB::raw('count(Wilayah) as wilayah')))
            ->whereMonth('created_at','=',date('04'))
            ->take(10)
            ->groupBy('Wilayah')
            ->orderBy('wilayah','desc')
            ->get()->toArray();
    $labelKanwil = array_column($labelKanwil, 'lblKanwil');

    // compare
    $callApr = DB::table('report_calls')
          ->select('handledCall as call')
          ->where('months','=','April')
          ->get()->toArray();
    $callApr = array_column($callApr,'call');

    $ticket_apr = DB::table('report_solcents')
          ->select(DB::raw('Count(WO_ID) as ticket'))
          ->whereMonth('created_at','=',date('04'))
          ->get()->toArray();
    $ticket_apr = array_column($ticket_apr,'ticket');

    $question = DB::table('report_solcents')
              ->select(array(DB::raw('count(Category_1) as Question')))
              ->where('Category_1','!=','[BPO1] - Operator')
              ->whereMonth('created_at','=',date('04'))
              ->groupBy('Category_1')
              ->orderBy('Question','desc')
              ->get()->toArray();
    $question = array_column($question, 'Question');

    $cat = DB::table('report_solcents')
            ->select(array('Category_1 as Cat', DB::raw('count(Category_1) as result')))
            ->where('Category_1','!=','[BPO1] - Operator')
            ->whereMonth('created_at','=',date('04'))
            ->take(10)
            ->groupBy('Category_1')
            ->orderBy('Result','desc')
            ->get()->toArray();
    $cat = array_column($cat, 'Cat');

    $subQuestion = DB::table('report_solcents')
              ->select(array(DB::raw('count(Category_2) as Question')))
              ->where('Category_2','!=','Unit Kerja Kantor Pusat Lainnya')
              ->whereMonth('created_at','=',date('04'))
              ->groupBy('Category_2')
              ->orderBy('Question','desc')
              ->get()->toArray();
    $subQuestion = array_column($subQuestion, 'Question');

    $cat2 = DB::table('report_solcents')
            ->select(array('Category_2 as Cat', DB::raw('count(Category_2) as result')))
            ->where('Category_2','!=','Unit Kerja Kantor Pusat Lainnya')
            ->whereMonth('created_at','=',date('04'))
            ->take(10)
            ->groupBy('Category_2')
            ->orderBy('Result','desc')
            ->get()->toArray();
    $cat2 = array_column($cat2, 'Cat');

    //KCU
    $kcu = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site_Group) as kcu')))
              ->whereMonth('created_at','=',date('04'))
              ->groupBy('Site_Group','Wilayah')
              ->orderBy('kcu','desc')
              ->get()->toArray();
    $kcu = array_column($kcu, 'kcu');

    $labelKcu = DB::table('report_solcents')
            ->select(array('Site_Group as lblKcu', DB::raw('count(Site_Group) as kcu')))
            ->whereMonth('created_at','=',date('04'))
            ->take(10)
            ->groupBy('Site_Group','Wilayah')
            ->orderBy('kcu','desc')
            ->get()->toArray();
    $labelKcu = array_column($labelKcu, 'lblKcu');

    //KCP
    $kcp = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site) as kcp')))

              ->whereMonth('created_at','=',date('04'))
              ->groupBy('Site','Wilayah')
              ->orderBy('kcp','desc')
              ->get()->toArray();
    $kcp = array_column($kcp, 'kcp');

    $labelKcp = DB::table('report_solcents')
            ->select(array('Site as lblKcp', DB::raw('count(Site) as kcp')))
            ->whereMonth('created_at','=',date('04'))
            ->take(10)
            ->groupBy('Site','Wilayah')
            ->orderBy('kcp','desc')
            ->get()->toArray();
    $labelKcp = array_column($labelKcp, 'lblKcp');
    return view('Page_Month.april')
    ->with('present',json_encode($present,JSON_NUMERIC_CHECK))
    ->with('handle',json_encode($handle,JSON_NUMERIC_CHECK))
    ->with('abandon',json_encode($abandon,JSON_NUMERIC_CHECK))
    ->with('callApr',json_encode($callApr,JSON_NUMERIC_CHECK))
    ->with('ticket_apr',json_encode($ticket_apr,JSON_NUMERIC_CHECK))
    ->with('question',json_encode($question,JSON_NUMERIC_CHECK))
    ->with('cat',json_encode($cat,JSON_NUMERIC_CHECK))
    ->with('labelKanwil',json_encode($labelKanwil,JSON_NUMERIC_CHECK))
    ->with('kanwil',json_encode($kanwil,JSON_NUMERIC_CHECK))
    ->with('subQuestion',json_encode($subQuestion,JSON_NUMERIC_CHECK))
    ->with('cat2',json_encode($cat2,JSON_NUMERIC_CHECK))
    ->with('kcu',json_encode($kcu,JSON_NUMERIC_CHECK))
    ->with('labelKcu',json_encode($labelKcu,JSON_NUMERIC_CHECK))
    ->with('kcp',json_encode($kcp,JSON_NUMERIC_CHECK))
    ->with('labelKcp',json_encode($labelKcp,JSON_NUMERIC_CHECK))
    ;
  }

  public function showMay(){
    //call
    $present = DB::table('report_calls')
          ->select('presentedCall as presented')
          ->where('months','=','May')
          ->get()->toArray();
    $present = array_column($present,'presented');

    $handle = DB::table('report_calls')
          ->select('handledCall as handled')
          ->where('months','=','May')
          ->get()->toArray();
    $handle = array_column($handle,'handled');

    $abandon = DB::table('report_calls')
          ->select('abandonedCall as abandoned')
          ->where('months','=','May')
          ->get()->toArray();
    $abandon = array_column($abandon,'abandoned');

    //kanwil
    $kanwil = DB::table('report_solcents')
              ->select(array(DB::raw('count(Wilayah) as wilayah')))
              ->whereMonth('created_at','=',date('05'))
              ->groupBy('Wilayah')
              ->orderBy('wilayah','desc')
              ->get()->toArray();
    $kanwil = array_column($kanwil, 'wilayah');

    $labelKanwil = DB::table('report_solcents')
            ->select(array('Wilayah as lblKanwil', DB::raw('count(Wilayah) as wilayah')))
            ->whereMonth('created_at','=',date('05'))
            ->take(10)
            ->groupBy('Wilayah')
            ->orderBy('wilayah','desc')
            ->get()->toArray();
    $labelKanwil = array_column($labelKanwil, 'lblKanwil');

    //compare
    $callMay = DB::table('report_calls')
          ->select('handledCall as call')
          ->where('months','=','May')
          ->get()->toArray();
    $callMay = array_column($callMay,'call');

    $ticket_may = DB::table('report_solcents')
          ->select(DB::raw('Count(WO_ID) as ticket'))
          ->whereMonth('created_at','=',date('05'))
          ->get()->toArray();
    $ticket_may = array_column($ticket_may,'ticket');

    $question = DB::table('report_solcents')
              ->select(array(DB::raw('count(Category_1) as Question')))
              ->where('Category_1','!=','[BPO1] - Operator')
              ->whereMonth('created_at','=',date('05'))
              ->groupBy('Category_1')
              ->orderBy('Question','desc')
              ->get()->toArray();
    $question = array_column($question, 'Question');

    $cat = DB::table('report_solcents')
            ->select(array('Category_1 as Cat', DB::raw('count(Category_1) as result')))
            ->where('Category_1','!=','[BPO1] - Operator')
            ->whereMonth('created_at','=',date('05'))
            ->take(10)
            ->groupBy('Category_1')
            ->orderBy('Result','desc')
            ->get()->toArray();
    $cat = array_column($cat, 'Cat');

    $subQuestion = DB::table('report_solcents')
              ->select(array(DB::raw('count(Category_2) as Question')))
              ->where('Category_2','!=','Unit Kerja Kantor Pusat Lainnya')
              ->whereMonth('created_at','=',date('05'))
              ->groupBy('Category_2')
              ->orderBy('Question','desc')
              ->get()->toArray();
    $subQuestion = array_column($subQuestion, 'Question');

    $cat2 = DB::table('report_solcents')
            ->select(array('Category_2 as Cat', DB::raw('count(Category_2) as result')))
            ->where('Category_2','!=','Unit Kerja Kantor Pusat Lainnya')
            ->whereMonth('created_at','=',date('05'))
            ->take(10)
            ->groupBy('Category_2')
            ->orderBy('Result','desc')
            ->get()->toArray();
    $cat2 = array_column($cat2, 'Cat');

    //KCU
    $kcu = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site_Group) as kcu')))
              ->whereMonth('created_at','=',date('05'))
              ->groupBy('Site_Group','Wilayah')
              ->orderBy('kcu','desc')
              ->get()->toArray();
    $kcu = array_column($kcu, 'kcu');

    $labelKcu = DB::table('report_solcents')
            ->select(array('Site_Group as lblKcu', DB::raw('count(Site_Group) as kcu')))
            ->whereMonth('created_at','=',date('05'))
            ->take(10)
            ->groupBy('Site_Group','Wilayah')
            ->orderBy('kcu','desc')
            ->get()->toArray();
    $labelKcu = array_column($labelKcu, 'lblKcu');

    //KCP
    $kcp = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site) as kcp')))

              ->whereMonth('created_at','=',date('05'))
              ->groupBy('Site','Wilayah')
              ->orderBy('kcp','desc')
              ->get()->toArray();
    $kcp = array_column($kcp, 'kcp');

    $labelKcp = DB::table('report_solcents')
            ->select(array('Site as lblKcp', DB::raw('count(Site) as kcp')))
            ->whereMonth('created_at','=',date('05'))
            ->take(10)
            ->groupBy('Site','Wilayah')
            ->orderBy('kcp','desc')
            ->get()->toArray();
    $labelKcp = array_column($labelKcp, 'lblKcp');

    return view('Page_Month.may')
    ->with('present',json_encode($present,JSON_NUMERIC_CHECK))
    ->with('handle',json_encode($handle,JSON_NUMERIC_CHECK))
    ->with('abandon',json_encode($abandon,JSON_NUMERIC_CHECK))
    ->with('callMay',json_encode($callMay,JSON_NUMERIC_CHECK))
    ->with('ticket_may',json_encode($ticket_may,JSON_NUMERIC_CHECK))
    ->with('question',json_encode($question,JSON_NUMERIC_CHECK))
    ->with('cat',json_encode($cat,JSON_NUMERIC_CHECK))
    ->with('kanwil',json_encode($kanwil,JSON_NUMERIC_CHECK))
    ->with('labelKanwil',json_encode($labelKanwil,JSON_NUMERIC_CHECK))
    ->with('subQuestion',json_encode($subQuestion,JSON_NUMERIC_CHECK))
    ->with('cat2',json_encode($cat2,JSON_NUMERIC_CHECK))
    ->with('kcu',json_encode($kcu,JSON_NUMERIC_CHECK))
    ->with('labelKcu',json_encode($labelKcu,JSON_NUMERIC_CHECK))
    ->with('kcp',json_encode($kcp,JSON_NUMERIC_CHECK))
    ->with('labelKcp',json_encode($labelKcp,JSON_NUMERIC_CHECK))
    ;
  }

  public function showJune(){
    //call
    $present = DB::table('report_calls')
          ->select('presentedCall as presented')
          ->where('months','=','June')
          ->get()->toArray();
    $present = array_column($present,'presented');

    $handle = DB::table('report_calls')
          ->select('handledCall as handled')
          ->where('months','=','June')
          ->get()->toArray();
    $handle = array_column($handle,'handled');

    $abandon = DB::table('report_calls')
          ->select('abandonedCall as abandoned')
          ->where('months','=','June')
          ->get()->toArray();
    $abandon = array_column($abandon,'abandoned');

    //kanwil
    $kanwil = DB::table('report_solcents')
              ->select(array(DB::raw('count(Wilayah) as wilayah')))
              ->whereMonth('created_at','=',date('06'))
              ->groupBy('Wilayah')
              ->orderBy('wilayah','desc')
              ->get()->toArray();
    $kanwil = array_column($kanwil, 'wilayah');

    $labelKanwil = DB::table('report_solcents')
            ->select(array('Wilayah as lblKanwil', DB::raw('count(Wilayah) as wilayah')))
            ->whereMonth('created_at','=',date('06'))
            ->take(10)
            ->groupBy('Wilayah')
            ->orderBy('wilayah','desc')
            ->get()->toArray();
    $labelKanwil = array_column($labelKanwil, 'lblKanwil');

    //compare
    $callJune = DB::table('report_calls')
          ->select('handledCall as call')
          ->where('months','=','June')
          ->get()->toArray();
    $callJune = array_column($callJune,'call');

    $ticket_june = DB::table('report_solcents')
          ->select(DB::raw('Count(WO_ID) as ticket'))
          ->whereMonth('created_at','=',date('06'))
          ->get()->toArray();
    $ticket_june = array_column($ticket_june,'ticket');

    $question = DB::table('report_solcents')
              ->select(array(DB::raw('count(Category_1) as Question')))
              ->where('Category_1','!=','[BPO1] - Operator')
              ->whereMonth('created_at','=',date('06'))
              ->groupBy('Category_1')
              ->orderBy('Question','desc')
              ->get()->toArray();
    $question = array_column($question, 'Question');

    $cat = DB::table('report_solcents')
            ->select(array('Category_1 as Cat', DB::raw('count(Category_1) as result')))
            ->where('Category_1','!=','[BPO1] - Operator')
            ->whereMonth('created_at','=',date('06'))
            ->take(10)
            ->groupBy('Category_1')
            ->orderBy('Result','desc')
            ->get()->toArray();
    $cat = array_column($cat, 'Cat');

    $subQuestion = DB::table('report_solcents')
              ->select(array(DB::raw('count(Category_2) as Question')))
              ->where('Category_2','!=','Unit Kerja Kantor Pusat Lainnya')
              ->whereMonth('created_at','=',date('06'))
              ->groupBy('Category_2')
              ->orderBy('Question','desc')
              ->get()->toArray();
    $subQuestion = array_column($subQuestion, 'Question');

    $cat2 = DB::table('report_solcents')
            ->select(array('Category_2 as Cat', DB::raw('count(Category_2) as result')))
            ->where('Category_2','!=','Unit Kerja Kantor Pusat Lainnya')
            ->whereMonth('created_at','=',date('06'))
            ->take(10)
            ->groupBy('Category_2')
            ->orderBy('Result','desc')
            ->get()->toArray();
    $cat2 = array_column($cat2, 'Cat');

    //KCU
    $kcu = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site_Group) as kcu')))
              ->whereMonth('created_at','=',date('06'))
              ->groupBy('Site_Group','Wilayah')
              ->orderBy('kcu','desc')
              ->get()->toArray();
    $kcu = array_column($kcu, 'kcu');

    $labelKcu = DB::table('report_solcents')
            ->select(array('Site_Group as lblKcu', DB::raw('count(Site_Group) as kcu')))
            ->whereMonth('created_at','=',date('06'))
            ->take(10)
            ->groupBy('Site_Group','Wilayah')
            ->orderBy('kcu','desc')
            ->get()->toArray();
    $labelKcu = array_column($labelKcu, 'lblKcu');

    //KCP
    $kcp = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site) as kcp')))

              ->whereMonth('created_at','=',date('06'))
              ->groupBy('Site','Wilayah')
              ->orderBy('kcp','desc')
              ->get()->toArray();
    $kcp = array_column($kcp, 'kcp');

    $labelKcp = DB::table('report_solcents')
            ->select(array('Site as lblKcp', DB::raw('count(Site) as kcp')))
            ->whereMonth('created_at','=',date('06'))
            ->take(10)
            ->groupBy('Site','Wilayah')
            ->orderBy('kcp','desc')
            ->get()->toArray();
    $labelKcp = array_column($labelKcp, 'lblKcp');

    return view('Page_Month.june')
    ->with('present',json_encode($present,JSON_NUMERIC_CHECK))
    ->with('handle',json_encode($handle,JSON_NUMERIC_CHECK))
    ->with('abandon',json_encode($abandon,JSON_NUMERIC_CHECK))
    ->with('callJune',json_encode($callJune,JSON_NUMERIC_CHECK))
    ->with('ticket_june',json_encode($ticket_june,JSON_NUMERIC_CHECK))
    ->with('question',json_encode($question,JSON_NUMERIC_CHECK))
    ->with('cat',json_encode($cat,JSON_NUMERIC_CHECK))
    ->with('kanwil',json_encode($kanwil,JSON_NUMERIC_CHECK))
    ->with('labelKanwil',json_encode($labelKanwil,JSON_NUMERIC_CHECK))
    ->with('subQuestion',json_encode($subQuestion,JSON_NUMERIC_CHECK))
    ->with('cat2',json_encode($cat2,JSON_NUMERIC_CHECK))
    ->with('kcu',json_encode($kcu,JSON_NUMERIC_CHECK))
    ->with('labelKcu',json_encode($labelKcu,JSON_NUMERIC_CHECK))
    ->with('kcp',json_encode($kcp,JSON_NUMERIC_CHECK))
    ->with('labelKcp',json_encode($labelKcp,JSON_NUMERIC_CHECK))
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

    //kanwil
    $kanwil = DB::table('report_solcents')
              ->select(array(DB::raw('count(Wilayah) as wilayah')))
              ->whereMonth('created_at','=',date('07'))
              ->groupBy('Wilayah')
              ->orderBy('wilayah','desc')
              ->get()->toArray();
    $kanwil = array_column($kanwil, 'wilayah');

    $labelKanwil = DB::table('report_solcents')
            ->select(array('Wilayah as lblKanwil', DB::raw('count(Wilayah) as wilayah')))
            ->whereMonth('created_at','=',date('07'))
            ->take(10)
            ->groupBy('Wilayah')
            ->orderBy('wilayah','desc')
            ->get()->toArray();
    $labelKanwil = array_column($labelKanwil, 'lblKanwil');

    //KCU
    $kcu = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site_Group) as kcu')))
              ->whereMonth('created_at','=',date('07'))
              ->groupBy('Site_Group','Wilayah')
              ->orderBy('kcu','desc')
              ->get()->toArray();
    $kcu = array_column($kcu, 'kcu');

    $labelKcu = DB::table('report_solcents')
            ->select(array('Site_Group as lblKcu', DB::raw('count(Site_Group) as kcu')))
            ->whereMonth('created_at','=',date('07'))
            ->take(10)
            ->groupBy('Site_Group','Wilayah')
            ->orderBy('kcu','desc')
            ->get()->toArray();
    $labelKcu = array_column($labelKcu, 'lblKcu');

    //KCP
    $kcp = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site) as kcp')))

              ->whereMonth('created_at','=',date('07'))
              ->groupBy('Site','Wilayah')
              ->orderBy('kcp','desc')
              ->get()->toArray();
    $kcp = array_column($kcp, 'kcp');

    $labelKcp = DB::table('report_solcents')
            ->select(array('Site as lblKcp', DB::raw('count(Site) as kcp')))
            ->whereMonth('created_at','=',date('07'))
            ->take(10)
            ->groupBy('Site','Wilayah')
            ->orderBy('kcp','desc')
            ->get()->toArray();
    $labelKcp = array_column($labelKcp, 'lblKcp');

    // compare
    $callJuly = DB::table('report_calls')
          ->select('handledCall as call')
          ->where('months','=','July')
          ->get()->toArray();
    $callJuly = array_column($callJuly,'call');

    $ticket_july = DB::table('report_solcents')
          ->select(DB::raw('Count(WO_ID) as ticket'))
          ->whereMonth('created_at','=',date('07'))
          ->get()->toArray();
    $ticket_july = array_column($ticket_july,'ticket');

    // top question
    $question = DB::table('report_solcents')
              ->select(array(DB::raw('count(Category_1) as Question')))
              ->where('Category_1','!=','[BPO1] - Operator')
              ->whereMonth('created_at','=',date('07'))
              ->groupBy('Category_1')
              ->orderBy('Question','desc')
              ->get()->toArray();
    $question = array_column($question, 'Question');

    $cat = DB::table('report_solcents')
            ->select(array('Category_1 as Cat', DB::raw('count(Category_1) as result')))
            ->where('Category_1','!=','[BPO1] - Operator')
            ->whereMonth('created_at','=',date('07'))
            ->take(10)
            ->groupBy('Category_1')
            ->orderBy('Result','desc')
            ->get()->toArray();
    $cat = array_column($cat, 'Cat');

    $subQuestion = DB::table('report_solcents')
              ->select(array(DB::raw('count(Category_2) as Question')))
              ->where('Category_2','!=','Unit Kerja Kantor Pusat Lainnya')
              ->whereMonth('created_at','=',date('07'))
              ->groupBy('Category_2')
              ->orderBy('Question','desc')
              ->get()->toArray();
    $subQuestion = array_column($subQuestion, 'Question');

    $cat2 = DB::table('report_solcents')
            ->select(array('Category_2 as Cat', DB::raw('count(Category_2) as result')))
            ->where('Category_2','!=','Unit Kerja Kantor Pusat Lainnya')
            ->whereMonth('created_at','=',date('07'))
            ->take(10)
            ->groupBy('Category_2')
            ->orderBy('Result','desc')
            ->get()->toArray();
    $cat2 = array_column($cat2, 'Cat');


    return view('Page_Month.july')
    ->with('present',json_encode($present,JSON_NUMERIC_CHECK))
    ->with('handle',json_encode($handle,JSON_NUMERIC_CHECK))
    ->with('abandon',json_encode($abandon,JSON_NUMERIC_CHECK))
    ->with('callJuly',json_encode($callJuly,JSON_NUMERIC_CHECK))
    ->with('ticket_july',json_encode($ticket_july,JSON_NUMERIC_CHECK))
    ->with('question',json_encode($question,JSON_NUMERIC_CHECK))
    ->with('cat',json_encode($cat,JSON_NUMERIC_CHECK))
    ->with('kanwil',json_encode($kanwil,JSON_NUMERIC_CHECK))
    ->with('labelKanwil',json_encode($labelKanwil,JSON_NUMERIC_CHECK))
    ->with('cat2',json_encode($cat2,JSON_NUMERIC_CHECK))
    ->with('subQuestion',json_encode($subQuestion,JSON_NUMERIC_CHECK))
    ->with('kcu',json_encode($kcu,JSON_NUMERIC_CHECK))
    ->with('labelKcu',json_encode($labelKcu,JSON_NUMERIC_CHECK))
    ->with('kcp',json_encode($kcp,JSON_NUMERIC_CHECK))
    ->with('labelKcp',json_encode($labelKcp,JSON_NUMERIC_CHECK))
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

    //kanwil
    $kanwil = DB::table('report_solcents')
              ->select(array(DB::raw('count(Wilayah) as wilayah')))
              ->whereMonth('created_at','=',date('08'))
              ->groupBy('Wilayah')
              ->orderBy('wilayah','desc')
              ->get()->toArray();
    $kanwil = array_column($kanwil, 'wilayah');

    $labelKanwil = DB::table('report_solcents')
            ->select(array('Wilayah as lblKanwil', DB::raw('count(Wilayah) as wilayah')))
            ->whereMonth('created_at','=',date('08'))
            ->take(10)
            ->groupBy('Wilayah')
            ->orderBy('wilayah','desc')
            ->get()->toArray();
    $labelKanwil = array_column($labelKanwil, 'lblKanwil');

    // compare
    $callAug = DB::table('report_calls')
          ->select('handledCall as call')
          ->where('months','=','August')
          ->get()->toArray();
    $callAug = array_column($callAug,'call');

    $ticket_aug = DB::table('report_solcents')
          ->select(DB::raw('Count(WO_ID) as ticket'))
          ->whereMonth('created_at','=',date('08'))
          ->get()->toArray();
    $ticket_aug = array_column($ticket_aug,'ticket');

    // top question
    $question = DB::table('report_solcents')
              ->select(array(DB::raw('count(Category_1) as Question')))
              ->where('Category_1','!=','[BPO1] - Operator')
              ->whereMonth('created_at','=',date('08'))
              ->groupBy('Category_1')
              ->orderBy('Question','desc')
              ->get()->toArray();
    $question = array_column($question, 'Question');

    $cat = DB::table('report_solcents')
            ->select(array('Category_1 as Cat', DB::raw('count(Category_1) as result')))
            ->where('Category_1','!=','[BPO1] - Operator')
            ->whereMonth('created_at','=',date('08'))
            ->take(10)
            ->groupBy('Category_1')
            ->orderBy('Result','desc')
            ->get()->toArray();
    $cat = array_column($cat, 'Cat');

    $subQuestion = DB::table('report_solcents')
              ->select(array(DB::raw('count(Category_2) as Question')))
              ->where('Category_2','!=','Unit Kerja Kantor Pusat Lainnya')
              ->whereMonth('created_at','=',date('08'))
              ->groupBy('Category_2')
              ->orderBy('Question','desc')
              ->get()->toArray();
    $subQuestion = array_column($subQuestion, 'Question');

    $cat2 = DB::table('report_solcents')
            ->select(array('Category_2 as Cat', DB::raw('count(Category_2) as result')))
            ->where('Category_2','!=','Unit Kerja Kantor Pusat Lainnya')
            ->whereMonth('created_at','=',date('08'))
            ->take(10)
            ->groupBy('Category_2')
            ->orderBy('Result','desc')
            ->get()->toArray();
    $cat2 = array_column($cat2, 'Cat');

    //KCU
    $kcu = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site_Group) as kcu')))
              ->whereMonth('created_at','=',date('08'))
              ->groupBy('Site_Group','Wilayah')
              ->orderBy('kcu','desc')
              ->get()->toArray();
    $kcu = array_column($kcu, 'kcu');

    $labelKcu = DB::table('report_solcents')
            ->select(array('Site_Group as lblKcu', DB::raw('count(Site_Group) as kcu')))
            ->whereMonth('created_at','=',date('08'))
            ->take(10)
            ->groupBy('Site_Group','Wilayah')
            ->orderBy('kcu','desc')
            ->get()->toArray();
    $labelKcu = array_column($labelKcu, 'lblKcu');

    //KCP
    $kcp = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site) as kcp')))

              ->whereMonth('created_at','=',date('08'))
              ->groupBy('Site','Wilayah')
              ->orderBy('kcp','desc')
              ->get()->toArray();
    $kcp = array_column($kcp, 'kcp');

    $labelKcp = DB::table('report_solcents')
            ->select(array('Site as lblKcp', DB::raw('count(Site) as kcp')))
            ->whereMonth('created_at','=',date('08'))
            ->take(10)
            ->groupBy('Site','Wilayah')
            ->orderBy('kcp','desc')
            ->get()->toArray();
    $labelKcp = array_column($labelKcp, 'lblKcp');

    return view('Page_Month.august')
    ->with('present',json_encode($present,JSON_NUMERIC_CHECK))
    ->with('handle',json_encode($handle,JSON_NUMERIC_CHECK))
    ->with('abandon',json_encode($abandon,JSON_NUMERIC_CHECK))
    ->with('callAug',json_encode($callAug,JSON_NUMERIC_CHECK))
    ->with('ticket_aug',json_encode($ticket_aug,JSON_NUMERIC_CHECK))
    ->with('question',json_encode($question,JSON_NUMERIC_CHECK))
    ->with('cat',json_encode($cat,JSON_NUMERIC_CHECK))
    ->with('kanwil',json_encode($kanwil,JSON_NUMERIC_CHECK))
    ->with('labelKanwil',json_encode($labelKanwil,JSON_NUMERIC_CHECK))
    ->with('cat2',json_encode($cat2,JSON_NUMERIC_CHECK))
    ->with('subQuestion',json_encode($subQuestion,JSON_NUMERIC_CHECK))
    ->with('kcu',json_encode($kcu,JSON_NUMERIC_CHECK))
    ->with('labelKcu',json_encode($labelKcu,JSON_NUMERIC_CHECK))
    ->with('kcp',json_encode($kcp,JSON_NUMERIC_CHECK))
    ->with('labelKcp',json_encode($labelKcp,JSON_NUMERIC_CHECK))
    ;
  }

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

    //kanwil
    $kanwil = DB::table('report_solcents')
              ->select(array(DB::raw('count(Wilayah) as wilayah')))
              ->whereMonth('created_at','=',date('09'))
              ->groupBy('Wilayah')
              ->orderBy('wilayah','desc')
              ->get()->toArray();
    $kanwil = array_column($kanwil, 'wilayah');

    $labelKanwil = DB::table('report_solcents')
            ->select(array('Wilayah as lblKanwil', DB::raw('count(Wilayah) as wilayah')))
            ->whereMonth('created_at','=',date('09'))
            ->take(10)
            ->groupBy('Wilayah')
            ->orderBy('wilayah','desc')
            ->get()->toArray();
    $labelKanwil = array_column($labelKanwil, 'lblKanwil');

    // compare
    $callsep = DB::table('report_calls')
          ->select('handledCall as call')
          ->where('months','=','September')
          ->get()->toArray();
    $callsep = array_column($callsep,'call');

    $ticket_sep = DB::table('report_solcents')
          ->select(DB::raw('Count(WO_ID) as ticket'))
          ->whereMonth('created_at','=',date('09'))
          ->get()->toArray();
    $ticket_sep = array_column($ticket_sep,'ticket');

    // top question
    $question = DB::table('report_solcents')
              ->select(array(DB::raw('count(Category_1) as Question')))
              ->where('Category_1','!=','[BPO1] - Operator')
              ->whereMonth('created_at','=',date('09'))
              ->groupBy('Category_1')
              ->orderBy('Question','desc')
              ->get()->toArray();
    $question = array_column($question, 'Question');

    $cat = DB::table('report_solcents')
            ->select(array('Category_1 as Cat', DB::raw('count(Category_1) as result')))
            ->where('Category_1','!=','[BPO1] - Operator')
            ->whereMonth('created_at','=',date('09'))
            ->take(10)
            ->groupBy('Category_1')
            ->orderBy('Result','desc')
            ->get()->toArray();
    $cat = array_column($cat, 'Cat');

    $subQuestion = DB::table('report_solcents')
              ->select(array(DB::raw('count(Category_2) as Question')))
              ->where('Category_2','!=','Unit Kerja Kantor Pusat Lainnya')
              ->whereMonth('created_at','=',date('09'))
              ->groupBy('Category_2')
              ->orderBy('Question','desc')
              ->get()->toArray();
    $subQuestion = array_column($subQuestion, 'Question');

    $cat2 = DB::table('report_solcents')
            ->select(array('Category_2 as Cat', DB::raw('count(Category_2) as result')))
            ->where('Category_2','!=','Unit Kerja Kantor Pusat Lainnya')
            ->whereMonth('created_at','=',date('09'))
            ->take(10)
            ->groupBy('Category_2')
            ->orderBy('Result','desc')
            ->get()->toArray();
    $cat2 = array_column($cat2, 'Cat');

    //KCU
    $kcu = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site_Group) as kcu')))
              ->whereMonth('created_at','=',date('09'))
              ->groupBy('Site_Group','Wilayah')
              ->orderBy('kcu','desc')
              ->get()->toArray();
    $kcu = array_column($kcu, 'kcu');

    $labelKcu = DB::table('report_solcents')
            ->select(array('Site_Group as lblKcu', DB::raw('count(Site_Group) as kcu')))
            ->whereMonth('created_at','=',date('09'))
            ->take(10)
            ->groupBy('Site_Group','Wilayah')
            ->orderBy('kcu','desc')
            ->get()->toArray();
    $labelKcu = array_column($labelKcu, 'lblKcu');

    //KCP
    $kcp = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site) as kcp')))

              ->whereMonth('created_at','=',date('09'))
              ->groupBy('Site','Wilayah')
              ->orderBy('kcp','desc')
              ->get()->toArray();
    $kcp = array_column($kcp, 'kcp');

    $labelKcp = DB::table('report_solcents')
            ->select(array('Site as lblKcp', DB::raw('count(Site) as kcp')))
            ->whereMonth('created_at','=',date('09'))
            ->take(10)
            ->groupBy('Site','Wilayah')
            ->orderBy('kcp','desc')
            ->get()->toArray();
    $labelKcp = array_column($labelKcp, 'lblKcp');

    return view('Page_Month.september')
    ->with('present',json_encode($present,JSON_NUMERIC_CHECK))
    ->with('handle',json_encode($handle,JSON_NUMERIC_CHECK))
    ->with('abandon',json_encode($abandon,JSON_NUMERIC_CHECK))
    ->with('callsep',json_encode($callsep,JSON_NUMERIC_CHECK))
    ->with('ticket_sep',json_encode($ticket_sep,JSON_NUMERIC_CHECK))
    ->with('question',json_encode($question,JSON_NUMERIC_CHECK))
    ->with('cat',json_encode($cat,JSON_NUMERIC_CHECK))
    ->with('kanwil',json_encode($kanwil,JSON_NUMERIC_CHECK))
    ->with('labelKanwil',json_encode($labelKanwil,JSON_NUMERIC_CHECK))
    ->with('cat2',json_encode($cat2,JSON_NUMERIC_CHECK))
    ->with('subQuestion',json_encode($subQuestion,JSON_NUMERIC_CHECK))
    ->with('kcu',json_encode($kcu,JSON_NUMERIC_CHECK))
    ->with('labelKcu',json_encode($labelKcu,JSON_NUMERIC_CHECK))
    ->with('kcp',json_encode($kcp,JSON_NUMERIC_CHECK))
    ->with('labelKcp',json_encode($labelKcp,JSON_NUMERIC_CHECK))
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

    //kanwil
    $kanwil = DB::table('report_solcents')
              ->select(array(DB::raw('count(Wilayah) as wilayah')))
              ->whereMonth('created_at','=',date('10'))
              ->groupBy('Wilayah')
              ->orderBy('wilayah','desc')
              ->get()->toArray();
    $kanwil = array_column($kanwil, 'wilayah');

    $labelKanwil = DB::table('report_solcents')
            ->select(array('Wilayah as lblKanwil', DB::raw('count(Wilayah) as wilayah')))
            ->whereMonth('created_at','=',date('10'))
            ->take(10)
            ->groupBy('Wilayah')
            ->orderBy('wilayah','desc')
            ->get()->toArray();
    $labelKanwil = array_column($labelKanwil, 'lblKanwil');

    // compare
    $callOct = DB::table('report_calls')
          ->select('handledCall as call')
          ->where('months','=','October')
          ->get()->toArray();
    $callOct = array_column($callOct,'call');

    $ticket_oct = DB::table('report_solcents')
          ->select(DB::raw('Count(WO_ID) as ticket'))
          ->whereMonth('created_at','=',date('10'))
          ->get()->toArray();
    $ticket_oct = array_column($ticket_oct,'ticket');

    // top question
    $question = DB::table('report_solcents')
              ->select(array(DB::raw('count(Category_1) as Question')))
              ->where('Category_1','!=','[BPO1] - Operator')
              ->whereMonth('created_at','=',date('10'))
              ->groupBy('Category_1')
              ->orderBy('Question','desc')
              ->get()->toArray();
    $question = array_column($question, 'Question');

    $cat = DB::table('report_solcents')
            ->select(array('Category_1 as Cat', DB::raw('count(Category_1) as result')))
            ->where('Category_1','!=','[BPO1] - Operator')
            ->whereMonth('created_at','=',date('10'))
            ->take(10)
            ->groupBy('Category_1')
            ->orderBy('Result','desc')
            ->get()->toArray();
    $cat = array_column($cat, 'Cat');

    $subQuestion = DB::table('report_solcents')
              ->select(array(DB::raw('count(Category_2) as Question')))
              ->where('Category_2','!=','Unit Kerja Kantor Pusat Lainnya')
              ->whereMonth('created_at','=',date('10'))
              ->groupBy('Category_2')
              ->orderBy('Question','desc')
              ->get()->toArray();
    $subQuestion = array_column($subQuestion, 'Question');

    $cat2 = DB::table('report_solcents')
            ->select(array('Category_2 as Cat', DB::raw('count(Category_2) as result')))
            ->where('Category_2','!=','Unit Kerja Kantor Pusat Lainnya')
            ->whereMonth('created_at','=',date('10'))
            ->take(10)
            ->groupBy('Category_2')
            ->orderBy('Result','desc')
            ->get()->toArray();
    $cat2 = array_column($cat2, 'Cat');

    //KCU
    $kcu = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site_Group) as kcu')))
              ->whereMonth('created_at','=',date('10'))
              ->groupBy('Site_Group','Wilayah')
              ->orderBy('kcu','desc')
              ->get()->toArray();
    $kcu = array_column($kcu, 'kcu');

    $labelKcu = DB::table('report_solcents')
            ->select(array('Site_Group as lblKcu', DB::raw('count(Site_Group) as kcu')))
            ->whereMonth('created_at','=',date('10'))
            ->take(10)
            ->groupBy('Site_Group','Wilayah')
            ->orderBy('kcu','desc')
            ->get()->toArray();
    $labelKcu = array_column($labelKcu, 'lblKcu');

    //KCP
    $kcp = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site) as kcp')))

              ->whereMonth('created_at','=',date('10'))
              ->groupBy('Site','Wilayah')
              ->orderBy('kcp','desc')
              ->get()->toArray();
    $kcp = array_column($kcp, 'kcp');

    $labelKcp = DB::table('report_solcents')
            ->select(array('Site as lblKcp', DB::raw('count(Site) as kcp')))
            ->whereMonth('created_at','=',date('10'))
            ->take(10)
            ->groupBy('Site','Wilayah')
            ->orderBy('kcp','desc')
            ->get()->toArray();
    $labelKcp = array_column($labelKcp, 'lblKcp');

    return view('Page_Month.october')
    ->with('present',json_encode($present,JSON_NUMERIC_CHECK))
    ->with('handle',json_encode($handle,JSON_NUMERIC_CHECK))
    ->with('abandon',json_encode($abandon,JSON_NUMERIC_CHECK))
    ->with('callOct',json_encode($callOct,JSON_NUMERIC_CHECK))
    ->with('ticket_oct',json_encode($ticket_oct,JSON_NUMERIC_CHECK))
    ->with('question',json_encode($question,JSON_NUMERIC_CHECK))
    ->with('cat',json_encode($cat,JSON_NUMERIC_CHECK))
    ->with('kanwil',json_encode($kanwil,JSON_NUMERIC_CHECK))
    ->with('labelKanwil',json_encode($labelKanwil,JSON_NUMERIC_CHECK))
    ->with('cat2',json_encode($cat2,JSON_NUMERIC_CHECK))
    ->with('subQuestion',json_encode($subQuestion,JSON_NUMERIC_CHECK))
    ->with('kcu',json_encode($kcu,JSON_NUMERIC_CHECK))
    ->with('labelKcu',json_encode($labelKcu,JSON_NUMERIC_CHECK))
    ->with('kcp',json_encode($kcp,JSON_NUMERIC_CHECK))
    ->with('labelKcp',json_encode($labelKcp,JSON_NUMERIC_CHECK))
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

    //kanwil
    $kanwil = DB::table('report_solcents')
              ->select(array(DB::raw('count(Wilayah) as wilayah')))
              ->whereMonth('created_at','=',date('11'))
              ->groupBy('Wilayah')
              ->orderBy('wilayah','desc')
              ->get()->toArray();
    $kanwil = array_column($kanwil, 'wilayah');

    $labelKanwil = DB::table('report_solcents')
            ->select(array('Wilayah as lblKanwil', DB::raw('count(Wilayah) as wilayah')))
            ->whereMonth('created_at','=',date('11'))
            ->take(10)
            ->groupBy('Wilayah')
            ->orderBy('wilayah','desc')
            ->get()->toArray();
    $labelKanwil = array_column($labelKanwil, 'lblKanwil');

    // compare
    $callNov = DB::table('report_calls')
          ->select('handledCall as call')
          ->where('months','=','November')
          ->get()->toArray();
    $callNov = array_column($callNov,'call');

    $ticket_nov = DB::table('report_solcents')
          ->select(DB::raw('Count(WO_ID) as ticket'))
          ->whereMonth('created_at','=',date('11'))
          ->get()->toArray();
    $ticket_nov = array_column($ticket_nov,'ticket');

    // top question
    $question = DB::table('report_solcents')
              ->select(array(DB::raw('count(Category_1) as Question')))
              ->where('Category_1','!=','[BPO1] - Operator')
              ->whereMonth('created_at','=',date('11'))
              ->groupBy('Category_1')
              ->orderBy('Question','desc')
              ->get()->toArray();
    $question = array_column($question, 'Question');

    $cat = DB::table('report_solcents')
            ->select(array('Category_1 as Cat', DB::raw('count(Category_1) as result')))
            ->where('Category_1','!=','[BPO1] - Operator')
            ->whereMonth('created_at','=',date('11'))
            ->take(10)
            ->groupBy('Category_1')
            ->orderBy('Result','desc')
            ->get()->toArray();
    $cat = array_column($cat, 'Cat');

    $subQuestion = DB::table('report_solcents')
              ->select(array(DB::raw('count(Category_2) as Question')))
              ->where('Category_2','!=','Unit Kerja Kantor Pusat Lainnya')
              ->whereMonth('created_at','=',date('11'))
              ->groupBy('Category_2')
              ->orderBy('Question','desc')
              ->get()->toArray();
    $subQuestion = array_column($subQuestion, 'Question');

    $cat2 = DB::table('report_solcents')
            ->select(array('Category_2 as Cat', DB::raw('count(Category_2) as result')))
            ->where('Category_2','!=','Unit Kerja Kantor Pusat Lainnya')
            ->whereMonth('created_at','=',date('11'))
            ->take(10)
            ->groupBy('Category_2')
            ->orderBy('Result','desc')
            ->get()->toArray();
    $cat2 = array_column($cat2, 'Cat');

    //KCU
    $kcu = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site_Group) as kcu')))
              ->whereMonth('created_at','=',date('11'))
              ->groupBy('Site_Group','Wilayah')
              ->orderBy('kcu','desc')
              ->get()->toArray();
    $kcu = array_column($kcu, 'kcu');

    $labelKcu = DB::table('report_solcents')
            ->select(array('Site_Group as lblKcu', DB::raw('count(Site_Group) as kcu')))
            ->whereMonth('created_at','=',date('11'))
            ->take(10)
            ->groupBy('Site_Group','Wilayah')
            ->orderBy('kcu','desc')
            ->get()->toArray();
    $labelKcu = array_column($labelKcu, 'lblKcu');

    //KCP
    $kcp = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site) as kcp')))

              ->whereMonth('created_at','=',date('11'))
              ->groupBy('Site','Wilayah')
              ->orderBy('kcp','desc')
              ->get()->toArray();
    $kcp = array_column($kcp, 'kcp');

    $labelKcp = DB::table('report_solcents')
            ->select(array('Site as lblKcp', DB::raw('count(Site) as kcp')))
            ->whereMonth('created_at','=',date('11'))
            ->take(10)
            ->groupBy('Site','Wilayah')
            ->orderBy('kcp','desc')
            ->get()->toArray();
    $labelKcp = array_column($labelKcp, 'lblKcp');

    return view('Page_Month.november')
    ->with('present',json_encode($present,JSON_NUMERIC_CHECK))
    ->with('handle',json_encode($handle,JSON_NUMERIC_CHECK))
    ->with('abandon',json_encode($abandon,JSON_NUMERIC_CHECK))
    ->with('callNov',json_encode($callNov,JSON_NUMERIC_CHECK))
    ->with('ticket_nov',json_encode($ticket_nov,JSON_NUMERIC_CHECK))
    ->with('question',json_encode($question,JSON_NUMERIC_CHECK))
    ->with('cat',json_encode($cat,JSON_NUMERIC_CHECK))
    ->with('kanwil',json_encode($kanwil,JSON_NUMERIC_CHECK))
    ->with('labelKanwil',json_encode($labelKanwil,JSON_NUMERIC_CHECK))
    ->with('cat2',json_encode($cat2,JSON_NUMERIC_CHECK))
    ->with('subQuestion',json_encode($subQuestion,JSON_NUMERIC_CHECK))
    ->with('kcu',json_encode($kcu,JSON_NUMERIC_CHECK))
    ->with('labelKcu',json_encode($labelKcu,JSON_NUMERIC_CHECK))
    ->with('kcp',json_encode($kcp,JSON_NUMERIC_CHECK))
    ->with('labelKcp',json_encode($labelKcp,JSON_NUMERIC_CHECK))
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

    //kanwil
    $kanwil = DB::table('report_solcents')
              ->select(array(DB::raw('count(Wilayah) as wilayah')))
              ->whereMonth('created_at','=',date('12'))
              ->groupBy('Wilayah')
              ->orderBy('wilayah','desc')
              ->get()->toArray();
    $kanwil = array_column($kanwil, 'wilayah');

    $labelKanwil = DB::table('report_solcents')
            ->select(array('Wilayah as lblKanwil', DB::raw('count(Wilayah) as wilayah')))
            ->whereMonth('created_at','=',date('12'))
            ->take(10)
            ->groupBy('Wilayah')
            ->orderBy('wilayah','desc')
            ->get()->toArray();
    $labelKanwil = array_column($labelKanwil, 'lblKanwil');

    // compare
    $callDes = DB::table('report_calls')
          ->select('handledCall as call')
          ->where('months','=','December')
          ->get()->toArray();
    $callDes = array_column($callDes,'call');

    $ticket_des = DB::table('report_solcents')
          ->select(DB::raw('Count(WO_ID) as ticket'))
          ->whereMonth('created_at','=',date('12'))
          ->get()->toArray();
    $ticket_des = array_column($ticket_des,'ticket');

    // top question
    $question = DB::table('report_solcents')
              ->select(array(DB::raw('count(Category_1) as Question')))
              ->where('Category_1','!=','[BPO1] - Operator')
              ->whereMonth('created_at','=',date('12'))
              ->groupBy('Category_1')
              ->orderBy('Question','desc')
              ->get()->toArray();
    $question = array_column($question, 'Question');

    $cat = DB::table('report_solcents')
            ->select(array('Category_1 as Cat', DB::raw('count(Category_1) as result')))
            ->where('Category_1','!=','[BPO1] - Operator')
            ->whereMonth('created_at','=',date('12'))
            ->take(10)
            ->groupBy('Category_1')
            ->orderBy('Result','desc')
            ->get()->toArray();
    $cat = array_column($cat, 'Cat');

    $subQuestion = DB::table('report_solcents')
              ->select(array(DB::raw('count(Category_2) as Question')))
              ->where('Category_2','!=','Unit Kerja Kantor Pusat Lainnya')
              ->whereMonth('created_at','=',date('12'))
              ->groupBy('Category_2')
              ->orderBy('Question','desc')
              ->get()->toArray();
    $subQuestion = array_column($subQuestion, 'Question');

    $cat2 = DB::table('report_solcents')
            ->select(array('Category_2 as Cat', DB::raw('count(Category_2) as result')))
            ->where('Category_2','!=','Unit Kerja Kantor Pusat Lainnya')
            ->whereMonth('created_at','=',date('12'))
            ->take(10)
            ->groupBy('Category_2')
            ->orderBy('Result','desc')
            ->get()->toArray();
    $cat2 = array_column($cat2, 'Cat');

    //KCU
    $kcu = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site_Group) as kcu')))
              ->whereMonth('created_at','=',date('12'))
              ->groupBy('Site_Group','Wilayah')
              ->orderBy('kcu','desc')
              ->get()->toArray();
    $kcu = array_column($kcu, 'kcu');

    $labelKcu = DB::table('report_solcents')
            ->select(array('Site_Group as lblKcu', DB::raw('count(Site_Group) as kcu')))
            ->whereMonth('created_at','=',date('12'))
            ->take(10)
            ->groupBy('Site_Group','Wilayah')
            ->orderBy('kcu','desc')
            ->get()->toArray();
    $labelKcu = array_column($labelKcu, 'lblKcu');

    //KCP
    $kcp = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site) as kcp')))

              ->whereMonth('created_at','=',date('12'))
              ->groupBy('Site','Wilayah')
              ->orderBy('kcp','desc')
              ->get()->toArray();
    $kcp = array_column($kcp, 'kcp');

    $labelKcp = DB::table('report_solcents')
            ->select(array('Site as lblKcp', DB::raw('count(Site) as kcp')))
            ->whereMonth('created_at','=',date('12'))
            ->take(10)
            ->groupBy('Site','Wilayah')
            ->orderBy('kcp','desc')
            ->get()->toArray();
    $labelKcp = array_column($labelKcp, 'lblKcp');

    return view('Page_Month.december')
    ->with('present',json_encode($present,JSON_NUMERIC_CHECK))
    ->with('handle',json_encode($handle,JSON_NUMERIC_CHECK))
    ->with('abandon',json_encode($abandon,JSON_NUMERIC_CHECK))
    ->with('callDes',json_encode($callDes,JSON_NUMERIC_CHECK))
    ->with('ticket_des',json_encode($ticket_des,JSON_NUMERIC_CHECK))
    ->with('question',json_encode($question,JSON_NUMERIC_CHECK))
    ->with('cat',json_encode($cat,JSON_NUMERIC_CHECK))
    ->with('kanwil',json_encode($kanwil,JSON_NUMERIC_CHECK))
    ->with('labelKanwil',json_encode($labelKanwil,JSON_NUMERIC_CHECK))
    ->with('cat2',json_encode($cat2,JSON_NUMERIC_CHECK))
    ->with('subQuestion',json_encode($subQuestion,JSON_NUMERIC_CHECK))
    ->with('kcu',json_encode($kcu,JSON_NUMERIC_CHECK))
    ->with('labelKcu',json_encode($labelKcu,JSON_NUMERIC_CHECK))
    ->with('kcp',json_encode($kcp,JSON_NUMERIC_CHECK))
    ->with('labelKcp',json_encode($labelKcp,JSON_NUMERIC_CHECK))
    ;
  }

}
