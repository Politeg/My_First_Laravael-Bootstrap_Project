<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasketItem extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function basket()
    {
        return $this->belongsTo(Basket::class);
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
