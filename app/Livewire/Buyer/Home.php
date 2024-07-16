<?php

namespace App\Livewire\Buyer;

use Livewire\Component;
use App\Models\Product;
use Mary\Traits\Toast;
use App\Models\Order;
use App\Models\User;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Schema;
use App\Models\Review;

class Home extends Component
{
    use Toast;

    public $search = '';

    public $products;

    public $product_id, $product_name, $product_description, $product_quantity, $product_price, $product_category, $product_image;

    public $product;
    public $name;
    public $reviews=[];
    public $user_id, $review, $rating;
    public $review_content;

    public $quantity = 1;

    public $total;

    public bool $showDetailsModal = false;
    public bool $showAddToCartModal = false;
    public bool $showReviewModal = false;

    public function closeModal()
    {
        $this->showDetailsModal = false;
        $this->showAddToCartModal = false;
        $this->showReviewModal = false;
    }

    public function addReview()
    {
        $this->validate([
            'review_content' => 'required',
            'rating' => 'required|numeric|min:1|max:5'
        ]);

        $review = new Review();
        $review->user_id = auth()->user()->id;
        $review->product_id = $this->product->id;
        $review->review = $this->review_content;
        $review->rating = $this->rating;
        $review->save();

        $this->reviews = Review::where('product_id', $this->product->id)->get();
        $this->review_content = '';
        $this->rating = '';
        $this->success('Review added successfully');
    }

    public function reviewProduct($id)
    {
        $this->reviews = Review::where('product_id', $id)->get();
        $this->product = Product::find($id);
        $this->showReviewModal = true;
    }

    public function updated($propertyName)
    {
        if ($propertyName === 'quantity' || $propertyName === 'product_price') {
            $this->calculateTotal();
        }
    }

    public function calculateTotal()
    {
        $this->total = $this->quantity * $this->product_price;
    }

    public function addToWishlist($id)
    {
        $wishlist = new Wishlist();
        $wishlist->user_id = auth()->user()->id;
        $wishlist->product_id = $id;
        $wishlist->save();

        $this->success('Product added to wishlist successfully');
    }

    public function addToCartModal($id)
    {
        $this->product = Product::find($id);
        $this->product_id = $this->product->id;
        $this->product_name = $this->product->product_name;
        $this->product_description = $this->product->product_description;
        $this->product_quantity = $this->product->product_quantity;
        $this->product_price = $this->product->product_price;
        $this->product_category = $this->product->product_category;
        $this->product_image = $this->product->product_image;

        $this->total = $this->product_price;

        $this->showAddToCartModal = true;
    }

    public function addToCart()
    {
        $this->validate([
            'quantity' => 'required|numeric|min:1'
        ]);

        // Check if the merchant exists
        // $merchantExists = User::where('id', auth()->user()->id)->exists();
        // Assuming Product model exists and $this->product_id is set
        $productExists = Product::where('id', $this->product_id)->exists();


        $order = new Order();
        $merchant_id = auth()->user()->id;
        $order->merchant_id = $merchant_id;
        $order->product_id = $this->product_id;
        $order->name= $this->name;
        $order->quantity = $this->quantity;
        $order->total = $this->total;
        $order->save();

        $this->showAddToCartModal = false;
        $this->success('Product added to cart successfully');
    }

    public function viewProduct($id)
    {
        $this->product = Product::find($id);
        $this->product_name = $this->product->name;
        $this->product_description = $this->product->product_description;
        $this->product_quantity = $this->product->product_quantity;
        $this->product_price = $this->product->product_price;
        $this->product_category = $this->product->product_category;
        $this->product_image = $this->product->product_image;
        $this->showDetailsModal = true;
    }

    public function mount()
    {
        $this->products = Product::all();
    }

    public function render()
    {
        $columns = Schema::getColumnListing('products');

        $query = Product::query();

        foreach ($columns as $column) {
            $query->orWhere($column, 'like', '%' . $this->search . '%');
        }

        $this->products = $query->get();

        return view('livewire.buyer.home', [
            'products' => $this->products
        ]);
    }
}

