<?php

namespace App\Http\Controllers;

use App\Models\Canopy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Support\Facades\File;

class CanopyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kanopi = Canopy::orderBy('created_at', 'desc')->get();
        return view('adminpage.barangpages.kanopi.kanopi', compact('kanopi'));
    }

    public function landingindex()
    {
        $kanopi = Canopy::orderBy('created_at', 'desc')->get();
        $user = Auth::user();
        return view('landingpage.barang.barangkanopi', compact('kanopi','user'));
    }

    public function landingdetail($id)
    {
        $kanopi = Canopy::find($id);
        $user = Auth::user();
        return view('landingpage.barang.detailbarang.kanopi', compact('kanopi','user'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminpage.barangpages.kanopi.addkanopi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCanopyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $filename = time() . $request->file('foto')->getClientOriginalName();
        // $path = $request->file('foto')->storeAs('Images/uploads/canopy', $filename);
        // $path = public_path() . '/uploads/canopy';
        // $request->foto->move($path, $filename);
        $request->foto->move('Images/uploads/canopy/',$filename);

        $postcanopy = Canopy::create([
            "foto" => $filename,
            "judul" => $request["judul"],
            "harga" => $request["harga"],
            "bahan" => $request["bahan"],
            "deskripsi" => $request["deskripsi"],
            "jenis_produk" => $request["jenis_produk"],
            "status" => $request["status"],
        ]);
        Alert::success('Success', 'Data Canopy has been uploaded !');
        return redirect('/admin/canopy');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Canopy  $canopy
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $postcanopy = Canopy::find($id);
        return view('adminpage.barangpages.kanopi.editkanopi', compact('postcanopy'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Canopy  $canopy
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $postcanopy = Canopy::find($id);
        return view('adminpage.barangpages.kanopi.editkanopi', compact('postcanopy'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCanopyRequest  $request
     * @param  \App\Models\Canopy  $canopy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->file('foto')) {
            $filename = time() . $request->file('foto')->getClientOriginalName();
            $request->foto->move('Images/uploads/canopy/',$filename);

            // hapus file
            $gambar = Canopy::where('id', $id)->first();
            File::delete($gambar->foto);

            // upload file
            $update = Canopy::where("id", $id)->update([
                "foto" => $filename,
            ]);
        }

        $postcanopy = Canopy::where("id", $id)->update([
            "judul" => $request["judul"],
            "harga" => $request["harga"],
            "bahan" => $request["bahan"],
            "deskripsi" => $request["deskripsi"],
            "jenis_produk" => $request["jenis_produk"],
            "status" => $request["status"],
        ]);
        Alert::success('Success', 'Data Canopy has been Edited !');
        // toast('Canopy has been edited !', 'success')->autoClose(1500)->width('400px');
        return redirect('/admin/canopy');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Canopy  $canopy
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gambar = Canopy::where('id', $id)->first();
        File::delete($gambar->foto);

        // hapus data
        Canopy::where('id', $id)->delete();
        return redirect()->back();
    }
}