<?php

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    public function product_list() {
        return $this->hasMany(ProductList::class, 'products_id');
    }


    public function lists() {
        return $this->belongsToMany(ShoppingList::class, 'product_list');
    }
}
