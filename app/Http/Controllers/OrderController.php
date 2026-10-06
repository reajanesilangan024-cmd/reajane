<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::latest()->get();

        return view('orders.index', compact('orders'));
    }

    public function create()
    {
        return view('orders.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'customer' => 'required|string|max:255',
            'product' => 'required|string|max:255',
            'quantity' => 'required|integer|min:1',
        ]);

        Order::create([
            'customer' => $request->customer,
            'product' => $request->product,
            'quantity' => $request->quantity,
            'status' => 'Pending',
        ]);

        return redirect()
            ->route('orders.index')
            ->with('success', 'Order added successfully!');
    }

    public function show(Order $order)
    {
        return view('orders.show', compact('order'));
    }

    public function edit(Order $order)
    {
        return view('orders.edit', compact('order'));
    }

    public function update(Request $request, Order $order)
    {
        $request->validate([
            'customer' => 'required|string|max:255',
            'product' => 'required|string|max:255',
            'quantity' => 'required|integer|min:1',
            'status' => 'required|string',
        ]);

        $order->update([
            'customer' => $request->customer,
            'product' => $request->product,
            'quantity' => $request->quantity,
            'status' => $request->status,
        ]);

        return redirect()
            ->route('orders.index')
            ->with('success', 'Order updated successfully!');
    }

    public function destroy(Order $order)
    {
        $order->delete();

        return redirect()
            ->route('orders.index')
            ->with('success', 'Order deleted successfully!');
    }
}

