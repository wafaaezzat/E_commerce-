<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;

    public $guarded = [];

    protected function product()
    {
        return $this->belongsTo(Product::class, 'product_id' , 'id');
    }
}
