<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LayananController extends Controller
{
    public function index(){
        $produk = Produk::orderBy('created_at', 'desc')->get();
        $user = Auth::user();
        return view('landingpage.layanan', compact('produk','user'));
    }
}
