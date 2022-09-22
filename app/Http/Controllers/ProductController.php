<?php

namespace App\Http\Controllers;

use Uuids;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

  public function __invoke()
  {

  }

  public function store(Request $request)
  {

    $request->validate([
        'nombre' => 'required',
        'categoria' => 'required',
    ],
    [
        'nombre.required' => 'El nombre del producto no puede estar vacío!',
        'categoria.required' => 'La categoría no puede estar vacía!'
    ]);




    $product = new Product();
    $product->nombre = $request->nombre;
    $product->categoria = $request->categoria;
    $product->save();

    return redirect()->route('products.view', $product);
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
