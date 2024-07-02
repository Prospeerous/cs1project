<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Merchant;
use App\Models\Product;

use App\Models\Order;
use App\Charts\SalesChart;

class MerchantController extends Controller
{
    public function index()
    {
        $merchants = Merchant::all();
        return view('merchants.index', compact('merchants'));
    }

    public function show($id)
    {
        $merchant = Merchant::findOrFail($id);
        return view('merchants.show', compact('merchant'));
    }

   /* public function dashboard()
    {
        $products = Product::where('user_id', auth()->id())->get();
        $orders = Order::where('user_id', auth()->id())->get();

        // Example data for sales chart
        $salesChart = new SalesChart;
        $salesChart->labels(['January', 'February', 'March', 'April', 'May']);
        $salesChart->dataset('Sales', 'line', [100, 200, 300, 400, 500]);

        return view('farmerHome', compact('products', 'orders', 'salesChart'));
    }
        */

    // Add methods for creating, storing, editing, and updating merchants.
}
