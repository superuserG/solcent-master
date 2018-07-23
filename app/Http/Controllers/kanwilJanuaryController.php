<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class kanwilJanuaryController extends Controller
{
  public function showJanuaryKp()
  {
    $kcu = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site_Group) as kcu')))
              ->where('Wilayah','=','KANTOR PUSAT')
              ->whereMonth('Submit_Date','=',date('01'))
              ->groupBy('Site_Group','Wilayah')
              ->orderBy('kcu','desc')
              ->get()->toArray();
    $kcu = array_column($kcu, 'kcu');

    $labelKcu = DB::table('report_solcents')
            ->select(array('Site_Group as lblKcu', DB::raw('count(Site_Group) as kcu')))
            ->where('Wilayah','=','KANTOR PUSAT')
            ->whereMonth('Submit_Date','=',date('01'))
            ->take(10)
            ->groupBy('Site_Group','Wilayah')
            ->orderBy('kcu','desc')
            ->get()->toArray();
    $labelKcu = array_column($labelKcu, 'lblKcu');

    //KCP
    $kcp = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site) as kcp')))
              ->where('Wilayah','=','KANTOR PUSAT')
              ->whereMonth('Submit_Date','=',date('01'))
              ->groupBy('Site','Wilayah')
              ->orderBy('kcp','desc')
              ->get()->toArray();
    $kcp = array_column($kcp, 'kcp');

    $labelKcp = DB::table('report_solcents')
            ->select(array('Site as lblKcp', DB::raw('count(Site) as kcp')))
            ->where('Wilayah','=','KANTOR PUSAT')
            ->whereMonth('Submit_Date','=',date('01'))
            ->take(10)
            ->groupBy('Site','Wilayah')
            ->orderBy('kcp','desc')
            ->get()->toArray();
    $labelKcp = array_column($labelKcp, 'lblKcp');

    return view('Kanwil.January.kpJanuary')
    ->with('kcu',json_encode($kcu,JSON_NUMERIC_CHECK))
    ->with('labelKcu',json_encode($labelKcu,JSON_NUMERIC_CHECK))
    ->with('kcp',json_encode($kcp,JSON_NUMERIC_CHECK))
    ->with('labelKcp',json_encode($labelKcp,JSON_NUMERIC_CHECK))
    ;
  }

  public function showJanuaryKanwil1()
  {
    $kcu = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site_Group) as kcu')))
              ->where('Wilayah','=','KANWIL I')
              ->whereMonth('Submit_Date','=',date('01'))
              ->groupBy('Site_Group','Wilayah')
              ->orderBy('kcu','desc')
              ->get()->toArray();
    $kcu = array_column($kcu, 'kcu');

    $labelKcu = DB::table('report_solcents')
            ->select(array('Site_Group as lblKcu', DB::raw('count(Site_Group) as kcu')))
            ->where('Wilayah','=','KANWIL I')
            ->whereMonth('Submit_Date','=',date('01'))
            ->take(10)
            ->groupBy('Site_Group','Wilayah')
            ->orderBy('kcu','desc')
            ->get()->toArray();
    $labelKcu = array_column($labelKcu, 'lblKcu');

    //KCP
    $kcp = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site) as kcp')))
              ->where('Wilayah','=','KANWIL I')
              ->whereMonth('Submit_Date','=',date('01'))
              ->groupBy('Site','Wilayah')
              ->orderBy('kcp','desc')
              ->get()->toArray();
    $kcp = array_column($kcp, 'kcp');

    $labelKcp = DB::table('report_solcents')
            ->select(array('Site as lblKcp', DB::raw('count(Site) as kcp')))
            ->where('Wilayah','=','KANWIL I')
            ->whereMonth('Submit_Date','=',date('01'))
            ->take(10)
            ->groupBy('Site','Wilayah')
            ->orderBy('kcp','desc')
            ->get()->toArray();
    $labelKcp = array_column($labelKcp, 'lblKcp');

    return view('Kanwil.January.kanwil1January')
    ->with('kcu',json_encode($kcu,JSON_NUMERIC_CHECK))
    ->with('labelKcu',json_encode($labelKcu,JSON_NUMERIC_CHECK))
    ->with('kcp',json_encode($kcp,JSON_NUMERIC_CHECK))
    ->with('labelKcp',json_encode($labelKcp,JSON_NUMERIC_CHECK))
    ;
  }

  public function showJanuaryKanwil2()
  {
    $kcu = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site_Group) as kcu')))
              ->where('Wilayah','=','KANWIL II')
              ->whereMonth('Submit_Date','=',date('01'))
              ->groupBy('Site_Group','Wilayah')
              ->orderBy('kcu','desc')
              ->get()->toArray();
    $kcu = array_column($kcu, 'kcu');

    $labelKcu = DB::table('report_solcents')
            ->select(array('Site_Group as lblKcu', DB::raw('count(Site_Group) as kcu')))
            ->where('Wilayah','=','KANWIL II')
            ->whereMonth('Submit_Date','=',date('01'))
            ->take(10)
            ->groupBy('Site_Group','Wilayah')
            ->orderBy('kcu','desc')
            ->get()->toArray();
    $labelKcu = array_column($labelKcu, 'lblKcu');

    //KCP
    $kcp = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site) as kcp')))
              ->where('Wilayah','=','KANWIL II')
              ->whereMonth('Submit_Date','=',date('01'))
              ->groupBy('Site','Wilayah')
              ->orderBy('kcp','desc')
              ->get()->toArray();
    $kcp = array_column($kcp, 'kcp');

    $labelKcp = DB::table('report_solcents')
            ->select(array('Site as lblKcp', DB::raw('count(Site) as kcp')))
            ->where('Wilayah','=','KANWIL II')
            ->whereMonth('Submit_Date','=',date('01'))
            ->take(10)
            ->groupBy('Site','Wilayah')
            ->orderBy('kcp','desc')
            ->get()->toArray();
    $labelKcp = array_column($labelKcp, 'lblKcp');

    return view('Kanwil.January.kanwil2January')
    ->with('kcu',json_encode($kcu,JSON_NUMERIC_CHECK))
    ->with('labelKcu',json_encode($labelKcu,JSON_NUMERIC_CHECK))
    ->with('kcp',json_encode($kcp,JSON_NUMERIC_CHECK))
    ->with('labelKcp',json_encode($labelKcp,JSON_NUMERIC_CHECK))
    ;
  }

  public function showJanuaryKanwil3()
  {
    $kcu = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site_Group) as kcu')))
              ->where('Wilayah','=','KANWIL III')
              ->whereMonth('Submit_Date','=',date('01'))
              ->groupBy('Site_Group','Wilayah')
              ->orderBy('kcu','desc')
              ->get()->toArray();
    $kcu = array_column($kcu, 'kcu');

    $labelKcu = DB::table('report_solcents')
            ->select(array('Site_Group as lblKcu', DB::raw('count(Site_Group) as kcu')))
            ->where('Wilayah','=','KANWIL III')
            ->whereMonth('Submit_Date','=',date('01'))
            ->take(10)
            ->groupBy('Site_Group','Wilayah')
            ->orderBy('kcu','desc')
            ->get()->toArray();
    $labelKcu = array_column($labelKcu, 'lblKcu');

    //KCP
    $kcp = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site) as kcp')))
              ->where('Wilayah','=','KANWIL III')
              ->whereMonth('Submit_Date','=',date('01'))
              ->groupBy('Site','Wilayah')
              ->orderBy('kcp','desc')
              ->get()->toArray();
    $kcp = array_column($kcp, 'kcp');

    $labelKcp = DB::table('report_solcents')
            ->select(array('Site as lblKcp', DB::raw('count(Site) as kcp')))
            ->where('Wilayah','=','KANWIL III')
            ->whereMonth('Submit_Date','=',date('01'))
            ->take(10)
            ->groupBy('Site','Wilayah')
            ->orderBy('kcp','desc')
            ->get()->toArray();
    $labelKcp = array_column($labelKcp, 'lblKcp');

    return view('Kanwil.January.kanwil3January')
    ->with('kcu',json_encode($kcu,JSON_NUMERIC_CHECK))
    ->with('labelKcu',json_encode($labelKcu,JSON_NUMERIC_CHECK))
    ->with('kcp',json_encode($kcp,JSON_NUMERIC_CHECK))
    ->with('labelKcp',json_encode($labelKcp,JSON_NUMERIC_CHECK))
    ;
  }

  public function showJanuaryKanwil4()
  {
    $kcu = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site_Group) as kcu')))
              ->where('Wilayah','=','KANWIL IV')
              ->whereMonth('Submit_Date','=',date('01'))
              ->groupBy('Site_Group','Wilayah')
              ->orderBy('kcu','desc')
              ->get()->toArray();
    $kcu = array_column($kcu, 'kcu');

    $labelKcu = DB::table('report_solcents')
            ->select(array('Site_Group as lblKcu', DB::raw('count(Site_Group) as kcu')))
            ->where('Wilayah','=','KANWIL IV')
            ->whereMonth('Submit_Date','=',date('01'))
            ->take(10)
            ->groupBy('Site_Group','Wilayah')
            ->orderBy('kcu','desc')
            ->get()->toArray();
    $labelKcu = array_column($labelKcu, 'lblKcu');

    //KCP
    $kcp = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site) as kcp')))
              ->where('Wilayah','=','KANWIL IV')
              ->whereMonth('Submit_Date','=',date('01'))
              ->groupBy('Site','Wilayah')
              ->orderBy('kcp','desc')
              ->get()->toArray();
    $kcp = array_column($kcp, 'kcp');

    $labelKcp = DB::table('report_solcents')
            ->select(array('Site as lblKcp', DB::raw('count(Site) as kcp')))
            ->where('Wilayah','=','KANWIL IV')
            ->whereMonth('Submit_Date','=',date('01'))
            ->take(10)
            ->groupBy('Site','Wilayah')
            ->orderBy('kcp','desc')
            ->get()->toArray();
    $labelKcp = array_column($labelKcp, 'lblKcp');

    return view('Kanwil.January.kanwil4January')
    ->with('kcu',json_encode($kcu,JSON_NUMERIC_CHECK))
    ->with('labelKcu',json_encode($labelKcu,JSON_NUMERIC_CHECK))
    ->with('kcp',json_encode($kcp,JSON_NUMERIC_CHECK))
    ->with('labelKcp',json_encode($labelKcp,JSON_NUMERIC_CHECK))
    ;
  }

  public function showJanuaryKanwil5()
  {
    $kcu = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site_Group) as kcu')))
              ->where('Wilayah','=','KANWIL V')
              ->whereMonth('Submit_Date','=',date('01'))
              ->groupBy('Site_Group','Wilayah')
              ->orderBy('kcu','desc')
              ->get()->toArray();
    $kcu = array_column($kcu, 'kcu');

    $labelKcu = DB::table('report_solcents')
            ->select(array('Site_Group as lblKcu', DB::raw('count(Site_Group) as kcu')))
            ->where('Wilayah','=','KANWIL V')
            ->whereMonth('Submit_Date','=',date('01'))
            ->take(10)
            ->groupBy('Site_Group','Wilayah')
            ->orderBy('kcu','desc')
            ->get()->toArray();
    $labelKcu = array_column($labelKcu, 'lblKcu');

    //KCP
    $kcp = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site) as kcp')))
              ->where('Wilayah','=','KANWIL V')
              ->whereMonth('Submit_Date','=',date('01'))
              ->groupBy('Site','Wilayah')
              ->orderBy('kcp','desc')
              ->get()->toArray();
    $kcp = array_column($kcp, 'kcp');

    $labelKcp = DB::table('report_solcents')
            ->select(array('Site as lblKcp', DB::raw('count(Site) as kcp')))
            ->where('Wilayah','=','KANWIL V')
            ->whereMonth('Submit_Date','=',date('01'))
            ->take(10)
            ->groupBy('Site','Wilayah')
            ->orderBy('kcp','desc')
            ->get()->toArray();
    $labelKcp = array_column($labelKcp, 'lblKcp');

    return view('Kanwil.January.kanwil5January')
    ->with('kcu',json_encode($kcu,JSON_NUMERIC_CHECK))
    ->with('labelKcu',json_encode($labelKcu,JSON_NUMERIC_CHECK))
    ->with('kcp',json_encode($kcp,JSON_NUMERIC_CHECK))
    ->with('labelKcp',json_encode($labelKcp,JSON_NUMERIC_CHECK))
    ;
  }

  public function showJanuaryKanwil6()
  {
    $kcu = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site_Group) as kcu')))
              ->where('Wilayah','=','KANWIL VI')
              ->whereMonth('Submit_Date','=',date('01'))
              ->groupBy('Site_Group','Wilayah')
              ->orderBy('kcu','desc')
              ->get()->toArray();
    $kcu = array_column($kcu, 'kcu');

    $labelKcu = DB::table('report_solcents')
            ->select(array('Site_Group as lblKcu', DB::raw('count(Site_Group) as kcu')))
            ->where('Wilayah','=','KANWIL VI')
            ->whereMonth('Submit_Date','=',date('01'))
            ->take(10)
            ->groupBy('Site_Group','Wilayah')
            ->orderBy('kcu','desc')
            ->get()->toArray();
    $labelKcu = array_column($labelKcu, 'lblKcu');

    //KCP
    $kcp = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site) as kcp')))
              ->where('Wilayah','=','KANWIL VI')
              ->whereMonth('Submit_Date','=',date('01'))
              ->groupBy('Site','Wilayah')
              ->orderBy('kcp','desc')
              ->get()->toArray();
    $kcp = array_column($kcp, 'kcp');

    $labelKcp = DB::table('report_solcents')
            ->select(array('Site as lblKcp', DB::raw('count(Site) as kcp')))
            ->where('Wilayah','=','KANWIL VI')
            ->whereMonth('Submit_Date','=',date('01'))
            ->take(10)
            ->groupBy('Site','Wilayah')
            ->orderBy('kcp','desc')
            ->get()->toArray();
    $labelKcp = array_column($labelKcp, 'lblKcp');

    return view('Kanwil.January.kanwil6January')
    ->with('kcu',json_encode($kcu,JSON_NUMERIC_CHECK))
    ->with('labelKcu',json_encode($labelKcu,JSON_NUMERIC_CHECK))
    ->with('kcp',json_encode($kcp,JSON_NUMERIC_CHECK))
    ->with('labelKcp',json_encode($labelKcp,JSON_NUMERIC_CHECK))
    ;
  }

  public function showJanuaryKanwil7()
  {
    $kcu = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site_Group) as kcu')))
              ->where('Wilayah','=','KANWIL VII')
              ->whereMonth('Submit_Date','=',date('01'))
              ->groupBy('Site_Group','Wilayah')
              ->orderBy('kcu','desc')
              ->get()->toArray();
    $kcu = array_column($kcu, 'kcu');

    $labelKcu = DB::table('report_solcents')
            ->select(array('Site_Group as lblKcu', DB::raw('count(Site_Group) as kcu')))
            ->where('Wilayah','=','KANWIL VII')
            ->whereMonth('Submit_Date','=',date('01'))
            ->take(10)
            ->groupBy('Site_Group','Wilayah')
            ->orderBy('kcu','desc')
            ->get()->toArray();
    $labelKcu = array_column($labelKcu, 'lblKcu');

    //KCP
    $kcp = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site) as kcp')))
              ->where('Wilayah','=','KANWIL VII')
              ->whereMonth('Submit_Date','=',date('01'))
              ->groupBy('Site','Wilayah')
              ->orderBy('kcp','desc')
              ->get()->toArray();
    $kcp = array_column($kcp, 'kcp');

    $labelKcp = DB::table('report_solcents')
            ->select(array('Site as lblKcp', DB::raw('count(Site) as kcp')))
            ->where('Wilayah','=','KANWIL VII')
            ->whereMonth('Submit_Date','=',date('01'))
            ->take(10)
            ->groupBy('Site','Wilayah')
            ->orderBy('kcp','desc')
            ->get()->toArray();
    $labelKcp = array_column($labelKcp, 'lblKcp');

    return view('Kanwil.January.kanwil7January')
    ->with('kcu',json_encode($kcu,JSON_NUMERIC_CHECK))
    ->with('labelKcu',json_encode($labelKcu,JSON_NUMERIC_CHECK))
    ->with('kcp',json_encode($kcp,JSON_NUMERIC_CHECK))
    ->with('labelKcp',json_encode($labelKcp,JSON_NUMERIC_CHECK))
    ;
  }

  public function showJanuaryKanwil8()
  {
    $kcu = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site_Group) as kcu')))
              ->where('Wilayah','=','KANWIL VIII')
              ->whereMonth('Submit_Date','=',date('01'))
              ->groupBy('Site_Group','Wilayah')
              ->orderBy('kcu','desc')
              ->get()->toArray();
    $kcu = array_column($kcu, 'kcu');

    $labelKcu = DB::table('report_solcents')
            ->select(array('Site_Group as lblKcu', DB::raw('count(Site_Group) as kcu')))
            ->where('Wilayah','=','KANWIL VIII')
            ->whereMonth('Submit_Date','=',date('01'))
            ->take(10)
            ->groupBy('Site_Group','Wilayah')
            ->orderBy('kcu','desc')
            ->get()->toArray();
    $labelKcu = array_column($labelKcu, 'lblKcu');

    //KCP
    $kcp = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site) as kcp')))
              ->where('Wilayah','=','KANWIL VIII')
              ->whereMonth('Submit_Date','=',date('01'))
              ->groupBy('Site','Wilayah')
              ->orderBy('kcp','desc')
              ->get()->toArray();
    $kcp = array_column($kcp, 'kcp');

    $labelKcp = DB::table('report_solcents')
            ->select(array('Site as lblKcp', DB::raw('count(Site) as kcp')))
            ->where('Wilayah','=','KANWIL VIII')
            ->whereMonth('Submit_Date','=',date('01'))
            ->take(10)
            ->groupBy('Site','Wilayah')
            ->orderBy('kcp','desc')
            ->get()->toArray();
    $labelKcp = array_column($labelKcp, 'lblKcp');

    return view('Kanwil.January.kanwil8January')
    ->with('kcu',json_encode($kcu,JSON_NUMERIC_CHECK))
    ->with('labelKcu',json_encode($labelKcu,JSON_NUMERIC_CHECK))
    ->with('kcp',json_encode($kcp,JSON_NUMERIC_CHECK))
    ->with('labelKcp',json_encode($labelKcp,JSON_NUMERIC_CHECK))
    ;
  }

  public function showJanuaryKanwil9()
  {
    $kcu = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site_Group) as kcu')))
              ->where('Wilayah','=','KANWIL IX')
              ->whereMonth('Submit_Date','=',date('01'))
              ->groupBy('Site_Group','Wilayah')
              ->orderBy('kcu','desc')
              ->get()->toArray();
    $kcu = array_column($kcu, 'kcu');

    $labelKcu = DB::table('report_solcents')
            ->select(array('Site_Group as lblKcu', DB::raw('count(Site_Group) as kcu')))
            ->where('Wilayah','=','KANWIL IX')
            ->whereMonth('Submit_Date','=',date('01'))
            ->take(10)
            ->groupBy('Site_Group','Wilayah')
            ->orderBy('kcu','desc')
            ->get()->toArray();
    $labelKcu = array_column($labelKcu, 'lblKcu');

    //KCP
    $kcp = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site) as kcp')))
              ->where('Wilayah','=','KANWIL IX')
              ->whereMonth('Submit_Date','=',date('01'))
              ->groupBy('Site','Wilayah')
              ->orderBy('kcp','desc')
              ->get()->toArray();
    $kcp = array_column($kcp, 'kcp');

    $labelKcp = DB::table('report_solcents')
            ->select(array('Site as lblKcp', DB::raw('count(Site) as kcp')))
            ->where('Wilayah','=','KANWIL IX')
            ->whereMonth('Submit_Date','=',date('01'))
            ->take(10)
            ->groupBy('Site','Wilayah')
            ->orderBy('kcp','desc')
            ->get()->toArray();
    $labelKcp = array_column($labelKcp, 'lblKcp');

    return view('Kanwil.January.kanwil9January')
    ->with('kcu',json_encode($kcu,JSON_NUMERIC_CHECK))
    ->with('labelKcu',json_encode($labelKcu,JSON_NUMERIC_CHECK))
    ->with('kcp',json_encode($kcp,JSON_NUMERIC_CHECK))
    ->with('labelKcp',json_encode($labelKcp,JSON_NUMERIC_CHECK))
    ;
  }

  public function showJanuaryKanwil10()
  {
    $kcu = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site_Group) as kcu')))
              ->where('Wilayah','=','KANWIL X')
              ->whereMonth('Submit_Date','=',date('01'))
              ->groupBy('Site_Group','Wilayah')
              ->orderBy('kcu','desc')
              ->get()->toArray();
    $kcu = array_column($kcu, 'kcu');

    $labelKcu = DB::table('report_solcents')
            ->select(array('Site_Group as lblKcu', DB::raw('count(Site_Group) as kcu')))
            ->where('Wilayah','=','KANWIL X')
            ->whereMonth('Submit_Date','=',date('01'))
            ->take(10)
            ->groupBy('Site_Group','Wilayah')
            ->orderBy('kcu','desc')
            ->get()->toArray();
    $labelKcu = array_column($labelKcu, 'lblKcu');

    //KCP
    $kcp = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site) as kcp')))
              ->where('Wilayah','=','KANWIL X')
              ->whereMonth('Submit_Date','=',date('01'))
              ->groupBy('Site','Wilayah')
              ->orderBy('kcp','desc')
              ->get()->toArray();
    $kcp = array_column($kcp, 'kcp');

    $labelKcp = DB::table('report_solcents')
            ->select(array('Site as lblKcp', DB::raw('count(Site) as kcp')))
            ->where('Wilayah','=','KANWIL X')
            ->whereMonth('Submit_Date','=',date('01'))
            ->take(10)
            ->groupBy('Site','Wilayah')
            ->orderBy('kcp','desc')
            ->get()->toArray();
    $labelKcp = array_column($labelKcp, 'lblKcp');

    return view('Kanwil.January.kanwil10January')
    ->with('kcu',json_encode($kcu,JSON_NUMERIC_CHECK))
    ->with('labelKcu',json_encode($labelKcu,JSON_NUMERIC_CHECK))
    ->with('kcp',json_encode($kcp,JSON_NUMERIC_CHECK))
    ->with('labelKcp',json_encode($labelKcp,JSON_NUMERIC_CHECK))
    ;
  }

  public function showJanuaryKanwil11()
  {
    $kcu = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site_Group) as kcu')))
              ->where('Wilayah','=','KANWIL XI')
              ->whereMonth('Submit_Date','=',date('01'))
              ->groupBy('Site_Group','Wilayah')
              ->orderBy('kcu','desc')
              ->get()->toArray();
    $kcu = array_column($kcu, 'kcu');

    $labelKcu = DB::table('report_solcents')
            ->select(array('Site_Group as lblKcu', DB::raw('count(Site_Group) as kcu')))
            ->where('Wilayah','=','KANWIL XI')
            ->whereMonth('Submit_Date','=',date('01'))
            ->take(10)
            ->groupBy('Site_Group','Wilayah')
            ->orderBy('kcu','desc')
            ->get()->toArray();
    $labelKcu = array_column($labelKcu, 'lblKcu');

    //KCP
    $kcp = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site) as kcp')))
              ->where('Wilayah','=','KANWIL XI')
              ->whereMonth('Submit_Date','=',date('01'))
              ->groupBy('Site','Wilayah')
              ->orderBy('kcp','desc')
              ->get()->toArray();
    $kcp = array_column($kcp, 'kcp');

    $labelKcp = DB::table('report_solcents')
            ->select(array('Site as lblKcp', DB::raw('count(Site) as kcp')))
            ->where('Wilayah','=','KANWIL XI')
            ->whereMonth('Submit_Date','=',date('01'))
            ->take(10)
            ->groupBy('Site','Wilayah')
            ->orderBy('kcp','desc')
            ->get()->toArray();
    $labelKcp = array_column($labelKcp, 'lblKcp');

    return view('Kanwil.January.kanwil11January')
    ->with('kcu',json_encode($kcu,JSON_NUMERIC_CHECK))
    ->with('labelKcu',json_encode($labelKcu,JSON_NUMERIC_CHECK))
    ->with('kcp',json_encode($kcp,JSON_NUMERIC_CHECK))
    ->with('labelKcp',json_encode($labelKcp,JSON_NUMERIC_CHECK))
    ;
  }

  public function showJanuaryKanwil12()
  {
    $kcu = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site_Group) as kcu')))
              ->where('Wilayah','=','KANWIL II')
              ->whereMonth('Submit_Date','=',date('01'))
              ->groupBy('Site_Group','Wilayah')
              ->orderBy('kcu','desc')
              ->get()->toArray();
    $kcu = array_column($kcu, 'kcu');

    $labelKcu = DB::table('report_solcents')
            ->select(array('Site_Group as lblKcu', DB::raw('count(Site_Group) as kcu')))
            ->where('Wilayah','=','KANWIL XII')
            ->whereMonth('Submit_Date','=',date('01'))
            ->take(10)
            ->groupBy('Site_Group','Wilayah')
            ->orderBy('kcu','desc')
            ->get()->toArray();
    $labelKcu = array_column($labelKcu, 'lblKcu');

    //KCP
    $kcp = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site) as kcp')))
              ->where('Wilayah','=','KANWIL XII')
              ->whereMonth('Submit_Date','=',date('01'))
              ->groupBy('Site','Wilayah')
              ->orderBy('kcp','desc')
              ->get()->toArray();
    $kcp = array_column($kcp, 'kcp');

    $labelKcp = DB::table('report_solcents')
            ->select(array('Site as lblKcp', DB::raw('count(Site) as kcp')))
            ->where('Wilayah','=','KANWIL XII')
            ->whereMonth('Submit_Date','=',date('01'))
            ->take(10)
            ->groupBy('Site','Wilayah')
            ->orderBy('kcp','desc')
            ->get()->toArray();
    $labelKcp = array_column($labelKcp, 'lblKcp');

    return view('Kanwil.January.kanwil12January')
    ->with('kcu',json_encode($kcu,JSON_NUMERIC_CHECK))
    ->with('labelKcu',json_encode($labelKcu,JSON_NUMERIC_CHECK))
    ->with('kcp',json_encode($kcp,JSON_NUMERIC_CHECK))
    ->with('labelKcp',json_encode($labelKcp,JSON_NUMERIC_CHECK))
    ;
  }
}
