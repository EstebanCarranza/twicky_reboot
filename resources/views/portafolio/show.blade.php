 @extends('layouts.master')
@section('body')
    <div class='container'>
        <div class='row card-panel z-depth-0'>
                <h1>{{ $cardPublication->title }}</h1>
                <img style="width:100%;" src='{{$cardPublication->pathImagePreview}}'>
                <h3>{{ $cardPublication->description }}</h3>
                <h5 class="center"><a target='_blank' href='{{$cardPublication->path}}'>Ir a {{$cardPublication->path}}</a></h5>
                <br/>
        </div>
    </div>
@stop