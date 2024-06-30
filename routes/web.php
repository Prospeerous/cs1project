<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\MerchantController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ReturnRequestController;

// Merchant Routes
Route::resource('merchants', MerchantController::class);

// Product Routes
Route::resource('products', ProductController::class);

// Order Routes
Route::resource('orders', OrderController::class);
Route::post('orders/{order}/process', [OrderController::class, 'processOrder'])->name('orders.process');
Route::post('orders/{order}/dispatch', [OrderController::class, 'dispatchOrder'])->name('orders.dispatch');

// Return Request Routes
Route::resource('return_requests', ReturnRequestController::class);
Route::post('return_requests/{return_request}/approve', [ReturnRequestController::class, 'approveReturn'])->name('return_requests.approve');
Route::post('return_requests/{return_request}/reject', [ReturnRequestController::class, 'rejectReturn'])->name('return_requests.reject');

/*Route::get('/', function () {
    return view('home.index');
});
*/
Route::get('/', [HomeController::class, 'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::post('/addProduct', [HomeController::class, 'addProduct']);
Route::get('/addProduct', function () {
    return view('products.addProduct');
});

route::get('/home', [HomeController::class, 'home']);

route::get('/viewUsers', [HomeController::class, 'viewUsers']);  

route::get('/viewProduct', [HomeController::class, 'viewProduct']);

//route::get('/editProduct/{id}', [HomeController::class, 'viewProduct']);

route::get('/deleteProduct/{id}', [HomeController::class, 'deleteProduct']);

route::get('/editProduct/{id}', [HomeController::class, 'editProduct']);

route::post('/updateProduct/{id}', [HomeController::class, 'updateProduct']);

route::get('/adminViewProduct', [HomeController::class, 'adminViewProduct']);

route::get('/adminViewBuyers', [HomeController::class, 'adminViewBuyers']);

route::get('/adminViewFarmers', [HomeController::class, 'adminViewFarmers']);

route::get('adminViewAdmins', [HomeController::class, 'adminViewAdmins']);

route::get('/adminHome', [HomeController::class, 'adminHome']);

