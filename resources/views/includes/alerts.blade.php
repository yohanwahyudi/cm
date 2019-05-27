@if ($errors->any())
  <div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
    </ul>
  </div><br />
@endif

@if(\Session::has('alert'))
    <div class="alert alert-danger">
        <div>{{Session::get('alert')}}</div>
    </div>
@endif

@if(\Session::has('alert-info'))
    <div class="alert alert-info">
        <div>{{Session::get('alert-info')}}</div>
    </div>
@endif

@if(\Session::has('alert-success'))
    <div class="alert alert-success">
        <div>{{Session::get('alert-success')}}</div>
    </div>
@endif

@if(\Session::has('alert-logout'))
    <div class="alert alert-warning">
        <div>{{Session::get('alert-logout')}}</div>
    </div>
@endif
