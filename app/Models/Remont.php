<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Remont extends Model

{
    protected $fillable = [
        'description',
        'price',
        'car_id',
        'category_id'
    ];

    public function car()
    {
        return $this->BelongsTo(Car::class);
    }


    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
