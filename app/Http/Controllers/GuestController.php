<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class GuestController extends Controller
{
  public function index() {
    $ords = Order::all();
    return view('order-index', compact('ords'));
  }

  public function show($id) {
    $ord = Order::findOrFail($id);
    return view('order-show', compact('ord'));
  }
}
