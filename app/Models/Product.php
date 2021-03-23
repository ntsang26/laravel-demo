<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'products';
    protected $fillable = [
        'id',
        'category_id',
        'prd_code',
        'name',
        'price',
        'thumbnail',
        'description',
        'sale_off',
        'status'
    ];

    public function getCateAttribute() {
        return $this->belongsTo('App\Models\Category', 'category_id', 'id')->first();
    }
}
