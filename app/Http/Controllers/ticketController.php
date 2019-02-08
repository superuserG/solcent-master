<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\ReportSolcent;
use DB;
use Excel;
use File;
use Session;
use Flash;

class ticketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('backend.ticket.index');
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
      $this->validate($request, array(
         'file'      => 'required'
        ));

      if($request->hasFile('file')){
         $extension = File::extension($request->file->getClientOriginalName());
         if ($extension == "xlsx" || $extension == "xls" || $extension == "csv") {

          $path = $request->file->getRealPath();
          $data = Excel::load($path, function($reader) {
            })->get();
          if(!empty($data) && $data->count()){

           foreach ($data as $key => $value) {
            $insert[] = [
              'WO_ID'=>$value->WO_ID,
              'Nama'=>$value->Nama,
              'NIP'=>$value->NIP,
              'Summary'=>$value->Summary,
              'Notes'=>$value->Notes,
              'Resolution'=>$value->Resolution,
              'Status'=>$value->Status,
              'Assignee'=>$value->Assignee,
              'Type'=>$value->Type,
              'Category_1'=>$value->Category_1,
              'Category_2'=>$value->Category_2,
              'Category_3'=>$value->Category_3,
              'Wilayah'=>$value->Wilayah,
              'Site_Group'=>$value->Site_Group,
              'Site'=>$value->Site,
              'Reference'=>$value->Reference,
              'Cabang'=>$value->Cabang
            ];
           }

           if(!empty($insert)){

              $insertData = DB::table('report_solcents')->insert($insert);
              if ($insertData) {
                   Session::flash('success', 'Your Data has successfully imported');
                }else {
                   Session::flash('error', 'Error inserting the data..');
                   return back();
                }
             }
          }

        return back();

       }else {
        Session::flash('error', 'File is a '.$extension.' file.!! Please upload a valid xls/csv file..!!');
        return back();
       }
      }


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
    }

}
