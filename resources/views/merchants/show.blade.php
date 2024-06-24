@extends('layouts.app')

@section('content')
    <h1>{{ $merchant->name }}</h1>
    <p>Email: {{ $merchant->email }}</p>
    <a href="{{ route('merchants.edit', $merchant->id) }}" class="btn btn-warning">Edit</a>
    <form action="{{ route('merchants.destroy', $merchant->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
    </form>
    <a href="{{ route('merchants.index') }}" class="btn btn-secondary">Back to List</a>
@endsection