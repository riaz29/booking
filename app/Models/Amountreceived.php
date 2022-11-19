<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amountreceived extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'receive_date',
        'jp_account_receive',
        'comment',
        'verify',
        'status',
        
    ];
}
