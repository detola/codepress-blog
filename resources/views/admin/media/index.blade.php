@extends('layouts.admin')


@section('content')

    @if($galleries)

                    <div class='list-group gallery'>

                        @foreach($galleries as $gallery)

                        <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                            <a class="thumbnail fancybox" rel="ligthbox" >
                                <img class="img-responsive media" alt="" src="{{$gallery->path}}" />
                                <div class='text-right'>
                                    <small class='text-muted'>{{$gallery->size}}</small>
                                    {!! Form::open(['method'=>'DELETE', 'action'=> ['GalleriesController@destroy', $gallery->id]]) !!}

                                    <div class="form-group">
                                        {!! Form::submit('Delete Image', ['class'=>'btn btn-danger']) !!}
                                    </div>

                                    {!! Form::close() !!}
                                </div> <!-- text-right / end -->
                            </a>
                        </div> <!-- col-6 / end -->

                        @endforeach

                    </div> <!-- list-group / end -->
    @endif

@endsection