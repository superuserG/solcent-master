<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class monthController extends Controller
{
  public function showJanuary(){
    return view('Page_Month.january');
  }

  public function showFebruary(){
    return view('Page_Month.february');
  }

  public function showMarch(){
    return view('Page_Month.march');
  }

  public function showApril(){
    return view('Page_Month.april');
  }

  public function showMay(){
    return view('Page_Month.may');
  }

  public function showJune(){
    return view('Page_Month.june');
  }

  public function showJuly(){
    return view('Page_Month.july');
  }

  public function showAugust(){
    return view('Page_Month.august');
  }

  public function showSeptember(){
    return view('Page_Month.september');
  }

  public function showOctober(){
    return view('Page_Month.october');
  }

  public function showNovember(){
    return view('Page_Month.november');
  }

  public function showDecember(){
    return view('Page_Month.december');
  }

}
