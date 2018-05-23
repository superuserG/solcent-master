<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Response;
use App\Kanwil;
use App\Type;
use App\Status;
use App\Category;
use App\SubCategory;
use App\Kcu;
use App\Kcp;

class CRUDController extends Controller
{
    public function store()
    {
      $this->validate(request(),[
          'domain' => 'required',
          'title' => 'required',
          'question' => 'required',
          'res' => 'required',
        ]);
      Post::create([
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
        'ref'=> request('ref'),
      ]);
      return redirect()->route('form');
    }

    public function detail(Post $post)
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
}
