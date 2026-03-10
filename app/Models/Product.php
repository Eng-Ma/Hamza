<?php

namespace App\Models;

use App\Enums\StatusEnum;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['name', 'price', 'image', 'content', 'status', 'category_id','quantity','product_type','package_size','main_components','description'];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    protected $casts = [
        'status' => StatusEnum::class,
    ];

    public function orderItems()
{
    return $this->hasMany(Order_item::class);
}
}
