
  <div class="box box-info edituserform">
    <div class="box-header with-border">
      <h3 class="box-title">Edit Call Form</h3>
    </div>
    {{Form::open(['route'=>['admin.call.update',$call->id],'method'=>'put','class'=>'form-horizontal','files'=>'true'])}}
    <!-- /.box-header -->
    <!-- form start -->
    {{-- <div class="img-edit-user col-md-12">
      <img class="imgEditUser" src="{{asset('images/users/'.$user->userpict)}}">
    </div> --}}
    <form class="form-horizontal">
      <div class="box-body">
        <div class="form-group">
          <label for="inputName" class="col-sm-2 control-label">Call Presented</label>
          <div class="col-sm-10">
            <input name="presented" class="form-control" id="inputPresent" placeholder="presented calls" type="text" value="{{$call->presentedCall}}" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail" class="col-sm-2 control-label">Call Handled</label>
          <div class="col-sm-10">
            <input name="handled" class="form-control" id="inputHandle" placeholder="Handled calls" type="text" value="{{$call->handledCall}}" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputEmail" class="col-sm-2 control-label">Call Abandoned</label>
          <div class="col-sm-10">
            <input name="abandoned" class="form-control" id="inputAbandon" placeholder="Abandoned calls" type="text" value="{{$call->abandonedCall}}" required>
          </div>
        </div>
        <div class="form-group">
          <label for="inputYear" class="col-sm-2 control-label">Month</label>
          <div class="col-sm-10">
            <select name="month" class="selectize" id=inputMonth required>
              <option value="{{$call->months}}">{{$call->months}}</option>
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
              <option value="{{$call->year}}">{{$call->year}}</option>
              <option value="2018">2018</option>
              <option value="2019">2019</option>
              <option value="2020">2020</option>
            </select>
          </div>
        </div>
      <!-- /.box-body -->
      {{-- <div class="col-md-12 button-delete-user">
        <div class="btn btn-danger remove-user" onclick="deleteUser('{{$user->iduser}}','{{$user->username}}')">
          <span class="fa fa-remove"> Delete User </span>
        </div>
      </div> --}}
      <!-- /.box-footer -->
      <div class="box-footer">
        <button type="submit" class="btn btn-info pull-right">Update Call</button>
      </div>
    </form>
    {{Form::close()}}
  </div>
