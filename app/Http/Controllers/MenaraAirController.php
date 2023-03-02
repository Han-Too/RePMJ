<?php

namespace App\Http\Controllers;

use App\Models\MenaraAir;
use App\Http\Requests\StoreMenaraAirRequest;
use App\Http\Requests\UpdateMenaraAirRequest;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Support\Facades\File;

class MenaraAirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postmenaraair = MenaraAir::orderBy('created_at', 'desc')->get();
        return view('adminpage.barangpages.menaraair.menaraair', compact('postmenaraair'));
    }


    public function landingindex()
    {
        $user = Auth::user();
        $postmenaraair = MenaraAir::orderBy('created_at', 'desc')->get();
        return view('landingpage.barang.barangmenaratangkiair', compact('postmenaraair','user'));
    }

    public function landingdetail($id)
    {
        $user = Auth::user();
        $postmenaraair = MenaraAir::find($id);
        return view('landingpage.barang.detailbarang.menaraair', compact('postmenaraair','user'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminpage.barangpages.menaraair.addmenaraair');
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
        $request->foto->move('Images/uploads/menaraair/', $filename);

        $postpagar = MenaraAir::create([
            "foto" => $filename,
            "judul" => $request["judul"],
            "harga" => $request["harga"],
            "bahan" => $request["bahan"],
            "deskripsi" => $request["deskripsi"],
            "jenis_produk" => $request["jenis_produk"],
            "status" => $request["status"],
        ]);
        Alert::success('Success', 'Data Tangga Putar has been uploaded !');
        return redirect('/admin/menaraair');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PintuBesi  $PintuBesi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $postmenaraair = MenaraAir::find($id);
        return view('adminpage.menaraair.editmenaraair', compact('postmenaraair'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PintuBesi  $PintuBesi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $postmenaraair = MenaraAir::find($id);
        return view('adminpage.barangpages.menaraair.editmenaraair', compact('postmenaraair'));
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
            $request->foto->move('Images/uploads/menaraair/', $filename);

            // hapus file
            $gambar = MenaraAir::where('id', $id)->first();
            File::delete($gambar->foto);

            // upload file
            $update = MenaraAir::where("id", $id)->update([
                "foto" => $filename,
            ]);
        }

        $postcanopy = MenaraAir::where("id", $id)->update([
            "judul" => $request["judul"],
            "harga" => $request["harga"],
            "bahan" => $request["bahan"],
            "deskripsi" => $request["deskripsi"],
            "jenis_produk" => $request["jenis_produk"],
            "status" => $request["status"],
        ]);
        Alert::success('Success', 'Data Menara Air has been uploaded !');
        return redirect('/admin/menaraair');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PintuBesi  $PintuBesi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gambar = MenaraAir::where('id', $id)->first();
        File::delete($gambar->foto);

        // hapus data
        MenaraAir::where('id', $id)->delete();
        return redirect()->back();
    }
}