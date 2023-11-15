<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model
{
    use HasFactory;


    protected $fillable = [
        'product_name',
        'product_brand',
        'product_price',
        'product_size',
        'product_color',
        'product_category',
    ];
    public function products()
    {
        return $this->hasOne(Products::class, 'id', 'id');
    }



}
