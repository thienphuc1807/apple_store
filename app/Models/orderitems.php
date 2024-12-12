<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class orderitems extends Model
{
    protected $fillable = [
        'order_id',
        'product_id',
        'key',
        'name',
        'price',
        'quantity',
        'color',
        'storage',
    ];

    public function products()
    {
        return $this->belongsTo(products::class);
    }
}
