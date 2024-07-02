@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-6 bg-white shadow-md rounded-lg">
        <h1 class="text-2xl font-bold mb-4">Order #{{ $order->id }}</h1>
        <table class="table-auto w-full mb-4">
            <tbody>
                <tr class="border-b">
                    <td class="py-2 px-4 font-semibold">Product</td>
                    <td class="py-2 px-4">{{ $order->product->name }}</td>
                </tr>
                <tr class="border-b">
                    <td class="py-2 px-4 font-semibold">Quantity</td>
                    <td class="py-2 px-4">{{ $order->quantity }}</td>
                </tr>
                <tr class="border-b">
                    <td class="py-2 px-4 font-semibold">Status</td>
                    <td class="py-2 px-4">{{ $order->status }}</td>
                </tr>
            </tbody>
        </table>

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
    </div>
@endsection