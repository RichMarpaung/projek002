<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Http\Request;

class CategoryController extends Controller
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
        return view('Admin.addcategory');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'name.*' => 'required|string|max:255', // Validasi untuk setiap nama kategori
        ]);

        // Menyimpan setiap kategori
        foreach ($request->input('name') as $categoryName) {
            // Gantilah 'Category' dengan nama model kategori Anda
            Category::create(['name' => $categoryName]);
        }

        return redirect(route('admin.category.list'))->with('success', 'Data produk berhasil diperbarui');
    }
    /**
     * Display the specified resource.
     */
    public function show()
    {
        $categories = Category::all();
        return view('Admin.categorylist', compact('categories'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.editcategory', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Cari user berdasarkan ID
        $category = Category::findOrFail($id);

        // Update data category
        $category->name = $request->input('name');


        // Update password hanya jika ada input baru

        // Simpan perubahan ke database
        $category->save();
        // Redirect ke halaman daftar produk
        return redirect(route('admin.category.list'))->with('success', 'Data produk berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('admin.category.list')->with('success', 'category deleted successfully.');
    }
}
