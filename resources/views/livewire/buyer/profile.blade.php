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
            <x-mary-button label="Go Back" icon="o-arrow-uturn-left" link="/buyer/home" class="btn-ghost btn-sm" responsive />
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

        <x-mary-form wire:submit="updateProfile">
            <x-mary-input wire:model="f_name" label="First Name" />
            <x-mary-input wire:model="l_name" label="Last Name" />
            <x-mary-input wire:model="email" label="Email" />
            <x-mary-input wire:model="phone_no" label="Phone" />
            <x-mary-input wire:model="location" label="Address" />

            <x-slot:actions>
                <x-mary-button label="Update" type="submit" />
            </x-slot:actions>
        </x-mary-form>
        </x-slot:content>
    </x-mary-main>
</div>
