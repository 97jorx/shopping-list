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
  
      if(!$request->has('list') && !$request->has('product')
      && !ShoppingList::where('id', $request->list)->exists() 
      && !Product::where('id', $request->product)->exists()) {
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


    public function edit(Request $request)
    {

      if(!$request->has('id') &&
       !ShoppingList::where('id', $request->id)->exists() &&
       !Product::where('id', $request->product)->exists()) {
            return response()->json(false);      
      } 


      $data = '';
      $items = ProductList::listProductsAll($request->id);
      $count = $items->count();
      
        foreach($items as $item) {
              $data .= '
                <tr class="hidden bg-white border-b list-'.$item->list_id.' ">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900  whitespace-nowrap">
                        '.$item->nombre.'
                    </th>
                    <td class="px-6 py-4">
                        '.$item->categoria.'
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="#" class="font-medium text-blue-600  hover:underline">Eliminar</a>
                    </td>
                </tr>
               ';
        }

      $data = [
        'data' => $count > 0 ? $data : false,
      ];

      return response()->json($data);
      
    }
      
  
}
