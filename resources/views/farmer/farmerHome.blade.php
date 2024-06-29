<!-- resources/views/farmerHome.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container mx-auto py-8">
    <h1 class="text-3xl font-bold mb-8">Farmer Dashboard</h1>
    
    <!-- Overview Section -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
        <!-- Total Sales Widget -->
        <div class="bg-white shadow rounded-lg p-6">
            <h2 class="text-xl font-semibold mb-4">Total Sales</h2>
            <p class="text-2xl font-bold">$10,000</p>
        </div>

        <!-- Pending Orders Widget -->
        <div class="bg-white shadow rounded-lg p-6">
            <h2 class="text-xl font-semibold mb-4">Pending Orders</h2>
            <p class="text-2xl font-bold">15</p>
        </div>

        <!-- Recent Activities Widget -->
        <div class="bg-white shadow rounded-lg p-6">
            <h2 class="text-xl font-semibold mb-4">Recent Activities</h2>
            <ul class="list-disc pl-5">
                <li>Order #123 processed</li>
                <li>New product added</li>
                <li>Stock updated</li>
            </ul>
        </div>
    </div>

    <!-- Products Management Section -->
    <div class="bg-white shadow rounded-lg p-6 mb-8">
        <h2 class="text-xl font-semibold mb-4">Products Management</h2>
        <a href="{{ route('products.create') }}" class="text-blue-500 hover:underline mb-4 inline-block">Add New Product</a>
        <table class="min-w-full bg-white">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">Name</th>
                    <th class="py-2 px-4 border-b">Category</th>
                    <th class="py-2 px-4 border-b">Price</th>
                    <th class="py-2 px-4 border-b">Stock</th>
                    <th class="py-2 px-4 border-b">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td class="py-2 px-4 border-b">{{ $product->name }}</td>
                    <td class="py-2 px-4 border-b">{{ $product->category }}</td>
                    <td class="py-2 px-4 border-b">{{ $product->price }}</td>
                    <td class="py-2 px-4 border-b">{{ $product->stock }}</td>
                    <td class="py-2 px-4 border-b">
                        <a href="{{ route('products.edit', $product->id) }}" class="text-blue-500 hover:underline">Edit</a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:underline">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Orders Management Section -->
    <div class="bg-white shadow rounded-lg p-6 mb-8">
        <h2 class="text-xl font-semibold mb-4">Orders Management</h2>
        <table class="min-w-full bg-white">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">Order ID</th>
                    <th class="py-2 px-4 border-b">Product</th>
                    <th class="py-2 px-4 border-b">Quantity</th>
                    <th class="py-2 px-4 border-b">Status</th>
                    <th class="py-2 px-4 border-b">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                <tr>
                    <td class="py-2 px-4 border-b">{{ $order->id }}</td>
                    <td class="py-2 px-4 border-b">{{ $order->product->name }}</td>
                    <td class="py-2 px-4 border-b">{{ $order->quantity }}</td>
                    <td class="py-2 px-4 border-b">{{ $order->status }}</td>
                    <td class="py-2 px-4 border-b">
                        <a href="{{ route('orders.show', $order->id) }}" class="text-blue-500 hover:underline">View</a>
                        <form action="{{ route('orders.update', $order->id) }}" method="POST" class="inline">
                            @csrf
                            @method('PATCH')
                            <select name="status" class="text-sm">
                                <option value="processed">Processed</option>
                                <option value="dispatched">Dispatched</option>
                                <option value="completed">Completed</option>
                            </select>
                            <button type="submit" class="text-green-500 hover:underline">Update</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Analytics and Reporting Section -->
    <div class="bg-white shadow rounded-lg p-6 mb-8">
        <h2 class="text-xl font-semibold mb-4">Analytics and Reporting</h2>
        <div class="h-64">
            {!! $salesChart->container() !!}
        </div>
    </div>
</div>

<!-- Load Charts.js Library -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
<!-- Render the Sales Chart -->
{!! $salesChart->script() !!}
@endsection