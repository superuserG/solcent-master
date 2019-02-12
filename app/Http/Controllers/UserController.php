<?php

namespace App\Http\Controllers;
use Yajra\DataTables\DataTables;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Uuid;
use Image;
use Flash;
use Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::get();
        return view('backend.user.index');
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
        'name' => 'required',
        'email' => 'required|email|max:255|unique:users',
        'role'=>'required',
        'password' => 'required',
        'nip'=>'required',
        'kanwil'=>'required',
        'kcu'=>'required',
        'kcukcp'=>'required',

      ],
      [
        'name.required'=>'Name must be filled!',
        'email.required'=>'Email must be filled!',
        'email.unique'=>'This email has been taken',
        'role.required'=>'Role must be filled!',
        'password.required'=>'Password must be filled!',
      ]
      );

      // dd(Uuid::generate(4));
      $user = User::create([
        'iduser'=>Uuid::generate(4),
        'name'=>$request->name,
        'email'=>$request->email,
        'role'=>$request->role,
        'password'=>bcrypt($request->password),
        'nip'=>$request->nip,
        'kanwil'=>$request->kanwil,
        'kcu'=>$request->kcu,
        'kcukcp'=>$request->kcukcp,
        'profilepicture'=>'admin.jpg'
      ]);

      if($user)
      {
        Session::flash('alert-success', 'success');
      }
      else
      {
        Session::flash('alert-danger', 'danger');
      }
      return Redirect()->route('admin.user.index');
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
        // dd('aa');
        $user = User::where('iduser',$id)->first();
        return view('backend.user.show')->with(compact('user'));
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
          'role'=>'required',
        ],
        [
          'role.required'=>'Role must be filled!',
        ]
        );
        $user = User::where('iduser',$id)->first();
        if($request->role == 1)
        {
          $user->role = 'user';
        }else if($request->role == 2)
        {
          $user->role = 'admin';
        }
        else if($request->role == 3) 
        {
          $user->role = 'super admin';
        }
        $user->save();
        if($user){
          Session::flash('alert-success', 'success');
        }
        else
        {
          Session::flash('alert-danger', 'danger');
        }
        return Redirect()->route('admin.user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        //
        $user = User::where('iduser',$id)->first();
        $user->deletereason = $request->reason;
        $user->save();
        $user->delete();
        // Flash::success('Success delete user!');
        Session::flash('alert-success', 'success');
        echo "success";
    }

    public function list()
    {
      $user = User::where('iduser','!=',Auth::user()->iduser)->get();
        return DataTables::of($user)
        ->addColumn('action',function($user)
        {
          $userid = $user->iduser;
          $username = $user->name;
          return view('backend.user.action.user')->with(compact('userid','username'));
        })
        ->escapeColumns([])
        ->addIndexColumn()
        ->make(true);
      }

    public function restore($id)
    {
      $user = User::where('iduser',$id)->withTrashed()->first();
      $user->deletereason = NULL;
      $user->restore();
      // Flash::success('Success restoring book!');
      Session::flash('alert-success', 'success');
      echo "success";
    }

    public function deleteduser()
    {
      // dd('aa');
      $users = User::get();
      return view('backend.user.deleted')->with(compact('user'));
    }

    public function deletedlist()
    {
      $user = User::onlyTrashed()->get();
      return DataTables::of($user)
      ->addColumn('action',function($user)
      {
        $userid = $user->iduser;
        $username = $user->name;
        return view('backend.user.datatable.list')->with(compact('userid','username'));
      })
      ->escapeColumns([])
      ->addIndexColumn()
      ->make(true);
    }
}
