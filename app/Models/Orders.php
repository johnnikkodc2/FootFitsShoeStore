<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'email',
        'address',
        'address_2',
        'region',
        'city',
        'zip',
        'payment_namecard',
        'payment_cardnumber',
        'expiration',
        'cvv',
        'cart_items',
        'cart_prices',
        'total_price',
        'status'
    ];

    public function orderProducts()
    {
        return $this->hasMany(OrderProducts::class, 'order_id');
    }

    public function product()
    {
        return $this->belongsTo(Products::class, 'product_id');
    }
}
