<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukControllers extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produk = Produk::latest()->paginate(5);

        return view('produk.index', compact('produk'))
            ->with('i', (request()->input('page', 1) -1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'namaProduk' => 'required',
            'kodeProduk' => 'required',
            'harga' => 'required',
        ]);
        Produk::create($request->all());

        return redirect()->route('produk.index')
            ->with('success', 'Data Produk Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Produk $produk)
    {
        return view('produk.show', compact('produk'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produk $produk)
    {
        return view('produk.edit', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produk $produk)
    {
        $request->validate([
            'namaProduk' => 'required',
            'kodeProduk' => 'required',
            'harga' => 'required',
        ]);

        $produk->update($request->all());

        return redirect()->route('produk.index')
            ->with('success', 'Data Produk Berhasil Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produk $produk)
    {
        $produk->delete();

        return redirect()->route('produk.index')
            ->with('success', 'Data Produk Berhasil Dihapus');
    }
}
