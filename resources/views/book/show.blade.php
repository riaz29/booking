@extends('layouts.admin')
@section('admincontent')
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
            <h1 class="h4 text-gray-900 mb-4">Booking Details</h1>
        </div>
        <div class="col-xl-12 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-12">
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <div class="row">
                                    <div class="col">
                                        <h4 class="text-warning">Booking Date</h4>
                                        <p><strong>  {{ $data->booking_date}}</strong></p>
                                        <h4 class="text-warning">Agent Name</h4>
                                        <p><strong>  {{ $data->user->name}}</strong></p>
                                        <h4 class="text-warning">Make</h4>
                                        <p><strong>  {{ $data->vehicle_make}}</strong></p>
                                        <h4 class="text-warning">Model</h4>
                                        <p><strong>  {{ $data->vehicle_model}}</strong></p>
                                        <h4 class="text-warning">Year</h4>
                                        <p><strong>  {{ $data->vehicle_year }}</strong></p>
                                        <h4 class="text-warning">CC</h4>
                                        <p><strong>  {{ $data->vehicle_cc }}</strong></p>
                                        <h4 class="text-warning">Transmission</h4>
                                        <p><strong>  {{ $data->vehicle_transmission }}</strong></p> 
                                    </div>
                                    <div class="col">
                                        <h4 class="text-warning">Color</h4>
                                        <p><strong>  {{ $data->vehicle_color }}</strong></p> 
                                        <h4 class="text-warning">Chasis ID</h4>
                                        <p><strong>  {{ $data->vehicle_chasis_id }}</strong></p> 
                                        <h4 class="text-warning">FOB</h4>
                                        <p><strong>  {{ $data->vehicle_fob }}</strong></p> 
                                        <h4 class="text-warning">Freight</h4>
                                        <p><strong>  {{ $data->vehicle_freight }}</strong></p> 
                                        <h4 class="text-warning">Total Amount</h4>
                                        <p><strong>  {{ $data->vehicle_total }}</strong></p> 
                                        <h4 class="text-warning">Deposit Amount</h4>
                                        <p><strong>  {{ $data->vehicle_deposit }}</strong></p> 
                                        <h4 class="text-warning">Remaining Amount</h4>
                                        <p><strong>  {{ $data->vehicle_remaining }}</strong></p> 
                                    </div>
                                    <div class="col">
                                        <h4 class="text-warning">Status</h4>
                                        <p><strong>  {{ $data->booking_status }}</strong></p>
                                    </div>
                                    
                                </div>    
                                     
                                      
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
        
@endsection        