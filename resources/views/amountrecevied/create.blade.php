@extends('layouts.admin')
@section('admincontent')
<style>
    #page-top{
  margin-top: -25px;
  margin-bottom: -25px;
}
</style>
@if($errors->any())
	<div class="alert alert-danger">
		<ul>
		   @foreach($errors->all() as $error)
			<li>{{$error}}</li>
		   @endforeach
		</ul>
	</div>
@endif

<div class="container ">
    <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4">Amount Received Entry</h1>
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
        <form class="user p-5" action="{{route('amount_received.store')}}" method="post">
            @csrf
            <div class="form-group row">
                <div class="col">
                        <input class="date form-control" placeholder="Select Date" type="text" id="datepicker" name="receive_date" autocomplete="off" autofill="off" required>
                </div>
                <div class="col">
                    <input type="number" name="jp_account_receive" class="form-control " placeholder="Amount" autocomplete="off" autofill="off" required/>
                </div>
            </div> 
            <div class="form-group row">
                <div class="col">
                    <input type="text" name="comment" class="form-control" placeholder="Comments" autocomplete="off" autofill="off" required/>
                </div>
            </div>  
            <div class="form-group row">
                <div class="col">
                    <input type="text" name="verify" class="form-control " placeholder="Verify"  required/>
                </div>
                <div class="col">
                    <input type="text" name="status" class="form-control " placeholder="Status"  required/>
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