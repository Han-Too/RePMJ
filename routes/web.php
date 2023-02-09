<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\CanopyController;
use App\Http\Controllers\PagarController;
use App\Http\Controllers\PintuBesiController;
use App\Http\Controllers\PintuKasaNyamukController;
use App\Http\Controllers\TeralisJendelaController;
use App\Http\Controllers\TeralisPintuController;
use App\Http\Controllers\RailingBalkonController;
use App\Http\Controllers\RailingTanggaController;
use App\Http\Controllers\PintuHendersonController;
use App\Http\Controllers\TanggaPutarController;
use App\Http\Controllers\TanggaBesiController;
use App\Http\Controllers\MenaraAirController;



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

// ---------------------PAGAR ADMIN---------------------
Route::get('/admin/pagar', [PagarController::class, 'index'])->name('admin.pagar.index')->middleware('is_admin');
Route::get('/admin/pagar/create', [PagarController::class, 'create'])->name('admin.pagar.create')->middleware('is_admin');
Route::post('/admin/pagar/store', [PagarController::class, 'store'])->name('admin.pagar.store')->middleware('is_admin');
Route::get('/admin/pagar/{id}/edit', [PagarController::class, 'edit'])->name('admin.pagar.edit')->middleware('is_admin');
Route::put('/admin/pagar/{id}/update', [PagarController::class, 'update'])->name('admin.pagar.update')->middleware('is_admin');
Route::get('/admin/pagar/{id}/destroy', [PagarController::class, 'destroy'])->name('admin.pagar.destroy')->middleware('is_admin');
Route::get('/admin/pagar/{id}/preview', [PagarController::class, 'show'])->name('admin.pagar.preview')->middleware('is_admin');

// ---------------------PINTU BESI ADMIN---------------------
Route::get('/admin/pintubesi', [PintuBesiController::class, 'index'])->name('admin.pintubesi.index')->middleware('is_admin');
Route::get('/admin/pintubesi/create', [PintuBesiController::class, 'create'])->name('admin.pintubesi.create')->middleware('is_admin');
Route::post('/admin/pintubesi/store', [PintuBesiController::class, 'store'])->name('admin.pintubesi.store')->middleware('is_admin');
Route::get('/admin/pintubesi/{id}/edit', [PintuBesiController::class, 'edit'])->name('admin.pintubesi.edit')->middleware('is_admin');
Route::put('/admin/pintubesi/{id}/update', [PintuBesiController::class, 'update'])->name('admin.pintubesi.update')->middleware('is_admin');
Route::get('/admin/pintubesi/{id}/destroy', [PintuBesiController::class, 'destroy'])->name('admin.pintubesi.destroy')->middleware('is_admin');
Route::get('/admin/pintubesi/{id}/preview', [PintuBesiController::class, 'show'])->name('admin.pintubesi.preview')->middleware('is_admin');

// ---------------------PINTU KASA NYAMUK ADMIN---------------------
Route::get('/admin/pintukasanyamuk', [PintuKasaNyamukController::class, 'index'])->name('admin.pintukasanyamuk.index')->middleware('is_admin');
Route::get('/admin/pintukasanyamuk/create', [PintuKasaNyamukController::class, 'create'])->name('admin.pintukasanyamuk.create')->middleware('is_admin');
Route::post('/admin/pintukasanyamuk/store', [PintuKasaNyamukController::class, 'store'])->name('admin.pintukasanyamuk.store')->middleware('is_admin');
Route::get('/admin/pintukasanyamuk/{id}/edit', [PintuKasaNyamukController::class, 'edit'])->name('admin.pintukasanyamuk.edit')->middleware('is_admin');
Route::put('/admin/pintukasanyamuk/{id}/update', [PintuKasaNyamukController::class, 'update'])->name('admin.pintukasanyamuk.update')->middleware('is_admin');
Route::get('/admin/pintukasanyamuk/{id}/destroy', [PintuKasaNyamukController::class, 'destroy'])->name('admin.pintukasanyamuk.destroy')->middleware('is_admin');
Route::get('/admin/pintukasanyamuk/{id}/preview', [PintuKasaNyamukController::class, 'show'])->name('admin.pintukasanyamuk.preview')->middleware('is_admin');
// ---------------------PINTU KASA NYAMUK ADMIN---------------------
Route::get('/admin/teralisjendela', [TeralisJendelaController::class, 'index'])->name('admin.teralisjendela.index')->middleware('is_admin');
Route::get('/admin/teralisjendela/create', [TeralisJendelaController::class, 'create'])->name('admin.teralisjendela.create')->middleware('is_admin');
Route::post('/admin/teralisjendela/store', [TeralisJendelaController::class, 'store'])->name('admin.teralisjendela.store')->middleware('is_admin');
Route::get('/admin/teralisjendela/{id}/edit', [TeralisJendelaController::class, 'edit'])->name('admin.teralisjendela.edit')->middleware('is_admin');
Route::put('/admin/teralisjendela/{id}/update', [TeralisJendelaController::class, 'update'])->name('admin.teralisjendela.update')->middleware('is_admin');
Route::get('/admin/teralisjendela/{id}/destroy', [TeralisJendelaController::class, 'destroy'])->name('admin.teralisjendela.destroy')->middleware('is_admin');
Route::get('/admin/teralisjendela/{id}/preview', [TeralisJendelaController::class, 'show'])->name('admin.teralisjendela.preview')->middleware('is_admin');

