<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
{
    try {
        $count = \Illuminate\Support\Facades\DB::table('products')->count();

        return "Database terkoneksi. Jumlah produk: " . $count;
    } catch (\Exception $e) {
        return $e->getMessage();
    }
}

    public function create()
    {
        return 'Halaman Create';
    }

    public function store(Request $request)
    {
        return 'Store berhasil';
    }

    public function edit($id)
    {
        return 'Edit produk ID: ' . $id;
    }

    public function update(Request $request, $id)
    {
        return 'Update produk ID: ' . $id;
    }

    public function destroy($id)
    {
        return 'Hapus produk ID: ' . $id;
    }
}