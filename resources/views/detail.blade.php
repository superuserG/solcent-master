@extends('master.default')

@section('content')
  <br>
  <div class="panel panel-default">
    <div class="panel-heading">
      Title : {{$post->title}}
    </div>
    <div class="panel-body">
      <div class="col-md-8 col-md-offset-2">
        <div class="form-group">
          <label>Question</label>
          <textarea class="form-control" rows="4" name="question" readonly>{{$post->question}}</textarea>
        </div>
        {{-- Question --}}
        <div class="form-group">
          <label>Resolution</label>
          <textarea class="form-control" rows="4" name="res" readonly>{{$post->res}}</textarea>
        </div>
        {{-- Resolution --}}
        <div class="form-group">
          <label>Reference</label>
          <input class="form-control" placeholder="Enter Reference" name="ref" value="{{$post->ref}}" readonly>
        </div>
        {{-- Reference --}}
        <a href="{!! route('table') !!}" class="btn btn-outline btn-info"> Back </a>
      </div>
    </div>
  </div>
@endsection
