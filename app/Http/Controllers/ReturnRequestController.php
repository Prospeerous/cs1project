<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ReturnRequest;
class ReturnRequestController extends Controller
{
    public function index()
    {
        $returnRequests = ReturnRequest::all();
        return view('return_requests.index', compact('returnRequests'));
    }

    public function show($id)
    {
        $returnRequest = ReturnRequest::findOrFail($id);
        return view('return_requests.show', compact('returnRequest'));
    }

    public function approveReturn($id)
    {
        $returnRequest = ReturnRequest::findOrFail($id);
        $returnRequest->status = 'approved';
        $returnRequest->save();

        // Additional logic to process the refund.
        $order = $returnRequest->order;
        $order->status = 'refunded';
        $order->save();

        return redirect()->route('return_requests.show', $id);
    }

    public function rejectReturn($id)
    {
        $returnRequest = ReturnRequest::findOrFail($id);
        $returnRequest->status = 'rejected';
        $returnRequest->save();

        return redirect()->route('return_requests.show', $id);
    }
}
