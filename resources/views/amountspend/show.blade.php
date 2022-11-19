@extends('layouts.admin')
@section('admincontent')
    {{-- <div class=" container bg-dark text-white h6" >
        {{-- @foreach ( $data as $amountspend) 
        <h4 class="text-warning">Spend Date</h4>
        <p><strong>  {{ $data->spend_date}}</strong></p>
        <h4 class="text-warning">Spend Amount</h4>
        <p><strong>  {{ $data->amount_spend}}</strong></p>
        <h4 class="text-warning">Details</h4>
        <p><strong>  {{ $data->details}}</strong></p>
        <h4 class="text-warning">Unit No</h4>
        <p><strong>  {{ $data->unit_no}}</strong></p>
        <h4 class="text-warning">Tax Amount</h4>
        <p><strong>  {{ $data->tax_amount }}</strong></p>
        <h4 class="text-warning">RC Amount</h4>
        <p><strong>  {{ $data->rc_amount }}</strong></p>
        <h4 class="text-warning">Bl Amount</h4>
        <p><strong>  {{ $data->bl_amount }}</strong></p> 
        <h4 class="text-warning">Spend line Total Amount</h4>
        <p><strong>  {{ $spendline_total }}</strong></p> 
        <h4 class="text-warning">Total Amount</h4>
        <p><strong>  {{ $data->amount_spend + $spendline_total + $data->tax_amount +  $data->bl_amount + $data->rc_amount }}</strong></p>
        
        
    </div> --}}
    {{-- <div class="container">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Date</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Details</th>
                    <th scope="col">Spend Inventory</th>
                </tr>
            </thead>
                <tbody>
                    @foreach($spendlinedata as $amount_spend)
                        <tr>
                            <td>{{$amount_spend->id}}</th>
                            <td>{{$amount_spend->spendline_date}}</td>   
                            <td>{{$amount_spend->spendline_amount}}</td>  
                            <td>{{$amount_spend->spendline_details}}</td>
                            <td>{{$amount_spend->amountspend->details}}</td> 
                        </tr>	
                    @endforeach
                </tbody>
            </table>
        </div> --}}

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
                <h1 class="h4 text-gray-900 mb-4">Spend Details</h1>
            </div>
            <div class="col-xl-5 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-6">
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <h4 class="text-warning">Spend Date</h4>
                                    <p><strong>  {{ $data->spend_date}}</strong></p>
                                    <h4 class="text-warning">Spend Amount</h4>
                                    <p><strong>  {{ $data->amount_spend}}</strong></p>
                                    <h4 class="text-warning">Details</h4>
                                    <p><strong>  {{ $data->details}}</strong></p>
                                    <h4 class="text-warning">Unit No</h4>
                                    <p><strong>  {{ $data->unit_no}}</strong></p>
                                    <h4 class="text-warning">Tax Amount</h4>
                                    <p><strong>  {{ $data->tax_amount }}</strong></p>
                                    <h4 class="text-warning">RC Amount</h4>
                                    <p><strong>  {{ $data->rc_amount }}</strong></p>
                                    <h4 class="text-warning">Bl Amount</h4>
                                    <p><strong>  {{ $data->bl_amount }}</strong></p> 
                                    <h4 class="text-warning">Spend line Total Amount</h4>
                                    <p><strong>  {{ $spendline_total }}</strong></p> 
                                    <h4 class="text-warning">Total Amount</h4>
                                    <p><strong>  {{ $data->amount_spend + $spendline_total + $data->tax_amount +  $data->bl_amount + $data->rc_amount }}</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-md-6 mb-4">
                <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Spend Line</h1>
                </div>
                <div class="card shadow mb-4">
                    <div class="container h5 card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Details</th>
                                        <th scope="col">Spend Inventory</th>
                                    </tr>
                                </thead>
                                    <tbody>
                                        @foreach($spendlinedata as $amount_spend)
                                            <tr>
                                                <td>{{$amount_spend->id}}</th>
                                                <td>{{$amount_spend->spendline_date}}</td>   
                                                <td>{{$amount_spend->spendline_amount}}</td>  
                                                <td>{{$amount_spend->spendline_details}}</td>
                                                <td>{{$amount_spend->amountspend->details}}</td> 
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
        
@endsection        