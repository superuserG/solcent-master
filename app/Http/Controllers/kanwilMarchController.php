<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class kanwilMarchController extends Controller
{
  public function showMarchKp()
  {
    return view('Kanwil.March.kpMarch');
  }

  public function showMarchKanwil1()
  {
    return view('Kanwil.March.kanwil1March');
  }

  public function showMarchKanwil2()
  {
    return view('Kanwil.March.kanwil2March');
  }

  public function showMarchKanwil3()
  {
    return view('Kanwil.March.kanwil3March');
  }

  public function showMarchKanwil4()
  {
    return view('Kanwil.March.kanwil4March');
  }

  public function showMarchKanwil5()
  {
    return view('Kanwil.March.kanwil5March');
  }

  public function showMarchKanwil6()
  {
    return view('Kanwil.March.kanwil6March');
  }

  public function showMarchKanwil7()
  {
    return view('Kanwil.March.kanwil7March');
  }

  public function showMarchKanwil8()
  {
    return view('Kanwil.March.kanwil8March');
  }

  public function showMarchKanwil9()
  {
    return view('Kanwil.March.kanwil9March');
  }

  public function showMarchKanwil10()
  {
    return view('Kanwil.March.kanwil10March');
  }

  public function showMarchKanwil11()
  {
    return view('Kanwil.March.kanwil11March');
  }

  public function showMarchKanwil12()
  {

    //KCU
    $kcu = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site_Group) as kcu')))
              ->where('Wilayah','=','KANWIL XII')
              ->whereMonth('Submit_Date','=',date('03'))
              ->groupBy('Site_Group','Wilayah')
              ->orderBy('kcu','desc')
              ->get()->toArray();
    $kcu = array_column($kcu, 'kcu');

    $labelKcu = DB::table('report_solcents')
            ->select(array('Site_Group as lblKcu', DB::raw('count(Site_Group) as kcu')))
            ->where('Wilayah','=','KANWIL XII')
            ->whereMonth('Submit_Date','=',date('03'))
            ->take(10)
            ->groupBy('Site_Group','Wilayah')
            ->orderBy('kcu','desc')
            ->get()->toArray();
    $labelKcu = array_column($labelKcu, 'lblKcu');

    //KCP
    $kcp = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site) as kcp')))
              ->where('Wilayah','=','KANWIL XII')
              ->whereMonth('Submit_Date','=',date('03'))
              ->groupBy('Site','Wilayah')
              ->orderBy('kcp','desc')
              ->get()->toArray();
    $kcp = array_column($kcp, 'kcp');

    $labelKcp = DB::table('report_solcents')
            ->select(array('Site as lblKcp', DB::raw('count(Site) as kcp')))
            ->where('Wilayah','=','KANWIL XII')
            ->whereMonth('Submit_Date','=',date('03'))
            ->take(10)
            ->groupBy('Site','Wilayah')
            ->orderBy('kcp','desc')
            ->get()->toArray();
    $labelKcp = array_column($labelKcp, 'lblKcp');


    return view('Kanwil.March.kanwil12March')
    ->with('kcu',json_encode($kcu,JSON_NUMERIC_CHECK))
    ->with('labelKcu',json_encode($labelKcu,JSON_NUMERIC_CHECK))
    ->with('kcp',json_encode($kcp,JSON_NUMERIC_CHECK))
    ->with('labelKcp',json_encode($labelKcp,JSON_NUMERIC_CHECK))
    ;
  }
}
