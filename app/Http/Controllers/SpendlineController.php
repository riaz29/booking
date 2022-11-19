<?php

namespace App\Http\Controllers;

use App\Models\Amountspend;
use App\Models\Spendline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SpendlineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $spendlines=Spendline::with('amountspend')->get();
        return view('spendline.index',compact('spendlines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $inventory=Amountspend::all();
        return view('spendline.create',compact('inventory'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'spendline_date'=>'required',
                'spendline_amount'=>'required',
                'spendline_details'=>'required',
                'amountspend_id'=>'required'
            ]
        );

        $count=count($request->spendline_amount);

        for($i=0;$i<$count;$i++){
            $spendline = new Spendline();
            $spendline->spendline_date=$request->spendline_date[0];
            $spendline->spendline_amount=$request->spendline_amount[$i];
            $spendline->spendline_details=$request->spendline_details[$i];
            $spendline->amountspend_id=$request->amountspend_id[0];
            $spendline->save();
        }

        $totaldata = Spendline::where('amountspend_id', '=', $request->amountspend_id)->sum('spendline_amount');
        $value=$totaldata;
        DB::table('amountspends')
              ->where('id', $request->amountspend_id)
              ->update(['spendline_amount' => $value]);
        return redirect()->route('spendline.index');
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
    public function edit(Spendline $spendline)
    {
        $inventory=Amountspend::all();
        return view('spendline.edit',compact('spendline','inventory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Spendline $spendline)
    {
        $request->validate([
            'spendline_amount'=>'required',
            'spendline_details'=>'required',
        ]);
        $spendline->spendline_amount = $request->spendline_amount;
        $spendline->spendline_details = $request->spendline_details;
        $spendline-> save();
            // dd($spendline->amountspend_id);
        $totaldata = Spendline::where('amountspend_id', '=', $spendline->amountspend_id)->sum('spendline_amount');
        $value=$totaldata;
        DB::table('amountspends')
              ->where('id', $spendline->amountspend_id)
              ->update(['spendline_amount' => $value]);

        return redirect()->route('spendline.index');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data_id=$id;
        $spendline=Spendline::find($data_id);
        // dd($spendline);
        $amountspend_id=$spendline->amountspend_id;
        $totaldata = Amountspend::find($amountspend_id);
        $value=$totaldata->spendline_amount - $spendline->spendline_amount;
        DB::table('amountspends')
              ->where('id', $spendline->amountspend_id)
              ->update(['spendline_amount' => $value]);
        $spendline->delete();
        return redirect()->route('spendline.index');
    }
}
