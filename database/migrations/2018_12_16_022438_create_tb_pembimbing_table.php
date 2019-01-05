<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbPembimbingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_pembimbing', function (Blueprint $table) {
            $table->string('nik',20);
            $table->string('kode_ekskul',10);
            $table->string('nama_pembimbing');
            $table->string('jenis_kelamin',30);
            $table->string('email',30);
            $table->string('notlp',20);
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
        Schema::dropIfExists('tb_pembimbing');
    }
}
