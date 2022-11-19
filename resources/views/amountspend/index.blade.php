@extends('layouts.admin')
@section('admincontent')
<style>
    #page-top{
  margin-top: -25px;
  margin-bottom: -25px;
}
</style>
{{-- <a class="btn btn-primary" href="{{ route('amount_spend.create') }}">Make Entry</a>
<a class="btn btn-primary" href="{{ route('spendline.index') }}">Make Spendline</a> --}}
{{-- @if(session('success'))
	<div class="alert alert-success">
		{{session('success')}}
	</div>
@endif
<div class="container h6">
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th scope="col">Spend ID</th>
            <th scope="col">Date</th>
            <th scope="col">Amount</th>
            <th scope="col">Details</th>
            <th scope="col">Unit</th>
            <th scope="col">Tax Amount</th>
            <th scope="col">RC Amount</th>
            <th scope="col">BL Amount</th>
            <th scope="col">Spendline Amount</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
        <tbody>
            @foreach($amount_spend as $amount_spend)
                <tr>
                    <td>{{$amount_spend->id}}</th>
                    <td>{{$amount_spend->spend_date}}</td> 
                    <td>{{$amount_spend->amount_spend}}</td>    
                    <td>{{$amount_spend->details}}</td>  
                    <td>{{$amount_spend->unit_no}}</td> 
                    <td>{{$amount_spend->tax_amount}}</td>    
                    <td>{{$amount_spend->rc_amount}}</td> 
                    <td>{{$amount_spend->bl_amount}}</td> 
                    <td>{{$amount_spend->spendline_amount}}</td> 
                    <td><a class="btn btn-danger" href="{{url('amount_spend/'.$amount_spend->id)}}">View</a></td>	
                </tr>	
            @endforeach
        </tbody>
    </table>
</div> --}}

