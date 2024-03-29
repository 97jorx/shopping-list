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
  
      $shopping_lists_id = $request->list;
      $products_id = $request->product;
  
      $productlist = new ProductList();
      $productlist->shopping_lists_id = $shopping_lists_id;
      $productlist->products_id = $products_id;
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


      $items = ProductList::listProductsAll($request->id);
      $count = $items->count();
      $data = '<input class="hidden" id="list-id" value="'.$request->id.'" />';

        foreach($items as $item) {
              $data .= '
                <tr class="hidden bg-white list-'.$item->shopping_lists_id.' ">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        '.$item->nombre.'
                    </th>
                    <td class="px-6 py-4">
                        '.$item->categoria.'
                    </td>
                    <td class="px-6 py-4">
                        <a href="#" class="font-medium text-blue-600">Eliminar</a>
                    </td>
                </tr>
               ';
        }

      $data = [
        'data' => $count > 0 ?
          $data :
          $data .= '<td class="px-6 py-4">No se ha encontrado ningún elemento.</td>',
      ];

      return response()->json($data);
      
    }
      
  
}
