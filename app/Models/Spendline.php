<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spendline extends Model
{
    use HasFactory;

    protected $table ='spendlines';

    protected $fillable = [
        'spendline_date',
        'spendline_amount',
        'spendline_details',
        'amountspend_id'
    ];

    public  function amountspend()
    {
        return $this->belongsTo(Amountspend::class);
    }
}
