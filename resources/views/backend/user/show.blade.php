
  <div class="box box-info edituserform">
    <div class="box-header with-border">
      <h3 class="box-title">Edit user Form</h3>
    </div>
    {{Form::open(['route'=>['admin.user.update',$user->iduser],'method'=>'put','class'=>'form-horizontal','files'=>'true'])}}
    <!-- /.box-header -->
    <!-- form start -->
    {{-- <div class="img-edit-user col-md-12">
      <img class="imgEditUser" src="{{asset('images/users/'.$user->userpict)}}">
    </div> --}}
    <form class="form-horizontal">
      <div class="box-body">
        <div class="form-group">
          <label for="inputName" class="col-sm-2 control-label">Name</label>
          <div class="col-sm-10">
            <input name="name" class="form-control" id="inputName" placeholder="Name" type="text" value="{{$user->name}}" disabled>
          </div>
        </div>
        {{-- <div class="form-group">
          <label for="inputUserDescription" class="col-sm-2 control-label">User description</label>
          <div class="col-sm-10">
            <textarea name="userdescription" value="{{$user->userdescription}}" class="form-control" id="inputUserDescription" placeholder="User description"  disabled>{{$user->userdescription}}</textarea>
          </div>
        </div> --}}
        <div class="form-group">
          <label for="inputEmail" class="col-sm-2 control-label">Email</label>
          <div class="col-sm-10">
            <input name="email" class="form-control" id="inputEmail" placeholder="Email" type="email" value="{{$user->email}}" disabled>
          </div>
        </div>
        <div class="form-group">
          <label for="inputRole" class="col-sm-2 control-label">Role</label>
          <div class="col-sm-10">
            <select name="role" class="selectize" id=inputRole required>
              <option value="{{$user->role}}">
                @if($user->role=="user")
                  Current: USER
                @elseif($user->role=="admin")
                  Current: ADMIN
                @else
                  Current:SUPER ADMIN
                @endif
              </option>
              <option value="1">User</option>
              <option value="2">Admin</option>
              <option value="3">Super Admin</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="nip" class="col-sm-2 control-label">NIP</label>
          <div class="col-sm-10">
            <input name="nip" class="form-control" id="nip" value="{{$user->nip}}" disabled>
          </div>
        </div>
        <div class="form-group">
          <label for="kanwil" class="col-sm-2 control-label">Kanwil</label>
          <div class="col-sm-10">
            <input name="kanwil" class="form-control" id="kanwil" value="{{$user->kanwil}}" disabled>
          </div>
        </div>
        <div class="form-group">
          <label for="kcu" class="col-sm-2 control-label">KCU</label>
          <div class="col-sm-10">
            <input name="kcu" class="form-control" id="kcu" value="{{$user->kcu}}" disabled>
          </div>
        </div>
        <div class="form-group">
          <label for="kcukcp" class="col-sm-2 control-label">KCUKUP</label>
          <div class="col-sm-10">
            <input name="kcukcp" class="form-control" id="kcukcp" value="{{$user->kcukcp}}" disabled>
          </div>
        </div>
      <!-- /.box-body -->
      {{-- <div class="col-md-12 button-delete-user">
        <div class="btn btn-danger remove-user" onclick="deleteUser('{{$user->iduser}}','{{$user->username}}')">
          <span class="fa fa-remove"> Delete User </span>
        </div>
      </div> --}}
      <!-- /.box-footer -->
      <div class="box-footer">
        <button type="submit" class="btn btn-info pull-right">Update User</button>
      </div>
    </form>
    {{Form::close()}}
  </div>
