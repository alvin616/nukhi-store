<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    // Tampilkan daftar produk
    public function index()
    {
        try {
            $products = Product::latest()->get();

            return view('products.index', compact('products'));

        } catch (\Exception $e) {
            return "Database Error: " . $e->getMessage();
        }
    }

    // Form tambah produk
    public function create()
    {
        return view('products.create');
    }

    // Simpan produk
    public function store(Request $request)
    {
        Product::create($request->all());

        return redirect()->route('products.index')
            ->with('success', 'Produk berhasil ditambahkan');
    }

    // Form edit
    public function edit($id)
    {
        $product = Product::findOrFail($id);

        return view('products.edit', compact('product'));
    }

    // Update produk
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $product->update($request->all());

        return redirect()->route('products.index')
            ->with('success', 'Produk berhasil diupdate');
    }

    // Hapus produk
    public function destroy($id)
    {
        Product::destroy($id);

        return redirect()->route('products.index')
            ->with('success', 'Produk berhasil dihapus');
    }
}