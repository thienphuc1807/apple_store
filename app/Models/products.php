<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    /** @use HasFactory<\Database\Factories\ProductsFactory> */
    use HasFactory;
    public function categories()
    {
        return $this->belongsTo(categories::class);
    }
    public function sub_categories()
    {
        return $this->belongsTo(subcategories::class);
    }

    public function orderItems()
    {
        return $this->hasMany(orderitems::class);
    }
}
