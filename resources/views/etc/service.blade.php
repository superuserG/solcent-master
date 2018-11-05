<label class="col-sm-2 col-form-label control-label" for="service">Service</label>
<div class="col-md-10">
  <select class="selectize" id="service" name="service" required>
    <option value="">--CHOOSE SERVICE--</option>
    @foreach ($services as $service)
      <option value="{{$service->id.'||'.$service->service}}">{{$service->service}}</option>
    @endforeach
  </select>
</div>

{{-- <div id="btnnn">Click me</div> --}}
<script>



  var category = $('#service').selectize(
  {
    onChange: function(value)
    {
      // alert(value);
      // var id = $('#address-city').val();
      var id = value.split('||');
      // $('#districtdiv').load('{{url("admin/district")}}/'+id[0]);
      $('#categorydiv').load('{{url("category")}}/'+id[0]);
      $('#subcategorydiv').hide();
      // $('#districtdiv').html('');
      // $('#villagediv').html('');
    }
  });


</script>
