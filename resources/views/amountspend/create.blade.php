@extends('layouts.admin')
@section('admincontent')
<style>
    #page-top{
  margin-top: -25px;
  margin-bottom: -25px;
}
</style>
<div class="container">
    <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4">Amount Spend</h1>
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
        <form class="user p-5" action="{{route('amount_spend.store')}}" method="post">
            @csrf
            <div class="form-group row">
                <div class="col">
                    <input class="date form-control" placeholder="Select Date" type="text" id="datepicker" name="spend_date" autocomplete="off" autofill="off" required>
                </div>
                <div class="col">
                    <input type="number" name="amount_spend" class="form-control" placeholder="Amount" autocomplete="off" autofill="off" required/>
                </div>
            </div> 
            <div class="form-group row">
                <div class="col">
                    <input type="text" name="details" class="form-control" placeholder="Details" autocomplete="off" autofill="off" required/>
                </div>
                
            </div>  
            <div class="form-group row">
                <div class="col">
                    <input type="text" name="unit_no" class="form-control " placeholder="Unit #" autocomplete="off" autofill="off" required/>
                </div>
                <div class="col">
                    <input type="number" name="tax_amount" class="form-control" placeholder="Tax Amount" autocomplete="off" autofill="off" required/>
                </div>
            </div> 
            <div class="form-group row">
                <div class="col">
                    <input type="number" name="rc_amount" class="form-control " placeholder="RC Amount" autocomplete="off" autofill="off" required/>
                </div>
                <div class="col">
                    <input type="number" name="bl_amount" class="form-control " placeholder="BL Amount" autocomplete="off" autofill="off" required/>
                </div>
                <div class="col">
                    <input type="number" name="spendline_amount" class="form-control " placeholder="Spend Amount" autocomplete="off" autofill="off"/>
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