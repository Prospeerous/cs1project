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
                                <div class="flex">
                                <x-mary-button wire:click="reviewProduct({{ $product->id }})" tooltip-bottom="Rate and Review" icon="o-star" />
                                <x-mary-button icon="o-sparkles" wire:click="addToWishlist({{ $product->id }})" tooltip-bottom="Add to Wishlist" />
                                <x-mary-button icon="o-plus" wire:click="addToCartModal({{ $product->id }})"  tooltip-bottom="Add to Cart" />
                                <x-mary-button icon="o-eye" wire:click="viewProduct({{ $product->id }})" tooltip-bottom="View Product" />
                                </div>
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

            <x-mary-modal wire:model="showReviewModal">
                <x-mary-form wire:submit="addReview" title="Add Review">
                    <x-mary-input wire:model="review_content" type="textarea" label="Review"/>
                    <x-mary-input wire:model="rating" type="number" label="Rating" />

                    <x-slot:actions>
                        <x-mary-button label="Submit" type="submit" class="btn btn-primary" />
                    </x-slot:actions>
                </x-mary-form>
                <x-mary-header title="Consultant Reviews" separator />
                @forelse($reviews as $review)
                    <div>
                        <x-mary-form>
                            <!-- Assuming there's a review_content field -->
                            <x-mary-input type="textarea" label="Review" :value="$review->review" readonly/>
                            <x-mary-input type="number" label="Rating" :value="$review->rating" readonly/>
                        </x-mary-form>
                    </div>
                @empty
                    <p>No reviews available.</p>
                @endforelse
            </x-mary-modal>

        </x-slot:content>
    </x-mary-main>
</div>
