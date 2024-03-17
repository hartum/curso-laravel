@if($message = Session::get('success'))
  <div style="background-color: green; color: white; padding: 10px" >
    {{ $message }}
  </div>
@endif

@if($message = Session::get('danger'))
  <div style="background-color: red; color: white; padding: 10px" >
    {{ $message }}
  </div>
@endif