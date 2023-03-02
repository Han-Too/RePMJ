<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class UserProfileController extends Controller
{
    public function index(){
        $user = Auth::user();
        return view('landingpage.userprofile', compact('user'));
    }

    public function edit(){
        $user = Auth::user();
        return view('landingpage.edituserprofile', compact('user'));
    }

    public function store(Request $request){
        $info = $request->all();
        $id = $request->id;
        $nama = $request->nama;
        $alamat = $request->alamat;
        $telepon = $request->telepon;
        $email = $request->email;

        $change = User::where("id", $id)->update([
            "id" => $id,
            "name" => $nama,
            "email" => $email,
            "telepon" => $telepon,
        ]);

        $user = Auth::user();

        Alert::success('Berhasil Edit Data','Data User Telah Di Edit');
        return view('landingpage.userprofile', compact('user'));
    }
}