// ---------------------PINTU KASA NYAMUK ADMIN---------------------
Route::get('/admin/teralispintu', [TeralisPintuController::class, 'index'])->name('admin.teralispintu.index')->middleware('is_admin');
Route::get('/admin/teralispintu/create', [TeralisPintuController::class, 'create'])->name('admin.teralispintu.create')->middleware('is_admin');
Route::post('/admin/teralispintu/store', [TeralisPintuController::class, 'store'])->name('admin.teralispintu.store')->middleware('is_admin');
Route::get('/admin/teralispintu/{id}/edit', [TeralisPintuController::class, 'edit'])->name('admin.teralispintu.edit')->middleware('is_admin');
Route::put('/admin/teralispintu/{id}/update', [TeralisPintuController::class, 'update'])->name('admin.teralispintu.update')->middleware('is_admin');
Route::get('/admin/teralispintu/{id}/destroy', [TeralisPintuController::class, 'destroy'])->name('admin.teralispintu.destroy')->middleware('is_admin');
Route::get('/admin/teralispintu/{id}/preview', [TeralisPintuController::class, 'show'])->name('admin.teralispintu.preview')->middleware('is_admin');

// ---------------------PINTU RAILING BALKON ADMIN---------------------
Route::get('/admin/railingbalkon', [RailingBalkonController::class, 'index'])->name('admin.railingbalkon.index')->middleware('is_admin');
Route::get('/admin/railingbalkon/create', [RailingBalkonController::class, 'create'])->name('admin.railingbalkon.create')->middleware('is_admin');
Route::post('/admin/railingbalkon/store', [RailingBalkonController::class, 'store'])->name('admin.railingbalkon.store')->middleware('is_admin');
Route::get('/admin/railingbalkon/{id}/edit', [RailingBalkonController::class, 'edit'])->name('admin.railingbalkon.edit')->middleware('is_admin');
Route::put('/admin/railingbalkon/{id}/update', [RailingBalkonController::class, 'update'])->name('admin.railingbalkon.update')->middleware('is_admin');
Route::get('/admin/railingbalkon/{id}/destroy', [RailingBalkonController::class, 'destroy'])->name('admin.railingbalkon.destroy')->middleware('is_admin');
Route::get('/admin/railingbalkon/{id}/preview', [RailingBalkonController::class, 'show'])->name('admin.railingbalkon.preview')->middleware('is_admin');

// ---------------------PINTU RAILING TANGGA ADMIN---------------------
Route::get('/admin/railingtangga', [RailingTanggaController::class, 'index'])->name('admin.railingtangga.index')->middleware('is_admin');
Route::get('/admin/railingtangga/create', [RailingTanggaController::class, 'create'])->name('admin.railingtangga.create')->middleware('is_admin');
Route::post('/admin/railingtangga/store', [RailingTanggaController::class, 'store'])->name('admin.railingtangga.store')->middleware('is_admin');
Route::get('/admin/railingtangga/{id}/edit', [RailingTanggaController::class, 'edit'])->name('admin.railingtangga.edit')->middleware('is_admin');
Route::put('/admin/railingtangga/{id}/update', [RailingTanggaController::class, 'update'])->name('admin.railingtangga.update')->middleware('is_admin');
Route::get('/admin/railingtangga/{id}/destroy', [RailingTanggaController::class, 'destroy'])->name('admin.railingtangga.destroy')->middleware('is_admin');
Route::get('/admin/railingtangga/{id}/preview', [RailingTanggaController::class, 'show'])->name('admin.railingtangga.preview')->middleware('is_admin');

