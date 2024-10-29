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
        //
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
            return view('loginPage.register');
        }
        if($request->password != $request->confirm_password){
            Session::flash('status', 'field');
            Session::flash('massage', 'Password tidak sama !!');
            return view('loginPage.register');
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
        return view('login.loginpage');

    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
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
    public function destroy(User $user)
    {
        //
    }
}
