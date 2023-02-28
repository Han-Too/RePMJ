<?php

namespace App\Http\Controllers;

use App\Models\RailingTangga;
use App\Http\Requests\StoreRailingTanggaRequest;
use App\Http\Requests\UpdateRailingTanggaRequest;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Support\Facades\File;

class RailingTanggaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postrailingtangga = RailingTangga::orderBy('created_at', 'desc')->get();
        return view('adminpage.barangpages.railingtangga.railingtangga', compact('postrailingtangga'));
    }

    public function landingindex()
    {
        $postrailingtangga = RailingTangga::orderBy('created_at', 'desc')->get();
        return view('landingpage.barang.barangrailingtangga', compact('postrailingtangga'));
    }

    public function landingdetail($id)
    {
        $railingtangga = RailingTangga::find($id);
        return view('landingpage.barang.detailbarang.railingtangga', compact('railingtangga'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminpage.barangpages.railingtangga.addrailingtangga');
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
        $request->foto->move('Images/uploads/railingtangga/',$filename);

        $postpagar = RailingTangga::create([
            "foto" => $filename,
            "judul" => $request["judul"],
            "harga" => $request["harga"],
            "bahan" => $request["bahan"],
            "deskripsi" => $request["deskripsi"],
            "jenis_produk" => $request["jenis_produk"],
            "status" => $request["status"],
        ]);
        Alert::success('Success', 'Data Railing Tangga has been uploaded !');
        return redirect('/admin/railingtangga');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PintuBesi  $PintuBesi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $postrailingtangga = RailingTangga::find($id);
        return view('adminpage.railingtangga.editrailingtangga', compact('postrailingtangga'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PintuBesi  $PintuBesi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $postrailingtangga = RailingTangga::find($id);
        return view('adminpage.barangpages.railingtangga.editrailingtangga', compact('postrailingtangga'));
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
            $request->foto->move('Images/uploads/railingtangga/',$filename);

            // hapus file
            $gambar = RailingTangga::where('id', $id)->first();
            File::delete($gambar->foto);

            // upload file
            $update = RailingTangga::where("id", $id)->update([
                "foto" => $filename,
            ]);
        }

        $postcanopy = RailingTangga::where("id", $id)->update([
            "judul" => $request["judul"],
            "harga" => $request["harga"],
            "bahan" => $request["bahan"],
            "deskripsi" => $request["deskripsi"],
            "jenis_produk" => $request["jenis_produk"],
            "status" => $request["status"],
        ]);
        Alert::success('Success', 'Data Railing Tangga has been Edited !');
        return redirect('/admin/railingtangga');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PintuBesi  $PintuBesi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gambar = RailingTangga::where('id', $id)->first();
        File::delete($gambar->foto);

        // hapus data
        RailingTangga::where('id', $id)->delete();
        return redirect()->back();
    }
}
