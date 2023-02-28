<?php

namespace App\Http\Controllers;

use App\Models\LaporanPekerjaan;
use App\Http\Requests\StoreLaporanPekerjaanRequest;
use App\Http\Requests\UpdateLaporanPekerjaanRequest;
use Illuminate\Http\Request;

class SuratJalanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adminpage.laporanpages.suratjalan.daftarsuratjalan');
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
        return view('adminpage.laporanpages.suratjalan.addsuratjalan', compact('kolom'));
    }

    public function store(Request $request)
    {
        $info = $request->all();
        
        $namabarang = $request->namabarang;
        $jumlah = $request->jumlah;
        $keterangan = $request->keterangan;
        $pelanggan = $request->pelanggan;
        $alamat = $request->alamat;
        $tanggal = $request->tanggal;
        $nopol = $request->nopol;
        $kendaraan = $request->kendaraan;
        $nomor = $request->nomorsurat;
        $kolom = count($namabarang);
        // dd(count($namabarang));
        // dd($totalharga);
        
        return view('adminpage.laporanpages.suratjalan.printsuratjalan', compact('kolom','nomor','nopol','kendaraan','namabarang', 'jumlah', 'keterangan', 'pelanggan', 'alamat', 'tanggal'));
    }

    
}
