<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Menampilkan semua produk
    public function index()
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    // Menampilkan form tambah produk
    public function create()
    {
        return view('product.create');
    }

    // Menyimpan produk baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric'
        ]);

        Product::create($request->all());

        return redirect()->route('product.index');
    }

    // Menampilkan form edit
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('product.edit', compact('product'));
    }

    // Update data
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->update($request->all());

        return redirect()->route('product.index');
    }

    // Hapus produk
    public function destroy($id)
    {
        Product::destroy($id);
        return back();
    }
}
