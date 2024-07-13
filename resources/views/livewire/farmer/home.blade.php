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
            <x-mary-button label="Profile" icon="o-user" link="/farmer/profile" class="btn-ghost btn-sm" responsive />
            <x-mary-button label="Logout" icon="o-power" link="/logout" class="btn-ghost btn-sm" responsive />
        </x-slot:actions>
    </x-mary-nav>

    <x-mary-main>
        <x-slot:sidebar>
            <x-mary-menu activate-by-route>
                <x-mary-menu-item title="View Products" icon="o-eye-slash" link="/farmer/home" />
                <x-mary-menu-item title="Order History" icon="o-check" link="/farmer/orders" />
                <x-mary-menu-item title="Wishlist" icon="o-magnifying-glass-plus" link="/farmer/wishlist" />
                <x-mary-menu-item title="Ratings and Reviews" icon="o-adjustments-vertical" link="/farmer/reviews" />
                
                <x-mary-menu-sub title="Settings" icon="o-cog-6-tooth">
                    <x-mary-menu-item title="Wifi" icon="o-wifi" link="####" />
                    <x-mary-menu-item title="Archives" icon="o-archive-box" link="####" />
                </x-mary-menu-sub>
            </x-mary-menu>
        </x-slot:sidebar>
        <x-slot:content>
            <x-mary-header title="EQUIFARM products" separator progress-indicator>
                <x-slot:middle class="!justify-end">
                    <x-mary-input placeholder="Search..." wire:model.live.debounce="search" clearable icon="o-magnifying-glass" />
                </x-slot:middle>
            </x-mary-header>
            <div class="flex flex-wrap -mx-2">
                @foreach ($products as $product)
                    <div class="w-1/4 px-2 mb-4">
                        <x-mary-card title="{{ $product->product_name }}" subtitle="{{ $product->product_description }}" class="mx-auto">
                            <x-slot:figure>
                                <img src="{{ asset('product_images/' . $product->product_image) }}" alt="{{ $product->product_name }}" class="w-full mx-auto" />
                            </x-slot:figure>
                            <x-slot:actions>
                                <x-mary-button icon="o-sparkles" wire:click="addToWishlist({{ $product->id }})" tooltip-bottom="Add to Wishlist" />
                                <x-mary-button icon="o-plus" wire:click="addToCartModal({{ $product->id }})"  tooltip-bottom="Add to Cart" />
                                <x-mary-button icon="o-eye" wire:click="viewProduct({{ $product->id }})" tooltip-bottom="View Product" />
                            </x-slot:actions>
                        </x-mary-card>
                    </div>
                @endforeach
            </div>

            <x-mary-modal wire:model="showDetailsModal">
                <x-mary-form label="Product Details">
                    <img src="{{ asset('product_images/' . $product_image) }}" alt="{{ $product_name }}" class="w-1/2 mx-auto" />
                    <x-mary-input wire:model="product_name" label="Product Name" readonly />
                    <x-mary-input wire:model="product_description" label="Product Description" readonly />
                    <x-mary-input wire:model="product_price" label="Product Price" readonly />
                    <x-mary-input wire:model="product_quantity" label="Product Quantity" readonly />
                    <x-mary-input wire:model="product_category" label="Product Category" readonly />

                    <x-slot:actions>
                        <x-mary-button label="Cancel" wire:click="closeModal" />
                    </x-slot:actions>
                </x-mary-form>
            </x-mary-modal>

            <x-mary-modal wire:model="showAddToCartModal" title="Add to Cart">
                <x-mary-form wire:submit="addToCart">
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
