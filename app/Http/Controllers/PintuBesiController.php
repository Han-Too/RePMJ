<?php

namespace App\Http\Controllers;

use App\Models\PintuBesi;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Support\Facades\File;

class PintuBesiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postpintu = PintuBesi::orderBy('created_at', 'desc')->get();
        return view('adminpage.barangpages.pintubesi.pintu', compact('postpintu'));
    }


    public function landingindex()
    {
        $pintu = PintuBesi::orderBy('created_at', 'desc')->get();
        return view('landingpage.barang.barangpintu', compact('pintu'));
    }

    public function landingdetail($id)
    {
        $pintu = PintuBesi::find($id);
        return view('landingpage.barang.detailbarang.pintubesi', compact('pintu'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminpage.barangpages.pintubesi.addpintu');
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
        $request->foto->move('Images/uploads/pintubesi/',$filename);

        $postpagar = PintuBesi::create([
            "foto" => $filename,
            "judul" => $request["judul"],
            "harga" => $request["harga"],
            "bahan" => $request["bahan"],
            "deskripsi" => $request["deskripsi"],
            "jenis_produk" => $request["jenis_produk"],
            "status" => $request["status"],
        ]);
        Alert::success('Success', 'Data Pagar has been uploaded !');
        return redirect('/admin/pintubesi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PintuBesi  $PintuBesi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $postpintu = PintuBesi::find($id);
        return view('adminpage.barangpages.pintubesi.editpintu', compact('postpintu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PintuBesi  $PintuBesi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $postpintu = PintuBesi::find($id);
        return view('adminpage.barangpages.pintubesi.editpintu', compact('postpintu'));
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
            $request->foto->move('Images/uploads/pintubesi/',$filename);

            // hapus file
            $gambar = PintuBesi::where('id', $id)->first();
            File::delete($gambar->foto);

            // upload file
            $update = PintuBesi::where("id", $id)->update([
                "foto" => $filename,
            ]);
        }

        $postcanopy = PintuBesi::where("id", $id)->update([
            "judul" => $request["judul"],
            "harga" => $request["harga"],
            "bahan" => $request["bahan"],
            "deskripsi" => $request["deskripsi"],
            "jenis_produk" => $request["jenis_produk"],
            "status" => $request["status"],
        ]);
        Alert::success('Success', 'Data Canopy has been Editted !');
        return redirect('/admin/pintubesi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PintuBesi  $PintuBesi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gambar = PintuBesi::where('id', $id)->first();
        File::delete($gambar->foto);

        // hapus data
        PintuBesi::where('id', $id)->delete();
        return redirect()->back();
    }
}
