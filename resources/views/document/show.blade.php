@extends('layouts.app')
@section('content')
    {{-- <div class="container">
    <div class="row">
        <h3>Title : {{ $title}}</h3>
        <h3>Chasis : {{ $chasis }}</h3>
        <div class="col mt-3">
            @foreach ($images as $item )
            <img src="{{ URL::to($item)}}"  class="img-fluid" style=" width:500px; height:350px;" >
           @endforeach
        </div>
    </div>
    </div>    --}}

       {{-- <h1>Document Shown</h1>
       <div class="container">
            @foreach ($final_file as $item )
                <a href="{{ URL::to($item)}}">{{ substr($item, 13,  50) }}</a>
                
            @endforeach
       </div> --}}

<div class="container">
        @if($errors->any())
        <div class="alert alert-danger">
            <ul>
               @foreach($errors->all() as $error)
                <li>{{$error}}</li>
               @endforeach
            </ul>
        </div>
        @endif
       <div class="row"> 
            <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Document!</h1>
            </div>
            <div class="col-xl-12 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                    <h3 class="text-center">Document Records</h3>
                    <br>
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-6">
                                <div class="h5 mb-0 text-gray-800">
                                    {{-- @foreach ($final_file as $item )
                                        <h3><a  class="text-danger" href="{{ URL::to($item)}}">{{ substr($item, 13,  50) }}</a></h3>
                                    @endforeach --}}
                                    <ul class="list-group">
                                        @foreach ($final_file as $item )
                                         <li class="list-group-item"><a  class="text-danger" href="{{ URL::to($item)}}">{{ substr($item, 13,  50) }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
       </div>
    </div>

@endsection        