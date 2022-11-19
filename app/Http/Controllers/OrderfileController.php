<?php

namespace App\Http\Controllers;
use App\Models\File;
use App\Models\Order;

use Illuminate\Http\Request;

class OrderfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $data_id = $id;
        $data = File::where('order_id','=', $data_id)->get();
        // dd($data);
        // $data = File::find($data_id);
        $title= $data[0]->title;
        $chasis = $data[0]->order->vehicle_chasis_no;
        foreach($data as $data){
            $datadoc[]=$data->document;
        }
        
        $documents = implode("|",$datadoc);
        //  dd($documents);
         $file=explode('|',$documents);
        // $loop_file=$file;
        // $count=count($loop_file);
        // $count_half=$count/2;
        // $loop_start=$count_half-1;
        $final_file=$file;
        // for($i=$count_half;$i<$count;$i++){
        //     $final_file[]=$loop_file[$i];
        // }
        // // // //  dd($final_file);

         return view('document.orderfiles',compact('final_file','title','chasis'));
        //  return view('document.orderfiles',compact('data'));
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
