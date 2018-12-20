<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ReportCall;
use DB;

class backendController extends Controller
{
  public function showAdmin(){

    $handled = DB::table('report_calls')
          ->select(array(DB::raw('sum(handledCall) as handled')))
          ->groupBy('months')
          ->orderBy('id')
          ->get()->toArray();
    $handled = array_column($handled,'handled');

    $abandoned = DB::table('report_calls')
          ->select(array(DB::raw('sum(abandonedCall) as abandoned')))
          ->groupBy('months')
          ->orderBy('id')          
          ->get()->toArray();
    $abandoned = array_column($abandoned,'abandoned');

    $presented = DB::table('report_calls')
          ->select(array(DB::raw('sum(presentedCall) as presented')))
          ->groupBy('months')
          ->get()->toArray();
    $presented = array_column($presented,'presented');

    return view('backend.home')
    ->with('handled',json_encode($handled,JSON_NUMERIC_CHECK))
    ->with('abandoned',json_encode($abandoned,JSON_NUMERIC_CHECK))
    ->with('presented',json_encode($presented,JSON_NUMERIC_CHECK));

  }
}
