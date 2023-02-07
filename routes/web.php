<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\CanopyController;

// ---------------------------ADMIN PAGE------------------------


Auth::routes(['verify' => true]);

Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('/admin', function () {
    return view('adminpage.dashboard');
})->name('admin')->middleware('is_admin');
// Route::post('/login', [LoginController::class, 'login'])->name('login')->middleware('is_admin');

// ---------------------CANOPY ADMIN---------------------
Route::get('/admin/canopy', [CanopyController::class, 'index'])->name('admin.canopy.index')->middleware('is_admin');
Route::get('/admin/canopy/create', [CanopyController::class, 'create'])->name('admin.canopy.create')->middleware('is_admin');
Route::post('/admin/canopy/store', [CanopyController::class, 'store'])->name('admin.canopy.store')->middleware('is_admin');
Route::get('/admin/canopy/{id}/edit', [CanopyController::class, 'edit'])->name('admin.canopy.edit')->middleware('is_admin');
Route::put('/admin/canopy/{id}/update', [CanopyController::class, 'update'])->name('admin.canopy.update')->middleware('is_admin');
Route::get('/admin/canopy/{id}/destroy', [CanopyController::class, 'destroy'])->name('admin.canopy.destroy')->middleware('is_admin');
Route::get('/admin/canopy/{id}/preview', [CanopyController::class, 'show'])->name('admin.canopy.preview')->middleware('is_admin');


// ----------------------ADMIN SIDEBAR--------------------
Route::get('/admin/daftarbarang', function () {
    return view('adminpage.barangpages.daftarbarang');
})->name('barang');
Route::get('/admin/daftarpekerjaan', function () {
    return view('adminpage.pekerjaanpages.daftarpekerjaan');
})->name('pekerjaan');
Route::get('/admin/daftarlaporan', function () {
    return view('adminpage.laporanpages.daftarlaporan');
})->name('laporan');
Route::get('/admin/settinglanding', function () {
    return view('adminpage.settinglandingpages.settinglanding');
})->name('settinglanding');

// -------------------BARANG PAGE------------------------------------------------

Route::get('/admin/kanopi', function () {
    return view('adminpage.barangpages.kanopi.kanopi');
})->name('kanopiindex');
Route::get('/admin/kanopi/detail', function () {
    return view('adminpage.barangpages.kanopi.detailkanopi');
})->name('kanopidetail');




// ---------------------LANDING NAVBAR--------------------
Route::get('/', function () {
    return view('landingpage.home');
})->name('/');
Route::get('/profile', function () {
    return view('landingpage.profile');
})->name('profile');
Route::get('/galeri', function () {
    return view('landingpage.galeri');
})->name('galeri');
Route::get('/kontak', function () {
    return view('landingpage.kontak');
})->name('kontak');

Route::get('/testing', function () {
    return view('landingpage.test');
});

// -----------------------LANDING BARANG----------------------
Route::get('/kanopi', function () {
    return view('landingpage.barang.barangkanopi');
})->name('kanopi');
Route::get('/pagarbesi', function () {
    return view('landingpage.barang.barangpagar');
})->name('pagarbesi');
Route::get('/pintubesi', function () {
    return view('landingpage.barang.barangpintu');
})->name('pintubesi');
Route::get('/pintukasa', function () {
    return view('landingpage.barang.barangpintukasa');
})->name('pintukasa');
Route::get('/tralisjendela', function () {
    return view('landingpage.barang.barangtralisjendela');
})->name('tralisjendela');
Route::get('/tralispintu', function () {
    return view('landingpage.barang.barangtralispintu');
})->name('tralispintu');
Route::get('/railingbalkon', function () {
    return view('landingpage.barang.barangrailingbalkon');
})->name('railingbalkon');
Route::get('/railingtangga', function () {
    return view('landingpage.barang.barangrailingtangga');
})->name('railingtangga');
Route::get('/henderson', function () {
    return view('landingpage.barang.baranghenderson');
})->name('henderson');
Route::get('/tanggaputar', function () {
    return view('landingpage.barang.barangtanggaputar');
})->name('tanggaputar');
Route::get('/tanggabesi', function () {
    return view('landingpage.barang.barangtanggabesi');
})->name('tanggabesi');
Route::get('/menaratangkiair', function () {
    return view('landingpage.barang.barangmenaratangkiair');
})->name('menaratangkiair');


Route::get('/detailbarang', function () {
    return view('landingpage.barang.detailbarang');
})->name('detailbarang');



