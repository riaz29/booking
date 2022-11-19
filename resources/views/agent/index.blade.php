@extends('layouts.app')
@section('content')
<style>
    #page-top{
  margin-top: -25px;
  margin-bottom: -25px;
}
</style>
{{-- <div class="container h6">
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th scope="col">Customer ID</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Whatsapp</th>
            <th scope="col">Address</th>
            <th scope="col">Discharge Port</th>
            <th scope="col">View</th> 
        </tr>
    </thead>
        <tbody>
            @foreach($customer as $customer)
                <tr>
                    <td>{{$customer->id}}</th>
                    <td>{{$customer->name}}</td> 
                    <td>{{$customer->email}}</td>    
                    <td>{{$customer->whatsapp}}</td>  
                    <td>{{$customer->address}}</td> 
                    <td>{{$customer->discharge_port}}</td>      
                    <td><a class="btn btn-success" href="{{route('customer.show', $customer->id)}}">View</a></td>
                </tr>	
            @endforeach
        </tbody>
    </table>
</div> --}}
<div id="page-top" >
    <div id="wrapper">
        @if (session('status'))
             {{ session('status') }}
        @endif
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
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
                <a class="nav-link collapsed" href="/home" 
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-user"></i>
                    <span>My Profile</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="/agent_customer" 
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-users"></i>
                    <span>My Customer</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="/agent_book" 
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cubes"></i>
                    <span>My Booking</span>
                </a>
            </li>
            
            
            <!-- Nav Item - Utilities Collapse Menu -->
            

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            

            <!-- Nav Item - Pages Collapse Menu -->
            <!-- <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
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
                     <h1 class="h3 mb-2 text-etrading">Agent Customer</h1>
                     <p class="mb-4 text-etrading">Below tables shown all of customer</p>
                     <br>
                     <div class="row"> 
                         <div class="col-xl-12 col-lg-10">
                             <div class="card shadow mb-4">
                                 <div class="card-header py-3">
                                     <h6 class="m-0 font-weight-bold text-etrading">Customer's</h6>
                                 </div>
                                 <div class="card-body">
                                     <div class="table-responsive">
                                         <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                <thead>
                                                        <tr>
                                                            <th scope="col">Customer ID</th>
                                                            <th scope="col">Name</th>
                                                            <th scope="col">Email</th>
                                                            <th scope="col">Whatsapp</th>
                                                            <th scope="col">Address</th>
                                                            <th scope="col">Discharge Port</th>
                                                            <th scope="col">View</th> 
                                                        </tr>
                                                </thead>
                                                <tfoot>
                                                    <tr>
                                                        <th scope="col">Customer ID</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Email</th>
                                                        <th scope="col">Whatsapp</th>
                                                        <th scope="col">Address</th>
                                                        <th scope="col">Discharge Port</th>
                                                        <th scope="col">View</th> 
                                                    </tr>
                                                </tfoot>
                                                <tbody>
                                                    @foreach($customer as $customer)
                                                        <tr>
                                                            <td>{{$customer->id}}</th>
                                                            <td>{{$customer->name}}</td> 
                                                            <td>{{$customer->email}}</td>    
                                                            <td>{{$customer->whatsapp}}</td>  
                                                            <td>{{$customer->address}}</td> 
                                                            <td>{{$customer->discharge_port}}</td>      
                                                            <td><a class="btn btn-success" href="{{route('customer.show', $customer->id)}}">View</a></td>
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
@endsection