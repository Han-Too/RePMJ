<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Http\Requests\StoreKaryawanRequest;
use App\Http\Requests\UpdateKaryawanRequest;

use PDF;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $karyawan = Karyawan::orderBy('created_at', 'desc')->get();
        return view('adminpage.karyawanpages.daftarkaryawan', compact('karyawan'));
    }


    public function landingindex()
    {
        $karyawan = Karyawan::orderBy('created_at', 'desc')->get();
        return view('landingpage.barang.barangkaryawan', compact('karyawan'));
    }

    public function landingdetail($id)
    {
        $karyawan = Karyawan::find($id);
        return view('landingpage.barang.detailbarang.karyawanbesi', compact('karyawan'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminpage.karyawanpages.addkaryawan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePintuBesiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $karyawan = Karyawan::create([
            "nama" => $request["nama"],
            "email" => $request["email"],
            "telepon" => $request["telepon"],
            "status" => $request["status"],
        ]);
        Alert::success('Success', 'Data Karyawan has been uploaded !');
        return redirect('/admin/karyawan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PintuBesi  $PintuBesi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $karyawan = Karyawan::find($id);
        return view('adminpage.karyawanpages.editkaryawan', compact('karyawan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PintuBesi  $PintuBesi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $karyawan = Karyawan::find($id);
        return view('adminpage.karyawanpages.editkaryawan', compact('karyawan'));
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

        $karyawan = Karyawan::where("id", $id)->update([
            "nama" => $request["nama"],
            "email" => $request["email"],
            "telepon" => $request["telepon"],
            "status" => $request["status"],
        ]);
        Alert::success('Success', 'Data Karyawan has been Update !');
        // toast('pagar has been edited !', 'success')->autoClose(1500)->width('400px');
        return redirect('/admin/karyawan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PintuBesi  $PintuBesi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // hapus data
        Karyawan::where('id', $id)->delete();
        return redirect()->back();
    }

    public function cetak_pdf()
    {
        $karyawan = Karyawan::all();

        $pdf = PDF::loadview('adminpage.karyawanpages.karyawan_pdf', ['karyawan' => $karyawan]);
        // return $pdf->download('laporan-karyawan-pdf');
        return $pdf->stream();
    }
}