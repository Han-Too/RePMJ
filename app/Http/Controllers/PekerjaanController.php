<?php

namespace App\Http\Controllers;

use App\Models\Pekerjaan;
use App\Http\Requests\StorePekerjaanRequest;
use App\Http\Requests\UpdatePekerjaanRequest;
use App\Models\Pesanan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PekerjaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pesanan = Pesanan::orderBy('created_at', 'desc')->get();
        $kerja = Pekerjaan::orderBy('created_at', 'desc')->get();
        return view('adminpage.pekerjaanpages.daftarpekerjaan', compact('kerja','pesanan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function print($id)
    {
        $kerja = Pekerjaan::find($id);
        $idnew = $id;
        $judul = $kerja->judul;
        $namakerjaan = explode(",", $kerja->namapekerjaan);
        $bahan = explode(",", $kerja->bahan);
        $bahannew = str_replace('•','<br>•',$bahan);
        $luas = explode(",", $kerja->luas);
        $harga = explode(",", $kerja->harga);
        $totalharga = $kerja->totalharga;
        $keterangan = explode(",", $kerja->keterangan);
        $kolom = count(explode(",", $kerja->luas));
        $hitung = count($harga);
        $totalharga = 0;
        
        for($i = 0; $i < $hitung; $i++){
            $jumlah = $luas[$i]* $harga[$i];
            $totalharga += $jumlah;
        }
        // dd($namakerjaan);

        return view('adminpage.pekerjaanpages.pekerjaan_pdf',
            compact(
                'idnew',
                'kerja',
                'judul',
                'namakerjaan',
                'bahannew',
                'luas',
                'harga',
                'totalharga',
                'keterangan',
                'kolom',
                'hitung',
                'totalharga',
            )
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePekerjaanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $info = $request->all();
        $judul = $request->judul;
        $namakerjaan = implode(",", $request->namakerjaan);
        $bahan = implode(",", $request->bahan);
        $replacebahan = str_replace('•', '<br>•', $bahan);
        // $bahannew = implode(",",$replacebahan);
        $luas = $request->luas;
        $harga = $request->harga;
        $imluas = implode(",", $request->luas);
        $imharga = implode(",", $request->harga);
        $keterangan = implode(",", $request->keterangan);

        $hitung = count($request->harga);
        $totalharga = 0;

        for ($i = 1; $i <= $hitung; $i++) {
            $jumlah = $luas[$i] * $harga[$i];
            $totalharga += $jumlah;
        }

        $kerjaan = Pekerjaan::create([
            "judul" => $judul,
            "namapekerjaan" => $namakerjaan,
            "bahan" => $bahan,
            "luas" => $imluas,
            "harga" => $imharga,
            "totalharga" => $totalharga,
            "keterangan" => $keterangan,
        ]);
        Alert::success('Success', 'Data Pekerjaan has been uploaded !');

        // dd($kerjaan);
        return redirect('/admin/pekerjaan');
    }

    public function kolomstore(Request $request)
    {
        $kolom = $request->kolom;
        return view('adminpage.pekerjaanpages.addpekerjaan', compact('kolom'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pekerjaan  $pekerjaan
     * @return \Illuminate\Http\Response
     */
    public function show(Pekerjaan $pekerjaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pekerjaan  $pekerjaan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kerja = Pekerjaan::find($id);
        $id = $id;
        $judul = $kerja->judul;
        $namakerjaan = explode(",", $kerja->namapekerjaan);
        $bahan = explode(",", $kerja->bahan);
        $luas = explode(",", $kerja->luas);
        $harga = explode(",", $kerja->harga);
        $totalharga = $kerja->totalharga;
        $keterangan = explode(",", $kerja->keterangan);
        $kolom = count(explode(",", $kerja->luas));

        // dd($bahan);
        return view(
            'adminpage.pekerjaanpages.editpekerjaan',
            compact(
                'id',
                'kerja',
                'judul',
                'namakerjaan',
                'bahan',
                'luas',
                'harga',
                'totalharga',
                'keterangan',
                'kolom'
            )
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePekerjaanRequest  $request
     * @param  \App\Models\Pekerjaan  $pekerjaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $info = $request->all();
        $judul = $request->judul;
        $namakerjaan = implode(",", $request->namakerjaan);
        $bahan = implode(",", $request->bahan);
        $replacebahan = str_replace('•', '<br>•', $bahan);
        // $bahannew = implode(",",$replacebahan);
        $luas = $request->luas;
        $harga = $request->harga;
        $imluas = implode(",", $request->luas);
        $imharga = implode(",", $request->harga);
        $keterangan = implode(",", $request->keterangan);

        $hitung = count($request->harga);
        $totalharga = 0;

        for ($i = 0; $i < $hitung; $i++) {
            $jumlah = $luas[$i] * $harga[$i];
            $totalharga += $jumlah;
        }

        $kerjaan = Pekerjaan::where("id", $id)->update([
            "judul" => $judul,
            "namapekerjaan" => $namakerjaan,
            "bahan" => $bahan,
            "luas" => $imluas,
            "harga" => $imharga,
            "totalharga" => $totalharga,
            "keterangan" => $keterangan,
        ]);
        Alert::success('Success', 'Data Pekerjaan has been editted !');
        return redirect('/admin/pekerjaan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pekerjaan  $pekerjaan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pekerjaan::where('id', $id)->delete();
        return redirect()->back();
    }

    public function acc($namakerjaan){
        $kerja = Pesanan::where("namapekerjaan", $namakerjaan)->first();
        $namakerjaan = $kerja->namapekerjaan;
        $bahan = $kerja->bahan;
        $luas = $kerja->luas;
        $harga = $kerja->harga;
        $totalharga = $kerja->totalharga;
        $keterangan = $kerja->keterangan;
        // dd($bahan);

        return view('adminpage.pekerjaanpages.setujuipekerjaan', compact('bahan','totalharga','harga','keterangan','totalharga','namakerjaan','luas'));
    }

    public function buat(Request $request){
        $kerja = Pesanan::where("namapekerjaan", $request->namapekerjaan)->first();
        $judul = $request->judul;
        $namakerjaan = $kerja->namapekerjaan;
        $bahan = $kerja->bahan;
        $luas = $kerja->luas;
        $harga = $kerja->harga;
        $totalharga = $kerja->totalharga;
        $keterangan = $kerja->keterangan;
        
        $kerjaan = Pekerjaan::create([
            "judul" => $judul,
            "namapekerjaan" => substr($namakerjaan,3),
            "bahan" => $bahan,
            "luas" => $luas,
            "harga" => $harga,
            "totalharga" => $totalharga,
            "keterangan" => $keterangan,
        ]);
        $pesan = Pesanan::where("namapekerjaan", $request->namapekerjaan)->update([
            "namapekerjaan" => $namakerjaan,
            "bahan" => $bahan,
            "luas" => $luas,
            "harga" => $harga,
            "totalharga" => $totalharga,
            "keterangan" => $keterangan,
            "status" => 'Disetujui',
        ]);
        // dd($pesan);
        Alert::success('Success', 'Data Telah Disetujui !');
        return redirect('/admin/pekerjaan');
    }
}