<div class="form-group has-feedback{{ $errors->has('domain') ? ' has-error': ''}}">
      <label class="col-lg-3">Domain</label>
      <input class="form-control" placeholder="Enter Domain" name="domain" value="{{$empDomain}}" style="width:350px" disabled>
      @if ($errors->has('domain'))
        <span class="help-block">
          <p>{{$errors->first('domain')}}</p>
        </span>
      @endif
  </div>
{{-- Guest Domain --}}

<div class="form-group">
    <label class="col-lg-3">Guest Name</label>
    <input class="form-control" placeholder="Guest Name Here" name="guestName" style="width:350px" value="{{$empGuestname}}" disabled>
</div>
{{-- Guest Name --}}

<div class="form-group">
    <label class="col-lg-3">Job Title</label>
    <input class="form-control" placeholder="Job Title Here" name="jobTitle" style="width:350px" value="{{$empJobtitle}}" disabled>
</div>
{{-- Job Title --}}

{{-- <div class="form-group">
    <label class="col-lg-3">Job Title</label>
    <input class="form-control" placeholder="Job Title Here" name="jobTitle" style="width:350px" value="{{$empJobtitle}}" disabled>
</div> --}}

{{-- <div class="col-lg-6"> --}}
  <div class="form-group">
      <label class="col-lg-3">Kanwil</label>
      <input class="form-control" placeholder="Kanwil Here" name="kanwil" style="width:350px" value="{{$empKanwil}}" disabled>

      {{-- <div class="col-lg-10">
        <select class="form-control" name="kanwil" disabled>
              <option value="{{$empKanwil}}">{{$empKanwil}}</option>
        </select>
      </div> --}}

  </div>
  {{-- Guest Kanwil --}}

  <div class="form-group">
      <label class="col-lg-3">KCU</label>
      <input class="form-control" placeholder="KCU Here" name="kcu" style="width:350px" value="{{$empKcu}}" disabled>
      {{-- <div class="col-lg-10">
        <select class="form-control" name="ku" disabled>
            <option value="{{$empKcu}}">{{$empKcu}}</option>
        </select>
      </div> --}}

  </div>
  {{-- Guest KU --}}

  <div class="form-group">
      <label class="col-lg-3">KCU/KCP</label>
      <input class="form-control" placeholder="KCU/KCP Here" name="kcu/kcp" style="width:350px" value="{{$empKcuKcp}}" disabled>
      {{-- <div class="col-lg-10">
        <select class="form-control" name="kp" disabled>
          @foreach ($kcps as $key => $value)
            <option value="{{$value->id}}">{{$value->name}}</option>
          @endforeach
        </select>
      </div> --}}

  </div>
  {{-- Guest KU/KP --}}
{{-- </div> --}}
{{-- Menu Location --}}

{{-- <div class="col-lg-6">
  <div class="form-group">
      <label class="col-lg-4">Type</label>
      <div class="col-lg-10">
        <select class="form-control" name="type">
            @foreach ($types as $key => $value)
              <option value="{{$value->id}}">{{$value->name}}</option>
            @endforeach
        </select>
      </div>

  </div> --}}
  {{-- Type --}}
  {{-- <br>
  <div class="form-group">
      <label class="col-lg-4">Status</label>
      <div class="col-lg-10">
        <select class="form-control" name="status" value="{{old('status')}}">
            @foreach ($statuses as $key => $value)
              <option value="{{$value->id}}">{{$value->name}}</option>
            @endforeach
        </select>
      </div>

  </div>
</div> --}}
  {{-- Status --}}
