<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\ProdukController;

use App\Http\Controllers\LaporanPekerjaanController;
use App\Http\Controllers\SuratJalanController;

use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\GajiKaryawanController;

use App\Http\Controllers\KontakController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\JumbotronController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;




// ---------------------------ADMIN PAGE------------------------


Auth::routes(['verify' => true]);

Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('/admin', function () {
    return view('adminpage.dashboard');
})->name('admin')->middleware('is_admin');

// Route::get('/back', function () {
//     return redirect()->back();
// })->name('back');
// Route::post('/login', [LoginController::class, 'login'])->name('login')->middleware('is_admin');

// ---------------------PRODUK ADMIN---------------------
Route::get('/admin/produk', [ProdukController::class, 'index'])->name('admin.produk.index')->middleware('is_admin');
Route::get('/admin/produk/create', [ProdukController::class, 'create'])->name('admin.produk.create')->middleware('is_admin');
Route::post('/admin/produk/store', [ProdukController::class, 'store'])->name('admin.produk.store')->middleware('is_admin');
Route::get('/admin/produk/{id}/edit', [ProdukController::class, 'edit'])->name('admin.produk.edit')->middleware('is_admin');
Route::put('/admin/produk/{id}/update', [ProdukController::class, 'update'])->name('admin.produk.update')->middleware('is_admin');
Route::get('/admin/produk/{id}/destroy', [ProdukController::class, 'destroy'])->name('admin.produk.destroy')->middleware('is_admin');
Route::get('/admin/produk/{id}/preview', [ProdukController::class, 'show'])->name('admin.produk.preview')->middleware('is_admin');

// ---------------------PART-------------------------------
Route::get('/produk/detail/{id}', [ProdukController::class, 'detailproduk'])->name('admin.produk.detail');
Route::post('/produk/buy/{id}', [ProdukController::class, 'mesanproduk'])->name('admin.produk.pesan');


Route::get('/admin/produk/kanopi/view', [ProdukController::class, 'kanopiview'])->name('admin.produk.kanopi.view');

// -----------------------TRANSAKSI---------------------------
Route::get('/admin/transaksi', [TransaksiController::class, 'index'])->name('admin.transaksi.index')->middleware('is_admin');
Route::get('/admin/transaksi/create', [TransaksiController::class, 'create'])->name('admin.transaksi.create')->middleware('is_admin');
Route::post('/admin/transaksi/store', [TransaksiController::class, 'store'])->name('admin.transaksi.store')->middleware('is_admin');
Route::get('/admin/transaksi/{id}/edit', [TransaksiController::class, 'edit'])->name('admin.transaksi.edit')->middleware('is_admin');
Route::put('/admin/transaksi/{id}/update', [TransaksiController::class, 'update'])->name('admin.transaksi.update')->middleware('is_admin');
Route::get('/admin/transaksi/{id}/destroy', [TransaksiController::class, 'destroy'])->name('admin.transaksi.destroy')->middleware('is_admin');
Route::get('/admin/transaksi/{id}/preview', [TransaksiController::class, 'show'])->name('admin.transaksi.preview')->middleware('is_admin');
Route::get('/admin/transaksi/{id}/cetak', [TransaksiController::class, 'print'])->name('admin.transaksi.print')->middleware('is_admin');

// -----------------------PESANAN---------------------------
Route::get('/admin/pesanan', [PesananController::class, 'index'])->name('admin.pesanan.index')->middleware('is_admin');
Route::get('/admin/pesanan/create', [PesananController::class, 'create'])->name('admin.pesanan.create')->middleware('is_admin');
Route::post('/admin/pesanan/store', [PesananController::class, 'store'])->name('admin.pesanan.store')->middleware('is_admin');
Route::get('/admin/pesanan/{id}/edit', [PesananController::class, 'edit'])->name('admin.pesanan.edit')->middleware('is_admin');
Route::put('/admin/pesanan/{id}/update', [PesananController::class, 'update'])->name('admin.pesanan.update')->middleware('is_admin');
Route::get('/admin/pesanan/{id}/destroy', [PesananController::class, 'destroy'])->name('admin.pesanan.destroy')->middleware('is_admin');
Route::get('/admin/pesanan/{id}/preview', [PesananController::class, 'show'])->name('admin.pesanan.preview')->middleware('is_admin');


