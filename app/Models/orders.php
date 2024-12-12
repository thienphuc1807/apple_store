<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    protected $fillable = [
        'fullName',
        'gender',
        'phoneNumber',
        'address',
        'district',
        'ward',
        'city',
    ];

    public function items()
    {
        return $this->hasMany(orderitems::class);
    }
}
