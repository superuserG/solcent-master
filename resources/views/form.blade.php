@extends('master.default')

@section('content')
  <div class="row">
      <div class="col-lg-12">
          <h2 class="page-header">Work Page</h2>
      </div>
      <!-- /.col-lg-12 -->
  </div>


  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
          <div class="panel-heading">
            Form
          </div>
          <div class="panel-body">
            <div class="row">
              <form class="" action="{!! route('create.post') !!}" method="POST">
                {{ csrf_field() }}
                <div class="col-lg-6">
                  <div class="form-group">
                      {{-- <label class="col-lg-6">Agent Name</label> --}}
                      <input class="form-control" placeholder="Agent Name Here" name="agentName" readonly style="width:350px" value="{{Auth::user()->name}}">
                  </div>
                  {{-- Agent Name --}}

                  <div class="form-group">
                      <label class="col-lg-3">Form ID</label>
                      <input class="form-control" placeholder="Form ID here" name="formID" style="width:350px" value="{{old('formID')}}">

                  </div>
                    {{-- ID Form --}}

                  <div class="form-group has-feedback{{ $errors->has('domain') ? ' has-error': ''}}">
                        <label class="col-lg-3">Domain</label>
                        <input class="form-control" placeholder="Enter Domain" name="domain" value="{{old('domain')}}" style="width:350px">
                        @if ($errors->has('domain'))
                          <span class="help-block">
                            <p>{{$errors->first('domain')}}</p>
                          </span>
                        @endif
                    </div>
                  {{-- Guest Domain --}}

                  <div class="form-group">
                      <label class="col-lg-3">Guest Name</label>
                      <input class="form-control" placeholder="Guest Name Here" name="guestName" style="width:350px" value="{{old('guestName')}}">
                  </div>
                  {{-- Guest Name --}}

                  <div class="form-group">
                      <label class="col-lg-3">Job Title</label>
                      <input class="form-control" placeholder="Job Title Here" name="jobTitle" style="width:350px" value="{{old('jobTitle')}}">
                  </div>
                  {{-- Job Title --}}

                  <div class="col-lg-6">
                    <div class="form-group">
                        <label class="col-lg-4">Kanwil</label>
                        <div class="col-lg-10">
                          <select class="form-control" name="kanwil">
                              @foreach ($kanwils as $key => $value)
                                <option value="{{$value->id}}">{{$value->name}}</option>
                              @endforeach
                          </select>
                        </div>

                    </div>
                    {{-- Guest Kanwil --}}

                    <div class="form-group">
                        <label class="col-lg-4">KCU</label>
                        <div class="col-lg-10">
                          <select class="form-control" name="ku">
                            @foreach ($kcus as $key => $value)
                              <option value="{{$value->id}}">{{$value->name}}</option>
                            @endforeach
                          </select>
                        </div>

                    </div>
                    {{-- Guest KU --}}

                    <div class="form-group">
                        <label class="col-lg-4">KCU/KCP</label>
                        <div class="col-lg-10">
                          <select class="form-control" name="kp">
                            @foreach ($kcps as $key => $value)
                              <option value="{{$value->id}}">{{$value->name}}</option>
                            @endforeach
                          </select>
                        </div>

                    </div>
                    {{-- Guest KU/KP --}}
                  </div>
                  {{-- Menu Location --}}

                  <div class="col-lg-6">
                    <div class="form-group">
                        <label class="col-lg-4">Type</label>
                        <div class="col-lg-10">
                          <select class="form-control" name="type">
                              @foreach ($types as $key => $value)
                                <option value="{{$value->id}}">{{$value->name}}</option>
                              @endforeach
                          </select>
                        </div>

                    </div>
                    {{-- Type --}}
                    <br>
                    <div class="form-group">
                        <label class="col-lg-4">Status</label>
                        <div class="col-lg-10">
                          <select class="form-control" name="status" value="{{old('status')}}">
                              @foreach ($statuses as $key => $value)
                                <option value="{{$value->id}}">{{$value->name}}</option>
                              @endforeach
                          </select>
                        </div>

                    </div>
                    {{-- Status --}}
                  </div>
                  {{-- Type and Status --}}
                </div>

                <div class="col-lg-6">
                  <div class="form-group" id="categoryView">
                    <label class="col-lg-6">Category 1</label>
                    <div class="col-lg-8">
                      <select class="form-control" name="cat_1" id="cat1">
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
                        <select class="form-control" name="cat_2" id="cat2">
                            @foreach ($sub_categories as $key => $value)
                              <option value="{{$value->id}}">{{$value->name}}</option>
                            @endforeach
                        </select>
                      </div>

                  </div>
                  {{-- Category 2 --}}
                  <div class="form-group has-feedback{{ $errors->has('title') ? ' has-error': ''}}">
                      <label class="col-lg-6">Title</label>
                      <div class="col-lg-8">
                        <input class="form-control" placeholder="Enter Title" name="title" value="{{old('title')}}">
                        @if ($errors->has('title'))
                          <span class="help-block">
                            <p>{{$errors->first('title')}}</p>
                          </span>
                        @endif
                      </div>
                  </div>
                  {{-- Title --}}
                  <div class="form-group has-feedback{{ $errors->has('question') ? ' has-error': ''}}">
                      <label class="col-lg-6">Question</label>
                      <div class="col-lg-10">
                        <textarea class="form-control" rows="4" name="question">{{old('question')}}</textarea>
                        @if ($errors->has('question'))
                          <span class="help-block">
                            <p>{{$errors->first('question')}}</p>
                          </span>
                        @endif
                      </div>
                  </div>
                  {{-- Question --}}
                  <div class="form-group has-feedback{{ $errors->has('res') ? ' has-error': ''}}">
                      <label class="col-lg-6">Resolution</label>
                      <div class="col-lg-10">
                        <textarea class="form-control" rows="4" name="res">{{old('res')}}</textarea>
                        @if ($errors->has('res'))
                          <span class="help-block">
                            <p>{{$errors->first('res')}}</p>
                          </span>
                        @endif
                      </div>
                  </div>
                  {{-- Resolution --}}
                  <div class="form-group">
                      <label class="col-lg-6">Reference</label>
                      <div class="col-lg-10">
                        <input class="form-control" placeholder="Enter Reference" name="ref" value="{{old('ref')}}">
                      </div>

                  </div>
                  {{-- Reference --}}
                  <div class="form-group">
                    <div class="col-lg-3">
                      <button type="reset" class="btn btn-default">Reset Button</button>
                    </div>
                    <div class="col-lg-3">
                      <button type="submit" class="btn btn-default">Submit Button</button>
                    </div>
                  </div>
                  {{-- button reset & submit --}}
                </div>
              </form>
            </div>

          </div>
      </div>
    </div>
  </div>

  {{-- <script>
    $('#categoryView').load('{!! route('category.view') !!}');
  </script> --}}
@endsection
