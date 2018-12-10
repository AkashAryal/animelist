@if (session('alert'))
  <div class="alert alert-success">
    {{ session('alert' )}}
  </div>
@endif

@if (session('alert2'))
  <div class="alert alert-danger">
    {{ session('alert2' )}}
  </div>
@endif
