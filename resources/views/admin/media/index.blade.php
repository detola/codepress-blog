@extends('layouts.admin')

@section('content')

<h3>Gallery</h3>

@if($galleries)

<form action="/delete/media" method="POST" class="form-inline">

    {{ csrf_field() }}

    {{method_field ('DELETE')}}

    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <select name="checkBoxArray" id="">
                    <option value="delete">Delete</option>
                </select>
                <input type="checkbox" id="options" class="form-check-input">
                select all
                <input type="submit" class="btn btn-danger btn-fw" value="Delete">
            </div>
        </div>
    </div>


    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class='row'>

                    @foreach($galleries as $gallery)

                    <div class='col-sm-2'>
                        <a class="thumbnail fancybox" rel="ligthbox">
                            <input class="checkBoxes" type="checkbox" name="checkBoxArray[]" value="{{$gallery->id}}">
                            <img class="img-responsive media img-thumbnail" alt="" src="{{$gallery->path}}" />
                            <div class='text-right'>
                                <small class='text-muted'>{{$gallery->size}}</small>
                            </div> <!-- text-right / end -->
                        </a>
                    </div> <!-- col-6 / end -->

                    @endforeach

                </div> <!-- list-group / end -->
            </div>
        </div>
    </div>
</form>
@endif

@stop

@section('scripts')

<script>
    $(document).ready(function () {

        $('#options').click(function () {

            // console.log('its working');
            if (this.checked) {
                $('.checkBoxes').each(function () {
                    this.checked = true;
                });
            } else {
                $('.checkBoxes').each(function () {
                    this.checked = false;
                });
            }
        });
    }); 
</script>
    
@stop