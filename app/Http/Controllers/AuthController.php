<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\Reservation;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {

        return view('login.loginpage');
    }


    public function profile()
    {    $userId = Auth::user()->id;
        $payments = Payment::where('user_id', $userId)->get();
        // Ambil reservasi berdasarkan ID pengguna yang sedang login
        $paymentIds = $payments->pluck('id'); // Ambil ID pembayaran sebagai koleksi

        // Ambil reservasi yang memiliki ID pembayaran yang diambil sebelumnya
        $reservations = Reservation::whereIn('payment_id', $paymentIds)->get();
        // Kembalikan view dengan data reservasi
        return view('profile', compact('reservations'));
    }

    public function authlogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $user = Auth::user();
            // Check the user's role and redirect accordingly
            if ($user->role_id == 1 || $user->role_id ==3 ) {
                return redirect()->intended('/admin');
            } else {
                return redirect()->intended('/');
                }
            // // return redirect()->intended('/dashboard');

        }

        // Debugging information


        Session::flash('status', 'field');
        Session::flash('massage', 'Periksa Email dan Password Anda');
        return view('login.loginpage');
    }
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
