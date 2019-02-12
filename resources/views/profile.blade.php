@extends('master.default')

@section('content')

  <div class="row">
      <div class="col-lg-12">
          <h2 class="page-header">Profile Page</h2>
      </div>
      <!-- /.col-lg-12 -->
  </div>
  <div class="panel-body">
    <div class="row">
      {{-- <div class="image-profile col-md-1"> --}}
        {{-- <img id="images" style="width:100px; border: 2px solid ;  border-radius: 25px;" src="{{asset('image/users/'.Auth::user()->profilepicture)}}" /> --}}
      {{-- </div> --}}
      <div class="col-md-12">
        {{Form::open(['route' => 'updateprofile', 'method'=>'put', 'files' => true])}}
          {{ csrf_field() }}
          <div class="image-profile col-md-2">
            <img id="images" style="width:100px; border: 2px solid ;  border-radius: 25px;" src="{{asset('image/users/'.Auth::user()->profilepicture)}}" />
            <div class="form-group">
              <label class="col-lg-3">Change Profile</label>
              <input type="file" name="profilepicture" class="form-control" onchange="readURL(this);">
            </div>
            <img id="blah" src="#" alt="your image"
            {{-- style="width:100px; border: 2px solid ;  border-radius: 25px; " --}}
            />
          </div>
          <div class="image-profile col-md-5">
            <div class="form-group">
                <label class="col-lg-3">Name</label>
                <input class="form-control" name="name" id="name" style="width:350px" value={{$user->name}} disabled required>
            </div>
            <div class="form-group">
                <label class="col-lg-3">NIP</label>
                <input class="form-control" name="nip" id="nip" style="width:350px" value={{$user->nip}} disabled required>
            </div>
            <div class="form-group">
                <label class="col-lg-3">Email</label>
                <input class="form-control" name="email" id="email" style="width:350px" value={{$user->email}} disabled required>
            </div>
            <div class="form-group">
                <label class="col-lg-3">Role</label>
                <input class="form-control" name="role" id="role" style="width:350px" value={{$user->role}} disabled required>
            </div>
          </div>
          <div class="col-md-5">
            <div class="form-group">
                <label class="col-lg-3">kanwil</label>
                <input class="form-control" name="kanwil" id="kanwil" style="width:350px" value={{$user->kanwil}} disabled required>
            </div>
            <div class="form-group">
                <label class="col-lg-3">KCU</label>
                <input class="form-control" name="kcu" id="kanwil" style="width:350px" value={{$user->kcu}} disabled required>
            </div>
            <div class="form-group">
                <label class="col-lg-3">KCU/KCP</label>
                <input class="form-control" name="kcukcp" id="kcukcp" style="width:350px" value={{$user->kcukcp}} disabled required>
            </div>
          </div>
        </div>
        <div class="box-footer">
          <button type="submit" class="btn btn-info pull-right">Update User</button>
        </div>
        {{Form::close()}}
    </div>
  </div>
<script>
function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(150)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endsection
