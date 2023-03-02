<?php

namespace App\Http\Controllers;

use App\Models\TanggaPutar;
use App\Http\Requests\StoreTanggaPutarRequest;
use App\Http\Requests\UpdateTanggaPutarRequest;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Support\Facades\File;
class TanggaPutarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posttanggaputar = TanggaPutar::orderBy('created_at', 'desc')->get();
        return view('adminpage.barangpages.tanggaputar.tanggaputar', compact('posttanggaputar'));
    }
    public function landingindex()
    {
        $user = Auth::user();
        $posttanggaputar = TanggaPutar::orderBy('created_at', 'desc')->get();
        return view('landingpage.barang.barangtanggaputar', compact('posttanggaputar','user'));
    }
    public function landingdetail($id)
    {
        $tanggaputar = TanggaPutar::find($id);
        $user = Auth::user();
        return view('landingpage.barang.detailbarang.tanggaputar', compact('tanggaputar','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminpage.barangpages.tanggaputar.addtanggaputar');
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
        $request->foto->move('Images/uploads/tanggaputar/',$filename);

        $postpagar = TanggaPutar::create([
            "foto" => $filename,
            "judul" => $request["judul"],
            "harga" => $request["harga"],
            "bahan" => $request["bahan"],
            "deskripsi" => $request["deskripsi"],
            "jenis_produk" => $request["jenis_produk"],
            "status" => $request["status"],
        ]);
        Alert::success('Success', 'Data Tangga Putar has been uploaded !');
        return redirect('/admin/tanggaputar');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PintuBesi  $PintuBesi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posttanggaputar = TanggaPutar::find($id);
        return view('adminpage.tanggaputar.edittanggaputar', compact('posttanggaputar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PintuBesi  $PintuBesi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posttanggaputar = TanggaPutar::find($id);
        return view('adminpage.barangpages.tanggaputar.edittanggaputar', compact('posttanggaputar'));
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
            $request->foto->move('Images/uploads/tanggaputar/',$filename);

            // hapus file
            $gambar = TanggaPutar::where('id', $id)->first();
            File::delete($gambar->foto);

            // upload file
            $update = TanggaPutar::where("id", $id)->update([
                "foto" => $filename,
            ]);
        }

        $postcanopy = TanggaPutar::where("id", $id)->update([
            "judul" => $request["judul"],
            "harga" => $request["harga"],
            "bahan" => $request["bahan"],
            "deskripsi" => $request["deskripsi"],
            "jenis_produk" => $request["jenis_produk"],
            "status" => $request["status"],
        ]);
        Alert::success('Success', 'Data Tangga Putar has been uploaded !');
        return redirect('/admin/tanggaputar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PintuBesi  $PintuBesi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gambar = TanggaPutar::where('id', $id)->first();
        File::delete($gambar->foto);

        // hapus data
        TanggaPutar::where('id', $id)->delete();
        return redirect()->back();
    }
}