// ---------------------PINTU HENDERSON ADMIN---------------------
Route::get('/admin/pintuhenderson', [PintuHendersonController::class, 'index'])->name('admin.pintuhenderson.index')->middleware('is_admin');
Route::get('/admin/pintuhenderson/create', [PintuHendersonController::class, 'create'])->name('admin.pintuhenderson.create')->middleware('is_admin');
Route::post('/admin/pintuhenderson/store', [PintuHendersonController::class, 'store'])->name('admin.pintuhenderson.store')->middleware('is_admin');
Route::get('/admin/pintuhenderson/{id}/edit', [PintuHendersonController::class, 'edit'])->name('admin.pintuhenderson.edit')->middleware('is_admin');
Route::put('/admin/pintuhenderson/{id}/update', [PintuHendersonController::class, 'update'])->name('admin.pintuhenderson.update')->middleware('is_admin');
Route::get('/admin/pintuhenderson/{id}/destroy', [PintuHendersonController::class, 'destroy'])->name('admin.pintuhenderson.destroy')->middleware('is_admin');
Route::get('/admin/pintuhenderson/{id}/preview', [PintuHendersonController::class, 'show'])->name('admin.pintuhenderson.preview')->middleware('is_admin');

// ---------------------PINTU TANGGA PUTAR ADMIN---------------------
Route::get('/admin/tanggaputar', [TanggaPutarController::class, 'index'])->name('admin.tanggaputar.index')->middleware('is_admin');
Route::get('/admin/tanggaputar/create', [TanggaPutarController::class, 'create'])->name('admin.tanggaputar.create')->middleware('is_admin');
Route::post('/admin/tanggaputar/store', [TanggaPutarController::class, 'store'])->name('admin.tanggaputar.store')->middleware('is_admin');
Route::get('/admin/tanggaputar/{id}/edit', [TanggaPutarController::class, 'edit'])->name('admin.tanggaputar.edit')->middleware('is_admin');
Route::put('/admin/tanggaputar/{id}/update', [TanggaPutarController::class, 'update'])->name('admin.tanggaputar.update')->middleware('is_admin');
Route::get('/admin/tanggaputar/{id}/destroy', [TanggaPutarController::class, 'destroy'])->name('admin.tanggaputar.destroy')->middleware('is_admin');
Route::get('/admin/tanggaputar/{id}/preview', [TanggaPutarController::class, 'show'])->name('admin.tanggaputar.preview')->middleware('is_admin');

// ---------------------PINTU TANGGA PUTAR ADMIN---------------------
Route::get('/admin/tanggabesi', [TanggaBesiController::class, 'index'])->name('admin.tanggabesi.index')->middleware('is_admin');
Route::get('/admin/tanggabesi/create', [TanggaBesiController::class, 'create'])->name('admin.tanggabesi.create')->middleware('is_admin');
Route::post('/admin/tanggabesi/store', [TanggaBesiController::class, 'store'])->name('admin.tanggabesi.store')->middleware('is_admin');
Route::get('/admin/tanggabesi/{id}/edit', [TanggaBesiController::class, 'edit'])->name('admin.tanggabesi.edit')->middleware('is_admin');
Route::put('/admin/tanggabesi/{id}/update', [TanggaBesiController::class, 'update'])->name('admin.tanggabesi.update')->middleware('is_admin');
Route::get('/admin/tanggabesi/{id}/destroy', [TanggaBesiController::class, 'destroy'])->name('admin.tanggabesi.destroy')->middleware('is_admin');
Route::get('/admin/tanggabesi/{id}/preview', [TanggaBesiController::class, 'show'])->name('admin.tanggabesi.preview')->middleware('is_admin');

// ---------------------PINTU TANGGA PUTAR ADMIN---------------------
Route::get('/admin/menaraair', [MenaraAirController::class, 'index'])->name('admin.menaraair.index')->middleware('is_admin');
Route::get('/admin/menaraair/create', [MenaraAirController::class, 'create'])->name('admin.menaraair.create')->middleware('is_admin');
Route::post('/admin/menaraair/store', [MenaraAirController::class, 'store'])->name('admin.menaraair.store')->middleware('is_admin');
Route::get('/admin/menaraair/{id}/edit', [MenaraAirController::class, 'edit'])->name('admin.menaraair.edit')->middleware('is_admin');
Route::put('/admin/menaraair/{id}/update', [MenaraAirController::class, 'update'])->name('admin.menaraair.update')->middleware('is_admin');
Route::get('/admin/menaraair/{id}/destroy', [MenaraAirController::class, 'destroy'])->name('admin.menaraair.destroy')->middleware('is_admin');
Route::get('/admin/menaraair/{id}/preview', [MenaraAirController::class, 'show'])->name('admin.menaraair.preview')->middleware('is_admin');


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


Route::get('/detailbarang', function () {
    return view('landingpage.barang.detailbarang');
})->name('detailbarang');



