<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\product;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }
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

    public function adminViewBuyers()
    {
        $users = User::where('role', 'buyer')->get();
        return view('admin.adminViewBuyers', compact('users'));
    }

    public function adminViewFarmers()
    {
        $users = User::where('role', 'farmer')->get();
        return view('admin.adminViewFarmers', compact('users'));
    }

    public function adminViewAdmins()
    {
        $users = User::where('role', 'admin')->get();
        return view('admin.adminViewAdmins', compact('users'));
    }

    public function deleteUser($id){
        $user = User::find($id);
        $user->delete();
        return redirect() -> back() -> with('message', 'User Deleted Successfully');
    }

    public function editUser($id){
        $user = User::find($id);
        return view('admin.adminEditUser', compact('user'));
        return redirect() -> back();
    }

    public function updateUser(Request $request, $id){
        $user = User::find($id);
        $user -> f_name = $request -> f_name;
        $user -> l_name = $request -> l_name;
        $user -> email = $request -> email;
        $user -> phone_no = $request -> phone_no;
        $user -> role = $request -> role;
        $user -> location = $request -> location;
        $user -> update();
        return redirect('viewUsers') -> with('message', 'User Updated Successfully');
    }
}
