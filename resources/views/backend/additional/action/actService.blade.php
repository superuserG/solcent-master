<a data-fancybox data-type="ajax" data-src="{{route('admin.service.show',$serviceid)}}" href="javascript:;">
  <div class="btn btn-success">
    <span class="fa fa-info"> </span>
  </div>
</a>
<div class="btn btn-danger" onclick="deleteService('{{$serviceid}}','{{$servicename}}')">
  <span class="fa fa-remove"> </span>
</div>
