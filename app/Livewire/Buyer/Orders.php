<?php

namespace App\Livewire\Buyer;

use Livewire\Component;
use App\Models\Order;
use Mary\Traits\Toast;

class Orders extends Component
{
    use Toast;

    public $orders;

    public function delete($id)
    {
        $order = Order::find($id);
        $order->delete();
        $this->success('Order deleted successfully');
    }
    public function render()
    {
        return view('livewire.buyer.orders');
    }
}
