<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class OrderimageController extends Controller
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
        $data = Image::where('order_id','=', $data_id)->get();
        //dd($data);
        // $data = File::find($data_id);
        //  $title= $data[0]->title;
        //  dd($title);
         foreach($data as $data){
            $datatitle[]=$data->title;
            $dataimage[]=$data->image;
         }
         $img = implode("|",$dataimage);
         $img_title = implode("|",$datatitle);
         $title=explode('|',$img_title);
         $image=explode('|',$img);
         return view('image.orderimage',compact('title','image'));
         
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
