<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return Products::all();
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
        //
        $product = new Products();
        $product->nama = $request->nama;
        $product->kategori = $request->kategori;
        $product->harga = $request->harga;

        if($product->save()){
            return 'Data berhasil di-input!';
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return Products::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $product = Products::find($id);
        $product->nama = $request->nama;
        $product->kategori = $request->kategori;
        $product->harga = $request->harga;

        if($product->save()){
            return 'Data berhasil di-update!';
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $product = Products::find($id);
        if($product->delete()){
            return 'Data berhasil dihapus';
        }
    }
}
