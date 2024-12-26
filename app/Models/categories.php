<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    /** @use HasFactory<\Database\Factories\CategoriesFactory> */
    use HasFactory;

    public function products()
    {
        return $this->hasMany(products::class);
    }
    public function subCategories()
    {
        return $this->hasMany(subcategories::class);
    }
}
