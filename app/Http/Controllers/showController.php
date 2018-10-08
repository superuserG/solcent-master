<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Kanwil;
use App\Type;
use App\Status;
use App\Category;
use App\SubCategory;
use App\Kcu;
use App\Kcp;
use DB;
use App\ReportSolcent;

class showController extends Controller
{
  public function showHome()
  {
     //Details
     $comp = DB::table('report_solcents')->where('Status','=','Completed')->Count();
     $prog = DB::table('report_solcents')->where('Status','!=','Completed')->Count();
     $all = DB::table('report_solcents')->Count();

     //Report Ticket
    $presented = DB::table('report_solcents')
        ->select(DB::raw('Count(WO_ID) as present'))
        ->get()->toArray();
    $presented = array_column($presented, 'present');

    $completed = ReportSolcent::select(DB::raw("count(WO_ID) as completed"))
        ->where('Status','=','Completed')
        ->get()->toArray();
    $completed = array_column($completed, 'completed');

    $in_progress = ReportSolcent::select(DB::raw("count(WO_ID) as Abandon"))->where('Status','!=','Completed')
        ->get()->toArray();
    $in_progress = array_column($in_progress, 'Abandon');

    //Report Top Question
    $question = DB::table('report_solcents')
              ->select(array(DB::raw('count(Category_1) as Question')))
              ->groupBy('Category_1')
              ->orderBy('Question','desc')
              ->get()->toArray();
    $question = array_column($question, 'Question');

    $cat = DB::table('report_solcents')
            ->select(array('Category_1 as Cat', DB::raw('count(Category_1) as result')))
            ->take(10)
            ->groupBy('Category_1')
            ->orderBy('Result','desc')
            ->get()->toArray();
    $cat = array_column($cat, 'Cat');

    //Report Top kanwil
    $kanwil = DB::table('report_solcents')
              ->select(array(DB::raw('count(Wilayah) as wilayah')))
              ->groupBy('Wilayah')
              ->orderBy('wilayah','desc')
              ->get()->toArray();
    $kanwil = array_column($kanwil, 'wilayah');

    $labelKanwil = DB::table('report_solcents')
            ->select(array('Wilayah as lblKanwil', DB::raw('count(Wilayah) as wilayah')))
            ->take(10)
            ->groupBy('Wilayah')
            ->orderBy('wilayah','desc')
            ->get()->toArray();
    $labelKanwil = array_column($labelKanwil, 'lblKanwil');

    //Report Top cabang
    $cabang = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site) as topSite')))
              ->groupBy('Site')
              ->orderBy('topSite','desc')
              ->get()->toArray();
    $cabang = array_column($cabang, 'topSite');

    $labelSite = DB::table('report_solcents')
            ->select(array('Site as lblCabang', DB::raw('count(Site) as topSite')))
            ->take(10)
            ->groupBy('Site')
            ->orderBy('topSite','desc')
            ->get()->toArray();
    $labelSite = array_column($labelSite, 'lblCabang');

