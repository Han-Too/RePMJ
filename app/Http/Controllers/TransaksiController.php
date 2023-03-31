<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use App\Http\Requests\StoreTransaksiRequest;
use App\Http\Requests\UpdateTransaksiRequest;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi = Transaksi::orderBy('created_at', 'desc')->get();
        // dd($transaksi);
        return view('adminpage.transaksipages.transaksi',compact('transaksi'));
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Canopy  $canopy
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transaksi = Transaksi::where("id_transaksi", $id)->first();
        return view('adminpage.produkpages.editproduk', compact('produk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Canopy  $canopy
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transaksi = Transaksi::where("id_produk", $id)->first();
        // dd($transaksi);
        return view('adminpage.produkpages.editproduk', compact('produk'));
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
        if ($request->file('foto')) {
            $filename = time() . $request->file('foto')->getClientOriginalName();
            $request->foto->move('Images/uploads/produk/',$filename);

            // hapus file
            $gambar = Transaksi::where('id', $id)->first();
            File::delete($gambar->foto);

            // upload file
            $update = Transaksi::where("id", $id)->update([
                "foto" => $filename,
            ]);
        }
        else{
            $gambar = Transaksi::where('id_produk', $id)->first();
            $filename = $gambar->foto;
        }

        $postcanopy = Transaksi::where("id_produk", $id)->update([
            "nama_produk" => $request["judul"],
            "foto" => $filename,
            "jenis_produk" => $request["jenis_produk"],
            "harga" => str_replace(',','',$request["harga"]),
            "keterangan" => $request["keterangan"],
            "status" => $request["status"],
        ]);
        // Alert::success('Success', 'Data Canopy has been Edited !');
        toast('Canopy has been edited !', 'success')->autoClose(1500)->width('400px');
        return redirect('/admin/produk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Canopy  $canopy
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gambar = Transaksi::where('id_produk', $id)->first();
        File::delete($gambar->foto);

        // hapus data
        Transaksi::where('id_produk', $id)->delete();
        return redirect()->back();
    }

    public function buy(Request $request){

        $nama = $request->user;
        $namakerjaan = $this->generateRandomString(2).'-'.$request->nama;
        $bahan = $request->bahan;
        $luas = $request->luas;
        $harga = str_replace(',','',$request->harga);
        $totalharga = (float)$luas * (int)$harga;
        $keterangan = $request->keterangan;

        // dd($totalharga);

        $kerjaan = Pesanan::create([
            "name" => $nama,
            "namapekerjaan" => $namakerjaan,
            "bahan" => $bahan,
            "luas" => $luas,
            "harga" => $harga,
            "totalharga" => $totalharga,
            "keterangan" => $keterangan,
            "status" => 'pending',
        ]);
        toast('Pesanan Telah Dibuat','success');
        // Alert::success('Pesanan Telah Dibuat', 'Mohon Tunggu Telepon Dari Admin!');
        return redirect('/');
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
