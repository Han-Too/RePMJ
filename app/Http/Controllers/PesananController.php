<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\Pesanan;
use App\Models\Produk;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use App\Http\Requests\StorePesananRequest;
use App\Http\Requests\UpdatePesananRequest;
use App\Models\DetailPesanan;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pesanan = Pesanan::orderBy('created_at', 'desc')->get();
        // dd($pesanan);
        return view('adminpage.pesananpages.pesanan',compact('pesanan'));
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Canopy  $canopy
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pesanan = Pesanan::where("id_pesanan", $id)->first();
        return view('adminpage.pesananpages.editpesanan', compact('pesanan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Canopy  $canopy
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pesanan = Pesanan::where("id_pesanan", $id)->first();
        $produk = Produk::where("id_produk", $pesanan->id_produk)->first();
        $pegawai = Pegawai::orderBy('created_at', 'desc')->get();
        
        return view('adminpage.pesananpages.editpesanan', compact('pesanan','produk','pegawai'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCanopyRequest  $request
     * @param  \App\Models\Canopy  $canopy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->status === 'terima'){
        $pesanan = Pesanan::where("id_pesanan", $id)->first();
        $produk = Produk::where("id_produk", $pesanan->id_produk)->first();
        // dd($request->all());

        $transaksi = Transaksi::create([
            'id_pesanan' => $id,
            "name" => $pesanan->name,
            'id_produk' => $pesanan->id_produk,
            "tanggal_transaksi" => $request->tanggal,
            'jumlah_produk' => $pesanan->jumlah_pesanan,
            "total_harga" => $pesanan->total_harga,
            'nama_pegawai' => $request->pegawai,
            "status_transaksi" => "proses",
        ]);
        Pesanan::where('id_pesanan', $id)->delete();

        // Alert::success('Success', 'Data Canopy has been Edited !');
        toast('Pesanan Telah Diterima !', 'success')->autoClose(1500)->width('400px');
        return redirect()->route('admin.pesanan.index');
        }
        else {
            toast('Pesanan Masih Pending !', 'warning')->autoClose(1500)->width('400px');
            return redirect()->route('admin.pesanan.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Canopy  $canopy
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pesanan::where('id_pesanan', $id)->delete();
        return redirect()->back();
    }


    function generateRandomString($length) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ-_=+[]{};:,.<>/?~!@#$%^&*()';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
