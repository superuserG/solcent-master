<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Service;
use App\Category;
use App\SubCategory;

class EtcController extends Controller
{
    //
    public function service()
    {
      $services = Service::get();
      return view('etc.service')->with(compact('services'));
    }

    public function category($id)
    {
      $categories = Category::where('service_id',$id)->get();
      return view('etc.category')->with(compact('categories'));
    }

    public function categoryColumn($id)
    {
      $categories = Category::where('service_id',$id)->get();
      return view('backend.additional.categoryColumn')->with(compact('categories'));
    }

    public function subcategory($id)
    {
      $subcategories = SubCategory::where('category_id',$id)->get();
      return view('etc.subcategory')->with(compact('subcategories'));
    }
}
