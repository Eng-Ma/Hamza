<?php

namespace App\Models;

use App\Enums\StatusEnum;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
       protected $table = 'articles';
    protected $fillable = ['name', 'image', 'date', 'status','content','headers','description'];


    protected $casts = [
        'status' => StatusEnum::class,
    ];
}
