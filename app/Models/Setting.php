<?php

namespace App\Models;

use App\Enums\StatusEnum;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'settings';
    protected $fillable = ['logo_header', 'logo_footer', 'Terms_and_Conditions', 'status'];


    protected $casts = [
        'status' => StatusEnum::class,
    ];
}
