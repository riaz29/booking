<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';

    protected $fillable = [
        'book_id',
        'vehicle_chasis_no',
        'order_status',
    ];

    public function image()
    {
        return $this->hasMany(Image::class);
    }
    
    public function file()
    {
        return $this->hasMany(File::class);
    }
    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
