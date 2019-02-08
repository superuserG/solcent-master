
  <div class="box box-info editserviceform">
    <div class="box-header with-border">
      <h3 class="box-title">Edit Sub  Category Form</h3>
    </div>
    {{Form::open(['route'=>['admin.subcategory.update',$subcategory->id],'method'=>'put','class'=>'form-horizontal','files'=>'true'])}}
    <form class="form-horizontal">
      <div class="box-body">
        <div class="form-group">
          <label for="inputCategory" class="col-sm-2 control-label">Category</label>
          <div class="col-sm-10">
            <select name="category" class="selectize" id=inputCategory required>
              <option value="{{$category->id}}">{{$category->name}}</option>
              @foreach ($categories as $cat)
                <option value="{{$cat->id}}">{{$cat->name}}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="inputSubCategory" class="col-sm-2 control-label">Sub Category</label>
          <div class="col-sm-10">
            <input name="subcategory" class="form-control" id="inputSubCategory" type="text" value="{{$subcategory->subcatname}}">
          </div>
        </div>
      <div class="box-footer">
        <button type="submit" class="btn btn-info pull-right">Update Sub Category</button>
      </div>
    </form>
    {{Form::close()}}
  </div>
</div>
