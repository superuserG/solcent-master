<label for="inputCategory" class="col-sm-2 control-label">Category</label>
<div class="col-sm-10">
  <select class="" id="inputCategory" name="category" required>
    <option value="">--CHOOSE CATEGORY--</option>
    @foreach ($categories as $category)
      <option value="{{$category->id}}">{{$category->name}}</option>
    @endforeach
  </select>
</div>

{{-- <div id="btnnn">Click me</div> --}}
<script>



  var category = $('#inputCategory').selectize(
  {
    onChange: function(value)
    {
      // alert(value);
      // var id = $('#address-city').val();
      // var id = value.split('||');
      // // $('#districtdiv').load('{{url("admin/district")}}/'+id[0]);
      // $('#subcategorydiv').show();
      // $('#subcategorydiv').load('{{url("subcategory")}}/'+id[0]);
      // $('#districtdiv').html('');
      // $('#villagediv').html('');
    }
  });


</script>
