<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book=Book::with('customer','user')->get();
        return view('book.index',compact('book'));
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
        $data = Book::find($data_id);
        return view('book.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('book.edit',compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'vehicle_model'=>'required',
            'vehicle_year'=>'required',
            'vehicle_cc'=>'required',
            'vehicle_transmission'=>'required',
            'vehicle_color'=>'required',
            'vehicle_chasis_id'=>'required',
            'vehicle_fob'=>'required',
            'vehicle_freight'=>'required',
            'vehicle_deposit'=>'required',
            'booking_status'=>'required',
        ]);
        $book->vehicle_model = $request->vehicle_model;
        $book->vehicle_year = $request->vehicle_year;
        $book->vehicle_cc = $request->vehicle_cc;
        $book->vehicle_transmission = $request->vehicle_transmission;
        $book->vehicle_color = $request->vehicle_color;
        $book->vehicle_chasis_id = $request->vehicle_chasis_id;
        $book->vehicle_fob = $request->vehicle_fob;
        $book->vehicle_freight = $request->vehicle_freight;
        $book->vehicle_total = $request->vehicle_freight +  $request->vehicle_fob;
        $book->vehicle_deposit = $request->vehicle_deposit;
        $book->vehicle_remaining = ($request->vehicle_freight +  $request->vehicle_fob) - $request->vehicle_deposit; 
        $book->booking_status = $request->booking_status;
        $book-> save();

        return redirect()->route('book.index');
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
