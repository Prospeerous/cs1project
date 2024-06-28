<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\product;

class HomeController extends Controller
{
    public function home()
    {
        $role = Auth::user()->role;

        if($role == "admin"){
            return view('admin.adminHome');
        }
        if ($role == "farmer"){
            return view('farmer.farmerHome');
        }
        if ($role == "buyer"){
            return view('dashboard');
        }
    }

    public function viewUsers()
    {
        
        $users = User::all();     
            return view('admin.viewUsers', compact('users'));
        
    }


    public function addProduct(Request $request)
    {
        $product = new product;

        $product -> product_name = $request -> product_name;
        $product -> product_description = $request -> product_description;
        $product -> product_quantity = $request -> product_quantity;
        $product -> product_price = $request -> product_price;
        $product -> product_category = $request -> product_category;

        $product_image = $request -> product_image;
        $product_image_name = time().'.'.$product_image->getClientOriginalExtension();
        $request -> product_image -> move('product_images', $product_image_name); 
        $product -> product_image = $product_image_name;  



        $product->save();
        return redirect() -> back() -> with('message', 'Product Added Successfully');

    }

    public function adminViewProduct()
    {
        $products = product::all();     
            return view('admin.adminViewProduct', compact('products'));
    }
    public function viewProduct()
    {
        $products = product::all();     
            return view('products.viewProduct', compact('products'));

    }

    public function adminHome()
    {
        return view('admin.adminHome');
    }
    
    public function deleteProduct($id)
    {
        $product = product::find($id);
        $product->delete();
        return redirect() -> back();
    }
}
