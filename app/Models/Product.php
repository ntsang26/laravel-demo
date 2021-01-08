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
        'type',
        'status'
    ];

    public function category() {
        return $this->belongsTo('App\Models\Category', 'category_id', 'id');
    }
}
