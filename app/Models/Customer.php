<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';

    protected $fillable = [
        'name',
        'email',
        'whatsapp',
        'address',
        'discharge_port',
        'user_id',
        
    ];

    public  function user()
    {
        return $this->belongsTo(User::class);
    }
    public  function book()
    {
        return $this->hasMany(Book::class);
    }

}
