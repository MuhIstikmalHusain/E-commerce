<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProdukController extends Controller
{
    public function index()
    {
        $produk = Product::all();
        return view('admins.dashboard', compact('produk'));
    }

    public function create()
    {
        return view('admins.create');
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_produk' => 'required',
            'harga_produk' => 'required',
            'gambar_produk' => 'required|image:png, jpg,jpeg|max:2048',
            'deskripsi_produk' => 'required'
        ]);
        $file = $request->file('gambar_produk');
        $fileName = uniqid(). '.'. $file->getClientOriginalExtension();
        $file->storeAs('public/photo', $fileName);
        $data ['gambar_produk'] = $fileName;

        Product::create($data);
        return redirect('admin-pages');
    }

    public function edit(string $id)
    {
        $produk = Product::where('id', $id)->first();
        return view('admins.edit', compact ('produk'));
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'nama_produk' => 'required',
            'harga_produk' => 'required',
            'deskripsi_produk' => 'required'
        ]);
        // Periksa apakah ada gambar yang diunggah
        if ($request->hasFile('gambar_produk')) {
            $file = $request->file('gambar_produk');
            $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/photo', $fileName);
            $data['gambar_produk'] = $fileName;
        }
        // Update data produk
        Product::where('id', $request->id)->update($data);
        return redirect('admin-pages');
    }

    public function destroy(string $id)
    {
        Product::where('id', $id)->delete();
        return redirect('admin-pages');
    }

    public function show()
    {
        $produk = Product::all();
        return view('admins.dashboard', compact('produk'));
    }

}
