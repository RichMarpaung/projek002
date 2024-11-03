<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePaymentRequest;
use App\Http\Requests\UpdatePaymentRequest;
use App\Models\Payment;
use App\Models\Product;
use App\Models\Reservation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

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
            'time-start'=>$request->input('start_date'),
            'time-end'=>$request->input('end_date'),
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
        $request->validate([
            'phone' => 'required|string',
            'jaminan_ktp' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'product_id' => 'required|exists:products,id',
        ]);

        $jaminanPath = $request->file('jaminan_ktp')->store('jaminan', 'public');

        $payment = Payment::create([
            'user_id' => Auth::id(),
            'product_id' => $request->product_id,
            'awal_sewa' => $request->date_start,
            'akhir_sewa' => $request->date_end,
            'total_payment' => $request->total_price,
            'jaminan' => $jaminanPath,
        ]);

        $reservation = Reservation::create([
            'payment_id' => $payment->id,
            'code_reservasi' => Str::upper(Str::random(10)),
            'status' => 'Pending',
        ]);

        return redirect()->route('admin.dashboard');

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
