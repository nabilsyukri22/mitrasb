<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMitrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mitras', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('nama_lengkap')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('nik')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->string('tanggal_lahir')->nullable();
            $table->string('umur')->nullable();
            $table->string('status_perkawinan')->nullable();
            $table->string('domisili')->nullable();
            $table->string('kelurahan')->nullable();
            $table->string('pendidikan')->nullable();
            $table->string('nowa')->nullable();
            $table->string('email')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->string('motor')->nullable();
            $table->string('hp')->nullable();
            $table->string('zoom')->nullable();
            $table->string('spek_hp')->nullable();
            $table->string('pas_foto')->nullable();
            $table->string('ktp')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mitras');
    }
}
