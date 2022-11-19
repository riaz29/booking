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
                     <h1 class="h3 mb-2 text-etrading">Amount Received Section</h1>
                     <p class="mb-4 text-etrading">Below tables shown all of amount received details</p>
                      <br>
                      <div class="row">
                        <div class="col-xl-10">

                        </div>
                        <div class="col-xl-2">
                            <a class="btn btn-success btn-user btn-block" href="{{ route('amount_received.create') }}">Make Entry</a>
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
                                                    <th scope="col">Received ID</th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">JP Amount</th>
                                                    <th scope="col">Comments</th>
                                                    <th scope="col">Verfiy</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Actions</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th scope="col">Received ID</th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">JP Amount</th>
                                                    <th scope="col">Comments</th>
                                                    <th scope="col">Verfiy</th>
                                                    <th scope="col">Status</th>
                                                    <th scope="col">Actions</th>
                                                </tr>
                                            </tfoot>
                                                <tbody>
                                                    @foreach($received as $receive)
                                                    <tr>
                                                        <td>{{$receive->id}}</th>
                                                        <td>{{$receive->receive_date}}</td> 
                                                        <td>{{$receive->jp_account_receive}}</td>    
                                                        <td>{{$receive->comment}}</td>  
                                                        <td>{{$receive->verify}}</td> 
                                                        <td>{{$receive->status}}</td>    
                                                        <td>
                                                            <div class="dropdown">
                                                                <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    Actions
                                                                </button>
                                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                                    {{-- <li><a class="dropdown-item" href="{{route('amount_received.show', $receive->id)}}">View</a></li>  --}}
                                                                    <li><a class="dropdown-item" href="{{route('amount_received.edit', $receive->id)}}">Edit</a></li>
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