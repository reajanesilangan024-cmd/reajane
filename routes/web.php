<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\WeatherController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// HOME
Route::get('/', function () {

    if (!auth()->check()) {
        return redirect()->route('login');
    }

    $role = auth()->user()->role;

    if ($role === 'admin') {
        return redirect()->route('dashboard');
    }

    if ($role === 'staff') {
        return redirect()->route('staff.dashboard');
    }

    if ($role === 'customer') {
        return redirect()->route('customer.dashboard');
    }

    return redirect()->route('denied');

})->name('home');


// =====================================================
// ADMIN DASHBOARD + EXISTING WEATHER
// =====================================================

Route::get('/dashboard', [WeatherController::class, 'getWeather'])
    ->middleware(['auth', 'verified', 'role:admin'])
    ->name('dashboard');


// =====================================================
// SEPARATE WEATHER DASHBOARD - ADMIN ONLY
// =====================================================

Route::get('/weather-dashboard', [WeatherController::class, 'weatherDashboard'])
    ->middleware(['auth', 'verified', 'role:admin'])
    ->name('weather.dashboard');


// =====================================================
// STAFF DASHBOARD
// =====================================================

Route::get('/staff/dashboard', function () {

    if (!auth()->check()) {
        return redirect()->route('login');
    }

    if (auth()->user()->role !== 'staff') {
        return redirect()->route('denied');
    }

    return view('dashboard.staff');

})->middleware(['auth', 'verified'])->name('staff.dashboard');


// =====================================================
// CUSTOMER DASHBOARD
// =====================================================

Route::get('/customer/dashboard', function () {

    if (!auth()->check()) {
        return redirect()->route('login');
    }

    if (auth()->user()->role !== 'customer') {
        return redirect()->route('denied');
    }

    return view('dashboard.customer');

})->middleware(['auth', 'verified'])->name('customer.dashboard');


// =====================================================
// ACCESS DENIED
// =====================================================

Route::get('/denied', function () {
    return view('denied');
})->middleware('auth')->name('denied');


// =====================================================
// PROFILE
// =====================================================

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');

});


// =====================================================
// USER MANAGEMENT - ADMIN ONLY
// =====================================================

Route::middleware('auth')->group(function () {

    Route::get('/users', function () {

        if (auth()->user()->role !== 'admin') {
            return redirect()->route('denied');
        }

        return app(UserController::class)->index();

    })->name('users.index');


    Route::get('/users/create', function () {

        if (auth()->user()->role !== 'admin') {
            return redirect()->route('denied');
        }

        return app(UserController::class)->create();

    })->name('users.create');


    Route::post('/users', function (\Illuminate\Http\Request $request) {

        if (auth()->user()->role !== 'admin') {
            return redirect()->route('denied');
        }

        return app(UserController::class)->store($request);

    })->name('users.store');


    Route::get('/users/{user}/edit', function (\App\Models\User $user) {

        if (auth()->user()->role !== 'admin') {
            return redirect()->route('denied');
        }

        return app(UserController::class)->edit($user);

    })->name('users.edit');


    Route::put('/users/{user}', function (
        \Illuminate\Http\Request $request,
        \App\Models\User $user
    ) {

        if (auth()->user()->role !== 'admin') {
            return redirect()->route('denied');
        }

        return app(UserController::class)->update($request, $user);

    })->name('users.update');


    Route::patch('/users/{user}', function (
        \Illuminate\Http\Request $request,
        \App\Models\User $user
    ) {

        if (auth()->user()->role !== 'admin') {
            return redirect()->route('denied');
        }

        return app(UserController::class)->update($request, $user);

    })->name('users.update.patch');


    Route::delete('/users/{user}', function (
        \App\Models\User $user
    ) {

        if (auth()->user()->role !== 'admin') {
            return redirect()->route('denied');
        }

        return app(UserController::class)->destroy($user);

    })->name('users.destroy');

});


// =====================================================
// PRODUCTS
// =====================================================

Route::middleware('auth')->group(function () {
    Route::resource('products', ProductController::class);
});


// =====================================================
// ORDERS
// =====================================================

Route::middleware('auth')->group(function () {
    Route::resource('orders', OrderController::class);
});


// =====================================================
// PAYMENTS
// =====================================================

Route::middleware('auth')->group(function () {
    Route::resource('payments', PaymentController::class);
});


// =====================================================
// CUSTOMERS
// =====================================================

Route::middleware('auth')->group(function () {
    Route::resource('customers', CustomerController::class);
});


// =====================================================
// REPORTS
// =====================================================

Route::middleware('auth')->group(function () {

    Route::get('/reports', function () {
        return view('reports.index');
    })->name('reports.index');

});


// =====================================================
// SETTINGS
// =====================================================

Route::middleware('auth')->group(function () {

    Route::get('/settings', function () {
        return view('settings.index');
    })->name('settings.index');

});


// =====================================================
// AUTHENTICATION
// =====================================================

require __DIR__.'/auth.php';