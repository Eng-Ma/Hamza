<?php

namespace App\Models;

use App\Enums\StatusEnum;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
        protected $table = 'abouts';
    protected $fillable = ['text', 'image', 'content', 'status'];


    protected $casts = [
        'status' => StatusEnum::class,
    ];
}
