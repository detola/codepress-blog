
@if(Session::has('success'))

    toastr.success("{{ Session::get('success')}}")

    <div class="alert alert-success">
        {{-- {{session('success')}}  --}}
        toastr.success("{{ Session::get('success')}}")

    </div> 

@elseif(Session::has('msg'))

    <div class="alert alert-danger">
        {{session('msg')}}
    </div>

    @elseif(Session::has('info'))

    <div class="alert alert-info">
        {{session('info')}}
    </div>
@endif
