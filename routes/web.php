<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\ProdukController;

use App\Http\Controllers\LaporanPekerjaanController;
use App\Http\Controllers\SuratJalanController;

use App\Http\Controllers\KaryawanController;
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

// ---------------------CANOPY ADMIN---------------------
Route::get('/admin/produk', [ProdukController::class, 'index'])->name('admin.produk.index')->middleware('is_admin');
Route::get('/admin/produk/create', [ProdukController::class, 'create'])->name('admin.produk.create')->middleware('is_admin');
Route::post('/admin/produk/store', [ProdukController::class, 'store'])->name('admin.produk.store')->middleware('is_admin');
Route::get('/admin/produk/{id}/edit', [ProdukController::class, 'edit'])->name('admin.produk.edit')->middleware('is_admin');
Route::put('/admin/produk/{id}/update', [ProdukController::class, 'update'])->name('admin.produk.update')->middleware('is_admin');
Route::get('/admin/produk/{id}/destroy', [ProdukController::class, 'destroy'])->name('admin.produk.destroy')->middleware('is_admin');
Route::get('/admin/produk/{id}/preview', [ProdukController::class, 'show'])->name('admin.produk.preview')->middleware('is_admin');

// ---------------------PART-------------------------------
Route::get('/admin/produk/detail/{id}', [ProdukController::class, 'detailproduk'])->name('admin.produk.detail');

Route::get('/admin/produk/kanopi/view', [ProdukController::class, 'kanopiview'])->name('admin.produk.kanopi.view');

// -----------------------TRANSAKSI---------------------------
Route::get('/admin/transaksi', [TransaksiController::class, 'index'])->name('admin.transaksi.index')->middleware('is_admin');
Route::get('/admin/transaksi/create', [TransaksiController::class, 'create'])->name('admin.transaksi.create')->middleware('is_admin');
Route::post('/admin/transaksi/store', [TransaksiController::class, 'store'])->name('admin.transaksi.store')->middleware('is_admin');
Route::get('/admin/transaksi/{id}/edit', [TransaksiController::class, 'edit'])->name('admin.transaksi.edit')->middleware('is_admin');
Route::put('/admin/transaksi/{id}/update', [TransaksiController::class, 'update'])->name('admin.transaksi.update')->middleware('is_admin');
Route::get('/admin/transaksi/{id}/destroy', [TransaksiController::class, 'destroy'])->name('admin.transaksi.destroy')->middleware('is_admin');
Route::get('/admin/transaksi/{id}/preview', [TransaksiController::class, 'show'])->name('admin.transaksi.preview')->middleware('is_admin');


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
Route::get('/admin/karyawan', [KaryawanController::class, 'index'])->name('admin.karyawan.index')->middleware('is_admin');
Route::get('/admin/karyawan/create', [KaryawanController::class, 'create'])->name('admin.karyawan.create')->middleware('is_admin');
Route::post('/admin/karyawan/store', [KaryawanController::class, 'store'])->name('admin.karyawan.store')->middleware('is_admin');
Route::get('/admin/karyawan/{id}/edit', [KaryawanController::class, 'edit'])->name('admin.karyawan.edit')->middleware('is_admin');
Route::put('/admin/karyawan/{id}/update', [KaryawanController::class, 'update'])->name('admin.karyawan.update')->middleware('is_admin');
Route::get('/admin/karyawan/{id}/destroy', [KaryawanController::class, 'destroy'])->name('admin.karyawan.destroy')->middleware('is_admin');
Route::get('/admin/karyawan/{id}/preview', [KaryawanController::class, 'show'])->name('admin.karyawan.preview')->middleware('is_admin');
Route::get('/admin/karyawan/cetak', [KaryawanController::class, 'cetak_pdf'])->name('admin.karyawan.print')->middleware('is_admin');

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

