<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Response;
use App\Employee;
use App\Kanwil;
use App\Type;
use App\Status;
use App\Category;
use App\SubCategory;
use App\Kcu;
use App\Kcp;
use App\ReportSolcent;
use Uuid;
use Session;
use Redirect;
use Flash;
use Auth;

class CRUDController extends Controller
{
    public function store(Request $request)
    {
      // $this->validate(request(),[
      //     'domain' => 'required',
      //     'title' => 'required',
      //     'question' => 'required',
      //     'res' => 'required',
      //   ]);
      // Post::create([
      //   'formID' => request('formID'),
      //   'agentName' => request('agentName'),
      //   'domain' => request('domain'),
      //   'guestName' => request('guestName'),
      //   'jobTitle' => request('jobTitle'),
      //   'status'=> request('status'),
      //   'cat_1'=> request('cat_1'),
      //   'cat_2'=> request('cat_2'),
      //   'title'=> request('title'),
      //   'question'=> request('question'),
      // ]);
      // return redirect()->route('form');

      $request->validate(
        [
        'ref'=>'required',
        'res'=>'required',
        'question'=>'required',
      ],
      [
        'ref.required'=>'Reference must be filled!',
        'res.required'=>'Resolution must be filled!',
        'question.required'=>'Question must be filled!',
      ]
      );
      // dd($request->category);
      // if($request->category==null)
      // {
      //   $topic = explode ("||", $request->topic);
      //   $category[1] = NULL;
      //   $subcategory[1] = NULL;
      // }
      // elseif($request->subcategory==null)
      // {
      //   $topic = explode ("||", $request->topic);
      //   $category = explode ("||", $request->category);
      //   $subcategory[1] = NULL;
      // }
      $service = explode("||", $request->service);
      $category = explode ("||", $request->category);
      $subcategory = explode ("||", $request->subcategory);

      $employee = Employee::where('nip',$request->NIP)->first();
      $empName = $employee->guestname;
      $empWilayah = $employee->kanwil;
      $empSite = $employee->kcu;
      $empSiteGroup = $employee->kcukcp;


        $reportSolcent = ReportSolcent::create([
          'WO_ID'=>Uuid::generate(4),
          'Nama'=>$empName,
          'NIP'=>$request->NIP,
          'Summary'=>$request->summary,
          'Notes'=>$request->question,
          'Resolution'=>$request->res,
          'Status'=>$request->status,
          'Assignee'=>$request->agentName,
          'Type'=>$request->type,
          'Category_1'=>$service[1],
          'Category_2'=>$category[1],
          'Category_3'=>$subcategory[1],
          'Wilayah'=>$empWilayah,
          'Site_Group'=>$empSite,
          'Site'=>$empSiteGroup,
          'Reference'=>$request->ref,
        ]);
        if($reportSolcent)
        {
          Session::flash('alert-success', 'success');
        }
        else
        {
          Session::flash('alert-danger', 'danger');
        }
        return Redirect()->route('form');
    }

    public function detail(ReportSolcent $post)
    {
      return view('detail',compact('post'));
    }

    public function detailModal(Request $request)
    {
      $post = Post::find ($request->id);
      $post->question = $request->question;
      $post->res = $request->res;
      $post->ref = $request->ref;
      $post->save();
      return response()->json($post);
    }

    public function edit(Post $post)
    {
      $kanwils = Kanwil::all();
  		$types = Type::all();
  		$statuses = Status::all();
  		$categories = Category::all();
  		$sub_categories = SubCategory::all();
      $kcus = kcu::all();
      $kcps = kcp::all();

      return view('edit', compact('post','kanwils','types','statuses','categories','sub_categories','kcus','kcps'));
    }

    public function update(Post $post)
    {
      $post->update([
        'formID' => request('formID'),
        'agentName' => request('agentName'),
        'domain' => request('domain'),
        'guestName' => request('guestName'),
        'jobTitle' => request('jobTitle'),
        'kanwil' => request('kanwil'),
        'kcu' => request('ku'),
        'kcp'=> request('kp'),
        'type'=> request('type'),
        'status'=> request('status'),
        'cat_1'=> request('cat_1'),
        'cat_2'=> request('cat_2'),
        'title'=> request('title'),
        'question'=> request('question'),
        'res'=> request('res'),
        'ref'=> request('ref')
      ]);

      return redirect()->route('table');
    }

    public function profile()
    {
      $user = Auth::user();

      return view('profile',compact('user'));
    }
}
