@extends('backend.template.layout')
@section('title')
  <title>Home Admin Solcent</title>
@endsection
@section('content')

  <div class="content-wrapper">
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
      {{Form::open(['route'=>'admin.call.store','class'=>'form-horizontal'])}}
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Add Call Form</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form class="form-horizontal">
        <div class="box-body">
          <div class="form-group">
            <label for="inputName" class="col-sm-2 control-label">Call Presented</label>
            <div class="col-sm-10">
              <input name="presented" class="form-control" id="inputPresent" placeholder="presented calls" type="text" required>
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail" class="col-sm-2 control-label">Call Handled</label>
            <div class="col-sm-10">
              <input name="handled" class="form-control" id="inputHandle" placeholder="Handled calls" type="text" required>
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail" class="col-sm-2 control-label">Call Abandoned</label>
            <div class="col-sm-10">
              <input name="abandoned" class="form-control" id="inputAbandon" placeholder="Abandoned calls" type="text" required>
            </div>
          </div>
          <div class="form-group">
            <label for="inputYear" class="col-sm-2 control-label">Month</label>
            <div class="col-sm-10">
              <select name="month" class="selectize" id=inputMonth required>
                <option value="">--Choose Role--</option>
                <option value="January">January</option>
                <option value="February">February</option>
                <option value="March">March</option>
                <option value="April">April</option>
                <option value="May">May</option>
                <option value="June">June</option>
                <option value="July">July</option>
                <option value="August">August</option>
                <option value="September">September</option>
                <option value="October">October</option>
                <option value="November">November</option>
                <option value="December">December</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="inputYear" class="col-sm-2 control-label">Year</label>
            <div class="col-sm-10">
              <select name="year" class="selectize" id=inputYear required>
                <option value="">--Choose Role--</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
              </select>
            </div>
          </div>
          {{-- <div class="form-group">
            <label for="inputPassword" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
              <input name="password" class="form-control" id="inputPassword" placeholder="Password" type="password">
            </div>
          </div> --}}
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <button type="submit" class="btn btn-info pull-right button-addAuthor">Add Call</button>
        </div>
        <!-- /.box-footer -->
      </form>
    </div>
  {{Form::close()}}
          <section class="content-header">
            <h1>
              User Call Management
            </h1>
            
          </section>
          <section class="content container-fluid">
        <table id="tableCall" class="tbl-call">
        <thead>
          <tr>
            <th>No.</th>
            <th>Month</th>
            <th>Year</th>
            <th>Present</th>
            <th>Handle</th>
            <th>Abandon</th>
            <th>Action</th>
          </tr>
        </thead>
        </table>
          </section>
        </div>
      @endsection
      @section('script')
        <script>
        $(function()
          {
            $('#tableCall').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{route('backend.call.list')}}",
                responsive: false,
                columns:
                [
                  { data: 'DT_Row_Index', orderable: false, searchable: false, },
                  { data: 'months', name: 'months' },
                  { data: 'year', name: 'year' },
                  { data: 'presentedCall', name:'presentedCall'},
                  { data: 'handledCall', name:'handledCall'},
                  { data: 'abandonedCall', name:'abandonedCall'},
                  { data: 'action', name:'action'}
                ]
            });
          });

          // function deleteUser(id,name)
          //     {
          //       var token = '{{csrf_token()}}';
          //       swal(
          //       {
          //         title: "Are you sure?",
          //         text: "Once deleted, you will not be able to recover this imaginary file!",
          //         icon: "warning",
          //         content: "input",
          //         buttons: true,
          //         dangerMode: true,
          //       })
          //       .then((deletereason) => {
          //         console.log(deletereason);
          //         if(deletereason=="")
          //         {
          //           swal('Reason must be filled!');
          //           return false;
          //         }
          //         else if(deletereason==null)
          //         {
          //           return false;
          //         }
          //         else
          //         {
          //           $.post("{{url('/')}}/admin/user/"+id,
          //           {
          //             '_token':token,
          //             '_method':'DELETE',
          //             'deletereason': deletereason,
          //           },
          //           function(data, status)
          //           {
          //             if(data=="success")
          //             {
          //                 location.reload();
          //             }
          //           });
          //         }
          //       })
          //     }

              function deleteCall(id)
              {
                swal(
                {
                  title: 'Are You sure?',
                  input: 'text',
                  showCancelButton: true,
                  confirmButtonText: 'Ok',
                  showLoaderOnConfirm: true,
                  allowOutsideClick: false
                }).then((result) =>
                {
                  if (result.value)
                  {
                    var token = '{{csrf_token()}}';
                    $.ajax(
                    {
                      url:"{{url('/admin/call')}}/"+id,
                      type: 'post',
                      data:
                      {
                        reason: result.value,
                        _method: 'delete',
                        _token :token
                      },
                      success:function(msg)
                      {
                        if (msg=="success")
                        {
                          location.reload();
                        }
                      }
                    });
                  }
                })
              }
        </script>
      @endsection
