@extends('layouts.admin')
@section('admincontent')
<div class="container ">
    <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4">Edit Booking</h1>
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
    <form class="user p-5" action="{{route('book.update',$book->id)}}" method="post">
        @csrf
        @method('put')
        <div class="form-group row">
            <div class="col">
                <input type="text" name="vehicle_model" class="form-control" value="{{$book->vehicle_model}}" placeholder="Vehicle Model" autocomplete="off" autofill="off" required/>
            </div>
            <div class="col">
                <input type="number" name="vehicle_year" class="form-control" value="{{$book->vehicle_year}}" placeholder="Vehicle Year" autocomplete="off" autofill="off" required/>
            </div>
        </div> 
        <div class="form-group row">
            <div class="col">
                <input type="number" name="vehicle_cc" class="form-control" value="{{$book->vehicle_cc}}" placeholder="Vehicle CC" autocomplete="off" autofill="off" required/>
            </div>
            <div class="col">
                <input type="text" name="vehicle_transmission" class="form-control" value="{{$book->vehicle_transmission}}" placeholder="Vehicle Transmission" autocomplete="off" autofill="off" required/>
            </div>
            <div class="col">
                <input type="text" name="vehicle_color" class="form-control" value="{{$book->vehicle_color}}" placeholder="Vehicle Color" autocomplete="off" autofill="off" required/>
            </div>
        </div>
        <div class="form-group row">
            <div class="col">
                <input type="text" name="vehicle_chasis_id" class="form-control" value="{{$book->vehicle_chasis_id}}" placeholder="Vehicle Chasis ID" autocomplete="off" autofill="off" required/>
            </div>
            <div class="col">
                <input type="number" name="vehicle_fob" class="form-control " value="{{$book->vehicle_fob}}" placeholder="FOB" autocomplete="off" autofill="off" required/>
            </div>
            <div class="col">
                <input type="number" name="vehicle_freight" class="form-control " value="{{$book->vehicle_freight}}" placeholder="Freight" autocomplete="off" autofill="off" required/>
            </div>
        </div>
        <div class="form-group row">
            <div class="col">
                <input type="number" name="vehicle_deposit" class="form-control  " value="{{$book->vehicle_deposit}}" placeholder="Deposit" autocomplete="off" autofill="off" required/>
            </div>
            <div class="col">
                <input type="text" name="booking_status" class="form-control" value="{{$book->booking_status}}" placeholder="Status" autocomplete="off" autofill="off" required/>
            </div>
        </div>
        <div class="form-group row">
           
                <button class="btn btn-primary btn-user" type="submit">Update</button>
        </div>    
        
        
    </form>
</div>
</div>

@endsection