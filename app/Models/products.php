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
        return $this->belongsTo(categories::class, 'categories_id');
    }
    public function subCategories()
    {
        return $this->belongsTo(subcategories::class, 'subcategories_id');
    }

    public function orderItems()
    {
        return $this->hasMany(orderitems::class);
    }
}
