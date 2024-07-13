<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\MerchantController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ReturnRequestController;

use App\Livewire\Hello;
use App\Livewire\Farmer\Home as FarmerHome;
use App\Livewire\Farmer\Profile as FarmerProfile;
use App\Livewire\Farmer\Wishlist as FarmerWishlist;
use App\Livewire\Farmer\Reviews as FarmerReviews;
use App\Livewire\Farmer\Orders as FarmerOrders;

Route::get('/test', Hello::class);

Route::get('/logout', function () {
    $guards = array_keys(config('auth.guards'));

    foreach ($guards as $guard) {
        if (auth()->guard($guard)->check()) {
            auth()->guard($guard)->logout();
        }
    }

    return redirect('/')->with('success', 'Logout successful');
})->name('logout');

// These are buyer routes.. I realized the type of user I working with too late into the project
Route::get('/farmer/home', FarmerHome::class)->name('farmer.home');
Route::get('/farmer/profile', FarmerProfile::class)->name('farmer.profile');
Route::get('/farmer/wishlist', FarmerWishlist::class)->name('farmer.wishlist');
Route::get('/farmer/reviews', FarmerReviews::class)->name('farmer.reviews');
Route::get('/farmer/orders', FarmerOrders::class)->name('farmer.orders');

//farmerhome page routes
Route::get('/farmer/notifications', function () {
    return view('farmer.notifications');
});

Route::get('/farmer/settings', function () {
    return view('farmer.settings');
});


// Merchant Routes
Route::resource('merchants', MerchantController::class);


// Product Routes
Route::resource('products', ProductController::class);

// Order Routes
//Route::resource('orders', OrderController::class);
Route::post('orders/{order}/process', [OrderController::class, 'processOrder'])->name('orders.process');
Route::post('orders/{order}/dispatch', [OrderController::class, 'dispatchOrder'])->name('orders.dispatch');

Route::get('orders', [OrderController::class, 'showMerchantOrders' ]);
Route::get('orders/{id}', [OrderController::class, 'show' ]);


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

/*Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/products/addProduct', [ProductController::class, 'create'])->name('products.add');
    Route::post('/products', [ProductController::class, 'store'])->name('products.store');
});

route::post('/addProduct', [HomeController::class, 'addProduct']);
Route::get('/addProduct', function () {
    return view('products.addProduct');
});
Route::get('/viewProduct', function () {
    return view('products.viewProduct');
});
*/
route::get('/home', [HomeController::class, 'home']);

route::get('/viewUsers', [HomeController::class, 'viewUsers']);  

route::get('/viewProduct', [HomeController::class, 'viewProduct']);
//route::get('/addProduct', [HomeController::class, 'addProduct']);
Route::get('/addProduct', [ProductController::class, 'create']);
// Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::post('/products', [ProductController::class, 'store']);


//route::get('/editProduct/{id}', [HomeController::class, 'viewProduct']);

route::get('/deleteProduct/{id}', [HomeController::class, 'deleteProduct']);

route::get('/editProduct/{id}', [HomeController::class, 'editProduct']);

route::get('/editUser/{id}', [HomeController::class, 'editUser']);

route::get('/updateUser/{id}', [HomeController::class, 'updateUser']);

route::post('/updateUser/{id}', [HomeController::class, 'updateUser']);

route::post('/updateProduct/{id}', [HomeController::class, 'updateProduct']);

route::get('/adminViewProduct', [HomeController::class, 'adminViewProduct']);

route::get('/adminViewBuyers', [HomeController::class, 'adminViewBuyers']);

route::get('/adminViewFarmers', [HomeController::class, 'adminViewFarmers']);

route::get('adminViewAdmins', [HomeController::class, 'adminViewAdmins']);

route::get('/adminHome', [HomeController::class, 'adminHome']);

route::get('/showUserProduct', [HomeController::class, 'showUserProduct']);

route::get('/selectOrderAmmount/{id}', [HomeController::class, 'selectOrderAmmount']);

route::get('/addToCart/{id}', [HomeController::class, 'addToCart']);

route::post('/addToCart/{id}', [HomeController::class, 'addToCart']);

route::get('/buyerHome', [HomeController::class, 'buyerHome']);

route::get('/showBuyerCart', [HomeController::class, 'showBuyerCart']);

route::get('/deleteCart/{id}', [HomeController::class, 'deleteCart']);

route::get('/proceedToCheckout', [HomeController::class, 'proceedToCheckout']);

route::get('/showUserPendingOrders', [HomeController::class, 'showUserPendingOrders']);