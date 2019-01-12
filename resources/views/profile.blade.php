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
        <div class="col-md-5">
        <form class="" >
          {{ csrf_field() }}
          <img id="images" style="width:100px; border: 2px solid ;  border-radius: 25px;" src="{{asset('image/users/'.Auth::user()->profilepicture)}}" />
          <div class="form-group">
            <label class="col-lg-3">Change Profile</label>
            <input type="file" name="profilepicture" class="form-control">
          </div>
            <div class="form-group">
                <label class="col-lg-3">Name</label>
                <input class="form-control" name="name" id="name" style="width:350px" value={{$user->name}} disabled required>
            </div>
            <div class="form-group">
                <label class="col-lg-3">nip</label>
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
                <label class="col-lg-3">kcu</label>
                <input class="form-control" name="kcu" id="kanwil" style="width:350px" value={{$user->kcu}} disabled required>
            </div>
            <div class="form-group">
                <label class="col-lg-3">kcu</label>
                <input class="form-control" name="kcu" id="kcu" style="width:350px" value={{$user->kcu}} disabled required>
            </div>
            <div class="form-group">
                <label class="col-lg-3">kcukcp</label>
                <input class="form-control" name="kcukcp" id="kcukcp" style="width:350px" value={{$user->kcukcp}} disabled required>
            </div>
          </div>
        </div>
        <div class="box-footer">
          <button type="submit" class="btn btn-info pull-right">Update User</button>
        </div>
      </form>
    </div>
  </div>

@endsection
