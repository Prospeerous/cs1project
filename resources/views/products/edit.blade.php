@extends('layouts.app')

@section('content')
    <h1>Edit Product</h1>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ $product->name }}" required>
        
        <label for="description">Description:</label>
        <textarea name="description" id="description" required>{{ $product->description }}</textarea>
        
        <label for="price">Price:</label>
        <input type="number" name="price" id="price" value="{{ $product->price }}" required>
        
        <label for="stock">Stock:</label>
        <input type="number" name="stock" id="stock" value="{{ $product->stock }}" required>
        
        <button type="submit">Update</button>
    </form>
@endsection