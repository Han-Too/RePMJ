<?php

namespace App\Http\Controllers;

use App\Models\galeri;
use App\Http\Requests\StoregaleriRequest;
use App\Http\Requests\UpdategaleriRequest;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Support\Facades\File;
class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galeri = Galeri::orderBy('created_at', 'desc')->get();
        return view('adminpage.landingpages.galeri.galeri', compact('galeri'));
    }

    public function landingindex()
    {
        $galeri = Galeri::orderBy('created_at', 'desc')->get();
        return view('landingpage.galeri', compact('galeri'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminpage.landingpages.galeri.addgaleri');
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
        $request->foto->move('Images/uploads/galeri/', $filename);

        $postpagar = Galeri::create([
            "foto" => $filename,
            "judul" => $request["judul"],
        ]);
        Alert::success('Success', 'Galeri has been uploaded !');
        return redirect('/admin/galeri');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PintuBesi  $PintuBesi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $galeri = Galeri::find($id);
        return view('adminpage.landingpages.galeri.editgaleri', compact('galeri'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PintuBesi  $PintuBesi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $galeri = Galeri::find($id);
        return view('adminpage.landingpages.galeri.editgaleri', compact('galeri'));
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
            $request->foto->move('Images/uploads/galeri/', $filename);

            // hapus file
            $gambar = Galeri::where('id', $id)->first();
            File::delete($gambar->foto);

            // upload file
            $update = Galeri::where("id", $id)->update([
                "foto" => $filename,
            ]);
        }

        $postcanopy = Galeri::where("id", $id)->update([
            "judul" => $request["judul"],
        ]);
        toast('Galeri has been edited !', 'success')->autoClose(1500)->width('400px');
        return redirect('/admin/galeri');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PintuBesi  $PintuBesi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gambar = Galeri::where('id', $id)->first();
        File::delete($gambar->foto);

        // hapus data
        Galeri::where('id', $id)->delete();
        return redirect()->back();
    }
}