Route::get('/kanopi', [CanopyController::class, 'landingindex'])->name('kanopi');
Route::get('/menaratangkiair', [MenaraAirController::class, 'landingindex'])->name('menaratangkiair');
Route::get('/pagarbesi', [PagarController::class, 'landingindex'])->name('pagarbesi');
Route::get('/pintubesi', [PintuBesiController::class, 'landingindex'])->name('pintubesi');
Route::get('/pintukasa', [PintuKasaNyamukController::class, 'landingindex'])->name('pintukasa');
Route::get('/teralisjendela', [TeralisJendelaController::class, 'landingindex'])->name('teralisjendela');
Route::get('/teralispintu', [TeralisPintuController::class, 'landingindex'])->name('teralispintu');
Route::get('/railingbalkon', [RailingBalkonController::class, 'landingindex'])->name('railingbalkon');
Route::get('/railingtangga', [RailingTanggaController::class, 'landingindex'])->name('railingtangga');
Route::get('/henderson', [PintuHendersonController::class, 'landingindex'])->name('henderson');
Route::get('/tanggaputar', [TanggaPutarController::class, 'landingindex'])->name('tanggaputar');
Route::get('/tanggabesi', [TanggaBesiController::class, 'landingindex'])->name('tanggabesi');



// -------------------DETAIL BARANG-------------------
Route::get('/detailbarangkanopi/{id}', [CanopyController::class, 'landingdetail'])->name('detailkanopi');
Route::get('/detailbarangmenaraair/{id}', [MenaraAirController::class, 'landingdetail'])->name('detailmenaraair');
Route::get('/detailbarangpagar/{id}', [PagarController::class, 'landingdetail'])->name('detailpagar');
Route::get('/detailbarangpintu/{id}', [PintuBesiController::class, 'landingdetail'])->name('detailpintu');
Route::get('/detailbarangpintukasanyamuk/{id}', [PintuKasaNyamukController::class, 'landingdetail'])->name('detailpintukasanyamuk');
Route::get('/detailbarangteralisjendela/{id}', [TeralisJendelaController::class, 'landingdetail'])->name('detailteralisjendela');
Route::get('/detailbarangteralispintu/{id}', [TeralisPintuController::class, 'landingdetail'])->name('detailteralispintu');
Route::get('/detailbarangrailingbalkon/{id}', [RailingBalkonController::class, 'landingdetail'])->name('detailrailingbalkon');
Route::get('/detailbarangrailingtangga/{id}', [RailingTanggaController::class, 'landingdetail'])->name('detailrailingtangga');
Route::get('/detailbaranghenderson/{id}', [PintuHendersonController::class, 'landingdetail'])->name('detailhenderson');
Route::get('/detailbarangtanggaputar/{id}', [TanggaPutarController::class, 'landingdetail'])->name('detailtanggaputar');
Route::get('/detailbarangtanggabesi/{id}', [TanggaBesiController::class, 'landingdetail'])->name('detailtanggabesi');

// -------------------BUY BARANG-------------------------
Route::post('/detailbarangkanopi/buy', [CanopyController::class, 'buy'])->name('buykanopi');
Route::post('/detailbarangmenaraair/buy', [MenaraAirController::class, 'buy'])->name('buymenaraair');
Route::post('/detailbarangpagar/buy', [PagarController::class, 'buy'])->name('buypagar');
Route::post('/detailbarangpintu/buy', [PintuBesiController::class, 'buy'])->name('buypintu');
Route::post('/detailbarangpintukasanyamuk/buy', [PintuKasaNyamukController::class, 'buy'])->name('buypintukasa');
Route::post('/detailbarangteralisjendela/buy', [TeralisJendelaController::class, 'buy'])->name('buyteralisjendela');
Route::post('/detailbarangteralispintu/buy', [TeralisPintuController::class, 'buy'])->name('buyteralispintu');
Route::post('/detailbarangrailingtangga/buy', [RailingTanggaController::class, 'buy'])->name('buyrailingtangga');
Route::post('/detailbarangrailingbalkon/buy', [RailingBalkonController::class, 'buy'])->name('buyrailingbalkon');
Route::post('/detailbaranghenderson/buy', [PintuHendersonController::class, 'buy'])->name('buypintuhenderson');
Route::post('/detailbarangtanggaputar/buy', [TanggaPutarController::class, 'buy'])->name('buytanggaputar');
Route::post('/detailbarangtanggabesi/buy', [TanggaBesiController::class, 'buy'])->name('buytanggabesi');


Route::get('/detailbarang', function () {
    return view('landingpage.barang.detailbarang');
})->name('detailbarang');



