<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class kanwilDecemberController extends Controller
{
  public function showDecemberKp()
  {
    //KCU
    $kcu = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site_Group) as kcu')))
              ->where('Wilayah','=','KANTOR PUSAT')
              ->whereMonth('Submit_Date','=',date('12'))
              ->groupBy('Site_Group','Wilayah')
              ->orderBy('kcu','desc')
              ->get()->toArray();
    $kcu = array_column($kcu, 'kcu');

    $labelKcu = DB::table('report_solcents')
            ->select(array('Site_Group as lblKcu', DB::raw('count(Site_Group) as kcu')))
            ->where('Wilayah','=','KANTOR PUSAT')
            ->whereMonth('Submit_Date','=',date('12'))
            ->take(10)
            ->groupBy('Site_Group','Wilayah')
            ->orderBy('kcu','desc')
            ->get()->toArray();
    $labelKcu = array_column($labelKcu, 'lblKcu');

    //KCP
    $kcp = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site) as kcp')))
              ->where('Wilayah','=','KANTOR PUSAT')
              ->whereMonth('Submit_Date','=',date('12'))
              ->groupBy('Site','Wilayah')
              ->orderBy('kcp','desc')
              ->get()->toArray();
    $kcp = array_column($kcp, 'kcp');

    $labelKcp = DB::table('report_solcents')
            ->select(array('Site as lblKcp', DB::raw('count(Site) as kcp')))
            ->where('Wilayah','=','KANTOR PUSAT')
            ->whereMonth('Submit_Date','=',date('12'))
            ->take(10)
            ->groupBy('Site','Wilayah')
            ->orderBy('kcp','desc')
            ->get()->toArray();
    $labelKcp = array_column($labelKcp, 'lblKcp');

    return view('Kanwil.December.kpDecember')
    ->with('kcu',json_encode($kcu,JSON_NUMERIC_CHECK))
    ->with('labelKcu',json_encode($labelKcu,JSON_NUMERIC_CHECK))
    ->with('kcp',json_encode($kcp,JSON_NUMERIC_CHECK))
    ->with('labelKcp',json_encode($labelKcp,JSON_NUMERIC_CHECK))
    ;
  }

  public function showDecemberKanwil1()
  {
    //KCU
    $kcu = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site_Group) as kcu')))
              ->where('Wilayah','=','KANWIL I')
              ->whereMonth('Submit_Date','=',date('12'))
              ->groupBy('Site_Group','Wilayah')
              ->orderBy('kcu','desc')
              ->get()->toArray();
    $kcu = array_column($kcu, 'kcu');

    $labelKcu = DB::table('report_solcents')
            ->select(array('Site_Group as lblKcu', DB::raw('count(Site_Group) as kcu')))
            ->where('Wilayah','=','KANWIL I')
            ->whereMonth('Submit_Date','=',date('12'))
            ->take(10)
            ->groupBy('Site_Group','Wilayah')
            ->orderBy('kcu','desc')
            ->get()->toArray();
    $labelKcu = array_column($labelKcu, 'lblKcu');

    //KCP
    $kcp = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site) as kcp')))
              ->where('Wilayah','=','KANWIL I')
              ->whereMonth('Submit_Date','=',date('12'))
              ->groupBy('Site','Wilayah')
              ->orderBy('kcp','desc')
              ->get()->toArray();
    $kcp = array_column($kcp, 'kcp');

    $labelKcp = DB::table('report_solcents')
            ->select(array('Site as lblKcp', DB::raw('count(Site) as kcp')))
            ->where('Wilayah','=','KANWIL I')
            ->whereMonth('Submit_Date','=',date('12'))
            ->take(10)
            ->groupBy('Site','Wilayah')
            ->orderBy('kcp','desc')
            ->get()->toArray();
    $labelKcp = array_column($labelKcp, 'lblKcp');

    return view('Kanwil.December.kanwil1December')
    ->with('kcu',json_encode($kcu,JSON_NUMERIC_CHECK))
    ->with('labelKcu',json_encode($labelKcu,JSON_NUMERIC_CHECK))
    ->with('kcp',json_encode($kcp,JSON_NUMERIC_CHECK))
    ->with('labelKcp',json_encode($labelKcp,JSON_NUMERIC_CHECK))
    ;
  }

  public function showDecemberKanwil2()
  {
    //KCU
    $kcu = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site_Group) as kcu')))
              ->where('Wilayah','=','KANWIL II')
              ->whereMonth('Submit_Date','=',date('12'))
              ->groupBy('Site_Group','Wilayah')
              ->orderBy('kcu','desc')
              ->get()->toArray();
    $kcu = array_column($kcu, 'kcu');

    $labelKcu = DB::table('report_solcents')
            ->select(array('Site_Group as lblKcu', DB::raw('count(Site_Group) as kcu')))
            ->where('Wilayah','=','KANWIL II')
            ->whereMonth('Submit_Date','=',date('12'))
            ->take(10)
            ->groupBy('Site_Group','Wilayah')
            ->orderBy('kcu','desc')
            ->get()->toArray();
    $labelKcu = array_column($labelKcu, 'lblKcu');

    //KCP
    $kcp = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site) as kcp')))
              ->where('Wilayah','=','KANWIL II')
              ->whereMonth('Submit_Date','=',date('12'))
              ->groupBy('Site','Wilayah')
              ->orderBy('kcp','desc')
              ->get()->toArray();
    $kcp = array_column($kcp, 'kcp');

    $labelKcp = DB::table('report_solcents')
            ->select(array('Site as lblKcp', DB::raw('count(Site) as kcp')))
            ->where('Wilayah','=','KANWIL II')
            ->whereMonth('Submit_Date','=',date('12'))
            ->take(10)
            ->groupBy('Site','Wilayah')
            ->orderBy('kcp','desc')
            ->get()->toArray();
    $labelKcp = array_column($labelKcp, 'lblKcp');

    return view('Kanwil.December.kanwil2December')
    ->with('kcu',json_encode($kcu,JSON_NUMERIC_CHECK))
    ->with('labelKcu',json_encode($labelKcu,JSON_NUMERIC_CHECK))
    ->with('kcp',json_encode($kcp,JSON_NUMERIC_CHECK))
    ->with('labelKcp',json_encode($labelKcp,JSON_NUMERIC_CHECK))
    ;
  }

  public function showDecemberKanwil3()
  {
    //KCU
    $kcu = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site_Group) as kcu')))
              ->where('Wilayah','=','KANWIL III')
              ->whereMonth('Submit_Date','=',date('12'))
              ->groupBy('Site_Group','Wilayah')
              ->orderBy('kcu','desc')
              ->get()->toArray();
    $kcu = array_column($kcu, 'kcu');

    $labelKcu = DB::table('report_solcents')
            ->select(array('Site_Group as lblKcu', DB::raw('count(Site_Group) as kcu')))
            ->where('Wilayah','=','KANWIL III')
            ->whereMonth('Submit_Date','=',date('12'))
            ->take(10)
            ->groupBy('Site_Group','Wilayah')
            ->orderBy('kcu','desc')
            ->get()->toArray();
    $labelKcu = array_column($labelKcu, 'lblKcu');

    //KCP
    $kcp = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site) as kcp')))
              ->where('Wilayah','=','KANWIL III')
              ->whereMonth('Submit_Date','=',date('12'))
              ->groupBy('Site','Wilayah')
              ->orderBy('kcp','desc')
              ->get()->toArray();
    $kcp = array_column($kcp, 'kcp');

    $labelKcp = DB::table('report_solcents')
            ->select(array('Site as lblKcp', DB::raw('count(Site) as kcp')))
            ->where('Wilayah','=','KANWIL III')
            ->whereMonth('Submit_Date','=',date('12'))
            ->take(10)
            ->groupBy('Site','Wilayah')
            ->orderBy('kcp','desc')
            ->get()->toArray();
    $labelKcp = array_column($labelKcp, 'lblKcp');

    return view('Kanwil.December.kanwil3December')
    ->with('kcu',json_encode($kcu,JSON_NUMERIC_CHECK))
    ->with('labelKcu',json_encode($labelKcu,JSON_NUMERIC_CHECK))
    ->with('kcp',json_encode($kcp,JSON_NUMERIC_CHECK))
    ->with('labelKcp',json_encode($labelKcp,JSON_NUMERIC_CHECK))
    ;
  }

  public function showDecemberKanwil4()
  {
    //KCU
    $kcu = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site_Group) as kcu')))
              ->where('Wilayah','=','KANWIL IV')
              ->whereMonth('Submit_Date','=',date('12'))
              ->groupBy('Site_Group','Wilayah')
              ->orderBy('kcu','desc')
              ->get()->toArray();
    $kcu = array_column($kcu, 'kcu');

    $labelKcu = DB::table('report_solcents')
            ->select(array('Site_Group as lblKcu', DB::raw('count(Site_Group) as kcu')))
            ->where('Wilayah','=','KANWIL IV')
            ->whereMonth('Submit_Date','=',date('12'))
            ->take(10)
            ->groupBy('Site_Group','Wilayah')
            ->orderBy('kcu','desc')
            ->get()->toArray();
    $labelKcu = array_column($labelKcu, 'lblKcu');

    //KCP
    $kcp = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site) as kcp')))
              ->where('Wilayah','=','KANWIL IV')
              ->whereMonth('Submit_Date','=',date('12'))
              ->groupBy('Site','Wilayah')
              ->orderBy('kcp','desc')
              ->get()->toArray();
    $kcp = array_column($kcp, 'kcp');

    $labelKcp = DB::table('report_solcents')
            ->select(array('Site as lblKcp', DB::raw('count(Site) as kcp')))
            ->where('Wilayah','=','KANWIL IV')
            ->whereMonth('Submit_Date','=',date('12'))
            ->take(10)
            ->groupBy('Site','Wilayah')
            ->orderBy('kcp','desc')
            ->get()->toArray();
    $labelKcp = array_column($labelKcp, 'lblKcp');

    return view('Kanwil.December.kanwil4December')
    ->with('kcu',json_encode($kcu,JSON_NUMERIC_CHECK))
    ->with('labelKcu',json_encode($labelKcu,JSON_NUMERIC_CHECK))
    ->with('kcp',json_encode($kcp,JSON_NUMERIC_CHECK))
    ->with('labelKcp',json_encode($labelKcp,JSON_NUMERIC_CHECK))
    ;
  }

  public function showDecemberKanwil5()
  {
    //KCU
    $kcu = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site_Group) as kcu')))
              ->where('Wilayah','=','KANWIL V')
              ->whereMonth('Submit_Date','=',date('12'))
              ->groupBy('Site_Group','Wilayah')
              ->orderBy('kcu','desc')
              ->get()->toArray();
    $kcu = array_column($kcu, 'kcu');

    $labelKcu = DB::table('report_solcents')
            ->select(array('Site_Group as lblKcu', DB::raw('count(Site_Group) as kcu')))
            ->where('Wilayah','=','KANWIL V')
            ->whereMonth('Submit_Date','=',date('12'))
            ->take(10)
            ->groupBy('Site_Group','Wilayah')
            ->orderBy('kcu','desc')
            ->get()->toArray();
    $labelKcu = array_column($labelKcu, 'lblKcu');

    //KCP
    $kcp = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site) as kcp')))
              ->where('Wilayah','=','KANWIL V')
              ->whereMonth('Submit_Date','=',date('12'))
              ->groupBy('Site','Wilayah')
              ->orderBy('kcp','desc')
              ->get()->toArray();
    $kcp = array_column($kcp, 'kcp');

    $labelKcp = DB::table('report_solcents')
            ->select(array('Site as lblKcp', DB::raw('count(Site) as kcp')))
            ->where('Wilayah','=','KANWIL V')
            ->whereMonth('Submit_Date','=',date('12'))
            ->take(10)
            ->groupBy('Site','Wilayah')
            ->orderBy('kcp','desc')
            ->get()->toArray();
    $labelKcp = array_column($labelKcp, 'lblKcp');

    return view('Kanwil.December.kanwil5December')
    ->with('kcu',json_encode($kcu,JSON_NUMERIC_CHECK))
    ->with('labelKcu',json_encode($labelKcu,JSON_NUMERIC_CHECK))
    ->with('kcp',json_encode($kcp,JSON_NUMERIC_CHECK))
    ->with('labelKcp',json_encode($labelKcp,JSON_NUMERIC_CHECK))
    ;
  }

  public function showDecemberKanwil6()
  {
    //KCU
    $kcu = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site_Group) as kcu')))
              ->where('Wilayah','=','KANWIL VI')
              ->whereMonth('Submit_Date','=',date('12'))
              ->groupBy('Site_Group','Wilayah')
              ->orderBy('kcu','desc')
              ->get()->toArray();
    $kcu = array_column($kcu, 'kcu');

    $labelKcu = DB::table('report_solcents')
            ->select(array('Site_Group as lblKcu', DB::raw('count(Site_Group) as kcu')))
            ->where('Wilayah','=','KANWIL VI')
            ->whereMonth('Submit_Date','=',date('12'))
            ->take(10)
            ->groupBy('Site_Group','Wilayah')
            ->orderBy('kcu','desc')
            ->get()->toArray();
    $labelKcu = array_column($labelKcu, 'lblKcu');

    //KCP
    $kcp = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site) as kcp')))
              ->where('Wilayah','=','KANWIL VI')
              ->whereMonth('Submit_Date','=',date('12'))
              ->groupBy('Site','Wilayah')
              ->orderBy('kcp','desc')
              ->get()->toArray();
    $kcp = array_column($kcp, 'kcp');

    $labelKcp = DB::table('report_solcents')
            ->select(array('Site as lblKcp', DB::raw('count(Site) as kcp')))
            ->where('Wilayah','=','KANWIL VI')
            ->whereMonth('Submit_Date','=',date('12'))
            ->take(10)
            ->groupBy('Site','Wilayah')
            ->orderBy('kcp','desc')
            ->get()->toArray();
    $labelKcp = array_column($labelKcp, 'lblKcp');

    return view('Kanwil.December.kanwil6December')
    ->with('kcu',json_encode($kcu,JSON_NUMERIC_CHECK))
    ->with('labelKcu',json_encode($labelKcu,JSON_NUMERIC_CHECK))
    ->with('kcp',json_encode($kcp,JSON_NUMERIC_CHECK))
    ->with('labelKcp',json_encode($labelKcp,JSON_NUMERIC_CHECK))
    ;
  }

  public function showDecemberKanwil7()
  {
    //KCU
    $kcu = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site_Group) as kcu')))
              ->where('Wilayah','=','KANWIL VII')
              ->whereMonth('Submit_Date','=',date('12'))
              ->groupBy('Site_Group','Wilayah')
              ->orderBy('kcu','desc')
              ->get()->toArray();
    $kcu = array_column($kcu, 'kcu');

    $labelKcu = DB::table('report_solcents')
            ->select(array('Site_Group as lblKcu', DB::raw('count(Site_Group) as kcu')))
            ->where('Wilayah','=','KANWIL VII')
            ->whereMonth('Submit_Date','=',date('12'))
            ->take(10)
            ->groupBy('Site_Group','Wilayah')
            ->orderBy('kcu','desc')
            ->get()->toArray();
    $labelKcu = array_column($labelKcu, 'lblKcu');

    //KCP
    $kcp = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site) as kcp')))
              ->where('Wilayah','=','KANWIL VII')
              ->whereMonth('Submit_Date','=',date('12'))
              ->groupBy('Site','Wilayah')
              ->orderBy('kcp','desc')
              ->get()->toArray();
    $kcp = array_column($kcp, 'kcp');

    $labelKcp = DB::table('report_solcents')
            ->select(array('Site as lblKcp', DB::raw('count(Site) as kcp')))
            ->where('Wilayah','=','KANWIL VII')
            ->whereMonth('Submit_Date','=',date('12'))
            ->take(10)
            ->groupBy('Site','Wilayah')
            ->orderBy('kcp','desc')
            ->get()->toArray();
    $labelKcp = array_column($labelKcp, 'lblKcp');


    return view('Kanwil.December.kanwil7December')
    ->with('kcu',json_encode($kcu,JSON_NUMERIC_CHECK))
    ->with('labelKcu',json_encode($labelKcu,JSON_NUMERIC_CHECK))
    ->with('kcp',json_encode($kcp,JSON_NUMERIC_CHECK))
    ->with('labelKcp',json_encode($labelKcp,JSON_NUMERIC_CHECK))
    ;
  }

  public function showDecemberKanwil8()
  {
    //KCU
    $kcu = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site_Group) as kcu')))
              ->where('Wilayah','=','KANWIL VIII')
              ->whereMonth('Submit_Date','=',date('12'))
              ->groupBy('Site_Group','Wilayah')
              ->orderBy('kcu','desc')
              ->get()->toArray();
    $kcu = array_column($kcu, 'kcu');

    $labelKcu = DB::table('report_solcents')
            ->select(array('Site_Group as lblKcu', DB::raw('count(Site_Group) as kcu')))
            ->where('Wilayah','=','KANWIL VIII')
            ->whereMonth('Submit_Date','=',date('12'))
            ->take(10)
            ->groupBy('Site_Group','Wilayah')
            ->orderBy('kcu','desc')
            ->get()->toArray();
    $labelKcu = array_column($labelKcu, 'lblKcu');

    //KCP
    $kcp = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site) as kcp')))
              ->where('Wilayah','=','KANWIL VIII')
              ->whereMonth('Submit_Date','=',date('12'))
              ->groupBy('Site','Wilayah')
              ->orderBy('kcp','desc')
              ->get()->toArray();
    $kcp = array_column($kcp, 'kcp');

    $labelKcp = DB::table('report_solcents')
            ->select(array('Site as lblKcp', DB::raw('count(Site) as kcp')))
            ->where('Wilayah','=','KANWIL VIII')
            ->whereMonth('Submit_Date','=',date('12'))
            ->take(10)
            ->groupBy('Site','Wilayah')
            ->orderBy('kcp','desc')
            ->get()->toArray();
    $labelKcp = array_column($labelKcp, 'lblKcp');

    return view('Kanwil.December.kanwil8December')
    ->with('kcu',json_encode($kcu,JSON_NUMERIC_CHECK))
    ->with('labelKcu',json_encode($labelKcu,JSON_NUMERIC_CHECK))
    ->with('kcp',json_encode($kcp,JSON_NUMERIC_CHECK))
    ->with('labelKcp',json_encode($labelKcp,JSON_NUMERIC_CHECK))
    ;
  }

  public function showDecemberKanwil9()
  {
    //KCU
    $kcu = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site_Group) as kcu')))
              ->where('Wilayah','=','KANWIL IX')
              ->whereMonth('Submit_Date','=',date('12'))
              ->groupBy('Site_Group','Wilayah')
              ->orderBy('kcu','desc')
              ->get()->toArray();
    $kcu = array_column($kcu, 'kcu');

    $labelKcu = DB::table('report_solcents')
            ->select(array('Site_Group as lblKcu', DB::raw('count(Site_Group) as kcu')))
            ->where('Wilayah','=','KANWIL IX')
            ->whereMonth('Submit_Date','=',date('12'))
            ->take(10)
            ->groupBy('Site_Group','Wilayah')
            ->orderBy('kcu','desc')
            ->get()->toArray();
    $labelKcu = array_column($labelKcu, 'lblKcu');

    //KCP
    $kcp = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site) as kcp')))
              ->where('Wilayah','=','KANWIL IX')
              ->whereMonth('Submit_Date','=',date('12'))
              ->groupBy('Site','Wilayah')
              ->orderBy('kcp','desc')
              ->get()->toArray();
    $kcp = array_column($kcp, 'kcp');

    $labelKcp = DB::table('report_solcents')
            ->select(array('Site as lblKcp', DB::raw('count(Site) as kcp')))
            ->where('Wilayah','=','KANWIL IX')
            ->whereMonth('Submit_Date','=',date('12'))
            ->take(10)
            ->groupBy('Site','Wilayah')
            ->orderBy('kcp','desc')
            ->get()->toArray();
    $labelKcp = array_column($labelKcp, 'lblKcp');

    return view('Kanwil.December.kanwil9December')
    ->with('kcu',json_encode($kcu,JSON_NUMERIC_CHECK))
    ->with('labelKcu',json_encode($labelKcu,JSON_NUMERIC_CHECK))
    ->with('kcp',json_encode($kcp,JSON_NUMERIC_CHECK))
    ->with('labelKcp',json_encode($labelKcp,JSON_NUMERIC_CHECK));
  }

  public function showDecemberKanwil10()
  {
    //KCU
    $kcu = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site_Group) as kcu')))
              ->where('Wilayah','=','KANWIL X')
              ->whereMonth('Submit_Date','=',date('12'))
              ->groupBy('Site_Group','Wilayah')
              ->orderBy('kcu','desc')
              ->get()->toArray();
    $kcu = array_column($kcu, 'kcu');

    $labelKcu = DB::table('report_solcents')
            ->select(array('Site_Group as lblKcu', DB::raw('count(Site_Group) as kcu')))
            ->where('Wilayah','=','KANWIL X')
            ->whereMonth('Submit_Date','=',date('12'))
            ->take(10)
            ->groupBy('Site_Group','Wilayah')
            ->orderBy('kcu','desc')
            ->get()->toArray();
    $labelKcu = array_column($labelKcu, 'lblKcu');

    //KCP
    $kcp = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site) as kcp')))
              ->where('Wilayah','=','KANWIL X')
              ->whereMonth('Submit_Date','=',date('12'))
              ->groupBy('Site','Wilayah')
              ->orderBy('kcp','desc')
              ->get()->toArray();
    $kcp = array_column($kcp, 'kcp');

    $labelKcp = DB::table('report_solcents')
            ->select(array('Site as lblKcp', DB::raw('count(Site) as kcp')))
            ->where('Wilayah','=','KANWIL X')
            ->whereMonth('Submit_Date','=',date('12'))
            ->take(10)
            ->groupBy('Site','Wilayah')
            ->orderBy('kcp','desc')
            ->get()->toArray();
    $labelKcp = array_column($labelKcp, 'lblKcp');

    return view('Kanwil.December.kanwil10December')
    ->with('kcu',json_encode($kcu,JSON_NUMERIC_CHECK))
    ->with('labelKcu',json_encode($labelKcu,JSON_NUMERIC_CHECK))
    ->with('kcp',json_encode($kcp,JSON_NUMERIC_CHECK))
    ->with('labelKcp',json_encode($labelKcp,JSON_NUMERIC_CHECK))
    ;
  }

  public function showDecemberKanwil11()
  {
    //KCU
    $kcu = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site_Group) as kcu')))
              ->where('Wilayah','=','KANWIL XI')
              ->whereMonth('Submit_Date','=',date('12'))
              ->groupBy('Site_Group','Wilayah')
              ->orderBy('kcu','desc')
              ->get()->toArray();
    $kcu = array_column($kcu, 'kcu');

    $labelKcu = DB::table('report_solcents')
            ->select(array('Site_Group as lblKcu', DB::raw('count(Site_Group) as kcu')))
            ->where('Wilayah','=','KANWIL XI')
            ->whereMonth('Submit_Date','=',date('12'))
            ->take(10)
            ->groupBy('Site_Group','Wilayah')
            ->orderBy('kcu','desc')
            ->get()->toArray();
    $labelKcu = array_column($labelKcu, 'lblKcu');

    //KCP
    $kcp = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site) as kcp')))
              ->where('Wilayah','=','KANWIL X')
              ->whereMonth('Submit_Date','=',date('12'))
              ->groupBy('Site','Wilayah')
              ->orderBy('kcp','desc')
              ->get()->toArray();
    $kcp = array_column($kcp, 'kcp');

    $labelKcp = DB::table('report_solcents')
            ->select(array('Site as lblKcp', DB::raw('count(Site) as kcp')))
            ->where('Wilayah','=','KANWIL XI')
            ->whereMonth('Submit_Date','=',date('12'))
            ->take(10)
            ->groupBy('Site','Wilayah')
            ->orderBy('kcp','desc')
            ->get()->toArray();
    $labelKcp = array_column($labelKcp, 'lblKcp');


    return view('Kanwil.December.kanwil11December')
    ->with('kcu',json_encode($kcu,JSON_NUMERIC_CHECK))
    ->with('labelKcu',json_encode($labelKcu,JSON_NUMERIC_CHECK))
    ->with('kcp',json_encode($kcp,JSON_NUMERIC_CHECK))
    ->with('labelKcp',json_encode($labelKcp,JSON_NUMERIC_CHECK))
    ;
  }

  public function showDecemberKanwil12()
  {
    //KCU
    $kcu = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site_Group) as kcu')))
              ->where('Wilayah','=','KANWIL XII')
              ->whereMonth('Submit_Date','=',date('12'))
              ->groupBy('Site_Group','Wilayah')
              ->orderBy('kcu','desc')
              ->get()->toArray();
    $kcu = array_column($kcu, 'kcu');

    $labelKcu = DB::table('report_solcents')
            ->select(array('Site_Group as lblKcu', DB::raw('count(Site_Group) as kcu')))
            ->where('Wilayah','=','KANWIL XII')
            ->whereMonth('Submit_Date','=',date('12'))
            ->take(10)
            ->groupBy('Site_Group','Wilayah')
            ->orderBy('kcu','desc')
            ->get()->toArray();
    $labelKcu = array_column($labelKcu, 'lblKcu');

    //KCP
    $kcp = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site) as kcp')))
              ->where('Wilayah','=','KANWIL XII')
              ->whereMonth('Submit_Date','=',date('12'))
              ->groupBy('Site','Wilayah')
              ->orderBy('kcp','desc')
              ->get()->toArray();
    $kcp = array_column($kcp, 'kcp');

    $labelKcp = DB::table('report_solcents')
            ->select(array('Site as lblKcp', DB::raw('count(Site) as kcp')))
            ->where('Wilayah','=','KANWIL XII')
            ->whereMonth('Submit_Date','=',date('12'))
            ->take(10)
            ->groupBy('Site','Wilayah')
            ->orderBy('kcp','desc')
            ->get()->toArray();
    $labelKcp = array_column($labelKcp, 'lblKcp');


    return view('Kanwil.December.kanwil12December')
    ->with('kcu',json_encode($kcu,JSON_NUMERIC_CHECK))
    ->with('labelKcu',json_encode($labelKcu,JSON_NUMERIC_CHECK))
    ->with('kcp',json_encode($kcp,JSON_NUMERIC_CHECK))
    ->with('labelKcp',json_encode($labelKcp,JSON_NUMERIC_CHECK))
    ;
  }
}