    return view('testHome',compact('comp','prog','all'))
        ->with('presented',json_encode($presented,JSON_NUMERIC_CHECK))
        ->with('completed',json_encode($completed,JSON_NUMERIC_CHECK))
        ->with('in_progress',json_encode($in_progress,JSON_NUMERIC_CHECK))
        // ->with('label',json_encode($label,JSON_NUMERIC_CHECK))
        ->with('question',json_encode($question,JSON_NUMERIC_CHECK))
        ->with('cat',json_encode($cat,JSON_NUMERIC_CHECK))
        ->with('kanwil',json_encode($kanwil,JSON_NUMERIC_CHECK))
        ->with('labelKanwil',json_encode($labelKanwil,JSON_NUMERIC_CHECK))
        ->with('cabang',json_encode($cabang,JSON_NUMERIC_CHECK))
        ->with('labelSite',json_encode($labelSite,JSON_NUMERIC_CHECK))
        ;

  }

  public function showForm()
  {
    $posts = Post::all();
    $kanwils = Kanwil::all();
    $types = Type::all();
    $statuses = Status::all();
    $categories = Category::all();
    $sub_categories = SubCategory::all();
    $kcus = Kcu::all();
    $kcps = Kcp::all();

    return view('form',compact('posts','kanwils','types','statuses','categories','sub_categories','kcus','kcps'));
  }

  public function showTable()
  {
    $post = ReportSolcent::all()->take(2500);

    return view('tables',compact('post'));
  }

  public function showMonthly()
  {
    //compate data ticket dan call
    $calljan = DB::table('report_calls')
          ->select('presentedCall as call')
          ->where('months','=','Januari')
          ->get()->toArray();
    $calljan = array_column($calljan,'call');

    $callFeb = DB::table('report_calls')
          ->select('presentedCall as call')
          ->where('months','=','February')
          ->get()->toArray();
    $callFeb = array_column($callFeb,'call');

    $callMar = DB::table('report_calls')
          ->select('presentedCall as call')
          ->where('months','=','Maret')
          ->get()->toArray();
    $callMar = array_column($callMar,'call');

    $callApr = DB::table('report_calls')
          ->select('presentedCall as call')
          ->where('months','=','April')
          ->get()->toArray();
    $callApr = array_column($callApr,'call');

    $callMei = DB::table('report_calls')
          ->select('presentedCall as call')
          ->where('months','=','Mei')
          ->get()->toArray();
    $callMei = array_column($callMei,'call');

    $callJun = DB::table('report_calls')
          ->select('presentedCall as call')
          ->where('months','=','June')
          ->get()->toArray();
    $callJun = array_column($callJun,'call');

    $callJul = DB::table('report_calls')
          ->select('presentedCall as call')
          ->where('months','=','July')
          ->get()->toArray();
    $callJul = array_column($callJul,'call');

    $callAug = DB::table('report_calls')
          ->select('presentedCall as call')
          ->where('months','=','August')
          ->get()->toArray();
    $callAug = array_column($callAug,'call');

    $callSep = DB::table('report_calls')
          ->select('presentedCall as call')
          ->where('months','=','September')
          ->get()->toArray();
    $callSep = array_column($callSep,'call');

    $callOct = DB::table('report_calls')
          ->select('presentedCall as call')
          ->where('months','=','October')
          ->get()->toArray();
    $callOct = array_column($callOct,'call');

    $callNov = DB::table('report_calls')
          ->select('presentedCall as call')
          ->where('months','=','November')
          ->get()->toArray();
    $callNov = array_column($callNov,'call');

    $callDec = DB::table('report_calls')
          ->select('presentedCall as call')
          ->where('months','=','December')
          ->get()->toArray();
    $callDec = array_column($callDec,'call');

    /////////////////////////////////////////////////////////////////////

    $ticket_jan = DB::table('report_solcents')
          ->select(DB::raw('Count(WO_ID) as ticket'))
          ->whereMonth('Submit_Date','=',date('01'))
          ->get()->toArray();
    $ticket_jan = array_column($ticket_jan,'ticket');

    $ticket_feb = DB::table('report_solcents')
          ->select(DB::raw('Count(WO_ID) as ticket'))
          ->whereMonth('Submit_Date','=',date('02'))
          ->get()->toArray();
    $ticket_feb = array_column($ticket_feb,'ticket');

    $ticket_mar = DB::table('report_solcents')
          ->select(DB::raw('Count(WO_ID) as ticket'))
          ->whereMonth('Submit_Date','=',date('03'))
          ->get()->toArray();
    $ticket_mar = array_column($ticket_mar,'ticket');

    $ticket_apr = DB::table('report_solcents')
          ->select(DB::raw('Count(WO_ID) as ticket'))
          ->whereMonth('Submit_Date','=',date('04'))
          ->get()->toArray();
    $ticket_apr = array_column($ticket_apr,'ticket');

    $ticket_mei = DB::table('report_solcents')
          ->select(DB::raw('Count(WO_ID) as ticket'))
          ->whereMonth('Submit_Date','=',date('05'))
          ->get()->toArray();
    $ticket_mei = array_column($ticket_mei,'ticket');

    $ticket_jun = DB::table('report_solcents')
          ->select(DB::raw('Count(WO_ID) as ticket'))
          ->whereMonth('Submit_Date','=',date('06'))
          ->get()->toArray();
    $ticket_jun = array_column($ticket_jun,'ticket');

    $ticket_jul = DB::table('report_solcents')
          ->select(DB::raw('Count(WO_ID) as ticket'))
          ->whereMonth('Submit_Date','=',date('07'))
          ->get()->toArray();
    $ticket_jul = array_column($ticket_jul,'ticket');

    $ticket_aug = DB::table('report_solcents')
          ->select(DB::raw('Count(WO_ID) as ticket'))
          ->whereMonth('Submit_Date','=',date('08'))
          ->get()->toArray();
    $ticket_aug = array_column($ticket_aug,'ticket');

    $ticket_sep = DB::table('report_solcents')
          ->select(DB::raw('Count(WO_ID) as ticket'))
          ->whereMonth('Submit_Date','=',date('09'))
          ->get()->toArray();
    $ticket_sep = array_column($ticket_sep,'ticket');

    $ticket_okt = DB::table('report_solcents')
          ->select(DB::raw('Count(WO_ID) as ticket'))
          ->whereMonth('Submit_Date','=',date('10'))
          ->get()->toArray();
    $ticket_okt = array_column($ticket_okt,'ticket');

    $ticket_nov = DB::table('report_solcents')
          ->select(DB::raw('Count(WO_ID) as ticket'))
          ->whereMonth('Submit_Date','=',date('11'))
          ->get()->toArray();
    $ticket_nov = array_column($ticket_nov,'ticket');

    $ticket_des = DB::table('report_solcents')
          ->select(DB::raw('Count(WO_ID) as ticket'))
          ->whereMonth('Submit_Date','=',date('12'))
          ->get()->toArray();
    $ticket_des = array_column($ticket_des,'ticket');

    /////////////////////////////////////////////////////////////////////

    $kanwil = DB::table('report_solcents')
              ->select(array(DB::raw('count(Wilayah) as wilayah')))
              ->groupBy('Wilayah')
              ->orderBy('wilayah','desc')
              ->get()->toArray();
    $kanwil = array_column($kanwil, 'wilayah');

    $labelKanwil = DB::table('report_solcents')
            ->select(array('Wilayah as lblKanwil', DB::raw('count(Wilayah) as wilayah')))
            ->take(10)
            ->groupBy('Wilayah')
            ->orderBy('wilayah','desc')
            ->get()->toArray();
    $labelKanwil = array_column($labelKanwil, 'lblKanwil');

    /////////////////////////////////////////////////////////////////////
    ///cabang///
    /////////////////////////////////////////////////////////////////////
    $cabang = DB::table('report_solcents')
              ->select(array(DB::raw('count(Site_Group) as cabang')))
              ->groupBy('Site_Group','Wilayah')
              ->orderBy('cabang','desc')
              ->get()->toArray();
    $cabang = array_column($cabang, 'cabang');

    $labelCabang = DB::table('report_solcents')
            ->select(array('Site_Group as lblKcu', DB::raw('count(Site_Group) as kcu')))
            ->take(10)
            ->groupBy('Site_Group','Wilayah')
            ->orderBy('kcu','desc')
            ->get()->toArray();
    $labelCabang = array_column($labelCabang, 'lblKcu');


    return view('testMonthly', compact('post'))
     ->with('calljan',json_encode($calljan,JSON_NUMERIC_CHECK))
     ->with('callFeb',json_encode($callFeb,JSON_NUMERIC_CHECK))
     ->with('callMar',json_encode($callMar,JSON_NUMERIC_CHECK))
     ->with('callApr',json_encode($callApr,JSON_NUMERIC_CHECK))
     ->with('callMei',json_encode($callMei,JSON_NUMERIC_CHECK))
     ->with('callJun',json_encode($callJun,JSON_NUMERIC_CHECK))
     ->with('callJul',json_encode($callJul,JSON_NUMERIC_CHECK))
     ->with('callAug',json_encode($callAug,JSON_NUMERIC_CHECK))
     ->with('callSep',json_encode($callSep,JSON_NUMERIC_CHECK))
     ->with('callOct',json_encode($callOct,JSON_NUMERIC_CHECK))
     ->with('callNov',json_encode($callNov,JSON_NUMERIC_CHECK))
     ->with('callDec',json_encode($callDec,JSON_NUMERIC_CHECK))
     ->with('ticket_jan',json_encode($ticket_jan,JSON_NUMERIC_CHECK))
     ->with('ticket_feb',json_encode($ticket_feb,JSON_NUMERIC_CHECK))
     ->with('ticket_mar',json_encode($ticket_mar,JSON_NUMERIC_CHECK))
     ->with('ticket_apr',json_encode($ticket_apr,JSON_NUMERIC_CHECK))
     ->with('ticket_mei',json_encode($ticket_mei,JSON_NUMERIC_CHECK))
     ->with('ticket_jun',json_encode($ticket_jun,JSON_NUMERIC_CHECK))
     ->with('ticket_jul',json_encode($ticket_jul,JSON_NUMERIC_CHECK))
     ->with('ticket_aug',json_encode($ticket_aug,JSON_NUMERIC_CHECK))
     ->with('ticket_sep',json_encode($ticket_sep,JSON_NUMERIC_CHECK))
     ->with('ticket_okt',json_encode($ticket_okt,JSON_NUMERIC_CHECK))
     ->with('ticket_nov',json_encode($ticket_nov,JSON_NUMERIC_CHECK))
     ->with('ticket_des',json_encode($ticket_des,JSON_NUMERIC_CHECK))
     ->with('kanwil',json_encode($kanwil,JSON_NUMERIC_CHECK))
     ->with('labelKanwil',json_encode($labelKanwil,JSON_NUMERIC_CHECK))
     ->with('cabang',json_encode($cabang,JSON_NUMERIC_CHECK))
     ->with('labelCabang',json_encode($labelCabang,JSON_NUMERIC_CHECK));
  }

  public function showAnnualy ()
  {
    return view ('annualy');
  }

  public function test()
  {
    $categories = Category::get();
    return view('categoryView', compact('categories'));
  }


}