// ------------------------ADMIN GALERI------------------------
Route::get('/admin/galeri', [GaleriController::class, 'index'])->name('admin.galeri.index')->middleware('is_admin');
Route::get('/admin/galeri/create', [GaleriController::class, 'create'])->name('admin.galeri.create')->middleware('is_admin');
Route::post('/admin/galeri/store', [GaleriController::class, 'store'])->name('admin.galeri.store')->middleware('is_admin');
Route::get('/admin/galeri/{id}/edit', [GaleriController::class, 'edit'])->name('admin.galeri.edit')->middleware('is_admin');
Route::put('/admin/galeri/{id}/update', [GaleriController::class, 'update'])->name('admin.galeri.update')->middleware('is_admin');
Route::get('/admin/galeri/{id}/destroy', [GaleriController::class, 'destroy'])->name('admin.galeri.destroy')->middleware('is_admin');
Route::get('/admin/galeri/{id}/preview', [GaleriController::class, 'show'])->name('admin.galeri.preview')->middleware('is_admin');


// ----------------------PEKERJAAN--------------------
Route::get('/admin/pekerjaan', [PekerjaanController::class, 'index'])->name('admin.pekerjaan.index')->middleware('is_admin');
Route::get('/admin/pekerjaan/create', [PekerjaanController::class, 'create'])->name('admin.pekerjaan.create')->middleware('is_admin');
Route::post('/admin/pekerjaan/store', [PekerjaanController::class, 'store'])->name('admin.pekerjaan.store')->middleware('is_admin');
Route::get('/admin/pekerjaan/{id}/edit', [PekerjaanController::class, 'edit'])->name('admin.pekerjaan.edit')->middleware('is_admin');
Route::put('/admin/pekerjaan/{id}/update', [PekerjaanController::class, 'update'])->name('admin.pekerjaan.update')->middleware('is_admin');
Route::get('/admin/pekerjaan/{id}/destroy', [PekerjaanController::class, 'destroy'])->name('admin.pekerjaan.destroy')->middleware('is_admin');
Route::get('/admin/pekerjaan/{id}/preview', [PekerjaanController::class, 'show'])->name('admin.pekerjaan.preview')->middleware('is_admin');
Route::get('/admin/pekerjaan/{id}/cetak', [PekerjaanController::class, 'print'])->name('admin.pekerjaan.print')->middleware('is_admin');
Route::post('/pekerjaan/kolomstore', [PekerjaanController::class, 'kolomstore'])->name('admin.pekerjaan.kolomstore')->middleware('is_admin');
Route::get('/admin/pekerjaan/{namakerjaan}/acc', [PekerjaanController::class, 'acc'])->name('admin.pekerjaan.pesanan')->middleware('is_admin');
Route::post('/admin/pekerjaan/buatpekerjaan', [PekerjaanController::class, 'buat'])->name('admin.pekerjaan.buat')->middleware('is_admin');


// ----------------KARYAWAN--------------------
Route::get('/admin/pegawai', [PegawaiController::class, 'index'])->name('admin.pegawai.index')->middleware('is_admin');
Route::get('/admin/pegawai/create', [PegawaiController::class, 'create'])->name('admin.pegawai.create')->middleware('is_admin');
Route::post('/admin/pegawai/store', [PegawaiController::class, 'store'])->name('admin.pegawai.store')->middleware('is_admin');
Route::get('/admin/pegawai/{id}/edit', [PegawaiController::class, 'edit'])->name('admin.pegawai.edit')->middleware('is_admin');
Route::put('/admin/pegawai/{id}/update', [PegawaiController::class, 'update'])->name('admin.pegawai.update')->middleware('is_admin');
Route::get('/admin/pegawai/{id}/destroy', [PegawaiController::class, 'destroy'])->name('admin.pegawai.destroy')->middleware('is_admin');
Route::get('/admin/pegawai/{id}/preview', [PegawaiController::class, 'show'])->name('admin.pegawai.preview')->middleware('is_admin');
Route::get('/admin/pegawai/cetak', [PegawaiController::class, 'cetak_pdf'])->name('admin.pegawai.print')->middleware('is_admin');

