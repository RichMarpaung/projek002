<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
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
        $validated = $request->validate([
            'category_id' => 'required',
            'name' => 'required',
            'image' => 'image|file|max:2048|mimes:png,jpeg,jpg',
            'description' => 'required',
            'fuel' => 'required',
            'transmission' => 'required',
            'seats' => 'required',
            'price' => 'required',
            'stock' => 'required',
        ]);

        if($request->file('image')){
            $validated['image'] = $request->file('image')->store('product/image_path');
            // $validated['image'] = $request->file('image')->storeAs('product/image_path');
        }
        // dd($validated['image']);
        Product::create($validated);
        return redirect(route('admin.product.list'));
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);

        // Return ke view 'product.detail' dengan data produk
        return view('detailrental', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all(); // Untuk dropdown kategori
        return view('admin.editproduct', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Temukan produk berdasarkan ID
        $product = Product::findOrFail($id);

        // Validasi input
        $validated = $request->validate([
            'category_id' => 'required',
            'name' => 'required',
            'image' => 'image|file|max:2048|mimes:png,jpeg,jpg',
            'description' => 'required',
            'fuel' => 'required',
            'transmission' => 'required',
            'seats' => 'required',
            'price' => 'required',
            'stock' => 'required',
        ]);

        // Jika ada file gambar baru, simpan dan hapus gambar lama
        if ($request->file('image')) {
            // Hapus gambar lama jika ada
            if ($product->image) {
                Storage::delete($product->image);
            }
            // Simpan gambar baru
            $validated['image'] = $request->file('image')->store('product/image_path');
        }

        // Update data produk
        $product->update($validated);

        // Redirect ke halaman daftar produk
        return redirect(route('admin.product.list'))->with('success', 'Data produk berhasil diperbarui');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('admin.product.list')->with('success', 'User deleted successfully.');

    }
}
