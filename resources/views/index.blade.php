@extends('layouts.master')
@section('body')
    <?php if(isset($_GET['action'])) $action = $_GET['action']; else $action = "main"; ?>
    @include('inc.carousel')    
    <div class="container white ec-container">
        @if($action=="main")
            @include('data.main')    
        @else 
            @if($action == "politica")
                    @include('data.politica')
            @endif 
        @endif
    </div>
@stop