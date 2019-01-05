<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbGaleriFotoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_galeri', function (Blueprint $table) {
            $table->string('kode_foto',10);
            $table->string('kode_ekskul',10);
            $table->string('nis',20);
            $table->string('judul_foto',100);
            $table->string('lokasi_foto');
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
        Schema::dropIfExists('tb_galeri');
    }
}
