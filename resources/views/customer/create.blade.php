@extends('layouts.admin')
@section('admincontent')
<style>
    #page-top{
  margin-top: -25px;
  margin-bottom: -25px;
}
</style>
<div class="container ">
    <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4">Register Customer</h1>
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
        <form class="user p-5" action="{{route('customer.store')}}" method="post">
            @csrf
            <div class="form-group row">
                <div class="col">
                    <input type="text" name="name" class="form-control" placeholder="Customer Name" autocomplete="off" autofill="off" required/>
                </div>
                <div class="col">
                    <input type="email" name="email" class="form-control" placeholder="Customer Email" autocomplete="off" autofill="off" required/>
                </div>
            </div> 
            <div class="form-group row">
                <div class="col">
                    <input type="text" name="whatsapp" class="form-control" placeholder="whatsapp#" autocomplete="off" autofill="off" required/>
                </div>
                <div class="col">
                    <input type="text" name="address" class="form-control" placeholder="Customer Address" autocomplete="off" autofill="off" required/>
                </div>
            </div>  
            <div class="form-group row">
                <div class="col">
                    <input type="text" name="discharge_port" class="form-control" placeholder="Discharge Port" autocomplete="off" autofill="off" required/>
                </div>
                <div class="col">
                        <select name="user_id" class="form-select" aria-label="Agent Name">
                            <option selected>Select Agent</option>
                            @foreach ($user as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach  
                        </select>
                </div>
            </div> 
            <div class="form-group row">
                
                    <button class="btn btn-success btn-user" type="submit">Register</button>
                  
            </div>
        </form>
    </div> 
</div>

@endsection