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
      {{Form::open(['route'=>'admin.subcategory.store','class'=>'form-horizontal'])}}
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Add Sub Category Form</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form class="form-horizontal">
        <div class="box-body">
          <div class="form-group" id="serviceBE">
            <label for="inputServe" class="col-sm-2 control-label">Service</label>
            <div class="col-sm-10">
              <select name="service" class="serviceSelectize" id=inputService required>
                <option value="">--Choose Service--</option>
                @foreach ($services as $service)
                  <option value="{{$service->id}}">{{$service->service}}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="form-group" id="categoryBE">
            {{-- <label for="inputCategory" class="col-sm-2 control-label">Category</label>
            <div class="col-sm-10">
              <select name="category" class="selectize" id=inputCategory required>
                <option value="">--Choose Category--</option>
                @foreach ($categories as $category)
                  <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
              </select>
            </div> --}}
          </div>
          <div class="form-group">
            <label for="inputSubCategory" class="col-sm-2 control-label">Sub Category</label>
            <div class="col-sm-10">
              <input name="subcategory" class="form-control" id="inputSubCategory" placeholder="Sub Category" type="text" required>
            </div>
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <button type="submit" class="btn btn-info pull-right button-addAuthor">Add Sub Category</button>
        </div>
        <!-- /.box-footer -->
      </form>
    </div>
  {{Form::close()}}
          <section class="content-header">
            <h1>
              Category <small>| Category Management</small>
            </h1>
            <ol class="breadcrumb">
              <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>

              {{-- <li class="active"><a href="{{route('backend.user.index')}}"><i class="fa fa-user" > </i>User</a></li> --}}
            </ol>
          </section>
          <section class="content container-fluid">
        <table id="tableSubCategory" class="tbl-category">
        <thead>
          <tr>
            <th>No.</th>
            <th>Category</th>
            <th>Sub Category</th>
            <th>Action</th>
          </tr>
        </thead>
        </table>
          </section>
        </div>
      @endsection
      @section('script')
        <script>
        $(document).ready( function () {
          // $("#categoryBE").hide();
          $('#categoryBE').load('{{url("categoryColumn")}}/0');
        });

        $(function()
          {
            $('#tableSubCategory').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{route('backend.subcategory.list')}}",
                responsive: false,
                columns:
                [
                  { data: 'DT_Row_Index', orderable: false, searchable: false, },
                  { data: 'name', name: 'categories.name' },
                  { data: 'subcatname', name: 'subcatname' },
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

              function deleteSubCategory(id, name)
              {
                swal(
                {
                  title: 'Delete Sub Category "'+name+'"?',
                  showCancelButton: true,
                  confirmButtonText: 'Submit',
                  showLoaderOnConfirm: true,
                  allowOutsideClick: false
                }).then(() =>
                {
                  var token = '{{csrf_token()}}';
                  $.ajax(
                  {
                    url:"{{url('/admin/subcategory')}}/"+id,
                    type: 'post',
                    data:
                    {
                      _method:'delete',
                      _token:token
                    },
                    success:function(msg)
                    {
                      if (msg=="success")
                      {
                        location.reload();
                      }
                      else if (msg=="error")
                      {
                        swal("Category memiliki hubungan dengan Sub Category")
                      }
                    }
                  });
                })
              }

              var category = $('.serviceSelectize').selectize(
              {
                onChange: function(value)
                {
                  // alert(value);
                  // var id = $('#address-city').val();
                  var id = value.split('||');
                  // $('#districtdiv').load('{{url("admin/district")}}/'+id[0]);
                  $('#categoryBE').load('{{url("categoryColumn")}}/'+id[0]);
                  // $('#categoryBE').show();
                  // $('#subcategorydiv').hide();
                  // $('#districtdiv').html('');
                  // $('#villagediv').html('');
                }
              });
        </script>
      @endsection
