@extends('master.default')

@section('content')
  <div class="row">
      <div class="col-lg-12">
          <h1 class="page-header"></h1>
      </div>
      <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->
  <div class="row">
      <div class="col-lg-12">
          <div class="panel panel-default">
              <div class="panel-heading">

              </div>
              <!-- /.panel-heading -->
              <div class="panel-body">
                  <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                      <thead>
                          <tr>
                              <th>Title</th>
                              <th>Question</th>
                              <th>Answer</th>
                              <th>Reference</th>
                              <th>Submit Date</th>
                              <th>Completed Date</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach ($post as $key => $value)
                          <tr>
                            <td><a href="{!! route('detail.post', $value) !!}">{{$value->Summary}}</a></td>
                            <td>{{$value->Notes}}</td>
                            <td>{{$value->Resolution}}</td>
                            <td>{{$value->Submit_Date}}</td>
                            <td>{{$value->Completed_Date}}</td>
                            <td>
                              <a href="{!! route('edit.post', $value) !!}"class="show-modal btn btn-warning btn-sm" data-id="{{$value->id}}" data-title="{{$value->title}}"
                              > <i class="glyphicon glyphicon-pencil"> </i></a>
                              <a href="#" class="edit-modal btn btn-info btn-sm" data-id="{{$value->id}}" data-title="{{$value->title}}"
                              > <i class="fa fa-eye"> </i></a>
                            </td>
                          </tr>
                        @endforeach
                      </tbody>
                  </table>
                  <!-- /.table-responsive -->
                  <!--Bottom Table UI-->
                    <div class="d-flex justify-content-center">
                    </div>
                    <!--Bottom Table UI-->
              </div>
              <!-- /.panel-body -->
          </div>
          <!-- /.panel -->
      </div>
      <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->


      {{-- Modal --}}
  {{-- Edit function --}}
  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" role="modal">
            <div class="form-group">
              <label class="control-label col-sm-2" for="id">ID</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="fid" readonly>
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-sm-2" for="question">Question</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="question" id="question" readonly>
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-sm-2" for="res">Resolution</label>
              <div class="col-sm-10">
                <textarea type="name" class="form-control" name="res" id="r" readonly></textarea>
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-sm-2" for="ref">referensi</label>
              <div class="col-sm-10">
                <textarea type="name" class="form-control" name="ref" id="f" readonly></textarea>
              </div>
            </div>
          </form>
          {{-- delete --}}
          <div class="deletecontent">
            Hello World <span class="title"></span>
            <span class="hidden id"></span>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn actionBtn" data-dismiss="modal">
            <span id="footer_action_button" class="glyphicon"></span>
          </button>
          <button type="button" class="btn btn-warning" data-dismiss="modal">
            <span class="glyphicon glyphicon"></span> close
          </button>
        </div>
      </div>
    </div>
  </div>



@endsection
