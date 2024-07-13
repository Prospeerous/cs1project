<?php

namespace App\Livewire\Farmer;

use Livewire\Component;
use App\Models\Wishlist as WishlistModel;
use Mary\Traits\Toast;
use App\Models\Order;

class Wishlist extends Component
{
    use Toast;

    public $product_id, $product_name, $product_description, $product_quantity, $product_price, $product_category, $product_image;

    public $quantity = 1;

    public $total;

    public bool $showDetailsModal = false;

    public function updated($propertyName)
    {
        if ($propertyName === 'quantity' || $propertyName === 'product_price') {
            $this->calculateTotal();
        }
    }

    public function addToCart($id)
    {
        $wishlistItem = WishlistModel::find($id);

        if (!$wishlistItem || !$wishlistItem->product) {
            $this->error('Product not found in wishlist.');
            return;
        }

        $this->product_id = $wishlistItem->product_id;
        $this->product_name = $wishlistItem->product->product_name;
        $this->product_description = $wishlistItem->product->product_description;
        $this->product_quantity = $wishlistItem->product->product_quantity;
        $this->product_price = $wishlistItem->product->product_price;
        $this->product_category = $wishlistItem->product->product_category;

        $this->showDetailsModal = true;
    }

    public function closeModal()
    {
        $this->showDetailsModal = false;
    }

    public function addOrder()
    {
        $wishlistItem = WishlistModel::find($this->product_id);

        if (!$wishlistItem) {
            $this->error('Product not found in wishlist.');
            return;
        }

        $id = $wishlistItem->product_id;
        $order = new Order();
        $order->product_id = $id;
        $order->quantity = $this->quantity;
        $order->total = $this->total;
        $order->status = 'pending';
        $order->save();

        $this->success('Order added successfully');

        $this->showDetailsModal = false;
    }
    

    public function calculateTotal()
    {
        $this->total = $this->quantity * $this->product_price;
    }
    public function render()
    {
        return view('livewire.farmer.wishlist');
    }
}
