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
            ->route('products.view', $product)
            ->with('success', 'Se ha añadido el producto correctamente.');
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

  public function view($id)
  {
    $product = Product::findOrFail($id);
    return view('products.view', compact('product'));
  }

}
