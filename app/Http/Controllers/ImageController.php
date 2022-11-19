<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Order;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $image = Image::with('order')->get();
        return view('image.index',compact('image'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $order=Order::all();
        return view('image.create',compact('order'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$data=$request->all();
        $image=[];
        if($files=$request->file('image')){
            $count=1;
            foreach ($files as $file){
                $image_name = $request->title.' ' .$count;
                $ext=strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name.'.'.$ext;
                $upload_path = 'public/uploads/'; 
                $image_url= $upload_path.$image_full_name;
                $file->move($upload_path,$image_full_name);
                $image[]=$image_url;
                $count++;
            }
        }
        
        Image::insert([
            'title'=>$request->title,
            'image'=>implode('|', $image),
            'order_id'=>$request->order_id,
        ]);
                 
        return redirect()->route('vehicle_image.index');
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
        $data = Image::find($data_id);
        $title= $data->title;
        $chasis = $data->order->vehicle_chasis_no;
        $images=explode('|',$data->image);
        return view('image.show',compact('images','title','chasis'));
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
