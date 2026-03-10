<?php

namespace App\Models;

use App\Enums\StatusEnum;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';
    protected $fillable = [
        'questions',
        'image',
        'description',
        'status',
        'order_link',
        'info_link',
        'linkedin',
        'twitter',
        'youTube',
        'instagram'
    ];


    protected $casts = [
        'status' => StatusEnum::class,
    ];
}
