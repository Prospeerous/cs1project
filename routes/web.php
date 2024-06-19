<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

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
    return view('admin.addProduct');
});

route::get('/home', [HomeController::class, 'home']);

route::get('/viewUsers', [HomeController::class, 'viewUsers']);  

route::get('/viewProduct', [HomeController::class, 'viewProduct']);

//route::get('/editProduct/{id}', [HomeController::class, 'viewProduct']);

route::get('/deleteProduct/{id}', [HomeController::class, 'deleteProduct']);