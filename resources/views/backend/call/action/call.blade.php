<a data-fancybox data-type="ajax" data-src="{{route('admin.call.show',$id)}}" href="javascript:;">
  <div class="btn btn-success">
    <span class="fa fa-info"> </span>
  </div>
</a>
<div class="btn btn-danger" onclick="deleteUser('{{$id}}'')">
  <span class="fa fa-remove"> </span>
</div>
