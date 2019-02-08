<?php

namespace App\Http\Controllers;
use Yajra\DataTables\DataTables;

use Illuminate\Http\Request;
use App\Category;
use App\Service;
use Session;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = Category::get();
        $services = Service::get();
        return view('backend.additional.category')->with(compact('services','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate(
        [
        'service' => 'required',
        'category' => 'required',
        ],
        [
          'service.required'=>'Service must be filled!',
          'category.required'=>'Category must be filled!',
        ]
        );
      // dd($request->service);
      // dd(Uuid::generate(4));
      $category = Category::create([
        'service_id'=>$request->service,
        'name'=>$request->category,
        'slug'=>str_replace(' ','-',strtolower($request->category)),
      ]);

      if($category)
      {
        Session::flash('alert-success', 'success');
      }
      else
      {
        Session::flash('alert-danger', 'danger');
      }
      return Redirect()->route('admin.category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $category = Category::where('id',$id)->first();
        $service = Service::where('id',$category->service_id)->first();
        $services = Service::get();
        // $service = $category->service;
        // $catServ = Category::join('services','categories.service_id','=','services.id')->select(['categories.id','categories.name','services.service','categories.slug']);
        // dd($category);
        return view('backend.additional.show.showCategory')->with(compact('category','service','services'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate(
        [
        'service' => 'required',
        'category' => 'required',
        ],
        [
          'service.required'=>'Service must be filled!',
          'category.required'=>'Category must be filled!',
        ]
        );
        $category = Category::where('id',$id)->first();
        $category->service_id = $request->service;
        $category->name = $request->category;
        $category->save();
        if($category){
          Session::flash('alert-success', 'success');
        }
        else
        {
          Session::flash('alert-danger', 'danger');
        }
        return Redirect()->route('admin.category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $category = Category::where('id',$id)->first();
        // dd(count($category->subcategory));
        if(count($category->subcategory)!=0)
        {
          Session::flash('alert-danger', 'danger');
          echo "error";
        }
        else
        {
          $category->delete();
          Session::flash('alert-success', 'success');
          echo "success";
        }
    }

    public function list()
    {
      $categories = Category::get();
      $catServ = Category::join('services','categories.service_id','=','services.id')->select(['categories.id','categories.name','services.service','categories.slug']);
      // dd($catServ);
      return DataTables::of($catServ)
      ->addColumn('action',function($catServ)
      {
        $categoryid = $catServ->id;
        $categoryname = $catServ->name;
        $categoryslug = $catServ->slug;
        return view('backend.additional.action.actCategory')->with(compact('categoryid','categoryname','$categoryslug'));
      })
      ->escapeColumns([])
      ->addIndexColumn()
      ->make(true);
    }
}
