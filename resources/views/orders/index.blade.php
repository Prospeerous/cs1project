@extends('layouts.app')

@section('content')
    <h1>Orders</h1>
    <ul class="list-group mt-3">
        @foreach($orders as $order)
            <li class="list-group-item">
                <a href="{{ route('orders.show', $order->id) }}">Order #{{ $order->id }}</a>
                <p>Status: {{ $order->status }}</p>
            </li>
        @endforeach
    </ul>
@endsection