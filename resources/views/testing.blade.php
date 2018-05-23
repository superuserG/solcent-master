@extends('master.default')

@section('content')
  <div class="col-lg-6">

    <div class="form-group">
        <label class="col-lg-6">Category 1</label>
        <div class="col-lg-8">
          <select class="form-control" name="cat_1" id="cat_1">
              @foreach ($categories as $key => $value)
                <option value="{{$value->id}}">{{$value->name}}</option>
              @endforeach
          </select>
        </div>
    </div>
    {{-- Category 1 --}}

    <div class="form-group">
        <label class="col-lg-6">Category 2</label>
        <div class="col-lg-8">
          <select class="form-control" name="cat_2" id="cat_2">
          </select>
        </div>
    </div>
    {{-- Category 2 --}}
@endsection
