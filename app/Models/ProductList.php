<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductList extends Model
{
    public $incrementing = false;

    use HasFactory;



    public static function listProductsAll() {
 
        $product_list = DB::table('product_list')
            ->join('products', 'product_list.product_id', '=', 'products.id')
            ->join('shopping_lists', 'product_list.list_id', '=', 'shopping_lists.id')
            ->select('products.nombre', 'products.categoria')
            ->paginate(4);

        return $product_list;
    }

}
