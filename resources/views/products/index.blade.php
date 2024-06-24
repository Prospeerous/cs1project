@extends('layouts.app')

@section('content')
<div class="container">
    <form method="GET" action="{{ route('products.index') }}">
        <div class="row mb-3">
            <div class="col-md-3">
                <input type="text" name="search" class="form-control" placeholder="Search products..." value="{{ request('search') }}">
            </div>
            <div class="col-md-2">
                <select name="category" class="form-control">
                    <option value="">All Categories</option>
                    
                    <option value="vegetables" {{ request('category') == 'vegetables' ? 'selected' : '' }}>Vegetables</option>
                    <option value="fruits" {{ request('category') == 'fruits' ? 'selected' : '' }}>Fruits</option>
                    <option value="tubers" {{ request('category') == 'tubers' ? 'selected' : '' }}>Tubers</option>
                    <option value="legumes" {{ request('category') == 'legumes' ? 'selected' : '' }}>Legumes</option>
                    <option value="cereals" {{ request('category') == 'cereals' ? 'selected' : '' }}>Cereals</option>
                </select>
            </div>
            <div class="col-md-2">
                <select name="location" class="form-control">
                    <option value="">All Locations</option>
                    @foreach($locations as $location)
                        <option value="{{ $location->location }}" {{ request('location') == $location->location ? 'selected' : '' }}>{{ $location->location }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-2">
                <select name="merchant" class="form-control">
                    <option value="">All Merchants</option>
                    @foreach($merchants as $merchant)
                        <option value="{{ $merchant->id }}" {{ request('merchant') == $merchant->id ? 'selected' : '' }}>{{ $merchant->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-2">
                <select name="sort" class="form-control">
                    <option value="">Sort By</option>
                    <option value="price_asc" {{ request('sort') == 'price_asc' ? 'selected' : '' }}>Price: Low to High</option>
                    <option value="price_desc" {{ request('sort') == 'price_desc' ? 'selected' : '' }}>Price: High to Low</option>
                    <option value="name_asc" {{ request('sort') == 'name_asc' ? 'selected' : '' }}>Name: A to Z</option>
                    <option value="name_desc" {{ request('sort') == 'name_desc' ? 'selected' : '' }}>Name: Z to A</option>
                </select>
            </div>
            <div class="col-md-1">
                <button type="submit" class="btn btn-primary">Filter</button>
            </div>
        </div>
    </form>

    <div class="row">
        @foreach($products as $product)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ $product->description }}</p>
                        <p class="card-text">Price: ${{ $product->price }}</p>
                        <p class="card-text">Stock: {{ $product->stock }}</p>
                        <p class="card-text">Location: {{ $product->location }}</p>
                        <p class="card-text">Merchant: {{ $product->merchant->name }}</p>
                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">View Details</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="row">
        <div class="col-md-12">
            {{ $products->links() }}
        </div>
    </div>
</div>
@endsection