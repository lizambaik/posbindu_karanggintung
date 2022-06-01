<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasiens', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('nama_panggilan');
            $table->string('ktp');
            $table->date('tanggal_lahir');
            $table->enum('jk', ['L', 'P']);
            $table->string('agama');
            $table->string('pekerjaan');
            $table->string('goldar');
            $table->string('pendidikan');
            $table->string('no_hp');
            $table->string('email');
            $table->string('pernikahan');
            $table->text('alamat');
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
        Schema::dropIfExists('pasiens');
    }
}
