@extends('layouts.admin')
@section('admincontent')
<style>
    #page-top{
  margin-top: -25px;
  margin-bottom: -25px;
}
</style>
@if(session('success'))
	<div class="alert alert-success">
		{{session('success')}}
	</div>
@endif
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
            <th scope="col">Agent Name</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
        <tbody>
            @foreach($customers as $customer)
                <tr>
                    <td>{{$customer->id}}</th>
                    <td>{{$customer->name}}</td> 
                    <td>{{$customer->email}}</td>    
                    <td>{{$customer->whatsapp}}</td>  
                    <td>{{$customer->address}}</td> 
                    <td>{{$customer->discharge_port}}</td>  
                    <td>{{$customer->user->name}}</td>    
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Actions
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="{{route('customer.show', $customer->id)}}">View</a></li>
                                {{-- <li><a class="dropdown-item" href="{{route('product.edit', $product->id)}}">Edit</a></li> 
                            </ul>
                        </div>
                    </td>	
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
                <a class="nav-link collapsed" href="/admin/home" 
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-user"></i>
                    <span>My Profile</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="/customer" 
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-users"></i>
                    <span>All Customer</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="/book" 
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cubes"></i>
                    <span>All Booking</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="/order" 
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-car"></i>
                    <span>All Order</span>
                </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link collapsed" href="/file" 
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-file"></i>
                    <span>All Document</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="/vehicle_image" 
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-image"></i>
                    <span>All Images</span>
                </a>
            </li>
            
            <!-- Nav Item - Utilities Collapse Menu -->
            

            <!-- Divider -->
            <hr class="sidebar-divider">

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
                     <h1 class="h3 mb-2 text-etrading">All Customer</h1>
                     <p class="mb-4 text-etrading">Below tables shown all of customer</p>
                     <div class="row">
                        <div class="col-xl-10">

                        </div>
                        <div class="col-xl-2">
                            <a class="btn btn-success btn-user btn-block" href="{{ route('customer.create') }}">Register Customer</a>
                       </div>
                     </div>
                     <br>
                     <div class="row">
                         
                         <div class="col-xl-12 col-lg-10">
                             <div class="card shadow mb-4">
                                 <div class="card-header py-3">
                                     <h6 class="m-0 font-weight-bold text-etrading">All Customer's</h6>
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
                                                    <th scope="col">Agent Name</th>
                                                    <th scope="col">Actions</th>
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
                                                        <th scope="col">Agent Name</th>
                                                        <th scope="col">Actions</th>
                                                    </tr>
                                                </tfoot>
                                                <tbody>
                                                    @foreach($customers as $customer)
                                                        <tr>
                                                            <td>{{$customer->id}}</th>
                                                            <td>{{$customer->name}}</td> 
                                                            <td>{{$customer->email}}</td>    
                                                            <td>{{$customer->whatsapp}}</td>  
                                                            <td>{{$customer->address}}</td> 
                                                            <td>{{$customer->discharge_port}}</td>  
                                                            <td>{{$customer->user->name}}</td>    
                                                            <td>
                                                                <div class="dropdown">
                                                                    <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                                        Actions
                                                                    </button>
                                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                                        <li><a class="dropdown-item" href="{{route('customer.show', $customer->id)}}">View</a></li>
                                                                        <li><a class="dropdown-item" href="{{route('customer.edit', $customer->id)}}">Edit</a></li> 
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
 
                     </div>
                </div>
             </div>
         </div>
        <!-- End of Content Wrapper -->

    </div>
</div>
@endsection