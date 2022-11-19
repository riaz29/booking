@extends('layouts.app')
@section('content')
<div class="container ">
    <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4">Make Booking</h1>
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
    <form class="user p-5" action="{{route('agent_book.store')}}" method="post">
        @csrf
        <div class="form-group row">
            <div class="col">
                <input class="date form-control" placeholder="Select Date" type="text" id="datepicker" name="booking_date" autocomplete="off" autofill="off" required>
            </div>
            <div class="col">
                <select name="user_id" class="form-select" aria-label="Agent Name" >
                    @foreach ($user as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach  
                </select>
            </div>
        </div>

        <div class="form-group row">
                <div class="col">
                    <select name="customer_id" class="form-select" aria-label="Agent Name">
                        <option selected>Select Customer</option>
                        @foreach ($customers as $customer)
                            <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                        @endforeach  
                    </select>
                </div>
                <div class="col">
                    <input type="text" name="vehicle_make" class="form-control  " placeholder="Vehicle Make" autocomplete="off" autofill="off" required/>
                </div>
        </div> 
        <div class="form-group row">
            <div class="col">
                <input type="text" name="vehicle_model" class="form-control  " placeholder="Vehicle Model" autocomplete="off" autofill="off" required/>
            </div>
            <div class="col">
                <input type="number" name="vehicle_year" class="form-control  " placeholder="Vehicle Year" autocomplete="off" autofill="off" required/>
            </div>
        </div> 
        <div class="form-group row">
            <div class="col">
                <input type="number" name="vehicle_cc" class="form-control  " placeholder="Vehicle CC" autocomplete="off" autofill="off" required/>
            </div>
            <div class="col">
                <input type="text" name="vehicle_transmission" class="form-control  " placeholder="Vehicle Transmission" autocomplete="off" autofill="off" required/>
            </div>
            <div class="col">
                <input type="text" name="vehicle_color" class="form-control   " placeholder="Vehicle Color" autocomplete="off" autofill="off" required/>
            </div>
        </div>
        <div class="form-group row">
            <div class="col">
                <input type="text" name="vehicle_chasis_id" class="form-control  " placeholder="Vehicle Chasis ID" autocomplete="off" autofill="off" required/>
            </div>
            <div class="col">
                <input type="number" name="vehicle_fob" class="form-control  " placeholder="FOB" autocomplete="off" autofill="off" required/>
            </div>
            <div class="col">
                <input type="number" name="vehicle_freight" class="form-control  " placeholder="Freight" autocomplete="off" autofill="off" required/>
            </div>
        </div>
        <div class="form-group row">
            <div class="col">
                <input type="number" name="vehicle_total" class="form-control  " placeholder="Vehicle Total" autocomplete="off" autofill="off" required/>
            </div>
            <div class="col">
                <input type="number" name="vehicle_deposit" class="form-control   " placeholder="Deposit" autocomplete="off" autofill="off" required/>
            </div>
            <div class="col"> 
                <input type="number" name="vehicle_remaining" class="form-control  " placeholder="Remaining" autocomplete="off" autofill="off" required/>
            </div>
            <div class="col">
                <input type="text" name="booking_status" class="form-control  " placeholder="Status" autocomplete="off" autofill="off" required/>
            </div>
        </div>
        <div class="form-group row">
           
                <button class="btn btn-primary btn-user" type="submit">Save</button>
            

        </div>    
        
        
    </form>
</div>
</div>
<script type="text/javascript">
    $('#datepicker').datepicker({
        autoclose: true,
        format: 'yyyy-mm-dd'
     });
</script>

@endsection