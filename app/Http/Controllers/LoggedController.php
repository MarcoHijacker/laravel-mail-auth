<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class LoggedController extends Controller
{
  public function __construct()
  {
      $this -> middleware('auth');
  }

  public function destroy($id) {
    $ord = Order::findOrFail($id);
    $ord -> delete();
    return redirect() -> route('order-index');
  }

  public function edit($id) {
    $ord = Order::findOrFail($id);
    return view('order-edit', compact('ord'));
  }

  public function update(Request $request, $id) {
    $data = $request -> all();
    $ord = Order::findOrFail($id);
    $ord -> update($data);
    return redirect() -> route('order-show', $ord -> id);
  }

  public function create() {
    return view('order-create');
  }

  public function store(Request $request) {
    $data = $request -> all();
    $ord = Order::create($data);
    return redirect() -> route('order-show', $ord -> id);
  }

}
