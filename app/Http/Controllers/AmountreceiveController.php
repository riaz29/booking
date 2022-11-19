<?php

namespace App\Http\Controllers;

use App\Models\Amountreceived;
use Illuminate\Http\Request;

class AmountreceiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $received = Amountreceived::all();
        return view('amountrecevied.index',compact('received'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('amountrecevied.create');
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
        Amountreceived::create($data);
        return redirect()->route('amount_received.index');
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
        // return view('amountrecevied.edit',compact('receive'));
        $data_id = $id;
        $receive = Amountreceived::find($data_id);
        return view('amountrecevied.edit',compact('receive'));
        // dd($data);
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
        // dd($id);
        $request->validate([
            'jp_account_receive'=>'required',
            'comment'=>'required',
            'verify'=>'required',
            'status'=>'required',
        ]);
        $data_id = $id;
        $receive = Amountreceived::find($data_id);
        $receive->jp_account_receive = $request->jp_account_receive;
        $receive->comment = $request->comment;
        $receive->verify = $request->verify;
        $receive->status = $request->status;
        $receive-> save();

        return redirect()->route('amount_received.index'); 

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
