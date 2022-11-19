@extends('layouts.admin')
@section('admincontent')
<div class="container ">
    <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4">Edit Order</h1>
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
    <form class="user p-5" action="{{route('order.update',$order->id)}}" method="post">
        @csrf
        @method('put')
        <div class="form-group row">
            <div class="col">
                <label for="chasis_no" class="col-form-label text-md-end text-gray-900">{{ __('Chasis No') }}</label>
                <input type="text" name="vehicle_chasis_no" class="form-control" value="{{$order->vehicle_chasis_no}}"  placeholder="Chasis No" id="chasis_no"/>
            </div>
            <div class="col">
                <label for="status" class="col-form-label text-md-end text-gray-900">{{ __('Order Status') }}</label>
                <input type="text" name="order_status" class="form-control" value="{{$order->order_status}}" placeholder="Order Status" id="status"/>
            </div>
        </div>  
        <div class="form-group row">
           
                <button class="btn btn-primary btn-user" type="submit">Update</button>
        </div>    
        
        
    </form>
</div>
</div>

@endsection