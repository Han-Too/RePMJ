<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use App\Http\Requests\StorePegawaiRequest;
use App\Http\Requests\UpdatePegawaiRequest;

use PDF;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pegawai = Pegawai::orderBy('created_at', 'desc')->get();
        return view('adminpage.pegawaipages.daftarpegawai', compact('pegawai'));
    }


    public function landingindex()
    {
        $pegawai = Pegawai::orderBy('created_at', 'desc')->get();
        return view('landingpage.barang.barangpegawai', compact('pegawai'));
    }

    public function landingdetail($id)
    {
        $pegawai = Pegawai::find($id);
        return view('landingpage.barang.detailbarang.pegawaibesi', compact('pegawai'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminpage.pegawaipages.addpegawai');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePintuBesiRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pegawai = Pegawai::create([
            "nama_pegawai" => $request["nama"],
            "telepon" => $request["telepon"],
            "email" => $request["email"],
            "jabatan" => $request["jabatan"],
        ]);
        // Alert::success('Success', 'Data pegawai has been uploaded !');
        toast('Pegawai Berhasil Ditambahkan !', 'success')->autoClose(1500)->width('400px');
        return redirect('/admin/pegawai');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PintuBesi  $PintuBesi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pegawai = Pegawai::where('id_pegawai', $id)->first();
        return view('adminpage.pegawaipages.editpegawai', compact('pegawai'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PintuBesi  $PintuBesi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pegawai = Pegawai::where('id_pegawai', $id)->first();
        return view('adminpage.pegawaipages.editpegawai', compact('pegawai'));
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
        $pegawai = Pegawai::where("id_pegawai", $id)->update([
            "nama_pegawai" => $request["nama"],
            "telepon" => $request["telepon"],
            "email" => $request["email"],
            "jabatan" => $request["jabatan"],
        ]);
        // Alert::success('Success', 'Data pegawai has been Update !');
        toast('Pegawai Berhasil Dirubah !', 'success')->autoClose(1500)->width('400px');
        return redirect('/admin/pegawai');
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
        Pegawai::where('id_pegawai', $id)->delete();
        return redirect()->back();
    }

    public function cetak_pdf()
    {
        $pegawai = Pegawai::all();

        $pdf = PDF::loadview('adminpage.pegawaipages.pegawai_pdf', ['pegawai' => $pegawai]);
        // return $pdf->download('laporan-pegawai-pdf');
        return $pdf->stream();
    }
}
