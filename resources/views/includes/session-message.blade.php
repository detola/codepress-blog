@if(Session::has('success-msg'))

    <div class="alert alert-success">
        {{session('success-msg')}}
    </div>
@elseif(Session::has('msg'))

    <div class="alert alert-danger">
        {{session('msg')}}
    </div>
@endif