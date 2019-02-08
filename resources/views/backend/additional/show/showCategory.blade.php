
  <div class="box box-info editserviceform">
    <div class="box-header with-border">
      <h3 class="box-title">Edit Category Form</h3>
    </div>
    {{Form::open(['route'=>['admin.category.update',$category->id],'method'=>'put','class'=>'form-horizontal','files'=>'true'])}}
    <form class="form-horizontal">
      <div class="box-body">
        <div class="form-group">
          <label for="inputService" class="col-sm-2 control-label">Service</label>
          <div class="col-sm-10">
            <select name="service" class="selectize" id=inputService required>
              <option value="{{$service->id}}">{{$service->service}}</option>
              @foreach ($services as $serv)
                <option value="{{$serv->id}}">{{$serv->service}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="inputCategory" class="col-sm-2 control-label">Category</label>
          <div class="col-sm-10">
            <input name="category" class="form-control" id="inputCategory" type="text" value="{{$category->name}}">
          </div>
        </div>
      <div class="box-footer">
        <button type="submit" class="btn btn-info pull-right">Update Category</button>
      </div>
    </form>
    {{Form::close()}}
  </div>
</div>
