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
    public function subcategories()
    {
        return $this->hasMany(subcategories::class);
    }
}
