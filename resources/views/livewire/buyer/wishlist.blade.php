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
            <x-mary-menu-item title="Order History" icon="o-check" link="/buyer/orders" />
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
            $wishes = \DB::table('wishlist')
                ->join('products', 'wishlist.product_id', '=', 'products.id')
                ->where('wishlist.user_id', auth()->user()->id)
                ->select('wishlist.*', 'products.product_name as product_name', 'products.*') // Correctly select all product details
                ->get();

            $headers = [
                ['key' => 'id', 'label' => '#'],
                ['key' => 'product_name', 'label' => 'Product Name'],
                ['key' => 'product_description', 'label' => 'Description'],
                ['key' => 'product_price', 'label' => 'Price'],
                // Add other product details to headers as needed
                ['key' => 'actions', 'label' => 'Actions'],
            ];
        @endphp

        <x-mary-header title="Items in Wishlist" with-anchor separator />
        <x-mary-table :headers="$headers" :rows="$wishes" striped >
            @scope('actions', $wish)
                <x-mary-button icon="o-trash" wire:click="removeFromWishlist({{ $wish->id }})" spinner class="btn-sm" tooltip="Remove from Wishlist" />
                <x-mary-button icon="o-check" wire:click="addToCart({{ $wish->id }})" spinner class="btn-sm" tooltip="Add to Cart" />
            @endscope
        </x-mary-table>

        <x-mary-modal wire:model="showDetailsModal" title="Add to Cart">
            <x-mary-form wire:submit="addOrder">
                <x-mary-input wire:model="product_id" readonly hidden />
                <x-mary-input wire:model="product_name" label="Product Name" readonly />
                <x-mary-input wire:model="product_price" label="Product Price" readonly />
                <x-mary-input wire:model="product_quantity" label="Product Quantity" />
                <x-mary-input wire:model="product_category" label="Product Category" readonly />

                <x-mary-input wire:model="quantity" label="Quantity" />
                <x-mary-input wire:model="total" readonly hidden />

                <x-slot:actions>
                    <x-mary-button label="Cancel" wire:click="closeModal" />
                    <x-mary-button label="Add to Cart" type="submit" />
                </x-slot:actions>
            </x-mary-form>
        </x-mary-modal>

        </x-slot:content>
    </x-mary-main>
</div>