// ----------------USER--------------------
Route::get('/admin/user', [UserProfileController::class, 'adminindex'])->name('admin.user.index')->middleware('is_admin');
Route::get('/admin/user/create', [UserProfileController::class, 'admincreate'])->name('admin.user.create')->middleware('is_admin');
Route::post('/admin/user/store', [UserProfileController::class, 'adminstore'])->name('admin.user.store')->middleware('is_admin');
Route::get('/admin/user/{id}/edit', [UserProfileController::class, 'adminedit'])->name('admin.user.edit')->middleware('is_admin');
Route::put('/admin/user/{id}/update', [UserProfileController::class, 'adminupdate'])->name('admin.user.update')->middleware('is_admin');
Route::get('/admin/user/{id}/destroy', [UserProfileController::class, 'admindestroy'])->name('admin.user.destroy')->middleware('is_admin');
Route::get('/admin/user/{id}/preview', [UserProfileController::class, 'adminshow'])->name('admin.user.preview')->middleware('is_admin');
Route::get('/admin/user/cetak', [UserProfileController::class, 'cetak_pdf'])->name('admin.user.print')->middleware('is_admin');


// ------------------------LAPORAN------------------------
Route::get('/laporan/index', [LaporanPekerjaanController::class, 'index'])->name('laporan')->middleware('is_admin');
Route::get('/laporan/add', [LaporanPekerjaanController::class, 'create'])->name('laporan.add')->middleware('is_admin');
Route::post('/laporan/store', [LaporanPekerjaanController::class, 'store'])->name('laporan.store')->middleware('is_admin');
Route::post('/laporan/kolomstore', [LaporanPekerjaanController::class, 'kolomstore'])->name('laporan.kolomstore')->middleware('is_admin');

// ------------------------LAPORAN------------------------
Route::get('/suratjalan/index', [SuratJalanController::class, 'index'])->name('suratjalan')->middleware('is_admin');
Route::get('/suratjalan/add', [SuratJalanController::class, 'create'])->name('suratjalan.add')->middleware('is_admin');
Route::post('/suratjalan/store', [SuratJalanController::class, 'store'])->name('suratjalan.store')->middleware('is_admin');
Route::post('/suratjalan/kolomstore', [SuratJalanController::class, 'kolomstore'])->name('suratjalan.kolomstore')->middleware('is_admin');


// --------------------------GAJI------------------------
Route::get('/gaji/index', [GajiKaryawanController::class, 'index'])->name('gaji')->middleware('is_admin');
Route::post('/gaji/{id}/edit', [GajiKaryawanController::class, 'edit'])->name('gaji.edit')->middleware('is_admin');
Route::post('/gaji/cetak', [GajiKaryawanController::class, 'cetak'])->name('gaji.store')->middleware('is_admin');

Route::get('/admin/notapekerjaan', function () {
    return view('adminpage.laporanpages.notapekerjaan.notapekerjaan');
})->name('nota');

Route::get('/admin/settinglanding', function () {
    return view('adminpage.settinglandingpages.settinglanding');
})->name('settinglanding');



// ---------------------LANDING NAVBAR--------------------
Route::get('/', function(){
    return view('landingpage.home');
})->name('/');

Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/galeri', [GaleriController::class, 'landingindex'])->name('galeri');
Route::get('/layanan', [LayananController::class, 'index'])->name('layanan');
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');
Route::post('/gotoWA', [KontakController::class, 'gotoWA'])->name('gotoWA');
Route::get('/galeri', [GaleriController::class, 'landingindex'])->name('galeri');
Route::get('/myprofile', [GaleriController::class, 'landingindex'])->name('myprofile');
Route::post('/signup', [RegisterController::class, 'signup'])->name('signup');

Route::get('/userprofile', [UserProfileController::class, 'index'])->name('userprofile');
Route::get('/edituserprofile', [UserProfileController::class, 'edit'])->name('edituserprofile');
Route::post('/storeuserprofile', [UserProfileController::class, 'store'])->name('storeuserprofile');

Route::get('/testing', function () {
    return view('landingpage.test');
});

// -----------------------LANDING BARANG----------------------
Route::get('/admin/daftarbarang', function () {
    return view('adminpage.barangpages.daftarbarang');
})->name('daftarbarang');




Route::get('/detailbarang', function () {
    return view('landingpage.barang.detailbarang');
})->name('detailbarang');



