@if(Session::has('success'))
<div class="row purchace-popup">
    <div class="col-12">
      <span class="d-block d-md-flex align-items-center">
        {{session('success')}}
        <i class="mdi mdi-close popup-dismiss d-none d-md-block pull-right"></i>
      </span>
    </div>
  </div>

@elseif(Session::has('failed'))
    <div class="alert alert-danger">
        {{session('msg')}}
    </div>

@elseif(Session::has('info'))
    <div class="alert alert-info">
        {{session('info')}}
    </div>

@endif

 {{-- Flash Message --}}
 
  {{-- End Flash Message --}}
