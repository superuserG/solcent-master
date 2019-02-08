<a data-fancybox data-type="ajax" data-src="{{route('admin.category.show',$categoryid)}}" href="javascript:;">
  <div class="btn btn-success">
    <span class="fa fa-info"> </span>
  </div>
</a>
<div class="btn btn-danger" onclick="deleteCategory('{{$categoryid}}','{{$categoryname}}')">
  <span class="fa fa-remove"> </span>
</div>
