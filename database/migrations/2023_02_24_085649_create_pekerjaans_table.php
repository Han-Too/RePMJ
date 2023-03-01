<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePekerjaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pekerjaans', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('namapekerjaan');
            $table->string('bahan');
            $table->string('luas');
            $table->string('harga');
            $table->integer('totalharga');
            $table->string('keterangan');
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
        Schema::dropIfExists('pekerjaans');
    }
}
