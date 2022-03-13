@if(Session::has('error'))
<div>
  <ul class="alert alert-danger">
    <li>{{session('error')}}</li>
  </ul>
</div>
@elseif(Session::has('success'))
<div>
  <ul class="alert alert-success">
    <li>{{session('success')}}</li>
  </ul>
</div>
@else
@endif

