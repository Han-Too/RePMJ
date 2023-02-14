<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

use PDF;

class GajiKaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $karyawan = Karyawan::all();
        return view('adminpage.laporanpages.gaji.gajipekerjaan', compact('karyawan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
        $karyawan = Karyawan::find($id);
        $kolom = $request->kolom;
        return view('adminpage.laporanpages.gaji.addgaji', compact('karyawan','kolom'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function cetak(Request $request){
        $karyawan = Karyawan::find($request->id);
        $kerjaan = $request->kerjaan;
        $pendapatan = $request->pendapatan;
        $keterangan = $request->keterangan;
        $kasbon = $request->kasbon;

        $hitung = count($request->pendapatan);
        $total = 0;

        for($i = 1; $i <= $hitung; $i++){
            $total += $pendapatan[$i];
        }

        // dd($totalharga);

        // $pdf = PDF::loadview('adminpage.laporanpages.gaji.printgaji', compact('total','hitung','kasbon','kerjaan','pendapatan','keterangan','karyawan'));
        // return $pdf->download('laporan-karyawan-pdf');
        // return $pdf->stream();
        return view('adminpage.laporanpages.gaji.printgaji', compact('total','hitung','kasbon','kerjaan','pendapatan','keterangan','karyawan'));
    }
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
