<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('orders.index', compact('orders'));
    }

    public function show($id)
    {
        $order = Order::findOrFail($id);
        return view('orders.show', compact('order'));
    }

    public function processOrder($id)
    {
        $order = Order::findOrFail($id);
        $order->status = 'processed';
        $order->save();

        return redirect()->route('orders.show', $id);
    }

    public function dispatchOrder($id)
    {
        $order = Order::findOrFail($id);
        $order->status = 'dispatched';
        $order->save();

        return redirect()->route('orders.show', $id);
    }
}