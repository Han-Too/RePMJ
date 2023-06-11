<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Support\Facades\File;
use Symfony\Component\Console\Input\Input;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = Produk::orderBy('created_at', 'desc')->get();
        // dd($produk);
        return view('adminpage.produkpages.produk', compact('produk'));
    }

    public function landingindex()
    {
        $produk = Produk::orderBy('created_at', 'desc')->get();
        $user = Auth::user();
        return view('landingpage.barang.barangkanopi', compact('produk', 'user'));
    }

    public function kanopiview()
    {
        $kanopi = Produk::where('jenis_produk', 'canopy')->get();
        $user = Auth::user();
        return view('landingpage.barang.barangkanopi', compact('kanopi', 'user'));
    }

    public function detailproduk($id)
    {
        $produk = Produk::where('id_produk', $id)->first();
        $user = Auth::user();
        return view('landingpage.barang.detail', compact('produk', 'user'));
    }

    public function landingdetail($id)
    {
        $kanopi = Produk::find($id);
        $user = Auth::user();
        return view('landingpage.produk.detailproduk.kanopi', compact('kanopi', 'user'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminpage.produkpages.addproduk');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCanopyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->bahan);
        $filename = time() . $request->file('foto')->getClientOriginalName();
        // $path = $request->file('foto')->storeAs('Images/uploads/canopy', $filename);
        // $path = public_path() . '/uploads/canopy';
        // $request->foto->move($path, $filename);
        $request->foto->move('Images/uploads/produk/', $filename);
        
        $bahan = $request->bahan;
        $bahannew = str_replace('•','<br>•',$bahan);

        $postcanopy = Produk::create([
            "nama_produk" => $request["judul"],
            "bahan" => $bahannew,
            "foto" => $filename,
            "jenis_produk" => $request["jenis_produk"],
            "harga" => str_replace(',', '', $request["harga"]),
            "keterangan" => $request["deskripsi"],
            "status" => $request["status"],
        ]);
        // Alert::success('Success', 'Data Produk has been uploaded !');
        toast('Berhasil Ditambahkan', 'success')->autoClose(1500);
        return redirect('/admin/produk');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Canopy  $canopy
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produk = Produk::find($id);
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
        $produk = Produk::where("id_produk", $id)->first();
        $bahan = str_replace("<br>", "", $produk->bahan);
        // dd($produk);
        return view('adminpage.produkpages.editproduk', compact('produk','bahan'));
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
            $request->foto->move('Images/uploads/produk/', $filename);

            // hapus file
            $gambar = Produk::where('id', $id)->first();
            File::delete($gambar->foto);

            // upload file
            $update = Produk::where("id", $id)->update([
                "foto" => $filename,
            ]);
        } else {
            $gambar = Produk::where('id_produk', $id)->first();
            $filename = $gambar->foto;
        }

        
        $bahan = $request->bahan;
        $bahannew = str_replace('•','<br>•',$bahan);
        $postcanopy = Produk::where("id_produk", $id)->update([
            "nama_produk" => $request["judul"],
            "bahan" => $bahannew,
            "foto" => $filename,
            "jenis_produk" => $request["jenis_produk"],
            "harga" => str_replace(',', '', $request["harga"]),
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
        $gambar = Produk::where('id_produk', $id)->first();
        File::delete($gambar->foto);

        // hapus data
        Produk::where('id_produk', $id)->delete();
        return redirect()->back();
    }

    public function buy(Request $request)
    {

        $nama = $request->user;
        $namakerjaan = $this->generateRandomString(2) . '-' . $request->nama;
        $bahan = $request->bahan;
        $luas = $request->luas;
        $harga = str_replace(',', '', $request->harga);
        $totalharga = (float) $luas * (int) $harga;
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
        toast('Pesanan Telah Dibuat', 'success');
        // Alert::success('Pesanan Telah Dibuat', 'Mohon Tunggu Telepon Dari Admin!');
        return redirect('/');
    }

    public function mesanproduk(Request $request, $id)
    {
        $pesanan = Pesanan::where('name', $request->user)->first();
        $cekproduk = Pesanan::where('id_produk', $id)->first();
        if($cekproduk == null){
        // dd($request->all());
        $produk = Produk::where('id_produk', $id)->first();
        // dd($produk);
        $pesan = Pesanan::create([
            "name" => $request->user,
            "id_produk" => $id,
            "nama_produk" => $produk->nama_produk,
            "jumlah_pesanan" => $request->jumlah,
            "tanggal_pesanan" => $request->tanggal,
            "status_pesanan" => $request->status,
            "total_harga" => (int)$request->jumlah * (int)$produk->harga,
        ]);
            return redirect('cekpesanan')->with('alert', 'Pesanan Telah Dibuat!');
        }
        else{
            return redirect()->route('cekpesanan')->with('alert', 'Pesanan Sebelumnya Sudah Terbuat!');
        }
    }

    function generateRandomString($length)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ-_=+[]{};:,.<>/?~!@#$%^&*()';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}