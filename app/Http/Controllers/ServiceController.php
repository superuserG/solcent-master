<?php

namespace App\Http\Controllers;
use Yajra\DataTables\DataTables;

use Illuminate\Http\Request;
use App\Service;
use Session;


class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $services = Service::get();
        return view('backend.additional.service');
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
      ],
      [
        'service.required'=>'Service must be filled!',
      ]
      );

      // dd(Uuid::generate(4));
      $service = Service::create([
        'service'=>$request->service,
        'slug'=>str_replace(' ','-',strtolower($request->service)),
      ]);

      if($service)
      {
        Session::flash('alert-success', 'success');
      }
      else
      {
        Session::flash('alert-danger', 'danger');
      }
      return Redirect()->route('admin.service.index');
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
        $service = Service::where('id',$id)->first();
        return view('backend.additional.show.showService')->with(compact('service'));
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
          'service'=>'required',
        ],
        [
          'service.required'=>'Service must be filled!',
        ]
        );
        $service = Service::where('id',$id)->first();
        $service->service = $request->service;
        $service->save();
        if($service){
          Session::flash('alert-success', 'success');
        }
        else
        {
          Session::flash('alert-danger', 'danger');
        }
        return Redirect()->route('admin.service.index');
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
        $service = Service::where('id',$id)->first();
        // dd($service->category==null);
        if(count($service->category)!=0)
        {
          Session::flash('alert-danger', 'danger');
          echo "error";
        }
        else
        {
          $service->delete();
          Session::flash('alert-success', 'success');
          echo "success";
        }
        // Flash::success('Success delete user!');
        // Session::flash('alert-success', 'success');
        // echo "success";
    }

    public function list()
    {
      $services = Service::get();
      return DataTables::of($services)
      ->addColumn('action',function($services)
      {
        $serviceid = $services->id;
        $servicename = $services->service;
        $serviceslug = $services->slug;
        return view('backend.additional.action.actService')->with(compact('serviceid','servicename','serviceslug'));
      })
      ->escapeColumns([])
      ->addIndexColumn()
      ->make(true);
    }
}
