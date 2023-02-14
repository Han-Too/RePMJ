<?php

namespace App\Http\Controllers;

use App\Models\LaporanPekerjaan;
use App\Http\Requests\StoreLaporanPekerjaanRequest;
use App\Http\Requests\UpdateLaporanPekerjaanRequest;
use Illuminate\Http\Request;

class LaporanPekerjaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adminpage.laporanpages.laporan.daftarlaporan');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminpage.laporanpages.laporan.addlaporan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLaporanPekerjaanRequest  $request
     * @return \Illuminate\Http\Response
     */

    public function kolomstore(Request $request){
        $kolom = $request->kolom;
        return view('adminpage.laporanpages.laporan.addlaporan', compact('kolom'));
    }

    public function store(Request $request)
    {
        $info = $request->all();
        
        $judul = $request->judul;
        $judulkerjaan = $request->judulkerjaan;
        $bahan = $request->bahan;
        $bahannew = str_replace('•','<br>•',$bahan);
        $luas = $request->luas;
        $harga = $request->harga;
        // $jumlah = $request->jumlah;
        // $harga = intval(str_replace(',','',$request->harga));

        $keterangan = $request->keterangan;

        $hitung = count($request->harga);
        $totalharga = 0;
        
        for($i = 1; $i <= $hitung; $i++){
            $jumlah = $luas[$i]* $harga[$i];
            $totalharga += $jumlah;
        }
        // dd($info);
        // dd($totalharga);
        
        return view('adminpage.laporanpages.laporan.printlaporan', compact('totalharga','bahannew','judul','hitung','info','judulkerjaan','bahan','harga','keterangan','luas','jumlah'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LaporanPekerjaan  $laporanPekerjaan
     * @return \Illuminate\Http\Response
     */
    public function show(LaporanPekerjaan $laporanPekerjaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LaporanPekerjaan  $laporanPekerjaan
     * @return \Illuminate\Http\Response
     */
    public function edit(LaporanPekerjaan $laporanPekerjaan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLaporanPekerjaanRequest  $request
     * @param  \App\Models\LaporanPekerjaan  $laporanPekerjaan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLaporanPekerjaanRequest $request, LaporanPekerjaan $laporanPekerjaan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LaporanPekerjaan  $laporanPekerjaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(LaporanPekerjaan $laporanPekerjaan)
    {
        //
    }
}
