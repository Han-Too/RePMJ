<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporans', function (Blueprint $table) {
            $table->id('id_laporan');
            $table->bigInteger('id_transaksi');
            $table->bigInteger('id_produk');
            $table->string('judul_pekerjaan');
            $table->string('nama_pekerjaan');
            $table->string('bahan');
            $table->string('jumlah');
            $table->string('harga');
            $table->string('totalharga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laporans');
    }
}
