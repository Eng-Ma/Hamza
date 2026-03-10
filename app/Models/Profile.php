<?php

namespace App\Models;

use App\Enums\StatusEnum;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
   protected $table = "profiles";
    protected $fillable = ['name','email','phone','active'];
    protected $casts = [
        'status' => StatusEnum::class,
    ];
}
