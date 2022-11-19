@extends('layouts.app')
@section('content')
<style>
    #page-top{
  margin-top: -25px;
  margin-bottom: -25px;
}
</style>
<div class="container ">
    <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4">Upload Document</h1>
    </div>
    @if(session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
            </ul>
        </div>
    @endif 
    <div class="justify-content-center">
        <form class="user p-5" action="{{route('file.store')}}" enctype="multipart/form-data" method="post">
            @csrf
            <div class="form-group row">
                <div class="col">
                    <input type="text" name="title" class="form-control" placeholder="Title"/>
                </div>
                <div class="col">
                    <input type="file" name="document[]" class="form-control" multiple placeholder="Upload"/>
                    {{-- <div class="custom-file">
                        <input type="file" name="image[]" class="custom-file-input" id="images" multiple="multiple">
                        <label class="custom-file-label" for="images">Choose image</label>
                    </div> --}}
                </div>
                <div class="col">
                    <div class="col">
                        <select name="order_id" class="form-select" aria-label="Order">
                            <option value="" selected>Vehicle Chasis No.</option>
                            @foreach ($order as $order)
                                <option value="{{ $order->id }}">{{ $order->vehicle_chasis_no }}</option>
                            @endforeach  
                        </select>
                    </div>
                </div>
            </div>  
            
            <div class="row g-3">
                <button class="btn btn-success btn-user" type="submit">Save</button>
            </div>     
        </form>
    </div>
</div>
@endsection