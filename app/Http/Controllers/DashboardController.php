<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $role = auth()->user()->role;

        if ($role === 'admin') {
            return view('dashboard.admin');
        }

        if ($role === 'staff') {
            return view('dashboard.staff');
        }

        if ($role === 'customer') {
            return view('dashboard.customer');
        }

        abort(403, 'Access Denied');
    }
}