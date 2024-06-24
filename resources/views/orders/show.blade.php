@extends('layouts.app')

@section('content')
    <h1>Order #{{ $order->id }}</h1>
    <p>Product: {{ $order->product->name }}</p>
    <p>Quantity: {{ $order->quantity }}</p>
    <p>Status: {{ $order->status }}</p>
    @if($order->status == 'pending')
        <form action="{{ route('orders.process', $order->id) }}" method="POST" style="display:inline;">
            @csrf
            <button type="submit" class="btn btn-primary">Process Order</button>
        </form>
    @elseif($order->status == 'processed')
        <form action="{{ route('orders.dispatch', $order->id) }}" method="POST" style="display:inline;">
            @csrf
            <button type="submit" class="btn btn-success">Dispatch Order</button>
        </form>
    @endif
    <a href="{{ route('orders.index') }}" class="btn btn-secondary">Back to List</a>
@endsection