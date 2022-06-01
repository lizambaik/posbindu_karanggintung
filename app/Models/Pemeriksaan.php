<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemeriksaan extends Model
{
    use HasFactory;
    protected $fillable = [
        'pasien_id',
        'tanggal',

        // penyakit menular keluarga
        'riwayat_1_kelurga',
        'riwayat_2_kelurga',
        'riwayat_3_kelurga',

        // penyakit diri sendiri
        'riwayat_1_pribadi',
        'riwayat_2_pribadi',
        'riwayat_3_pribadi',

        // tekanan darah
        'sistol',
        'diastol',

        // IMT data
        'tb',
        'bb',

        // lainnya
        'perut',
        'gula',

        // Wawancara
        'merokok',
        'fisik',
        'alkohol',

        // Pola makan
        'gula_lebih',
        'garam_lebih',
        'lemak_lebih',
        'buah_sayur',

        // gangguan indra pendengaran
        'telinga_kanan',
        'telinga_kiri',
        'rujukan_telinga',

        // gangguan indra pengeliharan
        'mata_kanan',
        'mata_kiri',
        'rujukan_mata',

        // benjolan payudara
        // gangguan indra pendengaran
        'benjolan_payudara',
        'rujukan_payudara',
        'edukasi',
    ];
}
