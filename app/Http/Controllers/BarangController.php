<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangs = Barang::all();
        // echo '<pre>';
        // print_r($barangs);
        // die;
        return view('barang.main', [
            'barangs' => $barangs,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barang.input');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'nama_barang' => 'required|string',
            'harga_asli' => 'required|integer',
            'harga_jual' => 'required|integer',
            'stok' => 'required|integer',
            'barcode' => 'required',
            'foto' => 'required'
        ]);
        Barang::create($validatedData);
        return redirect('/barang')->with('success', 'Data have been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(Barang $barang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function edit(Barang $barang)
    {
        // return $barang;
        return view('barang.update', [
            "barang" => $barang,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barang $barang)
    {
        $validatedData = $request->validate([
            'nama_barang' => 'required|string',
            'harga_asli' => 'required|integer',
            'harga_jual' => 'required|integer',
            'stok' => 'required|integer',
            'barcode' => 'required',
            'foto' => 'required'
        ]);
        $Updatebarang = Barang::findOrFail($barang->id);
        $Updatebarang->update($validatedData);
        return redirect('/barang')->with('success', 'Data have been updated!');
        // return view('barang.update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barang $barang)
    {
        //
    }
}
