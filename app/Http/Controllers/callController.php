<?php

namespace App\Http\Controllers;
use Yajra\DataTables\DataTables;

use Illuminate\Http\Request;
use App\ReportCall;
use Session;
use Flash;

class callController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $calls = ReportCall::get();
        return view('backend.call.index');
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
        $request->validate(
        [
          'Team'=>'required',
          'presented' => 'required',
          'handled' => 'required',
          'abandoned' => 'required',
          'month' => 'required',
          'year' => 'required',
        ],[
          'Team.required'=>'Team must be filled!',
          'presented.required'=>'presented must be filled!',
          'handled.required'=>'handled must be filled!',
          'abandoned.unique'=>'handled must be filled',
          'month.required'=>'month must be filled',
          'year.required'=>'year must be filled',
        ]
      );

      $call = ReportCall::create([
          'Team'=>$request->Team,
          'presentedCall' => $request->presented,
          'handledCall' => $request->handled,
          'abandonedCall' => $request->abandoned,
          'months' => $request->month,
          'year' => $request->year,
        ]);
      if($call)
        {
          Session::flash('alert-success', 'success');
        }
        else
        {
          Session::flash('alert-danger', 'danger');
        }
        return Redirect()->route('admin.call.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $call = ReportCall::where('id',$id)->first();
      return view('backend.call.show')->with(compact('call'));
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
      $request->validate(
        [
            'Team'=>'required',
            'presented' => 'required',
            'handled' => 'required',
            'abandoned' => 'required',
            'month' => 'required',
            'year' => 'required',
          ],[
            'Team.required'=>'Team must be filled!',
            'presented.required'=>'presented must be filled!',
            'handled.required'=>'handled must be filled!',
            'abandoned.unique'=>'handled must be filled',
            'month.required'=>'month must be filled',
            'year.required'=>'year must be filled',
        ]
      );

      $call = ReportCall::where('id',$id)->first();
      $call->Team = $request->Team;
      $call->presentedCall = $request->presented;
      $call->handledCall = $request->handled;
      $call->abandonedCall = $request->abandoned;
      $call->months = $request->month;
      $call->year = $request->year;
      $call->save();
      if($call){
        Session::flash('alert-success', 'success');
      }
      else
      {
        Session::flash('alert-danger', 'danger');
      }
      return Redirect()->route('admin.call.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $call = ReportCall::where('id',$id)->first();
      $call->delete();
      // Flash::success('Success delete call!');
      Session::flash('alert-success', 'success');
      echo "success";
    }

    public function list()
    {
      $call = ReportCall::get();
        return DataTables::of($call)
        ->addColumn('action',function($call)
        {
          $id = $call->id;
          return view('backend.call.action.call')->with(compact('id'));
        })
        ->escapeColumns([])
        ->addIndexColumn()
        ->make(true);
    }
}
