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

  public function index()
  {
    $products = Product::paginate(15);
    return view('product.index', compact('products'));
  }

  public function create()
  {
    return view('product.create');
  }

  public function view($id)
  {
    $product = Product::findOrFail($id)->first();
    return view('product.view', compact('product'));
  }

}