{{-- <div class="container">
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">Total Amount</th>
                <th scope="col">Total Tax Amount</th>
                <th scope="col">Total RC Amount</th>
                <th scope="col">Total BL Amount</th>
                <th scope="col">Total Spend Line</th>
                <th scope="col">Total Amount</th>

            </tr>
        </thead>
            <tbody>
                    <tr>
                        <td>{{$total_amount}}</th>
                        <td>{{$total_tax}}</td> 
                        <td>{{$total_rc}}</td>    
                        <td>{{$total_bl}}</td>  
                        <td>{{$spendline_total}}</td>
                        <td>{{$grand_total_amount}}</td>
                    </tr>	
            </tbody>
        </table>
    </div> --}}
    

    <div id="page-top" >
        <div id="wrapper">
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
            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">
                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                    <div class="sidebar-brand-text mx-3">Dashboard <sup></sup></div>
                </a>
    
                <!-- Divider -->
                <hr class="sidebar-divider my-0">
    
                <!-- Divider -->
                <hr class="sidebar-divider">
    
                <!-- Heading -->
                <div class="sidebar-heading">
                    Interface
                </div>
    
                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="/account" 
                        aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-fw fa-credit-card"></i>
                        <span>Account</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="/amount_received" 
                        aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-fw fa-money-bill-alt"></i>
                        <span>Amount Received</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="/amount_spend" 
                        aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-fw fa-money-bill-alt"></i>
                        <span>Amount Spend</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="/spendline" 
                        aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-fw fa-file"></i>
                        <span>Amount Spendlines</span>
                    </a>
                </li>
                
                
                <!-- Nav Item - Utilities Collapse Menu -->
                
    
                <!-- Divider -->
                <hr class="sidebar-divider">
    
               
    
                <!-- Divider -->
    
                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>
    
                <!-- Sidebar Message -->
              
    
            </ul>
            <!-- End of Sidebar -->
    
            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
                <div id="content">
                    <br>
                    <br>
                    <div class="container-fluid">
                         <h1 class="h3 mb-2 text-etrading">Amount Received Section</h1>
                         <p class="mb-4 text-etrading">Below tables shown all of amount received details</p>
                          <br>
                          <div class="row">
                            <div class="col-xl-8">
    
                            </div>
                            <div class="col-xl-2">
                                <a class="btn btn-warning btn-user btn-block" href="{{ route('amount_spend.create') }}">Make Entry</a>
                           </div>
                           <div class="col-xl-2">
                            <a class="btn btn-success btn-user btn-block" href="{{ route('spendline.index') }}">Make Spendline</a>
                       </div>
                         </div>  
                         <br>
                        <div class="row"> 
                            <div class="col-xl-12 col-lg-10">
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-etrading">Amount Received</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Spend ID</th>
                                                        <th scope="col">Date</th>
                                                        <th scope="col">Amount</th>
                                                        <th scope="col">Details</th>
                                                        <th scope="col">Unit</th>
                                                        <th scope="col">Tax Amount</th>
                                                        <th scope="col">RC Amount</th>
                                                        <th scope="col">BL Amount</th>
                                                        <th scope="col">Spendline Amount</th>
                                                        <th scope="col">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        {{-- <td></td>
                                                        <td></td>
                                                        <th scope="col">{{$total_amount}}</th>
                                                        <td></td>
                                                        <td></td>
                                                        <th scope="col">{{$total_tax}}</th> 
                                                        <th scope="col">{{$total_rc}}</th>    
                                                        <th scope="col">{{$total_bl}}</th>  
                                                        <th scope="col">{{$spendline_total}}</th>
                                                        <th scope="col">{{$grand_total_amount}}</th>  --}}
                                                        <th scope="col">Spend ID</th>
                                                        <th scope="col">Date</th>
                                                        <th scope="col">Amount</th>
                                                        <th scope="col">Details</th>
                                                        <th scope="col">Unit</th>
                                                        <th scope="col">Tax Amount</th>
                                                        <th scope="col">RC Amount</th>
                                                        <th scope="col">BL Amount</th>
                                                        <th scope="col">Spendline Amount</th>
                                                        <th scope="col">Actions</th>
                                                    </tr>
                                                </tfoot>
                                                    <tbody>
                                                        @foreach($amount_spend as $amount_spend)
                                                            <tr>
                                                                <td>{{$amount_spend->id}}</th>
                                                                <td>{{$amount_spend->spend_date}}</td> 
                                                                <td>{{$amount_spend->amount_spend}}</td>    
                                                                <td>{{$amount_spend->details}}</td>  
                                                                <td>{{$amount_spend->unit_no}}</td> 
                                                                <td>{{$amount_spend->tax_amount}}</td>    
                                                                <td>{{$amount_spend->rc_amount}}</td> 
                                                                <td>{{$amount_spend->bl_amount}}</td> 
                                                                <td>{{$amount_spend->spendline_amount}}</td> 
                                                                {{-- <td><a class="btn btn-danger" href="{{url('amount_spend/'.$amount_spend->id)}}">View</a></td>	 --}}
                                                                <td>
                                                                    <div class="dropdown">
                                                                        <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                                            Actions
                                                                        </button>
                                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                                            <li><a class="dropdown-item" href="{{url('amount_spend/'.$amount_spend->id)}}">View</a></li> 
                                                                             <li><a class="dropdown-item" href="{{route('amount_spend.edit', $amount_spend->id)}}">Edit</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </td>
                                                            </tr>	
                                                        @endforeach
                                                    </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-10">
                                <div class="card shadow mb-4">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered" width="100%" cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Total Amount</th>
                                                        <th scope="col">Total Tax Amount</th>
                                                        <th scope="col">Total RC Amount</th>
                                                        <th scope="col">Total BL Amount</th>
                                                        <th scope="col">Total Spend Line</th>
                                                        <th scope="col">Total Amount</th>
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <th scope="col">Total Amount</th>
                                                        <th scope="col">Total Tax Amount</th>
                                                        <th scope="col">Total RC Amount</th>
                                                        <th scope="col">Total BL Amount</th>
                                                        <th scope="col">Total Spend Line</th>
                                                        <th scope="col">Total Amount</th>
                                                    </tr>
                                                </tfoot>
                                                    <tbody>
                                                        <tr>
                                                            <td>{{$total_amount}}</th>
                                                            <td>{{$total_tax}}</td> 
                                                            <td>{{$total_rc}}</td>    
                                                            <td>{{$total_bl}}</td>  
                                                            <td>{{$spendline_total}}</td>
                                                            <td>{{$grand_total_amount}}</td>
                                                        </tr>	
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
            
            <!-- End of Content Wrapper -->
    
        </div>
    </div>    
        
        
@endsection