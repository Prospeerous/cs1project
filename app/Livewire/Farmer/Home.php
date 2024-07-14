<?php

namespace App\Livewire\Farmer;

use Illuminate\Support\Facades\Schema;
use Livewire\Component;
use App\Models\Product;
use Mary\Traits\Toast;
use App\Models\Order;
use App\Models\User;
use App\Models\Wishlist;

class Home extends Component
{
    
    public function render()
    {
        return view('livewire.farmer.home');
    }
}
