<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        $payments = Payment::latest()->get();

        return view('payments.index', compact('payments'));
    }

    public function create()
    {
        return view('payments.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'order_id' => 'required',
            'amount' => 'required|numeric|min:0',
            'payment_method' => 'required',
            'payment_status' => 'required',
            'reference_number' => 'nullable',
            'payment_date' => 'nullable|date',
        ]);

        Payment::create($request->all());

        return redirect()
            ->route('payments.index')
            ->with('success', 'Payment added successfully!');
    }
}

