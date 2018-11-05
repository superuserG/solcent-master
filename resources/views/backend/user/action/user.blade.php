<a data-fancybox data-type="ajax" data-src="{{route('admin.user.show',$userid)}}" href="javascript:;">
  <div class="btn btn-success">
    <span class="fa fa-info"> </span>
  </div>
</a>
<div class="btn btn-danger" onclick="deleteUser('{{$userid}}','{{$username}}')">
  <span class="fa fa-remove"> </span>
</div>
