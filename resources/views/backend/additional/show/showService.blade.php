
  <div class="box box-info editserviceform">
    <div class="box-header with-border">
      <h3 class="box-title">Edit Service Form</h3>
    </div>
    {{Form::open(['route'=>['admin.service.update',$service->id],'method'=>'put','class'=>'form-horizontal','files'=>'true'])}}
    <form class="form-horizontal">
      <div class="box-body">
        <div class="form-group">
          <label for="inputService" class="col-sm-2 control-label">Service</label>
          <div class="col-sm-10">
            <input name="service" class="form-control" id="inputService" type="text" value="{{$service->service}}">
          </div>
        </div>
      <div class="box-footer">
        <button type="submit" class="btn btn-info pull-right">Update Service</button>
      </div>
    </form>
    {{Form::close()}}
  </div>
