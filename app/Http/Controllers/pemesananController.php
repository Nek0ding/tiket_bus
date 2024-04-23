<?php

namespace App\Http\Controllers;

use App\Models\pemesanan;
use Illuminate\Http\Request;

class pemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pemesanan');
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
        $pesan = new pemesanan();
        $pesan->nama_pemesan = $request->nama;
        $pesan->nomor_identitas = $request->nomor_identitas;
        $pesan->nomor_hp = $request->nomor_hp;
        $pesan->kelas_penumpang = $request->kelas_penumpang;
        $pesan->tanggal_keberangkatan = $request->jadwal_keberangkatan;
        $pesan->jumlah_penumpang = $request->jumlah_penumpang;
        $pesan->jumlah_penumpang_lansia = $request->jumlah_lansia;
        $pesan->total = $request->total;
        $pesan->potongan_harga = $request->potongan_harga;
        $pesan->total_bayar = $request->total_bayar;
        $pesan->save();

        $data = pemesanan::find($pesan->id);
        return view('hasil',compact('data'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
