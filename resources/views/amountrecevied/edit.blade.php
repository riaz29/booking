@extends('layouts.admin')
@section('admincontent')
<div class="container ">
    <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4">Edit Amount Received</h1>
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
    <form class="user p-5" action="{{route('amount_received.update',$receive->id)}}" method="post">
        @csrf
        @method('put')
        <div class="form-group row">
            <div class="col">
                <label for="jp_account_receive" class="col-form-label text-md-end text-gray-900">{{ __('JP Amount Received') }}</label>
                <input type="number" name="jp_account_receive" class="form-control" value="{{$receive->jp_account_receive}}"  placeholder="Chasis No" id="jp_account_receive"/>
            </div>
            <div class="col">
                <label for="comment" class="col-form-label text-md-end text-gray-900">{{ __('Comment') }}</label>
                <input type="text" name="comment" class="form-control" value="{{$receive->comment}}" placeholder="Order Status" id="comment"/>
            </div>
        </div>  
        <div class="form-group row">
            <div class="col">
                <label for="verify" class="col-form-label text-md-end text-gray-900">{{ __('Verify') }}</label>
                <input type="text" name="verify" class="form-control" value="{{$receive->verify}}"  placeholder="Chasis No" id="verify"/>
            </div>
            <div class="col">
                <label for="status" class="col-form-label text-md-end text-gray-900">{{ __('Status') }}</label>
                <input type="text" name="status" class="form-control" value="{{$receive->status}}" placeholder="Order Status" id="status"/>
            </div>
        </div>
        <div class="form-group row">
           
                <button class="btn btn-primary btn-user" type="submit">Update</button>
        </div>    
        
        
    </form>
</div>
</div>

@endsection