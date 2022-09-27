<?php

namespace App\Http\Controllers;

use Uuids;
use App\Models\ShoppingList;
use Illuminate\Http\Request;
use App\Http\Requests\StoreShoppingList;

class ShoppingListController extends Controller
{

  public function __invoke()
  {

  }

  public function store(StoreShoppingList $request)
  {
    $list = new ShoppingList();
    $list->nombre = $request->nombre;
    $list->descripcion = $request->descripcion;
    $list->save();

    return redirect()
            ->route('lists.index', $list)
            ->with('success', 'Se ha añadido la lista correctamente.');
  }


  public function index()
  {
    $lists = ShoppingList::paginate(6);

    return view('lists.index', compact('lists'));

  }

  public function create()
  {
    return view('lists.create');
  }

  public function view($id)
  {
    $list = ShoppingList::findOrFail($id);
    return view('list.view', compact('list'));
  }

}
