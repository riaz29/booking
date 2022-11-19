@extends('layouts.admin')
@section('admincontent')
<div class="container">
    <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4">Generate Spendline</h1>
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
        <form class="user p-10" action="{{route('spendline.store')}}" method="post">
            @csrf
            <table class="table table-border">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Amount</th>
                        <th>Details</th>
                        <th>Spend Inventory</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input class="date form-control " placeholder="Select Date" type="text" id="datepicker" name="spendline_date[]" autocomplete="off" autofill="off"></td>
                        <td><input type="number" name="spendline_amount[]" class="form-control" placeholder="Amount" autocomplete="off"/></td>
                        <td><input type="text" name="spendline_details[]" class="form-control " placeholder="Details" autocomplete="off"/></td>
                        <td>
                            <select name="amountspend_id[]" class="form-select" aria-label="Spend Inventory">
                                <option selected>Select Inventory</option>
                                @foreach ($inventory as $inventory)
                                    <option value="{{ $inventory->id }}">{{ $inventory->details }}</option>
                                @endforeach  
                            </select>
                        </td>
                        <td><button type="button" class=" btn btn-primary form-control" id="add_more">Add More</button></td>   
                    </tr>
                </tbody>
            </table>
                
            <div class="row g-3">
                <button class="btn btn-success" type="submit">Save</button>
            </div>
        </form>
        </div>
</div>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#add_more').on('click',function(){
                var html='';
                html+='<tr>';
                html+='<td><input type="number" name="spendline_amount[]" class="form-control " placeholder="Amount"/></td>';
                html+='<td><input type="text" name="spendline_details[]" class="form-control " placeholder="Details"/></td>';
                html+='<td><button type="button" class=" btn btn-danger form-control col-md-4" id="remove">Remove</button></td>';
                $('tbody').append(html);
            })
                
        });
        $(document).on('click','#remove',function(){
           $(this).closest('tr').remove(); 
        });
    
    </script>
    <script>
        $('#datepicker').datepicker({
        autoclose: true,
        format: 'yyyy-mm-dd'
        });
    </script>
@endsection