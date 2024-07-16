<div>

    <x-mary-nav sticky full-width>
    
        <x-slot:brand>
            {{-- Drawer toggle for "main-drawer" --}}
            <label for="main-drawer" class="lg:hidden mr-3">
                <x-mary-icon name="o-bars-3" class="cursor-pointer" />
            </label>

            {{-- Brand --}}
            <div>EQUIFARM</div>
        </x-slot:brand>

        {{-- Right side actions --}}
        <x-slot:actions>
            <x-mary-theme-toggle darkTheme="forest" lightTheme="retro" />
            <x-mary-button label="Messages" icon="o-envelope" link="###" class="btn-ghost btn-sm" responsive />
            <x-mary-button label="Profile" icon="o-user" link="/buyer/profile" class="btn-ghost btn-sm" responsive />
            <x-mary-button label="Logout" icon="o-power" link="/logout" class="btn-ghost btn-sm" responsive />
        </x-slot:actions>
    </x-mary-nav>

    <x-mary-main>
        <x-slot:sidebar>
        <x-mary-menu activate-by-route>
            <x-mary-menu-item title="View Products" icon="o-eye-slash" link="/buyer/home" />
            <x-mary-menu-item title="Cart" icon="o-check" link="/buyer/orders" />
            <x-mary-menu-item title="Wishlist" icon="o-magnifying-glass-plus" link="/buyer/wishlist" />
            <x-mary-menu-item title="Ratings and Reviews" icon="o-adjustments-vertical" link="/buyer/reviews" />
            
            <x-mary-menu-sub title="Settings" icon="o-cog-6-tooth">
                <x-mary-menu-item title="Wifi" icon="o-wifi" link="####" />
                <x-mary-menu-item title="Archives" icon="o-archive-box" link="####" />
            </x-mary-menu-sub>
        </x-mary-menu>
        </x-slot:sidebar>

        <x-slot:content>

        @php
            $orders = \DB::table('orders')
                ->join('products', 'orders.product_id', '=', 'products.id')
                ->select('orders.*', 'products.product_name as product_name')
                ->get();

            $headers = [
                ['key' => 'id', 'label' => '#'],
                ['key' => 'product_name', 'label' => 'Product Name'], // Adjusted to match the alias in the select
                ['key' => 'quantity', 'label' => 'Quantity'],
                ['key' => 'total', 'label' => 'Total'],
                ['key' => 'status', 'label' => 'Status'],
                ['key' => 'actions', 'label' => 'Actions'],
            ];
        @endphp

        <x-mary-header title="Order in Cart" with-anchor separator />
        <x-mary-table :headers="$headers" :rows="$orders" striped >
            @scope('actions', $order)
                <a href = "{{ url('perform-stk-push') }}" >Pay</a>
            @endscope
        </x-mary-table>
        
        </x-slot:content>
    </x-mary-main>
</div>
