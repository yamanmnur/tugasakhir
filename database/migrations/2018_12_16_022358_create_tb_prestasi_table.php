<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbPrestasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_prestasi_ekskul', function (Blueprint $table) {
            $table->string('kode_prestasi',10);
            $table->string('kode_ekskul',10);
            $table->string('nama_prestasi',100);
            $table->string('juara',30);
            $table->string('tingkat',20);
            $table->text('keterangan');
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
        Schema::dropIfExists('tb_prestasi');
    }
}
