<?php

namespace App\Models;

use App\Enums\StatusEnum;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['name', 'image', 'content', 'status'];

   public function products()
    {
        return $this->hasMany(Product::class);
    }
    protected $casts = [
        'status' => StatusEnum::class,
    ];
}
