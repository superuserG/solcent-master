<label class="col-lg-6">Category 1</label>
<div class="col-lg-8">
  <select class="form-control" name="cat_1" id="cat1">
      @foreach ($categories as $key => $value)
        <option value="{{$value->id}}">{{$value->name}}</option>
      @endforeach
  </select>
</div>
