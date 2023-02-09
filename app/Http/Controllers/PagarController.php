<?php

namespace App\Http\Controllers;

use App\Models\Pagar;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Support\Facades\File;

class PagarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pagar = Pagar::orderBy('created_at', 'desc')->get();
        return view('adminpage.barangpages.pagarbesi.pagar', compact('pagar'));
    }

    public function landingindex()
    {
        $pagar = Pagar::orderBy('created_at', 'desc')->get();
        return view('landingpage.barang.barangpagar', compact('pagar'));
    }

    public function landingdetail($id)
    {
        $pagar = Pagar::find($id);
        return view('landingpage.barang.detailbarang.pagar', compact('pagar'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminpage.barangpages.pagarbesi.addpagar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePagarRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $filename = time() . $request->file('foto')->getClientOriginalName();
        // $path = $request->file('foto')->storeAs('Images/uploads/canopy', $filename);
        // $path = public_path() . '/uploads/canopy';
        // $request->foto->move($path, $filename);
        $request->foto->move('Images/uploads/pagar/',$filename);

        $postpagar = Pagar::create([
            "foto" => $filename,
            "judul" => $request["judul"],
            "harga" => $request["harga"],
            "bahan" => $request["bahan"],
            "deskripsi" => $request["deskripsi"],
            "jenis_produk" => $request["jenis_produk"],
            "status" => $request["status"],
        ]);
        Alert::success('Success', 'Data Pagar has been uploaded !');
        return redirect('/admin/pagar');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pagar  $Pagar
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $postpagar = Pagar::find($id);
        return view('adminpage.barangpages.pagarbesi.editpagar', compact('postpagar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pagar  $Pagar
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $postpagar = Pagar::find($id);
        return view('adminpage.barangpages.pagarbesi.editpagar', compact('postpagar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePagarRequest  $request
     * @param  \App\Models\Pagar  $Pagar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->file('foto')) {
            $filename = time() . $request->file('foto')->getClientOriginalName();
            $request->foto->move('Images/uploads/pagar/',$filename);

            // hapus file
            $gambar = Pagar::where('id', $id)->first();
            File::delete($gambar->foto);

            // upload file
            $update = Pagar::where("id", $id)->update([
                "foto" => $filename,
            ]);
        }

        $postcanopy = Pagar::where("id", $id)->update([
            "judul" => $request["judul"],
            "harga" => $request["harga"],
            "bahan" => $request["bahan"],
            "deskripsi" => $request["deskripsi"],
            "jenis_produk" => $request["jenis_produk"],
        ]);
        toast('pagar has been edited !', 'success')->autoClose(1500)->width('400px');
        return redirect('/admin/pagar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pagar  $Pagar
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gambar = Pagar::where('id', $id)->first();
        File::delete($gambar->foto);

        // hapus data
        Pagar::where('id', $id)->delete();
        return redirect()->back();
    }
}