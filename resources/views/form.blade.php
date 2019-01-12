@extends('master.default')

@section('content')
  <style>
  .font-red
  {
    color: red;
  }
  </style>
  <div class="row">
      <div class="col-lg-12">
          <h2 class="page-header">Work Page</h2>
      </div>
      <!-- /.col-lg-12 -->
  </div>


  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-default">
        @if(Session::has('message'))
        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
        @endif
        <div class="flash-message">
        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
          @if(Session::has('alert-' . $msg))
          <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }}</p>
          @endif
        @endforeach
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
      </div>
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
                      <input class="form-control" placeholder="Agent Name Here" name="agentName" readonly style="width:350px"
                      value="{{Auth::user()->name}}">
                  </div>
                  {{-- Agent Name --}}

                  {{-- <div class="form-group">
                      <label class="col-lg-3">Form ID</label>
                      <input class="form-control" placeholder="Form ID here" name="formID" style="width:350px" value="{{old('formID')}}">

                  </div>   --}}
                    {{-- ID Form --}}

                    <div class="form-group">
                        <label class="col-lg-3">NIP</label>
                        <input class="form-control" placeholder="NIP here" name="NIP" id="NIP" onkeyup="checkNIP()" style="width:350px" value="{{old('NIP')}}" required>
                    </div>
                    <div class="form-group font-red" id="nipFailed" hidden>
                      <label class="col-lg-12">NIP Tidak Sesuai</label>
                    </div>

                    {{-- NIP --}}
                    {{-- <div class="form-group" id="dataNip"></div> --}}
                    {{-- <div class="" id="dataShow" hidden> --}}
                    <div id="dataEmployee"></div>
                    <div id="dataEmpty">
                      <div class="form-group has-feedback{{ $errors->has('domain') ? ' has-error': ''}}">
                            <label class="col-lg-3">Domain</label>
                            <input class="form-control" placeholder="Enter Domain" name="domain" value="" style="width:350px" disabled>
                            @if ($errors->has('domain'))
                              <span class="help-block">
                                <p>{{$errors->first('domain')}}</p>
                              </span>
                            @endif
                        </div>
                      {{-- Guest Domain --}}

                      <div class="form-group">
                          <label class="col-lg-3">Guest Name</label>
                          <input class="form-control" placeholder="Guest Name Here" name="guestName" style="width:350px" value="" disabled>
                      </div>
                      {{-- Guest Name --}}

                      <div class="form-group">
                          <label class="col-lg-3">Job Title</label>
                          <input class="form-control" placeholder="Job Title Here" name="jobTitle" style="width:350px" value="" disabled>
                      </div>
                        <div class="form-group">
                            <label class="col-lg-3">Kanwil</label>
                            <input class="form-control" placeholder="Kanwil Here" name="kanwil" style="width:350px" value="" disabled>

                        </div>
                        {{-- Guest Kanwil --}}

                        <div class="form-group">
                            <label class="col-lg-3">KCU</label>
                            <input class="form-control" placeholder="KCU Here" name="kcu" style="width:350px" value="" disabled>

                        </div>
                        {{-- Guest KU --}}

                        <div class="form-group">
                            <label class="col-lg-3">KCU/KCP</label>
                            <input class="form-control" placeholder="KCU/KCP Here" name="kcu/kcp" style="width:350px" value="" disabled>
                        </div>

                    </div>
                {{-- </div> --}}
                  {{-- Type and Status --}}
                </div>

                <div class="col-lg-6">
                  <div class="cat-subcat">
                    <div id="servicediv"></div>
                    <div id="categorydiv"></div>
                    <div id="subcategorydiv"></div>
                  </div>

                  <div class="form-group has-feedback{{ $errors->has('summary') ? ' has-error': ''}}">
                      <label class="col-lg-12">Summary</label>
                      <div class="col-lg-10">
                        <textarea class="form-control" rows="4" name="summary" required>{{old('summary')}}</textarea>
                        @if ($errors->has('summary'))
                          <span class="help-block">
                            <p>{{$errors->first('summary')}}</p>
                          </span>
                        @endif
                      </div>
                  </div>
                  {{-- Summary --}}
                  <div class="form-group has-feedback{{ $errors->has('question') ? ' has-error': ''}}">
                      <label class="col-lg-12">Question</label>
                      <div class="col-lg-10">
                        <textarea class="form-control" rows="4" name="question" required>{{old('question')}}</textarea>
                        @if ($errors->has('question'))
                          <span class="help-block">
                            <p>{{$errors->first('question')}}</p>
                          </span>
                        @endif
                      </div>
                  </div>
                  {{-- Question --}}
                  <div class="form-group has-feedback{{ $errors->has('res') ? ' has-error': ''}}">
                      <label class="col-lg-12">Resolution</label>
                      <div class="col-lg-10">
                        <textarea class="form-control" rows="4" name="res" required>{{old('res')}}</textarea>
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
                  <div class="form-group">
                    <label class="col-lg-4">Type</label>
                    <div class="col-lg-10">
                      <select class="form-control" name="type" required>
                        <option value="">--Choose Type--</option>
                          @foreach ($types as $key => $value)
                            <option value="{{$value->name}}">{{$value->name}}</option>
                          @endforeach
                      </select>
                    </div>

                  </div>
                  <div class="form-group">
                    <label class="col-lg-4">Status</label>
                    <div class="col-lg-10">
                      <select class="form-control" name="status" value="{{old('status')}}" required>
                        <option value="">--Choose Status--</option>
                          @foreach ($statuses as $key => $value)
                            <option value="{{$value->name}}">{{$value->name}}</option>
                          @endforeach
                      </select>
                    </div>
                  </div>
                    {{-- Status --}}
                  {{-- Reference --}}

                  <div class="form-group">
                    <div class="col-lg-12">
                    <div class="col-lg-3">
                      <button type="reset" class="btn btn-default">Reset Button</button>
                    </div>
                    <div class="col-lg-3">
                      <button type="submit" class="btn btn-default">Submit Button</button>
                    </div>
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

<script>
function checkNIP()
{
  setTimeout(function(){
    var nip = $('#NIP').val();
    var token = '{{csrf_token()}}';
    var flag = false;
    if(nip!='')
    {
      flag = true;
    }
    if(flag==true)
    {
      $.ajax({
        url:"{{route('checknip')}}",
        type: 'post',
        data:{
          nip:nip,
          _token:token
        },
        success:function(status)
        {
          // alert(status);
          console.log(status);
          if(status=='success')
          {
            // console.log();
            // alert(nip);

            // var idnip = status;
            $('#dataEmployee').load('{{url("form")}}/'+nip);

            $('#dataEmployee').show();
            $('#dataShow').show();
            $('#dataEmpty').hide();
            // $('#NIP').attr('disabled',true);
            $("#nipFailed").hide();
          }
          else
          {
            $("#nipFailed").show();
            $('#dataEmpty').show();
            $('#dataEmployee').hide();
            // alert('a');
          }
        }
      })
    }
  }, 1000 );
}

$('#servicediv').load('{{route("service")}}');

</script>
@endsection
