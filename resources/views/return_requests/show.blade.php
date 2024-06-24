@extends('layouts.app')

@section('content')
    <h1>Return Request #{{ $returnRequest->id }}</h1>
    <p>Order ID: {{ $returnRequest->order_id }}</p>
    <p>Reason: {{ $returnRequest->reason }}</p>
    <p>Status: {{ $returnRequest->status }}</p>
    @if($returnRequest->status == 'pending')
        <form action="{{ route('return_requests.approve', $returnRequest->id) }}" method="POST" style="display:inline;">
            @csrf
            <button type="submit" class="btn btn-success">Approve</button>
        </form>
        <form action="{{ route('return_requests.reject', $returnRequest->id) }}" method="POST" style="display:inline;">
            @csrf
            <button type="submit" class="btn btn-danger">Reject</button>
        </form>
    @endif
    <a href="{{ route('return_requests.index') }}" class="btn btn-secondary">Back to List</a>
@endsection