<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemeriksaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemeriksaans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pasien_id');
            $table->foreign('pasien_id')->references('id')->on('pasiens')->onDelete('cascade');

            $table->date('tanggal');
            
            // penyakit menular keluarga
            $table->string('riwayat_1_kelurga');
            $table->string('riwayat_2_kelurga');
            $table->string('riwayat_3_kelurga');

            // penyakit diri sendiri
            $table->string('riwayat_1_pribadi');
            $table->string('riwayat_2_pribadi');
            $table->string('riwayat_3_pribadi');

            // tekanan darah
            $table->integer('sistol');
            $table->integer('diastol');

            // IMT data
            $table->integer('tb');
            $table->integer('bb');

            // lainnya
            $table->integer('perut');
            $table->integer('gula');

            // Wawancara
            $table->string('merokok');
            $table->string('fisik');
            $table->string('alkohol');

            // Pola makan
            $table->string('gula_lebih');
            $table->string('garam_lebih');
            $table->string('lemak_lebih');
            $table->string('buah_sayur');

            // gangguan indra pendengaran
            $table->string('telinga_kanan');
            $table->string('telinga_kiri');
            $table->string('rujukan_telinga');

            // gangguan indra pengeliharan
            $table->string('mata_kanan');
            $table->string('mata_kiri');
            $table->string('rujukan_mata');

            // benjolan payudara
            // gangguan indra pendengaran
            $table->string('benjolan_payudara');
            $table->string('rujukan_payudara');
            $table->string('edukasi');
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
        Schema::dropIfExists('pemeriksaans');
    }
}
