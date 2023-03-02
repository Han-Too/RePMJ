<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class KontakController extends Controller
{
    public function index(){
        if(Auth::check()){
            $user = Auth::user();
            // dd($user->name);
            return view('landingpage.kontak',compact('user'));
        }
        else {
        return view('landingpage.kontak');
            }
    }
    public function gotoWA(Request $request){
        $nama = str_replace(" ","%20",$request->nama);
        // $email = str_replace(" ","%20",$request->email);
        $alamat = str_replace(" ","%20",$request->alamat);
        $pesan = str_replace(" ","%20",$request->pesan);

        return Redirect::to('https://wa.me/+6281385291423?text=Halo%20nama%20saya%20'.$nama.'%20dari%20'.$alamat.'%20,Ingin%20Menanyakan%20Tentang%20'.$pesan.'.');
    }
}
