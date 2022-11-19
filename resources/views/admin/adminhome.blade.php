@extends('layouts.admin')
@section('admincontent')
<style>
    #page-top{
  margin-top: -25px;
  margin-bottom: -25px;
}
</style>
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __(' Admin Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in! as Admin') }}
                    {{-- <a href="{{ url('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a> 
                    <a href="{{ url('customer') }}" class="ml-4 text-l  underline">Customer Section</a>
                    <a href="{{ url('order') }}" class="ml-4 text-l  underline">Order Section</a>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<body scroll="no" style="overflow: hidden">
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
    
                <!-- Main Content -->
                <div id="content">
    
                    <!-- Topbar -->
        
                        <!-- End of Topbar -->
                    <br>
                    <br>
                    <!-- Begin Page Content -->
                    <div class="container-fluid">
    
                        <!-- Page Heading -->
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0  text-etrading">Dashboard</h1>
                        </div>
                        
                        <div class="row">
                            <!-- Area Chart -->
                            <div class="col-xl-8 col-lg-7">
                                <div class="card shadow mb-4">
                                    <!-- Card Header - Dropdown -->
                                    <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h4 class="m-0 font-weight-bold text-etrading  ">Manager Details</h4>
                                        
                                    </div>
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <h6 class="m-0  text-etrading  ">Manager Name : <span>{{ Auth::user()->name }}</span> </h6>
                                        <br>
                                        <h6 class="m-0  text-etrading  ">Manager Email ID : <span>{{ Auth::user()->email }}</span> </h6>
                                    </div>
                                </div>
                            </div>
    
                            <!-- Pie Chart -->
                            
                        </div>
                       
                        
                        <!-- Content Row -->
                       
    
    
    
                    </div>
                    <!-- /.container-fluid -->
    
                </div>
                <!-- End of Main Content -->
    
                <!-- Footer -->
                
                <!-- End of Footer -->
    
            </div>
            <!-- End of Content Wrapper -->
    
        </div>
    </div>
    </body>

@endsection
