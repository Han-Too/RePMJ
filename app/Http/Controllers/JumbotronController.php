<?php

namespace App\Http\Controllers;

use App\Models\Jumbotron;
use App\Http\Requests\StoreJumbotronRequest;
use App\Http\Requests\UpdateJumbotronRequest;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Support\Facades\File;

class JumbotronController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jumbotron = Jumbotron::orderBy('created_at', 'desc')->get();
        return view('adminpage.landingpages.jumbotron.jumbotron', compact('jumbotron'));
    }

    public function landingindex()
    {
        $user = Auth::user();
        $jumbotron = Jumbotron::orderBy('created_at', 'desc')->get();
        return view('landingpage.home', compact('jumbotron','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adminpage.landingpages.jumbotron.addjumbotron');
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
        $request->foto->move('Images/uploads/jumbotron/', $filename);

        $postpagar = Jumbotron::create([
            "foto" => $filename,
            "judul" => $request["judul"],
        ]);
        Alert::success('Success', 'Jumbotron Putar has been uploaded !');
        return redirect('/admin/jumbotron');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PintuBesi  $PintuBesi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jumbotron = Jumbotron::find($id);
        return view('adminpage.landingpages.jumbotron.editjumbotron', compact('jumbotron'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PintuBesi  $PintuBesi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jumbotron = Jumbotron::find($id);
        return view('adminpage.landingpages.jumbotron.editjumbotron', compact('jumbotron'));
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
            $request->foto->move('Images/uploads/jumbotron/', $filename);

            // hapus file
            $gambar = Jumbotron::where('id', $id)->first();
            File::delete($gambar->foto);

            // upload file
            $update = Jumbotron::where("id", $id)->update([
                "foto" => $filename,
            ]);
        }

        $postcanopy = Jumbotron::where("id", $id)->update([
            "judul" => $request["judul"],
        ]);
        toast('Jumbotron has been edited !', 'success')->autoClose(1500)->width('400px');
        return redirect('/admin/jumbotron');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PintuBesi  $PintuBesi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gambar = Jumbotron::where('id', $id)->first();
        File::delete($gambar->foto);

        // hapus data
        Jumbotron::where('id', $id)->delete();
        return redirect()->back();
    }
}
