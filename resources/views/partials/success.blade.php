
@if(session()->has('success'))
<div class="alert alert-warning alert-dismissible" role="alert">
  <strong>
  {!! session()->get('success') !!}
  </strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
