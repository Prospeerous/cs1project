@extends('layouts.app')

@section('content')
    <h1>Return Requests</h1>
    <ul class="list-group mt-3">
        @foreach($returnRequests as $returnRequest)
            <li class="list-group-item">
                <a href="{{ route('return_requests.show', $returnRequest->id) }}">Return Request #{{ $returnRequest->id }}</a>
                <p>Status: {{ $returnRequest->status }}</p>
            </li>
        @endforeach
    </ul>
@endsection