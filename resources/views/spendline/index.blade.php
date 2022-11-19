@extends('layouts.admin')
@section('admincontent')
<style>
    #page-top{
  margin-top: -25px;
  margin-bottom: -25px;
}
</style>
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
    
                <!-- Heading -->
                
    
                <!-- Nav Item - Pages Collapse Menu -->
                <!-- <li class="nav-item">
                   
                </li> -->
    
                <!-- Nav Item - Charts -->
                
    
                <!-- Nav Item - Tables -->
               
    
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
                         <h1 class="h3 mb-2 text-etrading">Amount Spendline Section</h1>
                         <p class="mb-4 text-etrading">Below tables shown all of amount spendline details</p>
                          <br>
                          <div class="row">
                            <div class="col-xl-10">
    
                            </div>
                            <div class="col-xl-2">
                                <a class="btn btn-success btn-user btn-block" href="{{ route('spendline.create') }}">Make Entry</a>
                           </div>
                         </div>  
                         <br>
                        <div class="row"> 
                            <div class="col-xl-12 col-lg-10">
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-etrading">Amount Spendline</h6>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">ID</th>
                                                        <th scope="col">Date</th>
                                                        <th scope="col">Amount</th>
                                                        <th scope="col">Details</th>
                                                        <th scope="col">Spend Inventory</th>
                                                        <th scope="col">Delete</th>
                                                        <th scope="col">Edit</th>
                                                    </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <th scope="col">ID</th>
                                                        <th scope="col">Date</th>
                                                        <th scope="col">Amount</th>
                                                        <th scope="col">Details</th>
                                                        <th scope="col">Spend Inventory</th>
                                                        <th scope="col">Delete</th>
                                                        <th scope="col">Edit</th>
                                                    </tr>
                                                </tfoot>
                                                    <tbody>
                                                        @foreach($spendlines as $spendline)
                                                        <tr>
                                                            <td>{{$spendline->id}}</th>
                                                            <td>{{$spendline->spendline_date}}</td>   
                                                            <td>{{$spendline->spendline_amount}}</td>  
                                                            <td>{{$spendline->spendline_details}}</td>
                                                            <td>{{$spendline->amountspend->details}}</td> 
                                                            <td>
                                                                <form action="{{route('spendline.destroy', $spendline->id)}}" method="post">
                                                                    @csrf
                                                                    @method('delete')
                                                                        <input type="submit" class="btn btn-danger btn-user btn-block" value="Delete"/> 
                                                                </form>
                                                            </td>
                                                            <td><a class="btn btn-success btn-user btn-block" href="{{route('spendline.edit', $spendline->id)}}">Edit</a></td>	
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
            
            <!-- End of Content Wrapper -->
    
        </div>
    </div>    
    {{-- <h1>{{$spend}}</h1> --}}
@endsection    
