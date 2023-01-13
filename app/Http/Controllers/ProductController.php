<?php

namespace App\Http\Controllers;

use Uuids;
use App\Models\Product;
use App\Models\ProductList;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProduct;
use App\Models\ShoppingList;

class ProductController extends Controller
{

  public function __invoke()
  {

  }

  public function store(StoreProduct $request)
  {
    $product = new Product();
    $product->nombre = $request->nombre;
    $product->categoria = $request->categoria;
    $product->save();

    return redirect()
            ->route('products.show', $product)
            ->with('success', 'Se ha añadido el producto correctamente.');
  }


  public function update(StoreProduct $request, Product $product)
  {
    $product->nombre = $request->nombre;
    $product->categoria = $request->categoria;
    $product->save();

    return redirect()
            ->route('products.index', $product)
            ->with('success', 'Se ha actualizado el producto correctamente.');
  }


  public function index(Request $request)
  {
    $products = Product::orderBy('created_at', 'desc')->get();
    
    if ($request->ajax()) {
        return response()->json([
          'products'  => $products
      ]);
    }

    return view('products.index', compact('products'));

  }

  public function allproducts() {
     
    $products = Product::orderBy('created_at', 'desc')->paginate(12);

    return response()->json($products);

  }


  public function prueba()
  {

    $products = Product::all();
    $lists = ShoppingList::all();
    $product_lists = ProductList::all();

    foreach($products as $product) {
      echo '<a>'. $product->nombre .'</a>';
      echo '</tr>';
      foreach ($product->lists as $list) {
        echo '<a> Pertenece a la lista: '. $list->id .'</a>';
      }
    }
    
  }

  public function create()
  {
    return view('products.create');
  }


  public function delete(Product $product)
  {

    $product->delete();

    return redirect()
            ->route('products.index')
            ->with('success', 'Se ha eliminado correctamente.');

   }

  public function edit(Product $product)
  {
     return view('products.edit', compact('product'));
  }


  public function show(Product $product)
  {
    return view('products.show', compact('product'));
  }


  public function search(Request $request){
    $productos = Product::all();

    if($request->search != '') {
        $productos = Product::select('id', 'nombre')
        ->where('nombre', 'LIKE', '%'.$request->search.'%')->limit(10)->get();
    }

    return response()->json([
        'productos' => $productos
    ]);

  }


}
