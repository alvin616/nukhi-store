<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return 'Laravel berhasil berjalan';
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