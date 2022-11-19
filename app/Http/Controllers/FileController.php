<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Order;
use Illuminate\Http\Request;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $files = File::with('order')->get();
        return view('document.index',compact('files'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $order=Order::all();
        return view('document.create',compact('order'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $files=[];
        if($files=$request->file('document')){
            $count=1;
            foreach ($files as $file){
                $file_name = $request->title.''.$count;
                $ext=strtolower($file->getClientOriginalExtension());
                $file_full_name = $file_name.'.'.$ext; 
                $upload_path = 'public/files/';
                $file_url= $upload_path.$file_full_name;
                $file->move($upload_path,$file_full_name);
                $files[]=$file_url;
                $count++;
            }
        }
        File::insert([
            'title'=>$request->title,
            'document'=>implode('|', $files),
            'order_id'=>$request->order_id,
        ]);
                 
        return redirect()->route('file.index');
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
        $data = File::find($data_id);
        $title= $data->title;
        $chasis = $data->order->vehicle_chasis_no;
        $file=explode('|',$data->document);
        $loop_file=$file;
        $count=count($loop_file);
        $count_half=$count/2;
        $loop_start=$count_half-1;
        $final_file=[];
        for($i=$count_half;$i<$count;$i++){
            $final_file[]=$loop_file[$i];
        }
        //  dd($final_file);

        return view('document.show',compact('final_file','title','chasis'));
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
