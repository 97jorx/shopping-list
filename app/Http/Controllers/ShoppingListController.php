<?php

namespace App\Http\Controllers;

use Uuids;
use App\Models\ShoppingList;
use Illuminate\Http\Request;

class ShoppingListController extends Controller
{

  public function __invoke()
  {

  }

  public function index()
  {
    $lists = ShoppingList::paginate(15);

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
