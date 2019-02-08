<a data-fancybox data-type="ajax" data-src="{{route('admin.subcategory.show',$subcategoryid)}}" href="javascript:;">
  <div class="btn btn-success">
    <span class="fa fa-info"> </span>
  </div>
</a>
<div class="btn btn-danger" onclick="deleteSubCategory('{{$subcategoryid}}','{{$subcategoryname}}')">
  <span class="fa fa-remove"> </span>
</div>
