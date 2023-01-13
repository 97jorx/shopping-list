<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoppingList extends Model
{
    use HasFactory;

    public function product_list() {
        return $this->hasMany(ProductList::class, 'shopping_lists_id');
    }

    public function product() {
        return $this->belongsToMany(Product::class, ProductList::class, 'shopping_lists_id', 'products_id');
    }

}
