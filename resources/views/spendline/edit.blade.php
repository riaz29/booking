@extends('layouts.admin')
@section('admincontent')
<div class="container ">
    <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4">Edit Spendline</h1>
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
    <form class="user p-5" action="{{route('spendline.update',$spendline->id)}}" method="post">
        @csrf
        @method('put')
        <div class="form-group row">
            <div class="col">
                <label for="spendline_amount" class="col-form-label text-md-end text-gray-900">{{ __('Spendline Amount') }}</label>
                <input type="number" name="spendline_amount" class="form-control" value="{{$spendline->spendline_amount}}"  id="spendline_amount"/>
            </div>
            <div class="col">
                <label for="spendline_details" class="col-form-label text-md-end text-gray-900">{{ __('Spendline Details') }}</label>
                <input type="text" name="spendline_details" class="form-control" value="{{$spendline->spendline_details}}" id="spendline_details"/>
            </div>
        </div>  
        <div class="form-group row">
           
                <button class="btn btn-primary btn-user" type="submit">Update</button>
        </div>    
        
        
    </form>
</div>
</div>

@endsection