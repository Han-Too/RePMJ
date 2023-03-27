<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\TeralisPintu;
use App\Http\Requests\StoreTeralisPintuRequest;
use App\Http\Requests\UpdateTeralisPintuRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;

class TeralisPintuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teralispintu = TeralisPintu::orderBy('created_at', 'desc')->get();
        return view('adminpage.barangpages.teralispintu.teralispintu', compact('teralispintu'));
    }

    public function landingindex()
    {
        $user = Auth::user();
        $teralispintu = TeralisPintu::orderBy('created_at', 'desc')->get();
        return view('landingpage.barang.barangtralispintu', compact('teralispintu','user'));
    }

    public function landingdetail($id)
    {
        $user = Auth::user();
        $teralispintu = TeralisPintu::find($id);
        return view('landingpage.barang.detailbarang.teralispintu', compact('teralispintu','user'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminpage.barangpages.teralispintu.addteralispintu');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTeralisJendelaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $filename = time() . $request->file('foto')->getClientOriginalName();
        // $path = $request->file('foto')->storeAs('Images/uploads/canopy', $filename);
        // $path = public_path() . '/uploads/canopy';
        // $request->foto->move($path, $filename);
        $request->foto->move('Images/uploads/teralispintu/',$filename);

        $postpagar = TeralisPintu::create([
            "foto" => $filename,
            "judul" => $request["judul"],
            "harga" => $request["harga"],
            "bahan" => $request["bahan"],
            "deskripsi" => $request["deskripsi"],
            "jenis_produk" => $request["jenis_produk"],
            "status" => $request["status"],
        ]);
        Alert::success('Success', 'Data Teralis Jendela has been uploaded !');
        return redirect('/admin/teralispintu');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TeralisJendela $teralisjendela
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teralispintu = TeralisPintu::find($id);
        return view('adminpage.barangpages.teralispintu.editteralispintu', compact('teralispintu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TeralisJendela $teralispintu
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teralispintu = TeralisPintu::find($id);
        return view('adminpage.barangpages.teralispintu.editteralispintu', compact('teralispintu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTeralisJendelaRequest  $request
     * @param  \App\Models\TeralisJendela $pintukasa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->file('foto')) {
            $filename = time() . $request->file('foto')->getClientOriginalName();
            $request->foto->move('Images/uploads/teralispintu/',$filename);

            // hapus file
            $gambar = TeralisPintu::where('id', $id)->first();
            File::delete($gambar->foto);

            // upload file
            $update = TeralisPintu::where("id", $id)->update([
                "foto" => $filename,
            ]);
        }

        $postteralisjendela = TeralisPintu::where("id", $id)->update([
            "judul" => $request["judul"],
            "harga" => $request["harga"],
            "bahan" => $request["bahan"],
            "deskripsi" => $request["deskripsi"],
            "jenis_produk" => $request["jenis_produk"],
            "status" => $request["status"],
        ]);
        Alert::success('Success', 'Data Teralis Pintu has been uploaded !');
        return redirect('/admin/teralispintu');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TeralisJendela $teralisjendela
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gambar = TeralisPintu::where('id', $id)->first();
        File::delete($gambar->foto);

        // hapus data
        TeralisPintu::where('id', $id)->delete();
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
