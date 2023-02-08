<?php

namespace App\Http\Controllers;

use App\Models\RailingBalkon;
use App\Http\Requests\StoreRailingBalkonRequest;
use App\Http\Requests\UpdateRailingBalkonRequest;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Support\Facades\File;

class RailingBalkonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postrailingbalkon = RailingBalkon::orderBy('created_at', 'desc')->get();
        return view('adminpage.barangpages.railingbalkon.railingbalkon', compact('postrailingbalkon'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminpage.barangpages.railingbalkon.addrailingbalkon');
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
        $request->foto->move('Images/uploads/railingbalkon/',$filename);

        $postpagar = RailingBalkon::create([
            "foto" => $filename,
            "judul" => $request["judul"],
            "harga" => $request["harga"],
            "bahan" => $request["bahan"],
            "deskripsi" => $request["deskripsi"],
            "jenis_produk" => $request["jenis_produk"],
            "status" => $request["status"],
        ]);
        Alert::success('Success', 'Data Railing Balkon has been uploaded !');
        return redirect('/admin/railingbalkon');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PintuBesi  $PintuBesi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $postrailingbalkon = RailingBalkon::find($id);
        return view('adminpage.railingbalkon.editrailingbalkon', compact('postrailingbalkon'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PintuBesi  $PintuBesi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $postrailingbalkon = RailingBalkon::find($id);
        return view('adminpage.barangpages.railingbalkon.editrailingbalkon', compact('postrailingbalkon'));
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
            $request->foto->move('Images/uploads/railingbalkon/',$filename);

            // hapus file
            $gambar = RailingBalkon::where('id', $id)->first();
            File::delete($gambar->foto);

            // upload file
            $update = RailingBalkon::where("id", $id)->update([
                "foto" => $filename,
            ]);
        }

        $postcanopy = RailingBalkon::where("id", $id)->update([
            "judul" => $request["judul"],
            "harga" => $request["harga"],
            "bahan" => $request["bahan"],
            "deskripsi" => $request["deskripsi"],
            "jenis_produk" => $request["jenis_produk"],
        ]);
        toast('Railing Balkon has been edited !', 'success')->autoClose(1500)->width('400px');
        return redirect('/admin/railingbalkon');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PintuBesi  $PintuBesi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gambar = RailingBalkon::where('id', $id)->first();
        File::delete($gambar->foto);

        // hapus data
        RailingBalkon::where('id', $id)->delete();
        return redirect()->back();
    }
}
