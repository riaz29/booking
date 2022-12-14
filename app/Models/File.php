<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'document',
        'order_id',
    ];
    public  function order()
    {
        return $this->belongsTo(Order::class);
    }

}
