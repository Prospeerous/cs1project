@extends('layouts.app')

@section('content')
    <h1>Merchants</h1>
    <a href="{{ route('merchants.create') }}" class="btn btn-primary">Add New Merchant</a>
    <ul class="list-group mt-3">
        @foreach($merchants as $merchant)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div>
                    <a href="{{ route('merchants.show', $merchant->id) }}">{{ $merchant->name }}</a>
                    <p>{{ $merchant->email }}</p>
                </div>
                <div>
                    <a href="{{ route('merchants.edit', $merchant->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('merchants.destroy', $merchant->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
@endsection