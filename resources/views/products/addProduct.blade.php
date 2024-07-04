@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-10">
    <div class="w-full max-w-lg mx-auto bg-white shadow-md rounded px-8 py-6">
        <h2 class="text-2xl font-bold mb-6">Add New Product</h2>
        <form action="{{ url('/products') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="product_name" class="block text-gray-700 font-bold mb-2">Product Name</label>
                <input type="text" id="product_name" name="product_name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>

            <div class="mb-4">
                <label for="product_description" class="block text-gray-700 font-bold mb-2">Product Description</label>
                <textarea id="product_description" name="product_description" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required></textarea>
            </div>

            <div class="mb-4">
                <label for="product_quantity" class="block text-gray-700 font-bold mb-2">Product Quantity</label>
                <input type="number" id="product_quantity" name="product_quantity" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>

            <div class="mb-4">
                <label for="product_price" class="block text-gray-700 font-bold mb-2">Product Price</label>
                <input type="text" id="product_price" name="product_price" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>

            <div class="mb-4">
                <label for="product_category" class="block text-gray-700 font-bold mb-2">Product Category</label>
                <select id="product_category" name="product_category" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    <option value="vegetables">Vegetables</option>
                    <option value="fruits">Fruits</option>
                    <option value="legumes">Legumes</option>
                    <option value="cereals">Cereals</option>
                    <option value="tubers">Tubers</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="product_image" class="block text-gray-700 font-bold mb-2">Product Image</label>
                <input type="file" id="product_image" name="product_image" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Add Product
                </button>
            </div>
        </form>
    </div>
</div>
@endsection