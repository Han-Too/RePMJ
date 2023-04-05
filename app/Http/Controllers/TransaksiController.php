<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use App\Http\Requests\StoreTransaksiRequest;
use App\Http\Requests\UpdateTransaksiRequest;
use App\Models\Laporan;
use App\Models\Produk;

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
        return view('adminpage.produkpages.editproduk', compact('transaksi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Canopy  $canopy
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transaksi = Transaksi::where("id_transaksi", $id)->first();
        $produk = Produk::where("id_produk", $id)->first();
        $pegawai = Pegawai::orderBy('created_at', 'desc')->get();
        // dd($transaksi);
        return view('adminpage.transaksipages.edittransaksi', compact('transaksi','produk','pegawai'));
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

        $update = Transaksi::where("id_transaksi", $id)->update([
            "id_pesanan" => $request->idpesanan,
            "name" => $request->nama,
            "id_produk" => $request->idproduk,
            "tanggal_transaksi" => $request->tanggal,
            "jumlah_produk" => $request->jumlah,
            "total_harga" => $request->totalharga,
            "nama_pegawai" => $request->pegawai,
            "status_transaksi" => $request->status,
        ]);

        if($request->status === "selesai"){
            $produk = Produk::where("id_produk",$request->idproduk)->first();
            // dd($request->totalharga);
            $update = Laporan::create([
                "id_transaksi" => $id,
                "id_produk" => $request->idproduk,
                "judul_pekerjaan" => "Laporan Pekerjaan ".$request->nama,
                "nama_pekerjaan" => $produk->nama_produk,
                "bahan" => $request->tanggal,
                "jumlah" => $request->jumlah,
                "harga" => $produk->harga,
                "totalharga" => $request->totalharga,

            ]);
            toast('Data Transaksi Telah Diselesaikan !', 'success')->autoClose(1500)->width('400px');
            return redirect('/admin/transaksi');
        }
        else {
        // Alert::success('Success', 'Data Canopy has been Edited !');
        toast('Data Transaksi Telah Dirubah !', 'success')->autoClose(1500)->width('400px');
        return redirect('/admin/transaksi');
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

        $kerjaan = Transaksi::create([
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

    public function print($id)
    {
        $data = Laporan::where('id_transaksi', $id)->first();
        $produk = Produk::where('id_produk', $data->id_produk)->first();

        return view('adminpage.transaksipages.printlaporan',
            compact(
                'data',
                'produk',
            )
        );
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
