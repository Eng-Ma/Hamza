<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'total_price',
        'payment_intent_id',

        'payment_status',
        'source'
    ];

    public function items()
    {
        return $this->hasMany(Order_item::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
