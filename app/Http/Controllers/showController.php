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
     //Report Ticket
    $presented = DB::table('report_solcents')
        ->select(DB::raw('Count(WO_ID) as present'))
        ->get()->toArray();
    $presented = array_column($presented, 'present');

    $completed = ReportSolcent::select(DB::raw("count(WO_ID) as completed"))->where('Status','=','Completed')
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

    return view('home')
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
    $post = Post::all();

    return view('tables',compact('post'));
  }

  public function showMonthly()
  {
    //Report Ticket
    $presented = DB::table('report_solcents')
        ->select(DB::raw('Count(WO_ID) as present'))
        ->get()->toArray();
    $presented = array_column($presented, 'present');

    $completed = ReportSolcent::select(DB::raw("count(WO_ID) as completed"))->where('Status','=','Completed')
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

    return view('monthly')
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


  public function test()
  {
    $categories = Category::get();
    return view('categoryView', compact('categories'));
  }


}
