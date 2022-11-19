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
            <h1 class="h4 text-gray-900 mb-4">Customer Order/Booking Details</h1>
        </div>
        <div class="col-xl-12 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                <h3 class="text-center">Booking Records</h3>
                <br>
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-6">
                            <div class="h5 mb-0 text-gray-800">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">Bookig ID</th>
                                                <th scope="col">Booking Date </th>
                                                <th scope="col">Make</th>
                                                <th scope="col">Model</th>
                                                <th scope="col">FOB</th>
                                                <th scope="col">Freight</th>
                                                <th scope="col">Total</th>
                                                <th scope="col">Deposit</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                            <tbody>
                                                @foreach($booking_data as $booking_data)
                                                    <tr>
                                                        <td>{{$booking_data->id}}</th>
                                                        <td>{{$booking_data->booking_date}}</td>
                                                        <td>{{$booking_data->vehicle_make}}</td>   
                                                        <td>{{$booking_data->vehicle_model}}</td> 
                                                        <td>{{$booking_data->vehicle_fob}}</th>
                                                        <td>{{$booking_data->vehicle_freight}}</td>
                                                        <td>{{$booking_data->vehicle_total}}</td>   
                                                        <td>{{$booking_data->vehicle_deposit}}</td> 
                                                        <td>{{$booking_data->booking_status}}</td> 
                                                    </tr>	
                                                @endforeach
                                            </tbody>
                                    </table>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
   </div>
</div>
        
@endsection        