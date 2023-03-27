<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\TanggaBesi;
use App\Http\Requests\StoreTanggaBesiRequest;
use App\Http\Requests\UpdateTanggaBesiRequest;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Support\Facades\File;
class TanggaBesiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posttanggabesi = TanggaBesi::orderBy('created_at', 'desc')->get();
        return view('adminpage.barangpages.tanggabesi.tanggabesi', compact('posttanggabesi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function landingindex()
    {
        $user = Auth::user();
        $posttanggabesi = TanggaBesi::orderBy('created_at', 'desc')->get();
        return view('landingpage.barang.barangtanggabesi', compact('posttanggabesi','user'));
    }

    public function landingdetail($id)
    {
        $tanggabesi = TanggaBesi::find($id);
        $user = Auth::user();
        return view('landingpage.barang.detailbarang.tanggabesi', compact('tanggabesi','user'));
    }
    public function create()
    {
        return view('adminpage.barangpages.tanggabesi.addtanggabesi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePintuBesiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $filename = time() . $request->file('foto')->getClientOriginalName();
        // $path = $request->file('foto')->storeAs('Images/uploads/canopy', $filename);
        // $path = public_path() . '/uploads/canopy';
        // $request->foto->move($path, $filename);
        $request->foto->move('Images/uploads/tanggabesi/',$filename);

        $postpagar = TanggaBesi::create([
            "foto" => $filename,
            "judul" => $request["judul"],
            "harga" => $request["harga"],
            "bahan" => $request["bahan"],
            "deskripsi" => $request["deskripsi"],
            "jenis_produk" => $request["jenis_produk"],
            "status" => $request["status"],
        ]);
        Alert::success('Success', 'Data Tangga Besi has been uploaded !');
        return redirect('/admin/tanggabesi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PintuBesi  $PintuBesi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posttanggabesi = TanggaBesi::find($id);
        return view('adminpage.tanggabesi.edittanggabesi', compact('posttanggabesi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PintuBesi  $PintuBesi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posttanggabesi = TanggaBesi::find($id);
        return view('adminpage.barangpages.tanggabesi.edittanggabesi', compact('posttanggabesi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePintuBesiRequest  $request
     * @param  \App\Models\PintuBesi  $PintuBesi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->file('foto')) {
            $filename = time() . $request->file('foto')->getClientOriginalName();
            $request->foto->move('Images/uploads/tanggabesi/',$filename);

            // hapus file
            $gambar = TanggaBesi::where('id', $id)->first();
            File::delete($gambar->foto);

            // upload file
            $update = TanggaBesi::where("id", $id)->update([
                "foto" => $filename,
            ]);
        }

        $postcanopy = TanggaBesi::where("id", $id)->update([
            "judul" => $request["judul"],
            "harga" => $request["harga"],
            "bahan" => $request["bahan"],
            "deskripsi" => $request["deskripsi"],
            "jenis_produk" => $request["jenis_produk"],
            "status" => $request["status"],
        ]);
        Alert::success('Success', 'Data Tangga Besi has been uploaded !');
        return redirect('/admin/tanggabesi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PintuBesi  $PintuBesi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gambar = TanggaBesi::where('id', $id)->first();
        File::delete($gambar->foto);

        // hapus data
        TanggaBesi::where('id', $id)->delete();
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
