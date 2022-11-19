<?php

namespace App\Http\Controllers;

use App\Models\Amountreceived;
use App\Models\Amountspend;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $received = Amountreceived::all();
        $spend= Amountspend::all();
        $total_received = Amountreceived::sum('jp_account_receive');
        $total_spend_amount = Amountspend::sum('amount_spend');
        $total_tax_amount = Amountspend::sum('tax_amount');
        $total_rc_amount = Amountspend::sum('rc_amount');
        $total_bl_amount = Amountspend::sum('bl_amount');
        $total_spendline_amount = Amountspend::sum('spendline_amount');
        $total_spend = $total_spend_amount + $total_tax_amount + $total_rc_amount + $total_bl_amount + $total_spendline_amount;
        return view('account.index',compact('received','spend','total_received','total_spend'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
