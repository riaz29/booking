<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amountspend extends Model
{
    use HasFactory;

    protected $fillable = [
        'spend_date',
        'amount_spend',
        'details',
        'unit_no',
        'spendline_amount',
        'tax_amount',   
        'rc_amount',
        'bl_amount' ,
        'spendline_amount',
    ];
    protected $table ='amountspends';

    public  function spendline()
    {
        return $this->hasMany(Spendline::class);
    }
}
