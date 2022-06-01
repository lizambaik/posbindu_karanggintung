<?php

namespace App\Http\Controllers\Kader;

use App\Http\Controllers\Controller;
use App\Models\Pemeriksaan;
use Illuminate\Http\Request;

class PeriksaController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'pasien_id' => 'required',
            'tanggal' => 'required',
    
            // penyakit menular keluarga
            'riwayat_1_kelurga' => 'required',
            'riwayat_2_kelurga' => 'required',
            'riwayat_3_kelurga' => 'required',
    
            // penyakit diri sendiri
            'riwayat_1_pribadi' => 'required',
            'riwayat_2_pribadi' => 'required',
            'riwayat_3_pribadi' => 'required',
    
            // tekanan darah
            'sistol' => 'required',
            'diastol' => 'required',
    
            // IMT data
            'tb' => 'required',
            'bb' => 'required',
    
            // lainnya
            'perut' => 'required',
            'gula' => 'required',
    
            // Wawancara
            'merokok' => 'required',
            'fisik' => 'required',
            'alkohol' => 'required',
    
            // Pola makan
            'gula_lebih' => 'required',
            'garam_lebih' => 'required',
            'lemak_lebih' => 'required',
            'buah_sayur' => 'required',
    
            // gangguan indra pendengaran
            'telinga_kanan' => 'required',
            'telinga_kiri' => 'required',
            'rujukan_telinga' => 'required',
    
            // gangguan indra pengeliharan
            'mata_kanan' => 'required',
            'mata_kiri' => 'required',
            'rujukan_mata' => 'required',
    
            // benjolan payudara
            // gangguan indra pendengaran
            'benjolan_payudara' => 'required',
            'rujukan_payudara' => 'required',
            'edukasi' => 'required',
        ]);

        // dd($request->all());
        Pemeriksaan::create($request->all());
        return redirect()->route('kader.pasien')->with('success', 'Data Pemeriksa Berhasil disimpan');
    }
}
