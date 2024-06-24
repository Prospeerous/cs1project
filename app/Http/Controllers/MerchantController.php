<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Merchant;

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

    // Add methods for creating, storing, editing, and updating merchants.
}
