<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePaymentRequest;
use App\Http\Requests\UpdatePaymentRequest;
use App\Models\Payment;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PaymentController extends Controller
{

    public function confirmBooking(Request $request)
    {
        $product = Product::findorFail($request->input('product_id'));
        $startDate = Carbon::parse($request->input('start_date'));
        $endDate = Carbon::parse($request->input('end_date'));
        $days = $startDate->diffInDays($endDate) + 1;
        $totalPrice = $product->price * $days;

        // Buat array bookingDetails dengan data yang dibutuhkan
        $bookingDetails = [
            'name' => Auth::user()->name,
            'email' => Auth::user()->email,
            'phone' => Auth::user()->phone ?? '-',
            'product_id' => $product->id,
            'user_id' => Auth::id(),
            'product_name' => $product->name,
            'price' => $product->price,
            'total_price' => $totalPrice,
            'days' => $days,
        ];
        // Redirect to checkout view with the booking details
        return view('paymentpage', compact('bookingDetails', 'product'));
    }
    public function processPayment(Request $request)
    {
        // Validate and store the uploaded file
        $request->validate([
            'jaminan_ktp' => 'required|image|mimes:jpeg,png,jpg|max:2048', // Adjust max size as needed
        ]);

        // Store the uploaded file
        if ($request->hasFile('jaminan_ktp')) {
            $path = $request->file('jaminan_ktp')->store('jaminan_ktp', 'public');
        }

        // Process payment or further booking logic here
        // Pass $path to store the file path or any other required processing

        return redirect()->route('checkout.confirmation')->with('success', 'Booking confirmed');
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show() {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update()
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payment $payment)
    {
        //
    }
}
