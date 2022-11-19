<?php

namespace App\Http\Controllers;

use App\Models\Amountspend;
use App\Models\Spendline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AmountspendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $amount_spend = Amountspend::all();
        $total_amount=Amountspend::sum('amount_spend');
        $total_amount_spend=Amountspend::sum('amount_spend');
        $total_tax=Amountspend::sum('tax_amount');
        $total_rc=Amountspend::sum('rc_amount');
        $total_bl=Amountspend::sum('bl_amount');
        $spendline_total = Amountspend::sum('spendline_amount');
        $grand_total_amount= $total_amount_spend + $spendline_total + $total_tax + $total_rc +  $total_bl;
        

        return view('amountspend.index',compact('amount_spend','total_amount','total_tax','total_rc','total_bl','spendline_total','grand_total_amount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('amountspend.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        Amountspend::create($data);
        return redirect()->route('amount_spend.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $data_id = $id;
        $data = Amountspend::find($data_id);
        $spendlinedata = Spendline::where('amountspend_id','=', $data_id)->get();
        $spendline_total = Spendline::where('amountspend_id', '=', $data_id)->sum('spendline_amount');
        return view('amountspend.show', compact('data','spendlinedata','spendline_total'));


        //  return view('amountspend.show', compact('spend'));
        //  dd($spend);
        //  $data = Spendline::where('amountspend_id', '=', $id);
        //  dd($data);
        // return view('amountspend.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data_id = $id;
        $amountspend = Amountspend::find($data_id);
        return view('amountspend.edit',compact('amountspend'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id )
    {
        $request->validate([
            'amount_spend'=>'required',
            'details'=>'required',
            'unit_no'=>'required',
            'tax_amount'=>'required',
            'rc_amount'=>'required',
            'bl_amount'=>'required',
        ]);
        $data_id = $id;
        $amountspend = Amountspend::find($data_id);
        $amountspend->amount_spend = $request->amount_spend;
        $amountspend->details = $request->details;
        $amountspend->unit_no = $request->unit_no;
        $amountspend->tax_amount = $request->tax_amount;
        $amountspend->rc_amount = $request->rc_amount;
        $amountspend->bl_amount = $request->bl_amount;
        $amountspend-> save();

        return redirect()->route('amount_spend.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
