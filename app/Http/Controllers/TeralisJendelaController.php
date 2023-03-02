<?php

namespace App\Http\Controllers;

use App\Models\TeralisJendela;
use App\Http\Requests\StoreTeralisJendelaRequest;
use App\Http\Requests\UpdateTeralisJendelaRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\File;

class TeralisJendelaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teralisjendela = TeralisJendela::orderBy('created_at', 'desc')->get();
        return view('adminpage.barangpages.teralisjendela.teralisjendela', compact('teralisjendela'));
    }

    public function landingindex()
    {
        $user = Auth::user();
        $teralisjendela = TeralisJendela::orderBy('created_at', 'desc')->get();
        return view('landingpage.barang.barangtralisjendela', compact('teralisjendela','user'));
    }

    public function landingdetail($id)
    {
        $teralisjendela = TeralisJendela::find($id);
        $user = Auth::user();
        return view('landingpage.barang.detailbarang.teralisjendela', compact('teralisjendela','user'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminpage.barangpages.teralisjendela.addteralisjendela');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTeralisJendelaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $filename = time() . $request->file('foto')->getClientOriginalName();
        // $path = $request->file('foto')->storeAs('Images/uploads/canopy', $filename);
        // $path = public_path() . '/uploads/canopy';
        // $request->foto->move($path, $filename);
        $request->foto->move('Images/uploads/teralisjendela/',$filename);

        $postpagar = TeralisJendela::create([
            "foto" => $filename,
            "judul" => $request["judul"],
            "harga" => $request["harga"],
            "bahan" => $request["bahan"],
            "deskripsi" => $request["deskripsi"],
            "jenis_produk" => $request["jenis_produk"],
            "status" => $request["status"],
        ]);
        Alert::success('Success', 'Data Teralis Jendela has been uploaded !');
        return redirect('/admin/teralisjendela');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TeralisJendela $teralisjendela
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $teralisjendela = TeralisJendela::find($id);
        return view('adminpage.barangpages.teralisjendela.editteralisjendela', compact('teralisjendela'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TeralisJendela $teralisjendela
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teralisjendela = TeralisJendela::find($id);
        return view('adminpage.barangpages.teralisjendela.editteralisjendela', compact('teralisjendela'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTeralisJendelaRequest  $request
     * @param  \App\Models\TeralisJendela $pintukasa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->file('foto')) {
            $filename = time() . $request->file('foto')->getClientOriginalName();
            $request->foto->move('Images/uploads/teralisjendela/',$filename);

            // hapus file
            $gambar = TeralisJendela::where('id', $id)->first();
            File::delete($gambar->foto);

            // upload file
            $update = TeralisJendela::where("id", $id)->update([
                "foto" => $filename,
            ]);
        }

        $postteralisjendela = TeralisJendela::where("id", $id)->update([
            "judul" => $request["judul"],
            "harga" => $request["harga"],
            "bahan" => $request["bahan"],
            "deskripsi" => $request["deskripsi"],
            "jenis_produk" => $request["jenis_produk"],
            "status" => $request["status"],
        ]);
        Alert::success('Success', 'Data Teralis Jendela has been uploaded !');
        return redirect('/admin/teralisjendela');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TeralisJendela $teralisjendela
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gambar = TeralisJendela::where('id', $id)->first();
        File::delete($gambar->foto);

        // hapus data
        TeralisJendela::where('id', $id)->delete();
        return redirect()->back();
    }
}
