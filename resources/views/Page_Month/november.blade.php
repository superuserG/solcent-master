@extends('master.default')

@section('content')
  <div class="row">
    <div class="col-lg-12">
        <h2 class="page-header">November Page
          <span class="dropdown col-lg-offset-8">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Choose Month
                </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
              <li><a class="dropdown-item" href="{!! route('monthlyReport') !!}">All</a></li>
              <li><a class="dropdown-item" href="{!! route('month.January') !!}">January</a></li>
              <li><a class="dropdown-item" href="{!! route('month.February') !!}">February</a></li>
              <li><a class="dropdown-item" href="{!! route('month.March') !!}">March</a></li>
              <li><a class="dropdown-item" href="{!! route('month.April') !!}">April</a></li>
              <li><a class="dropdown-item" href="{!! route('month.May') !!}">May</a></li>
              <li><a class="dropdown-item" href="{!! route('month.June') !!}">June</a></li>
              <li><a class="dropdown-item" href="{!! route('month.July') !!}">July</a></li>
              <li><a class="dropdown-item" href="{!! route('month.August') !!}">August</a></li>
              <li><a class="dropdown-item" href="{!! route('month.September') !!}">September</a></li>
              <li><a class="dropdown-item" href="{!! route('month.October') !!}">October</a></li>
              <li><a class="dropdown-item" href="{!! route('month.November') !!}">November</a></li>
              <li><a class="dropdown-item" href="{!! route('month.December') !!}">December</a></li>
            </div>
          </span>
        </h2>
    </div>

  </div>
@endsection
