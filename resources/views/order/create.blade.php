@extends('layouts.admin')
@section('admincontent')
<style>
    #page-top{
  margin-top: -25px;
  margin-bottom: -25px;
}
</style>
<div class="container ">
    <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4">Register Customer</h1>
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
    
        <form class="user p-5" action="{{route('order.store')}}" method="post">
            @csrf
            <div class="form-group row">
                <div class="col">
                    <select name="book_id" class="form-select" aria-label="Book">
                            <option value="" selected>Booking ID</option>
                            @foreach ($book as $book)
                                <option value="{{ $book->id }}">{{ $book->id }} - {{ $book->vehicle_model }}</option>
                            @endforeach  
                        </select>
                    </div>
                
            </div>
            <div class="form-group row">
                <div class="col">
                    <input type="text" name="vehicle_chasis_no" class="form-control"  placeholder="Chasis No"/>
                </div>
                <div class="col">
                    <input type="text" name="order_status" class="form-control"  placeholder="Order Status"/>
                </div>
            </div>  
            
            <div class="form-group row">
                <button class="btn btn-success btn-user" type="submit">Save</button>
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