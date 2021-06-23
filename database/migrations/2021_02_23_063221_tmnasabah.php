<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tmnasabah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tmnasabah', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('no_ktp');
            $table->string('nama');
            $table->string('alamat');
            $table->string('kelurahan');
            $table->string('propinsi');
            $table->string('kecamatan');
            $table->integer('kodepos');
            $table->string('alamat_domisili');
            $table->string('kelurahan_domisili');
            $table->string('kecamatan_domisili');
            $table->string('tempat_lahir');
            $table->string('tgl_lahir');
            $table->enum('jk', [
                'L',
                'P'
            ]);
            $table->string('status_pernikahan');
            $table->string('kewarganegaraan');
            $table->string('nama_ibu_kandung');
            $table->integer('npwp');
            $table->string('tlp_rumah');
            $table->string('hp');
            $table->string('email');
            $table->string('jenis_pekerjaan');
            $table->string('users_id');
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
        //
    }
}
