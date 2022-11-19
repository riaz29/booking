<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'books';

    protected $fillable = [
        'booking_date',
        'user_id',
        'customer_id',
        'vehicle_make',
        'vehicle_model',
        'vehicle_year',  
        'vehicle_cc',
        'vehicle_transmission',
        'vehicle_color',
        'vehicle_chasis_id',
        'vehicle_fob',
        'vehicle_freight',
        'vehicle_total',
        'vehicle_deposit',  
        'vehicle_remaining',
        'booking_status'
    ];

    public  function customer()
    {
        return $this->belongsTo(Customer::class);
    }
    public  function user()
    {
        return $this->belongsTo(User::class);
    }

    public  function order()
    {
        return $this->hasOne(Order::class);
    }

}
