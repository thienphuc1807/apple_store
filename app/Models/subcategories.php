<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subcategories extends Model
{
    /** @use HasFactory<\Database\Factories\SubCategoriesFactory> */
    use HasFactory;

    public function categories()
    {
        return $this->belongsTo(categories::class);
    }
}
