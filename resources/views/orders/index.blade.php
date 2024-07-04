{{-- @extends('layouts.app') --}}

{{-- @section('content') --}}
    <h1>Orders</h1>
    <ul class="list-group mt-3">
        @foreach($orders as $order)
        <div>
            <ul>
                <li class="list-group-item">
                    {{-- <a href="{{ route('orders.show', $order->id) }}">Order #{{ $order->id }}</a> --}}
                    <p>Product: {{ $order->product->name }}</p>
                    <p>Quantity: {{ $order->quantity }}</p>
                    <p>Price: {{ $order->product->price }}</p>
                    <p>Category: {{ $order->product->category }}</p>
                    {{ $order->product->image }}
                    {{-- <p>Image: <img src="{{ asset('storage/products/' . $order->product->image) }}" alt="{{ $order->product->name }}" style="width: 100px; height: 100px;"></p> --}}
                    <p>Status: {{ $order->status }}</p>
                </li>
            </ul>
        </div>
        @endforeach
    </ul>
{{-- @endsection --}}