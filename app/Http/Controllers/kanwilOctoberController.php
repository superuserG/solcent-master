<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class kanwilOctoberController extends Controller
{
  public function showOctoberKp()
  {
    //KCU
    $kcu = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site_Group) as kcu')))
              ->where('Wilayah','=','KANTOR PUSAT')
              ->whereMonth('Submit_Date','=',date('10'))
              ->groupBy('Site_Group','Wilayah')
              ->orderBy('kcu','desc')
              ->get()->toArray();
    $kcu = array_column($kcu, 'kcu');

    $labelKcu = DB::table('report_solcents')
            ->select(array('Site_Group as lblKcu', DB::raw('count(Site_Group) as kcu')))
            ->where('Wilayah','=','KANTOR PUSAT')
            ->whereMonth('Submit_Date','=',date('10'))
            ->take(10)
            ->groupBy('Site_Group','Wilayah')
            ->orderBy('kcu','desc')
            ->get()->toArray();
    $labelKcu = array_column($labelKcu, 'lblKcu');

    //KCP
    $kcp = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site) as kcp')))
              ->where('Wilayah','=','KANTOR PUSAT')
              ->whereMonth('Submit_Date','=',date('10'))
              ->groupBy('Site','Wilayah')
              ->orderBy('kcp','desc')
              ->get()->toArray();
    $kcp = array_column($kcp, 'kcp');

    $labelKcp = DB::table('report_solcents')
            ->select(array('Site as lblKcp', DB::raw('count(Site) as kcp')))
            ->where('Wilayah','=','KANTOR PUSAT')
            ->whereMonth('Submit_Date','=',date('10'))
            ->take(10)
            ->groupBy('Site','Wilayah')
            ->orderBy('kcp','desc')
            ->get()->toArray();
    $labelKcp = array_column($labelKcp, 'lblKcp');

    return view('Kanwil.October.kpOctober')
    ->with('kcu',json_encode($kcu,JSON_NUMERIC_CHECK))
    ->with('labelKcu',json_encode($labelKcu,JSON_NUMERIC_CHECK))
    ->with('kcp',json_encode($kcp,JSON_NUMERIC_CHECK))
    ->with('labelKcp',json_encode($labelKcp,JSON_NUMERIC_CHECK))
    ;
  }

  public function showOctoberKanwil1()
  {
    //KCU
    $kcu = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site_Group) as kcu')))
              ->where('Wilayah','=','KANWIL I')
              ->whereMonth('Submit_Date','=',date('10'))
              ->groupBy('Site_Group','Wilayah')
              ->orderBy('kcu','desc')
              ->get()->toArray();
    $kcu = array_column($kcu, 'kcu');

    $labelKcu = DB::table('report_solcents')
            ->select(array('Site_Group as lblKcu', DB::raw('count(Site_Group) as kcu')))
            ->where('Wilayah','=','KANWIL I')
            ->whereMonth('Submit_Date','=',date('10'))
            ->take(10)
            ->groupBy('Site_Group','Wilayah')
            ->orderBy('kcu','desc')
            ->get()->toArray();
    $labelKcu = array_column($labelKcu, 'lblKcu');

    //KCP
    $kcp = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site) as kcp')))
              ->where('Wilayah','=','KANWIL I')
              ->whereMonth('Submit_Date','=',date('10'))
              ->groupBy('Site','Wilayah')
              ->orderBy('kcp','desc')
              ->get()->toArray();
    $kcp = array_column($kcp, 'kcp');

    $labelKcp = DB::table('report_solcents')
            ->select(array('Site as lblKcp', DB::raw('count(Site) as kcp')))
            ->where('Wilayah','=','KANWIL I')
            ->whereMonth('Submit_Date','=',date('10'))
            ->take(10)
            ->groupBy('Site','Wilayah')
            ->orderBy('kcp','desc')
            ->get()->toArray();
    $labelKcp = array_column($labelKcp, 'lblKcp');

    return view('Kanwil.October.kanwil1October')
    ->with('kcu',json_encode($kcu,JSON_NUMERIC_CHECK))
    ->with('labelKcu',json_encode($labelKcu,JSON_NUMERIC_CHECK))
    ->with('kcp',json_encode($kcp,JSON_NUMERIC_CHECK))
    ->with('labelKcp',json_encode($labelKcp,JSON_NUMERIC_CHECK))
    ;
  }

  public function showOctoberKanwil2()
  {
    //KCU
    $kcu = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site_Group) as kcu')))
              ->where('Wilayah','=','KANWIL II')
              ->whereMonth('Submit_Date','=',date('10'))
              ->groupBy('Site_Group','Wilayah')
              ->orderBy('kcu','desc')
              ->get()->toArray();
    $kcu = array_column($kcu, 'kcu');

    $labelKcu = DB::table('report_solcents')
            ->select(array('Site_Group as lblKcu', DB::raw('count(Site_Group) as kcu')))
            ->where('Wilayah','=','KANWIL II')
            ->whereMonth('Submit_Date','=',date('10'))
            ->take(10)
            ->groupBy('Site_Group','Wilayah')
            ->orderBy('kcu','desc')
            ->get()->toArray();
    $labelKcu = array_column($labelKcu, 'lblKcu');

    //KCP
    $kcp = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site) as kcp')))
              ->where('Wilayah','=','KANWIL II')
              ->whereMonth('Submit_Date','=',date('10'))
              ->groupBy('Site','Wilayah')
              ->orderBy('kcp','desc')
              ->get()->toArray();
    $kcp = array_column($kcp, 'kcp');

    $labelKcp = DB::table('report_solcents')
            ->select(array('Site as lblKcp', DB::raw('count(Site) as kcp')))
            ->where('Wilayah','=','KANWIL II')
            ->whereMonth('Submit_Date','=',date('10'))
            ->take(10)
            ->groupBy('Site','Wilayah')
            ->orderBy('kcp','desc')
            ->get()->toArray();
    $labelKcp = array_column($labelKcp, 'lblKcp');

    return view('Kanwil.October.kanwil2October')
    ->with('kcu',json_encode($kcu,JSON_NUMERIC_CHECK))
    ->with('labelKcu',json_encode($labelKcu,JSON_NUMERIC_CHECK))
    ->with('kcp',json_encode($kcp,JSON_NUMERIC_CHECK))
    ->with('labelKcp',json_encode($labelKcp,JSON_NUMERIC_CHECK))
    ;
  }

  public function showOctoberKanwil3()
  {
    //KCU
    $kcu = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site_Group) as kcu')))
              ->where('Wilayah','=','KANWIL III')
              ->whereMonth('Submit_Date','=',date('10'))
              ->groupBy('Site_Group','Wilayah')
              ->orderBy('kcu','desc')
              ->get()->toArray();
    $kcu = array_column($kcu, 'kcu');

    $labelKcu = DB::table('report_solcents')
            ->select(array('Site_Group as lblKcu', DB::raw('count(Site_Group) as kcu')))
            ->where('Wilayah','=','KANWIL III')
            ->whereMonth('Submit_Date','=',date('10'))
            ->take(10)
            ->groupBy('Site_Group','Wilayah')
            ->orderBy('kcu','desc')
            ->get()->toArray();
    $labelKcu = array_column($labelKcu, 'lblKcu');

    //KCP
    $kcp = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site) as kcp')))
              ->where('Wilayah','=','KANWIL III')
              ->whereMonth('Submit_Date','=',date('10'))
              ->groupBy('Site','Wilayah')
              ->orderBy('kcp','desc')
              ->get()->toArray();
    $kcp = array_column($kcp, 'kcp');

    $labelKcp = DB::table('report_solcents')
            ->select(array('Site as lblKcp', DB::raw('count(Site) as kcp')))
            ->where('Wilayah','=','KANWIL III')
            ->whereMonth('Submit_Date','=',date('10'))
            ->take(10)
            ->groupBy('Site','Wilayah')
            ->orderBy('kcp','desc')
            ->get()->toArray();
    $labelKcp = array_column($labelKcp, 'lblKcp');

    return view('Kanwil.October.kanwil3October')
    ->with('kcu',json_encode($kcu,JSON_NUMERIC_CHECK))
    ->with('labelKcu',json_encode($labelKcu,JSON_NUMERIC_CHECK))
    ->with('kcp',json_encode($kcp,JSON_NUMERIC_CHECK))
    ->with('labelKcp',json_encode($labelKcp,JSON_NUMERIC_CHECK))
    ;
  }

  public function showOctoberKanwil4()
  {
    //KCU
    $kcu = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site_Group) as kcu')))
              ->where('Wilayah','=','KANWIL IV')
              ->whereMonth('Submit_Date','=',date('10'))
              ->groupBy('Site_Group','Wilayah')
              ->orderBy('kcu','desc')
              ->get()->toArray();
    $kcu = array_column($kcu, 'kcu');

    $labelKcu = DB::table('report_solcents')
            ->select(array('Site_Group as lblKcu', DB::raw('count(Site_Group) as kcu')))
            ->where('Wilayah','=','KANWIL IV')
            ->whereMonth('Submit_Date','=',date('10'))
            ->take(10)
            ->groupBy('Site_Group','Wilayah')
            ->orderBy('kcu','desc')
            ->get()->toArray();
    $labelKcu = array_column($labelKcu, 'lblKcu');

    //KCP
    $kcp = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site) as kcp')))
              ->where('Wilayah','=','KANWIL IV')
              ->whereMonth('Submit_Date','=',date('10'))
              ->groupBy('Site','Wilayah')
              ->orderBy('kcp','desc')
              ->get()->toArray();
    $kcp = array_column($kcp, 'kcp');

    $labelKcp = DB::table('report_solcents')
            ->select(array('Site as lblKcp', DB::raw('count(Site) as kcp')))
            ->where('Wilayah','=','KANWIL IV')
            ->whereMonth('Submit_Date','=',date('10'))
            ->take(10)
            ->groupBy('Site','Wilayah')
            ->orderBy('kcp','desc')
            ->get()->toArray();
    $labelKcp = array_column($labelKcp, 'lblKcp');

    return view('Kanwil.October.kanwil4October')
    ->with('kcu',json_encode($kcu,JSON_NUMERIC_CHECK))
    ->with('labelKcu',json_encode($labelKcu,JSON_NUMERIC_CHECK))
    ->with('kcp',json_encode($kcp,JSON_NUMERIC_CHECK))
    ->with('labelKcp',json_encode($labelKcp,JSON_NUMERIC_CHECK))
    ;
  }

  public function showOctoberKanwil5()
  {
    //KCU
    $kcu = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site_Group) as kcu')))
              ->where('Wilayah','=','KANWIL V')
              ->whereMonth('Submit_Date','=',date('10'))
              ->groupBy('Site_Group','Wilayah')
              ->orderBy('kcu','desc')
              ->get()->toArray();
    $kcu = array_column($kcu, 'kcu');

    $labelKcu = DB::table('report_solcents')
            ->select(array('Site_Group as lblKcu', DB::raw('count(Site_Group) as kcu')))
            ->where('Wilayah','=','KANWIL V')
            ->whereMonth('Submit_Date','=',date('10'))
            ->take(10)
            ->groupBy('Site_Group','Wilayah')
            ->orderBy('kcu','desc')
            ->get()->toArray();
    $labelKcu = array_column($labelKcu, 'lblKcu');

    //KCP
    $kcp = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site) as kcp')))
              ->where('Wilayah','=','KANWIL V')
              ->whereMonth('Submit_Date','=',date('10'))
              ->groupBy('Site','Wilayah')
              ->orderBy('kcp','desc')
              ->get()->toArray();
    $kcp = array_column($kcp, 'kcp');

    $labelKcp = DB::table('report_solcents')
            ->select(array('Site as lblKcp', DB::raw('count(Site) as kcp')))
            ->where('Wilayah','=','KANWIL V')
            ->whereMonth('Submit_Date','=',date('10'))
            ->take(10)
            ->groupBy('Site','Wilayah')
            ->orderBy('kcp','desc')
            ->get()->toArray();
    $labelKcp = array_column($labelKcp, 'lblKcp');

    return view('Kanwil.October.kanwil5October')
    ->with('kcu',json_encode($kcu,JSON_NUMERIC_CHECK))
    ->with('labelKcu',json_encode($labelKcu,JSON_NUMERIC_CHECK))
    ->with('kcp',json_encode($kcp,JSON_NUMERIC_CHECK))
    ->with('labelKcp',json_encode($labelKcp,JSON_NUMERIC_CHECK))
    ;
  }

  public function showOctoberKanwil6()
  {
    //KCU
    $kcu = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site_Group) as kcu')))
              ->where('Wilayah','=','KANWIL VI')
              ->whereMonth('Submit_Date','=',date('10'))
              ->groupBy('Site_Group','Wilayah')
              ->orderBy('kcu','desc')
              ->get()->toArray();
    $kcu = array_column($kcu, 'kcu');

    $labelKcu = DB::table('report_solcents')
            ->select(array('Site_Group as lblKcu', DB::raw('count(Site_Group) as kcu')))
            ->where('Wilayah','=','KANWIL VI')
            ->whereMonth('Submit_Date','=',date('10'))
            ->take(10)
            ->groupBy('Site_Group','Wilayah')
            ->orderBy('kcu','desc')
            ->get()->toArray();
    $labelKcu = array_column($labelKcu, 'lblKcu');

    //KCP
    $kcp = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site) as kcp')))
              ->where('Wilayah','=','KANWIL VI')
              ->whereMonth('Submit_Date','=',date('10'))
              ->groupBy('Site','Wilayah')
              ->orderBy('kcp','desc')
              ->get()->toArray();
    $kcp = array_column($kcp, 'kcp');

    $labelKcp = DB::table('report_solcents')
            ->select(array('Site as lblKcp', DB::raw('count(Site) as kcp')))
            ->where('Wilayah','=','KANWIL VI')
            ->whereMonth('Submit_Date','=',date('10'))
            ->take(10)
            ->groupBy('Site','Wilayah')
            ->orderBy('kcp','desc')
            ->get()->toArray();
    $labelKcp = array_column($labelKcp, 'lblKcp');

    return view('Kanwil.October.kanwil6October')
    ->with('kcu',json_encode($kcu,JSON_NUMERIC_CHECK))
    ->with('labelKcu',json_encode($labelKcu,JSON_NUMERIC_CHECK))
    ->with('kcp',json_encode($kcp,JSON_NUMERIC_CHECK))
    ->with('labelKcp',json_encode($labelKcp,JSON_NUMERIC_CHECK))
    ;
  }

  public function showOctoberKanwil7()
  {
    //KCU
    $kcu = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site_Group) as kcu')))
              ->where('Wilayah','=','KANWIL VII')
              ->whereMonth('Submit_Date','=',date('10'))
              ->groupBy('Site_Group','Wilayah')
              ->orderBy('kcu','desc')
              ->get()->toArray();
    $kcu = array_column($kcu, 'kcu');

    $labelKcu = DB::table('report_solcents')
            ->select(array('Site_Group as lblKcu', DB::raw('count(Site_Group) as kcu')))
            ->where('Wilayah','=','KANWIL VII')
            ->whereMonth('Submit_Date','=',date('10'))
            ->take(10)
            ->groupBy('Site_Group','Wilayah')
            ->orderBy('kcu','desc')
            ->get()->toArray();
    $labelKcu = array_column($labelKcu, 'lblKcu');

    //KCP
    $kcp = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site) as kcp')))
              ->where('Wilayah','=','KANWIL VII')
              ->whereMonth('Submit_Date','=',date('10'))
              ->groupBy('Site','Wilayah')
              ->orderBy('kcp','desc')
              ->get()->toArray();
    $kcp = array_column($kcp, 'kcp');

    $labelKcp = DB::table('report_solcents')
            ->select(array('Site as lblKcp', DB::raw('count(Site) as kcp')))
            ->where('Wilayah','=','KANWIL VII')
            ->whereMonth('Submit_Date','=',date('10'))
            ->take(10)
            ->groupBy('Site','Wilayah')
            ->orderBy('kcp','desc')
            ->get()->toArray();
    $labelKcp = array_column($labelKcp, 'lblKcp');


    return view('Kanwil.October.kanwil7October')
    ->with('kcu',json_encode($kcu,JSON_NUMERIC_CHECK))
    ->with('labelKcu',json_encode($labelKcu,JSON_NUMERIC_CHECK))
    ->with('kcp',json_encode($kcp,JSON_NUMERIC_CHECK))
    ->with('labelKcp',json_encode($labelKcp,JSON_NUMERIC_CHECK))
    ;
  }

  public function showOctoberKanwil8()
  {
    //KCU
    $kcu = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site_Group) as kcu')))
              ->where('Wilayah','=','KANWIL VIII')
              ->whereMonth('Submit_Date','=',date('10'))
              ->groupBy('Site_Group','Wilayah')
              ->orderBy('kcu','desc')
              ->get()->toArray();
    $kcu = array_column($kcu, 'kcu');

    $labelKcu = DB::table('report_solcents')
            ->select(array('Site_Group as lblKcu', DB::raw('count(Site_Group) as kcu')))
            ->where('Wilayah','=','KANWIL VIII')
            ->whereMonth('Submit_Date','=',date('10'))
            ->take(10)
            ->groupBy('Site_Group','Wilayah')
            ->orderBy('kcu','desc')
            ->get()->toArray();
    $labelKcu = array_column($labelKcu, 'lblKcu');

    //KCP
    $kcp = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site) as kcp')))
              ->where('Wilayah','=','KANWIL VIII')
              ->whereMonth('Submit_Date','=',date('10'))
              ->groupBy('Site','Wilayah')
              ->orderBy('kcp','desc')
              ->get()->toArray();
    $kcp = array_column($kcp, 'kcp');

    $labelKcp = DB::table('report_solcents')
            ->select(array('Site as lblKcp', DB::raw('count(Site) as kcp')))
            ->where('Wilayah','=','KANWIL VIII')
            ->whereMonth('Submit_Date','=',date('10'))
            ->take(10)
            ->groupBy('Site','Wilayah')
            ->orderBy('kcp','desc')
            ->get()->toArray();
    $labelKcp = array_column($labelKcp, 'lblKcp');

    return view('Kanwil.October.kanwil8October')
    ->with('kcu',json_encode($kcu,JSON_NUMERIC_CHECK))
    ->with('labelKcu',json_encode($labelKcu,JSON_NUMERIC_CHECK))
    ->with('kcp',json_encode($kcp,JSON_NUMERIC_CHECK))
    ->with('labelKcp',json_encode($labelKcp,JSON_NUMERIC_CHECK))
    ;
  }

  public function showOctoberKanwil9()
  {
    //KCU
    $kcu = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site_Group) as kcu')))
              ->where('Wilayah','=','KANWIL IX')
              ->whereMonth('Submit_Date','=',date('10'))
              ->groupBy('Site_Group','Wilayah')
              ->orderBy('kcu','desc')
              ->get()->toArray();
    $kcu = array_column($kcu, 'kcu');

    $labelKcu = DB::table('report_solcents')
            ->select(array('Site_Group as lblKcu', DB::raw('count(Site_Group) as kcu')))
            ->where('Wilayah','=','KANWIL IX')
            ->whereMonth('Submit_Date','=',date('10'))
            ->take(10)
            ->groupBy('Site_Group','Wilayah')
            ->orderBy('kcu','desc')
            ->get()->toArray();
    $labelKcu = array_column($labelKcu, 'lblKcu');

    //KCP
    $kcp = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site) as kcp')))
              ->where('Wilayah','=','KANWIL IX')
              ->whereMonth('Submit_Date','=',date('10'))
              ->groupBy('Site','Wilayah')
              ->orderBy('kcp','desc')
              ->get()->toArray();
    $kcp = array_column($kcp, 'kcp');

    $labelKcp = DB::table('report_solcents')
            ->select(array('Site as lblKcp', DB::raw('count(Site) as kcp')))
            ->where('Wilayah','=','KANWIL IX')
            ->whereMonth('Submit_Date','=',date('10'))
            ->take(10)
            ->groupBy('Site','Wilayah')
            ->orderBy('kcp','desc')
            ->get()->toArray();
    $labelKcp = array_column($labelKcp, 'lblKcp');

    return view('Kanwil.October.kanwil9October')
    ->with('kcu',json_encode($kcu,JSON_NUMERIC_CHECK))
    ->with('labelKcu',json_encode($labelKcu,JSON_NUMERIC_CHECK))
    ->with('kcp',json_encode($kcp,JSON_NUMERIC_CHECK))
    ->with('labelKcp',json_encode($labelKcp,JSON_NUMERIC_CHECK));
  }

  public function showOctoberKanwil10()
  {
    //KCU
    $kcu = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site_Group) as kcu')))
              ->where('Wilayah','=','KANWIL X')
              ->whereMonth('Submit_Date','=',date('10'))
              ->groupBy('Site_Group','Wilayah')
              ->orderBy('kcu','desc')
              ->get()->toArray();
    $kcu = array_column($kcu, 'kcu');

    $labelKcu = DB::table('report_solcents')
            ->select(array('Site_Group as lblKcu', DB::raw('count(Site_Group) as kcu')))
            ->where('Wilayah','=','KANWIL X')
            ->whereMonth('Submit_Date','=',date('10'))
            ->take(10)
            ->groupBy('Site_Group','Wilayah')
            ->orderBy('kcu','desc')
            ->get()->toArray();
    $labelKcu = array_column($labelKcu, 'lblKcu');

    //KCP
    $kcp = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site) as kcp')))
              ->where('Wilayah','=','KANWIL X')
              ->whereMonth('Submit_Date','=',date('10'))
              ->groupBy('Site','Wilayah')
              ->orderBy('kcp','desc')
              ->get()->toArray();
    $kcp = array_column($kcp, 'kcp');

    $labelKcp = DB::table('report_solcents')
            ->select(array('Site as lblKcp', DB::raw('count(Site) as kcp')))
            ->where('Wilayah','=','KANWIL X')
            ->whereMonth('Submit_Date','=',date('10'))
            ->take(10)
            ->groupBy('Site','Wilayah')
            ->orderBy('kcp','desc')
            ->get()->toArray();
    $labelKcp = array_column($labelKcp, 'lblKcp');

    return view('Kanwil.October.kanwil10October')
    ->with('kcu',json_encode($kcu,JSON_NUMERIC_CHECK))
    ->with('labelKcu',json_encode($labelKcu,JSON_NUMERIC_CHECK))
    ->with('kcp',json_encode($kcp,JSON_NUMERIC_CHECK))
    ->with('labelKcp',json_encode($labelKcp,JSON_NUMERIC_CHECK))
    ;
  }

  public function showOctoberKanwil11()
  {
    //KCU
    $kcu = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site_Group) as kcu')))
              ->where('Wilayah','=','KANWIL XI')
              ->whereMonth('Submit_Date','=',date('10'))
              ->groupBy('Site_Group','Wilayah')
              ->orderBy('kcu','desc')
              ->get()->toArray();
    $kcu = array_column($kcu, 'kcu');

    $labelKcu = DB::table('report_solcents')
            ->select(array('Site_Group as lblKcu', DB::raw('count(Site_Group) as kcu')))
            ->where('Wilayah','=','KANWIL XI')
            ->whereMonth('Submit_Date','=',date('10'))
            ->take(10)
            ->groupBy('Site_Group','Wilayah')
            ->orderBy('kcu','desc')
            ->get()->toArray();
    $labelKcu = array_column($labelKcu, 'lblKcu');

    //KCP
    $kcp = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site) as kcp')))
              ->where('Wilayah','=','KANWIL X')
              ->whereMonth('Submit_Date','=',date('10'))
              ->groupBy('Site','Wilayah')
              ->orderBy('kcp','desc')
              ->get()->toArray();
    $kcp = array_column($kcp, 'kcp');

    $labelKcp = DB::table('report_solcents')
            ->select(array('Site as lblKcp', DB::raw('count(Site) as kcp')))
            ->where('Wilayah','=','KANWIL XI')
            ->whereMonth('Submit_Date','=',date('10'))
            ->take(10)
            ->groupBy('Site','Wilayah')
            ->orderBy('kcp','desc')
            ->get()->toArray();
    $labelKcp = array_column($labelKcp, 'lblKcp');


    return view('Kanwil.October.kanwil11October')
    ->with('kcu',json_encode($kcu,JSON_NUMERIC_CHECK))
    ->with('labelKcu',json_encode($labelKcu,JSON_NUMERIC_CHECK))
    ->with('kcp',json_encode($kcp,JSON_NUMERIC_CHECK))
    ->with('labelKcp',json_encode($labelKcp,JSON_NUMERIC_CHECK))
    ;
  }

  public function showOctoberKanwil12()
  {
    //KCU
    $kcu = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site_Group) as kcu')))
              ->where('Wilayah','=','KANWIL XII')
              ->whereMonth('Submit_Date','=',date('10'))
              ->groupBy('Site_Group','Wilayah')
              ->orderBy('kcu','desc')
              ->get()->toArray();
    $kcu = array_column($kcu, 'kcu');

    $labelKcu = DB::table('report_solcents')
            ->select(array('Site_Group as lblKcu', DB::raw('count(Site_Group) as kcu')))
            ->where('Wilayah','=','KANWIL XII')
            ->whereMonth('Submit_Date','=',date('10'))
            ->take(10)
            ->groupBy('Site_Group','Wilayah')
            ->orderBy('kcu','desc')
            ->get()->toArray();
    $labelKcu = array_column($labelKcu, 'lblKcu');

    //KCP
    $kcp = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site) as kcp')))
              ->where('Wilayah','=','KANWIL XII')
              ->whereMonth('Submit_Date','=',date('10'))
              ->groupBy('Site','Wilayah')
              ->orderBy('kcp','desc')
              ->get()->toArray();
    $kcp = array_column($kcp, 'kcp');

    $labelKcp = DB::table('report_solcents')
            ->select(array('Site as lblKcp', DB::raw('count(Site) as kcp')))
            ->where('Wilayah','=','KANWIL XII')
            ->whereMonth('Submit_Date','=',date('10'))
            ->take(10)
            ->groupBy('Site','Wilayah')
            ->orderBy('kcp','desc')
            ->get()->toArray();
    $labelKcp = array_column($labelKcp, 'lblKcp');


    return view('Kanwil.October.kanwil12October')
    ->with('kcu',json_encode($kcu,JSON_NUMERIC_CHECK))
    ->with('labelKcu',json_encode($labelKcu,JSON_NUMERIC_CHECK))
    ->with('kcp',json_encode($kcp,JSON_NUMERIC_CHECK))
    ->with('labelKcp',json_encode($labelKcp,JSON_NUMERIC_CHECK))
    ;
  }
}
