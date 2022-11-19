@extends('layouts.admin')
@section('admincontent')
<div class="container ">
    <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4">Edit Amount Spend</h1>
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
    <form class="user p-5" action="{{route('amount_spend.update',$amountspend->id)}}" method="post">
        @csrf
        @method('put')
        <div class="form-group row">
            <div class="col">
                <label for="amount_spend" class="col-form-label text-md-end text-gray-900">{{ __('Spend Amount') }}</label>
                <input type="number" name="amount_spend" class="form-control" value="{{$amountspend->amount_spend}}"   id="amount_spend"/>
            </div>
            <div class="col">
                <label for="details" class="col-form-label text-md-end text-gray-900">{{ __('Details') }}</label>
                <input type="text" name="details" class="form-control" value="{{$amountspend->details}}"  id="details"/>
            </div>
        </div>  
        <div class="form-group row">
            <div class="col">
                <label for="unit_no" class="col-form-label text-md-end text-gray-900">{{ __('Unit No') }}</label>
                <input type="number" name="unit_no" class="form-control" value="{{$amountspend->unit_no}}"   id="unit_no"/>
            </div>
            <div class="col">
                <label for="tax_amount" class="col-form-label text-md-end text-gray-900">{{ __('Tax Amount') }}</label>
                <input type="number" name="tax_amount" class="form-control" value="{{$amountspend->tax_amount}}"  id="tax_amount"/>
            </div>
        </div>
        <div class="form-group row">
            <div class="col">
                <label for="rc_amount" class="col-form-label text-md-end text-gray-900">{{ __('RC Amount') }}</label>
                <input type="number" name="rc_amount" class="form-control" value="{{$amountspend->rc_amount}}"  id="rc_amount"/>
            </div>
            <div class="col">
                <label for="bl_amount" class="col-form-label text-md-end text-gray-900">{{ __('BL Amount') }}</label>
                <input type="number" name="bl_amount" class="form-control" value="{{$amountspend->bl_amount}}" id="bl_amount"/>
            </div>
        </div>
        <div class="form-group row">
           
                <button class="btn btn-primary btn-user" type="submit">Update</button>
        </div>    
        
        
    </form>
</div>
</div>

@endsection