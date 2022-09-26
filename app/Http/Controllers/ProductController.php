<?php

namespace App\Http\Controllers;

use Uuids;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProduct;

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


  public function index()
  {
    $products = Product::orderBy('created_at', 'desc')->paginate(12);

    return view('products.index', compact('products'));

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

}
