<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class kanwilJulyController extends Controller
{
    public function showJulyKp()
    {
      //KCU
      $kcu = DB::table('report_solcents')
                ->select(array(DB::raw('count(Site_Group) as kcu')))
                ->where('Wilayah','=','KANTOR PUSAT')
                ->whereMonth('Submit_Date','=',date('07'))
                ->groupBy('Site_Group','Wilayah')
                ->orderBy('kcu','desc')
                ->get()->toArray();
      $kcu = array_column($kcu, 'kcu');

      $labelKcu = DB::table('report_solcents')
              ->select(array('Site_Group as lblKcu', DB::raw('count(Site_Group) as kcu')))
              ->where('Wilayah','=','KANTOR PUSAT')
              ->whereMonth('Submit_Date','=',date('07'))
              ->take(10)
              ->groupBy('Site_Group','Wilayah')
              ->orderBy('kcu','desc')
              ->get()->toArray();
      $labelKcu = array_column($labelKcu, 'lblKcu');

      //KCP
      $kcp = DB::table('report_solcents')
                ->select(array(DB::raw('count(Site) as kcp')))
                ->where('Wilayah','=','KANTOR PUSAT')
                ->whereMonth('Submit_Date','=',date('07'))
                ->groupBy('Site','Wilayah')
                ->orderBy('kcp','desc')
                ->get()->toArray();
      $kcp = array_column($kcp, 'kcp');

      $labelKcp = DB::table('report_solcents')
              ->select(array('Site as lblKcp', DB::raw('count(Site) as kcp')))
              ->where('Wilayah','=','KANTOR PUSAT')
              ->whereMonth('Submit_Date','=',date('07'))
              ->take(10)
              ->groupBy('Site','Wilayah')
              ->orderBy('kcp','desc')
              ->get()->toArray();
      $labelKcp = array_column($labelKcp, 'lblKcp');

      return view('Kanwil.July.kpJuly')
      ->with('kcu',json_encode($kcu,JSON_NUMERIC_CHECK))
      ->with('labelKcu',json_encode($labelKcu,JSON_NUMERIC_CHECK))
      ->with('kcp',json_encode($kcp,JSON_NUMERIC_CHECK))
      ->with('labelKcp',json_encode($labelKcp,JSON_NUMERIC_CHECK))
      ;

    }

    public function showJulyKanwil1()
    {
      //KCU
      $kcu = DB::table('report_solcents')
                ->select(array(DB::raw('count(Site_Group) as kcu')))
                ->where('Wilayah','=','KANWIL I')
                ->whereMonth('Submit_Date','=',date('03'))
                ->groupBy('Site_Group','Wilayah')
                ->orderBy('kcu','desc')
                ->get()->toArray();
      $kcu = array_column($kcu, 'kcu');

      $labelKcu = DB::table('report_solcents')
              ->select(array('Site_Group as lblKcu', DB::raw('count(Site_Group) as kcu')))
              ->where('Wilayah','=','KANWIL I')
              ->whereMonth('Submit_Date','=',date('03'))
              ->take(10)
              ->groupBy('Site_Group','Wilayah')
              ->orderBy('kcu','desc')
              ->get()->toArray();
      $labelKcu = array_column($labelKcu, 'lblKcu');

      //KCP
      $kcp = DB::table('report_solcents')
                ->select(array(DB::raw('count(Site) as kcp')))
                ->where('Wilayah','=','KANWIL I')
                ->whereMonth('Submit_Date','=',date('03'))
                ->groupBy('Site','Wilayah')
                ->orderBy('kcp','desc')
                ->get()->toArray();
      $kcp = array_column($kcp, 'kcp');

      $labelKcp = DB::table('report_solcents')
              ->select(array('Site as lblKcp', DB::raw('count(Site) as kcp')))
              ->where('Wilayah','=','KANWIL I')
              ->whereMonth('Submit_Date','=',date('03'))
              ->take(10)
              ->groupBy('Site','Wilayah')
              ->orderBy('kcp','desc')
              ->get()->toArray();
      $labelKcp = array_column($labelKcp, 'lblKcp');

      return view('Kanwil.July.kanwil1July')
      ->with('kcu',json_encode($kcu,JSON_NUMERIC_CHECK))
      ->with('labelKcu',json_encode($labelKcu,JSON_NUMERIC_CHECK))
      ->with('kcp',json_encode($kcp,JSON_NUMERIC_CHECK))
      ->with('labelKcp',json_encode($labelKcp,JSON_NUMERIC_CHECK))
      ;
    }

    public function showJulyKanwil2()
    {
      //KCU
      $kcu = DB::table('report_solcents')
                ->select(array(DB::raw('count(Site_Group) as kcu')))
                ->where('Wilayah','=','KANWIL II')
                ->whereMonth('Submit_Date','=',date('07'))
                ->groupBy('Site_Group','Wilayah')
                ->orderBy('kcu','desc')
                ->get()->toArray();
      $kcu = array_column($kcu, 'kcu');

      $labelKcu = DB::table('report_solcents')
              ->select(array('Site_Group as lblKcu', DB::raw('count(Site_Group) as kcu')))
              ->where('Wilayah','=','KANWIL II')
              ->whereMonth('Submit_Date','=',date('07'))
              ->take(10)
              ->groupBy('Site_Group','Wilayah')
              ->orderBy('kcu','desc')
              ->get()->toArray();
      $labelKcu = array_column($labelKcu, 'lblKcu');

      //KCP
      $kcp = DB::table('report_solcents')
                ->select(array(DB::raw('count(Site) as kcp')))
                ->where('Wilayah','=','KANWIL II')
                ->whereMonth('Submit_Date','=',date('07'))
                ->groupBy('Site','Wilayah')
                ->orderBy('kcp','desc')
                ->get()->toArray();
      $kcp = array_column($kcp, 'kcp');

      $labelKcp = DB::table('report_solcents')
              ->select(array('Site as lblKcp', DB::raw('count(Site) as kcp')))
              ->where('Wilayah','=','KANWIL II')
              ->whereMonth('Submit_Date','=',date('07'))
              ->take(10)
              ->groupBy('Site','Wilayah')
              ->orderBy('kcp','desc')
              ->get()->toArray();
      $labelKcp = array_column($labelKcp, 'lblKcp');

      return view('Kanwil.July.kanwil2July')
      ->with('kcu',json_encode($kcu,JSON_NUMERIC_CHECK))
      ->with('labelKcu',json_encode($labelKcu,JSON_NUMERIC_CHECK))
      ->with('kcp',json_encode($kcp,JSON_NUMERIC_CHECK))
      ->with('labelKcp',json_encode($labelKcp,JSON_NUMERIC_CHECK))
      ;
    }

    public function showJulyKanwil3()
    {
      //KCU
      $kcu = DB::table('report_solcents')
                ->select(array(DB::raw('count(Site_Group) as kcu')))
                ->where('Wilayah','=','KANWIL III')
                ->whereMonth('Submit_Date','=',date('07'))
                ->groupBy('Site_Group','Wilayah')
                ->orderBy('kcu','desc')
                ->get()->toArray();
      $kcu = array_column($kcu, 'kcu');

      $labelKcu = DB::table('report_solcents')
              ->select(array('Site_Group as lblKcu', DB::raw('count(Site_Group) as kcu')))
              ->where('Wilayah','=','KANWIL III')
              ->whereMonth('Submit_Date','=',date('07'))
              ->take(10)
              ->groupBy('Site_Group','Wilayah')
              ->orderBy('kcu','desc')
              ->get()->toArray();
      $labelKcu = array_column($labelKcu, 'lblKcu');

      //KCP
      $kcp = DB::table('report_solcents')
                ->select(array(DB::raw('count(Site) as kcp')))
                ->where('Wilayah','=','KANWIL III')
                ->whereMonth('Submit_Date','=',date('07'))
                ->groupBy('Site','Wilayah')
                ->orderBy('kcp','desc')
                ->get()->toArray();
      $kcp = array_column($kcp, 'kcp');

      $labelKcp = DB::table('report_solcents')
              ->select(array('Site as lblKcp', DB::raw('count(Site) as kcp')))
              ->where('Wilayah','=','KANWIL III')
              ->whereMonth('Submit_Date','=',date('07'))
              ->take(10)
              ->groupBy('Site','Wilayah')
              ->orderBy('kcp','desc')
              ->get()->toArray();
      $labelKcp = array_column($labelKcp, 'lblKcp');

      return view('Kanwil.July.kanwil3July')
      ->with('kcu',json_encode($kcu,JSON_NUMERIC_CHECK))
      ->with('labelKcu',json_encode($labelKcu,JSON_NUMERIC_CHECK))
      ->with('kcp',json_encode($kcp,JSON_NUMERIC_CHECK))
      ->with('labelKcp',json_encode($labelKcp,JSON_NUMERIC_CHECK))
      ;
    }

    public function showJulyKanwil4()
    {
      //KCU
      $kcu = DB::table('report_solcents')
                ->select(array(DB::raw('count(Site_Group) as kcu')))
                ->where('Wilayah','=','KANWIL IV')
                ->whereMonth('Submit_Date','=',date('07'))
                ->groupBy('Site_Group','Wilayah')
                ->orderBy('kcu','desc')
                ->get()->toArray();
      $kcu = array_column($kcu, 'kcu');

      $labelKcu = DB::table('report_solcents')
              ->select(array('Site_Group as lblKcu', DB::raw('count(Site_Group) as kcu')))
              ->where('Wilayah','=','KANWIL IV')
              ->whereMonth('Submit_Date','=',date('07'))
              ->take(10)
              ->groupBy('Site_Group','Wilayah')
              ->orderBy('kcu','desc')
              ->get()->toArray();
      $labelKcu = array_column($labelKcu, 'lblKcu');

      //KCP
      $kcp = DB::table('report_solcents')
                ->select(array(DB::raw('count(Site) as kcp')))
                ->where('Wilayah','=','KANWIL IV')
                ->whereMonth('Submit_Date','=',date('07'))
                ->groupBy('Site','Wilayah')
                ->orderBy('kcp','desc')
                ->get()->toArray();
      $kcp = array_column($kcp, 'kcp');

      $labelKcp = DB::table('report_solcents')
              ->select(array('Site as lblKcp', DB::raw('count(Site) as kcp')))
              ->where('Wilayah','=','KANWIL IV')
              ->whereMonth('Submit_Date','=',date('07'))
              ->take(10)
              ->groupBy('Site','Wilayah')
              ->orderBy('kcp','desc')
              ->get()->toArray();
      $labelKcp = array_column($labelKcp, 'lblKcp');

      return view('Kanwil.July.kanwil4July')
      ->with('kcu',json_encode($kcu,JSON_NUMERIC_CHECK))
      ->with('labelKcu',json_encode($labelKcu,JSON_NUMERIC_CHECK))
      ->with('kcp',json_encode($kcp,JSON_NUMERIC_CHECK))
      ->with('labelKcp',json_encode($labelKcp,JSON_NUMERIC_CHECK))
      ;
    }

    public function showJulyKanwil5()
    {
      //KCU
      $kcu = DB::table('report_solcents')
                ->select(array(DB::raw('count(Site_Group) as kcu')))
                ->where('Wilayah','=','KANWIL V')
                ->whereMonth('Submit_Date','=',date('07'))
                ->groupBy('Site_Group','Wilayah')
                ->orderBy('kcu','desc')
                ->get()->toArray();
      $kcu = array_column($kcu, 'kcu');

      $labelKcu = DB::table('report_solcents')
              ->select(array('Site_Group as lblKcu', DB::raw('count(Site_Group) as kcu')))
              ->where('Wilayah','=','KANWIL V')
              ->whereMonth('Submit_Date','=',date('07'))
              ->take(10)
              ->groupBy('Site_Group','Wilayah')
              ->orderBy('kcu','desc')
              ->get()->toArray();
      $labelKcu = array_column($labelKcu, 'lblKcu');

      //KCP
      $kcp = DB::table('report_solcents')
                ->select(array(DB::raw('count(Site) as kcp')))
                ->where('Wilayah','=','KANWIL V')
                ->whereMonth('Submit_Date','=',date('07'))
                ->groupBy('Site','Wilayah')
                ->orderBy('kcp','desc')
                ->get()->toArray();
      $kcp = array_column($kcp, 'kcp');

      $labelKcp = DB::table('report_solcents')
              ->select(array('Site as lblKcp', DB::raw('count(Site) as kcp')))
              ->where('Wilayah','=','KANWIL V')
              ->whereMonth('Submit_Date','=',date('07'))
              ->take(10)
              ->groupBy('Site','Wilayah')
              ->orderBy('kcp','desc')
              ->get()->toArray();
      $labelKcp = array_column($labelKcp, 'lblKcp');

      return view('Kanwil.July.kanwil5July')
      ->with('kcu',json_encode($kcu,JSON_NUMERIC_CHECK))
      ->with('labelKcu',json_encode($labelKcu,JSON_NUMERIC_CHECK))
      ->with('kcp',json_encode($kcp,JSON_NUMERIC_CHECK))
      ->with('labelKcp',json_encode($labelKcp,JSON_NUMERIC_CHECK))
      ;
    }

    public function showJulyKanwil6()
    {
      //KCU
      $kcu = DB::table('report_solcents')
                ->select(array(DB::raw('count(Site_Group) as kcu')))
                ->where('Wilayah','=','KANWIL VI')
                ->whereMonth('Submit_Date','=',date('07'))
                ->groupBy('Site_Group','Wilayah')
                ->orderBy('kcu','desc')
                ->get()->toArray();
      $kcu = array_column($kcu, 'kcu');

      $labelKcu = DB::table('report_solcents')
              ->select(array('Site_Group as lblKcu', DB::raw('count(Site_Group) as kcu')))
              ->where('Wilayah','=','KANWIL VI')
              ->whereMonth('Submit_Date','=',date('07'))
              ->take(10)
              ->groupBy('Site_Group','Wilayah')
              ->orderBy('kcu','desc')
              ->get()->toArray();
      $labelKcu = array_column($labelKcu, 'lblKcu');

      //KCP
      $kcp = DB::table('report_solcents')
                ->select(array(DB::raw('count(Site) as kcp')))
                ->where('Wilayah','=','KANWIL VI')
                ->whereMonth('Submit_Date','=',date('07'))
                ->groupBy('Site','Wilayah')
                ->orderBy('kcp','desc')
                ->get()->toArray();
      $kcp = array_column($kcp, 'kcp');

      $labelKcp = DB::table('report_solcents')
              ->select(array('Site as lblKcp', DB::raw('count(Site) as kcp')))
              ->where('Wilayah','=','KANWIL VI')
              ->whereMonth('Submit_Date','=',date('07'))
              ->take(10)
              ->groupBy('Site','Wilayah')
              ->orderBy('kcp','desc')
              ->get()->toArray();
      $labelKcp = array_column($labelKcp, 'lblKcp');

      return view('Kanwil.July.kanwil6July')
      ->with('kcu',json_encode($kcu,JSON_NUMERIC_CHECK))
      ->with('labelKcu',json_encode($labelKcu,JSON_NUMERIC_CHECK))
      ->with('kcp',json_encode($kcp,JSON_NUMERIC_CHECK))
      ->with('labelKcp',json_encode($labelKcp,JSON_NUMERIC_CHECK))
      ;
    }

    public function showJulyKanwil7()
    {
      //KCU
      $kcu = DB::table('report_solcents')
                ->select(array(DB::raw('count(Site_Group) as kcu')))
                ->where('Wilayah','=','KANWIL VII')
                ->whereMonth('Submit_Date','=',date('07'))
                ->groupBy('Site_Group','Wilayah')
                ->orderBy('kcu','desc')
                ->get()->toArray();
      $kcu = array_column($kcu, 'kcu');

      $labelKcu = DB::table('report_solcents')
              ->select(array('Site_Group as lblKcu', DB::raw('count(Site_Group) as kcu')))
              ->where('Wilayah','=','KANWIL VII')
              ->whereMonth('Submit_Date','=',date('07'))
              ->take(10)
              ->groupBy('Site_Group','Wilayah')
              ->orderBy('kcu','desc')
              ->get()->toArray();
      $labelKcu = array_column($labelKcu, 'lblKcu');

      //KCP
      $kcp = DB::table('report_solcents')
                ->select(array(DB::raw('count(Site) as kcp')))
                ->where('Wilayah','=','KANWIL VII')
                ->whereMonth('Submit_Date','=',date('07'))
                ->groupBy('Site','Wilayah')
                ->orderBy('kcp','desc')
                ->get()->toArray();
      $kcp = array_column($kcp, 'kcp');

      $labelKcp = DB::table('report_solcents')
              ->select(array('Site as lblKcp', DB::raw('count(Site) as kcp')))
              ->where('Wilayah','=','KANWIL VII')
              ->whereMonth('Submit_Date','=',date('07'))
              ->take(10)
              ->groupBy('Site','Wilayah')
              ->orderBy('kcp','desc')
              ->get()->toArray();
      $labelKcp = array_column($labelKcp, 'lblKcp');


      return view('Kanwil.July.kanwil7July')
      ->with('kcu',json_encode($kcu,JSON_NUMERIC_CHECK))
      ->with('labelKcu',json_encode($labelKcu,JSON_NUMERIC_CHECK))
      ->with('kcp',json_encode($kcp,JSON_NUMERIC_CHECK))
      ->with('labelKcp',json_encode($labelKcp,JSON_NUMERIC_CHECK))
      ;
    }

    public function showJulyKanwil8()
    {
      //KCU
      $kcu = DB::table('report_solcents')
                ->select(array(DB::raw('count(Site_Group) as kcu')))
                ->where('Wilayah','=','KANWIL VIII')
                ->whereMonth('Submit_Date','=',date('07'))
                ->groupBy('Site_Group','Wilayah')
                ->orderBy('kcu','desc')
                ->get()->toArray();
      $kcu = array_column($kcu, 'kcu');

      $labelKcu = DB::table('report_solcents')
              ->select(array('Site_Group as lblKcu', DB::raw('count(Site_Group) as kcu')))
              ->where('Wilayah','=','KANWIL VIII')
              ->whereMonth('Submit_Date','=',date('07'))
              ->take(10)
              ->groupBy('Site_Group','Wilayah')
              ->orderBy('kcu','desc')
              ->get()->toArray();
      $labelKcu = array_column($labelKcu, 'lblKcu');

      //KCP
      $kcp = DB::table('report_solcents')
                ->select(array(DB::raw('count(Site) as kcp')))
                ->where('Wilayah','=','KANWIL VIII')
                ->whereMonth('Submit_Date','=',date('07'))
                ->groupBy('Site','Wilayah')
                ->orderBy('kcp','desc')
                ->get()->toArray();
      $kcp = array_column($kcp, 'kcp');

      $labelKcp = DB::table('report_solcents')
              ->select(array('Site as lblKcp', DB::raw('count(Site) as kcp')))
              ->where('Wilayah','=','KANWIL VIII')
              ->whereMonth('Submit_Date','=',date('07'))
              ->take(10)
              ->groupBy('Site','Wilayah')
              ->orderBy('kcp','desc')
              ->get()->toArray();
      $labelKcp = array_column($labelKcp, 'lblKcp');

      return view('Kanwil.July.kanwil8July')
      ->with('kcu',json_encode($kcu,JSON_NUMERIC_CHECK))
      ->with('labelKcu',json_encode($labelKcu,JSON_NUMERIC_CHECK))
      ->with('kcp',json_encode($kcp,JSON_NUMERIC_CHECK))
      ->with('labelKcp',json_encode($labelKcp,JSON_NUMERIC_CHECK))
      ;
    }

    public function showJulyKanwil9()
    {
      //KCU
      $kcu = DB::table('report_solcents')
                ->select(array(DB::raw('count(Site_Group) as kcu')))
                ->where('Wilayah','=','KANWIL IX')
                ->whereMonth('Submit_Date','=',date('07'))
                ->groupBy('Site_Group','Wilayah')
                ->orderBy('kcu','desc')
                ->get()->toArray();
      $kcu = array_column($kcu, 'kcu');

      $labelKcu = DB::table('report_solcents')
              ->select(array('Site_Group as lblKcu', DB::raw('count(Site_Group) as kcu')))
              ->where('Wilayah','=','KANWIL IX')
              ->whereMonth('Submit_Date','=',date('07'))
              ->take(10)
              ->groupBy('Site_Group','Wilayah')
              ->orderBy('kcu','desc')
              ->get()->toArray();
      $labelKcu = array_column($labelKcu, 'lblKcu');

      //KCP
      $kcp = DB::table('report_solcents')
                ->select(array(DB::raw('count(Site) as kcp')))
                ->where('Wilayah','=','KANWIL IX')
                ->whereMonth('Submit_Date','=',date('07'))
                ->groupBy('Site','Wilayah')
                ->orderBy('kcp','desc')
                ->get()->toArray();
      $kcp = array_column($kcp, 'kcp');

      $labelKcp = DB::table('report_solcents')
              ->select(array('Site as lblKcp', DB::raw('count(Site) as kcp')))
              ->where('Wilayah','=','KANWIL IX')
              ->whereMonth('Submit_Date','=',date('07'))
              ->take(10)
              ->groupBy('Site','Wilayah')
              ->orderBy('kcp','desc')
              ->get()->toArray();
      $labelKcp = array_column($labelKcp, 'lblKcp');

      return view('Kanwil.July.kanwil9July')
      ->with('kcu',json_encode($kcu,JSON_NUMERIC_CHECK))
      ->with('labelKcu',json_encode($labelKcu,JSON_NUMERIC_CHECK))
      ->with('kcp',json_encode($kcp,JSON_NUMERIC_CHECK))
      ->with('labelKcp',json_encode($labelKcp,JSON_NUMERIC_CHECK));
    }

    public function showJulyKanwil10()
    {
      //KCU
      $kcu = DB::table('report_solcents')
                ->select(array(DB::raw('count(Site_Group) as kcu')))
                ->where('Wilayah','=','KANWIL X')
                ->whereMonth('Submit_Date','=',date('07'))
                ->groupBy('Site_Group','Wilayah')
                ->orderBy('kcu','desc')
                ->get()->toArray();
      $kcu = array_column($kcu, 'kcu');

      $labelKcu = DB::table('report_solcents')
              ->select(array('Site_Group as lblKcu', DB::raw('count(Site_Group) as kcu')))
              ->where('Wilayah','=','KANWIL X')
              ->whereMonth('Submit_Date','=',date('07'))
              ->take(10)
              ->groupBy('Site_Group','Wilayah')
              ->orderBy('kcu','desc')
              ->get()->toArray();
      $labelKcu = array_column($labelKcu, 'lblKcu');

      //KCP
      $kcp = DB::table('report_solcents')
                ->select(array(DB::raw('count(Site) as kcp')))
                ->where('Wilayah','=','KANWIL X')
                ->whereMonth('Submit_Date','=',date('07'))
                ->groupBy('Site','Wilayah')
                ->orderBy('kcp','desc')
                ->get()->toArray();
      $kcp = array_column($kcp, 'kcp');

      $labelKcp = DB::table('report_solcents')
              ->select(array('Site as lblKcp', DB::raw('count(Site) as kcp')))
              ->where('Wilayah','=','KANWIL X')
              ->whereMonth('Submit_Date','=',date('07'))
              ->take(10)
              ->groupBy('Site','Wilayah')
              ->orderBy('kcp','desc')
              ->get()->toArray();
      $labelKcp = array_column($labelKcp, 'lblKcp');

      return view('Kanwil.July.kanwil10July')
      ->with('kcu',json_encode($kcu,JSON_NUMERIC_CHECK))
      ->with('labelKcu',json_encode($labelKcu,JSON_NUMERIC_CHECK))
      ->with('kcp',json_encode($kcp,JSON_NUMERIC_CHECK))
      ->with('labelKcp',json_encode($labelKcp,JSON_NUMERIC_CHECK))
      ;
    }

    public function showJulyKanwil11()
    {
      //KCU
      $kcu = DB::table('report_solcents')
                ->select(array(DB::raw('count(Site_Group) as kcu')))
                ->where('Wilayah','=','KANWIL XI')
                ->whereMonth('Submit_Date','=',date('07'))
                ->groupBy('Site_Group','Wilayah')
                ->orderBy('kcu','desc')
                ->get()->toArray();
      $kcu = array_column($kcu, 'kcu');

      $labelKcu = DB::table('report_solcents')
              ->select(array('Site_Group as lblKcu', DB::raw('count(Site_Group) as kcu')))
              ->where('Wilayah','=','KANWIL XI')
              ->whereMonth('Submit_Date','=',date('07'))
              ->take(10)
              ->groupBy('Site_Group','Wilayah')
              ->orderBy('kcu','desc')
              ->get()->toArray();
      $labelKcu = array_column($labelKcu, 'lblKcu');

      //KCP
      $kcp = DB::table('report_solcents')
                ->select(array(DB::raw('count(Site) as kcp')))
                ->where('Wilayah','=','KANWIL X')
                ->whereMonth('Submit_Date','=',date('07'))
                ->groupBy('Site','Wilayah')
                ->orderBy('kcp','desc')
                ->get()->toArray();
      $kcp = array_column($kcp, 'kcp');

      $labelKcp = DB::table('report_solcents')
              ->select(array('Site as lblKcp', DB::raw('count(Site) as kcp')))
              ->where('Wilayah','=','KANWIL XI')
              ->whereMonth('Submit_Date','=',date('07'))
              ->take(10)
              ->groupBy('Site','Wilayah')
              ->orderBy('kcp','desc')
              ->get()->toArray();
      $labelKcp = array_column($labelKcp, 'lblKcp');


      return view('Kanwil.July.kanwil11July')
      ->with('kcu',json_encode($kcu,JSON_NUMERIC_CHECK))
      ->with('labelKcu',json_encode($labelKcu,JSON_NUMERIC_CHECK))
      ->with('kcp',json_encode($kcp,JSON_NUMERIC_CHECK))
      ->with('labelKcp',json_encode($labelKcp,JSON_NUMERIC_CHECK))
      ;
    }

    public function showJulyKanwil12()
    {
      //KCU
      $kcu = DB::table('report_solcents')
                ->select(array(DB::raw('count(Site_Group) as kcu')))
                ->where('Wilayah','=','KANWIL XII')
                ->whereMonth('Submit_Date','=',date('07'))
                ->groupBy('Site_Group','Wilayah')
                ->orderBy('kcu','desc')
                ->get()->toArray();
      $kcu = array_column($kcu, 'kcu');

      $labelKcu = DB::table('report_solcents')
              ->select(array('Site_Group as lblKcu', DB::raw('count(Site_Group) as kcu')))
              ->where('Wilayah','=','KANWIL XII')
              ->whereMonth('Submit_Date','=',date('07'))
              ->take(10)
              ->groupBy('Site_Group','Wilayah')
              ->orderBy('kcu','desc')
              ->get()->toArray();
      $labelKcu = array_column($labelKcu, 'lblKcu');

      //KCP
      $kcp = DB::table('report_solcents')
                ->select(array(DB::raw('count(Site) as kcp')))
                ->where('Wilayah','=','KANWIL XII')
                ->whereMonth('Submit_Date','=',date('07'))
                ->groupBy('Site','Wilayah')
                ->orderBy('kcp','desc')
                ->get()->toArray();
      $kcp = array_column($kcp, 'kcp');

      $labelKcp = DB::table('report_solcents')
              ->select(array('Site as lblKcp', DB::raw('count(Site) as kcp')))
              ->where('Wilayah','=','KANWIL XII')
              ->whereMonth('Submit_Date','=',date('07'))
              ->take(10)
              ->groupBy('Site','Wilayah')
              ->orderBy('kcp','desc')
              ->get()->toArray();
      $labelKcp = array_column($labelKcp, 'lblKcp');


      return view('Kanwil.July.kanwil12July')
      ->with('kcu',json_encode($kcu,JSON_NUMERIC_CHECK))
      ->with('labelKcu',json_encode($labelKcu,JSON_NUMERIC_CHECK))
      ->with('kcp',json_encode($kcp,JSON_NUMERIC_CHECK))
      ->with('labelKcp',json_encode($labelKcp,JSON_NUMERIC_CHECK))
      ;
    }
}
