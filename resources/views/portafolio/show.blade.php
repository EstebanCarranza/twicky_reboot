 @extends('layouts.master')
@section('body')
    <div class='container'>
        <div class='row card-panel z-depth-0'>
            @foreach ($errorList as $error)
                <h3 class="red-text"> {{$error}}</h3>
            @endforeach
            @if($errorList == null)
                <h1>{{ $cardPublication->title }} &nbsp; <span class="flow-text right">{{ $cardPublication->release_date }} </span></h1>
                <img style="width:100%;" src='{{$cardPublication->pathImagePreview}}'>
                <h5><strong>Descripcion corta</strong><br/> {!! $cardPublication->description !!}</h5>
                <h4>{!! $cardPublication->body !!}</h4>
                <h5 class="center"><a target='_blank' href='{{$cardPublication->path}}'>Ir a {{$cardPublication->path}}</a></h5>
                <br/>
             @else 
             <h5 class="center"><a href='/portafolio'>Ir a portafolio</a></h5>
            @endif
        </div>
    </div>
@stop