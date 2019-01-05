<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbPelatihTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_pelatih', function (Blueprint $table) {
            $table->string('kode_pelatih',10);
            $table->string('kode_ekskul',10);
            $table->string('nama_pelatih',50);
            $table->string('jenis_kelamin',30);
            $table->string('agama',30);
            $table->date('tanggal_lahir');
            $table->string('alamat');
            $table->string('foto');
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
        Schema::dropIfExists('tb_pelatih');
    }
}
