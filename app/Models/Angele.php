<?php

namespace App\Models;

use App\Enums\StatusEnum;
use Illuminate\Database\Eloquent\Model;

class Angele extends Model
{
       protected $table = 'angeles';
    protected $fillable = ['text', 'desc', 'status'];


    protected $casts = [
        'status' => StatusEnum::class,
    ];
}
