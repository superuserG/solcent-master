<label class="col-sm-2 col-form-label control-label" for="category">Category</label>
<div class="col-md-10">
  <select class="selectize" id="category" name="category" required>
    <option value="">--CHOOSE CATEGORY--</option>
    @foreach ($categories as $category)
      <option value="{{$category->id.'||'.$category->name}}">{{$category->name}}</option>
    @endforeach
  </select>
</div>

{{-- <div id="btnnn">Click me</div> --}}
<script>



  var category = $('#category').selectize(
  {
    onChange: function(value)
    {
      // alert(value);
      // var id = $('#address-city').val();
      var id = value.split('||');
      // $('#districtdiv').load('{{url("admin/district")}}/'+id[0]);
      $('#subcategorydiv').show();
      $('#subcategorydiv').load('{{url("subcategory")}}/'+id[0]);
      // $('#districtdiv').html('');
      // $('#villagediv').html('');
    }
  });


</script>
