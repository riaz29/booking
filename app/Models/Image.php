<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $table = 'images';

    protected $fillable = [
        'title',
        'image',
        'order_id',
    ];

    public  function order()
    {
        return $this->belongsTo(Order::class);
    }
}
