<?php

namespace App\Models;

use App\Enums\StatusEnum;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    protected $table = 'faqs';
    protected $fillable = ['question', 'answer_question',  'status'];

    protected $casts = [
        'status' => StatusEnum::class,
    ];
}
