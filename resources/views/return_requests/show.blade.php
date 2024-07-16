<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Return Request #{{ $returnRequest->id }}</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Return Request #{{ $returnRequest->id }}</h1>
        <p>Order ID: {{ $returnRequest->order_id }}</p>
        <p>Reason: {{ $returnRequest->reason }}</p>
        <p>Status: {{ $returnRequest->status }}</p>
        @if ($returnRequest->status == 'pending')
            <form action="{{ route('return_requests.approve', ['return_request' => $returnRequest->id]) }}" method="POST" style="display:inline;">
                @csrf
                <button type="submit" class="btn btn-success">Approve</button>
            </form>
            <form action="{{ route('return_requests.reject', ['return_request' => $returnRequest->id]) }}" method="POST" style="display:inline;">
                @csrf
                <button type="submit" class="btn btn-danger">Reject</button>
            </form>
        @endif
        <a href="{{ route('return_requests.index') }}" class="btn btn-secondary">Back to List</a>
    </div>
</body>
</html>