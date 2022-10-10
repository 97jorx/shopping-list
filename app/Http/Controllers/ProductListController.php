<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductList;
use App\Models\ShoppingList;
use Illuminate\Http\Request;

class ProductListController extends Controller
{


    public function additem(Request $request)
    {
  
      if($request->has('list') && $request->has('product')
      && ShoppingList::where('id', $request->list)->exists() 
      && Product::where('id', $request->product)->exists()) {
            return response()->json(false);      
        } 
  
      $list_id = $request->list;
      $product_id = $request->product;
  
      $productlist = new ProductList();
      $productlist->list_id = $list_id;
      $productlist->product_id = $product_id;
      $productlist->save(); 
  
      return response()->json(true);
     
    }
}
