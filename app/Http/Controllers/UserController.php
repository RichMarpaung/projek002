<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.adduser');
    }
    public function storeFromAdmin(Request $request)
    {
        // Validasi input dengan konfirmasi password
        $request->validate([
            'role_id' => 'required|in:1,2,3',
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|string|max:15',
            'password' => 'required|string|min:8|confirmed', // Menggunakan aturan confirmed
        ]);

        // Buat pengguna baru
        $user = new User();
        $user->role_id = $request->input('role_id');
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        // Set pesan sukses dan redirect
        return redirect()->route('admin.user.list')->with('status', 'User added successfully.');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $request->validate(
            ['name'=>'required',
            'phone'=>'required',
            'email' => 'required',
            'password'=> 'required',
            'role_id'=> 'required',
            'confirm_password' => 'required',
        ]);
        if(!$validasi ){
            Session::flash('status', 'field');
            Session::flash('massage', 'Periksa Data Anda Kembali');
            return redirect(route('register'))->with('success', 'Data produk berhasil diperbarui');
            // return view('loginPage.register');
        }
        if($request->password != $request->confirm_password){
            Session::flash('status', 'field');
            Session::flash('massage', 'Password tidak sama !!');
            return redirect(route('register'))->with('success', 'Data produk berhasil diperbarui');
            // return view('loginPage.register');
        }
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'role_id' => $request->role_id,
            'password' =>Hash::make($request->password) ,
        ]);
        Session::flash('status', 'success');
        Session::flash('massage', 'Akun Berhasil Didaftarkan Silahkan Login!');
        return redirect(route('login'))->with('success', 'Data produk berhasil diperbarui');
        // return view('login.loginpage');

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $users = User::all();
        return view('admin.userlist', compact('users'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.edituser', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'phone' => 'nullable|string|max:15',
            'password' => 'nullable|string|min:8',
        ]);

        // Cari user berdasarkan ID
        $user = User::findOrFail($id);

        // Update data user
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');

        // Update password hanya jika ada input baru
        if ($request->filled('password')) {
            $user->password = Hash::make($request->input('password'));
        }

        // Simpan perubahan ke database
        $user->save();
        // Redirect ke halaman daftar produk
        return redirect(route('admin.user.list'))->with('success', 'Data produk berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('admin.user.list')->with('success', 'User deleted successfully.');
    }
}
