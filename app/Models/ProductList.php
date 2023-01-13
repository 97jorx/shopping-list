<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductList extends Pivot
{
    protected $table = 'product_list';
    use HasFactory;



    public static function listProductsAll($shopping_lists_id) {
 
        $product_list = DB::table('product_list')
            ->join('products', 'product_list.products_id', '=', 'products.id')
            ->join('shopping_lists', 'product_list.shopping_lists_id', '=', 'shopping_lists.id')
            ->where('shopping_lists.id', $shopping_lists_id)
            ->select('products.nombre', 'products.categoria', 'product_list.shopping_lists_id', 'product_list.products_id')
            ->orderBy('product_list.created_at', 'DESC')
            ->get();

        return $product_list;
    }


    public function product() {
        return $this->belongsTo(Product::class);
    }

    public function shopping_list() {
        return $this->belongsTo(ShoppingList::class);
    }
 

}
