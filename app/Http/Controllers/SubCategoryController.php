<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

use App\Category;
use App\Service;
use App\SubCategory;
use Session;
class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $subcategories = SubCategory::get();
        $categories = Category::get();
        return view('backend.additional.subcategory')->with(compact('subcategories','categories'));
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
        'category' => 'required',
        'subcategory' => 'required',
        ],
        [
          'category.required'=>'Category must be filled!',
          'subcategory.required'=>'Sub Category must be filled!',
        ]
        );
      // dd($request->service);
      // dd(Uuid::generate(4));
      // dd($request->subcategory);
      $subcategory = SubCategory::create([
        'category_id'=>$request->category,
        'subcatname'=>$request->subcategory,
        'subcatslug'=>str_replace(' ','-',strtolower($request->subcategory)),
      ]);

      if($subcategory)
      {
        Session::flash('alert-success', 'success');
      }
      else
      {
        Session::flash('alert-danger', 'danger');
      }
      return Redirect()->route('admin.subcategory.index');
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
        $subcategory = SubCategory::where('id',$id)->first();
        $category = Category::where('id',$subcategory->category_id)->first();
        $categories = Category::get();
        // $service = $category->service;
        // $catServ = Category::join('services','categories.service_id','=','services.id')->select(['categories.id','categories.name','services.service','categories.slug']);
        // dd($category);
        return view('backend.additional.show.showSubCategory')->with(compact('subcategory','category','categories'));
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
        'category' => 'required',
        'subcategory' => 'required',
        ],
        [
          'category.required'=>'Category must be filled!',
          'subcategory.required'=>'Sub Category must be filled!',
        ]
        );
        $subcategory = SubCategory::where('id',$id)->first();
        $subcategory->category_id = $request->category;
        $subcategory->subcatname = $request->subcategory;
        $subcategory->save();
        if($subcategory){
          Session::flash('alert-success', 'success');
        }
        else
        {
          Session::flash('alert-danger', 'danger');
        }
        return Redirect()->route('admin.subcategory.index');
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
        $subcategory = SubCategory::where('id',$id)->first();
        // dd(count($category->subcategory));
        $subcategory->delete();
        Session::flash('alert-success', 'success');
        echo "success";
    }

    public function list()
    {
      $subcategories = SubCategory::get();

      $subCatCats = SubCategory::join('categories','sub_categories.category_id','=','categories.id')->select('sub_categories.id','categories.name','sub_categories.subcatname','sub_categories.subcatslug');
      // $subCatCats = SubCategory::with('categories')->select('sub_categories.*');
      // dd($subCatCats);
      return DataTables::of($subCatCats)
      ->addColumn('action',function($subCatCats)
      {
        $subcategoryid = $subCatCats->id;
        $subcategoryname = $subCatCats->subcatname;
        $subcategoryslug = $subCatCats->subcatslug;
        return view('backend.additional.action.actSubCategory')->with(compact('subcategoryid','subcategoryname','subcategoryslug'));
      })
      ->escapeColumns([])
      ->addIndexColumn()
      ->make(true);
    }
}
