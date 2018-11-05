<label class="col-sm-2 col-form-label control-label" for="subcategory">Sub Category</label>
<div class="col-md-10">
  <select class="selectize" id="subcategory" name="subcategory" required>
    <option value="">--CHOOSE SUBCATEGORY--</option>
    @foreach ($subcategories as $subcategory)
      <option value="{{$subcategory->id.'||'.$subcategory->name}}">{{$subcategory->name}}</option>
    @endforeach
  </select>
</div>
<script>
  var subcategory = $('#subcategory').selectize();
</script>
