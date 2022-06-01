<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Rap2hpoutre\FastExcel\FastExcel;

class ExcellController extends Controller
{
    public function index()
    {
        return view('excell.index');
    }

    public function rekap(Request $request)
    {
        $request->validate([
            'bulan' => 'required'
        ]);

        $data = DB::table('pemeriksaans')
            ->select('pemeriksaans.*', 'pasiens.nama_lengkap')
            ->join('pasiens', 'pasiens.id', '=', 'pemeriksaans.pasien_id')
            // ->whereMonth('tanggal', '=', $request->bulan)
            // ->whereDate('tanggal', '= ', '10')
            ->where(['pemeriksaans.tanggal' => $request->bulan])
            ->get();
        
        if (empty($data[0])) {
            # jika data rekap kosong maka
            return redirect()->route('rekap')->with('galat', 'Data Pemeriksaan Tidak Ada');
        }
        
        // dd($data);
        $nama = 'Filter pada : ' . $request->bulan . '.csv';
        return (new FastExcel($data))->download($nama, function ($db) {
            return [
                'Nama Lengkap' => $db->nama_lengkap,
                'Riwayat 1 Keluarga' => $db->riwayat_1_kelurga,
                'Riwayat 2 Keluarga' => $db->riwayat_2_kelurga,
                'Riwayat 3 Keluarga' => $db->riwayat_3_kelurga,
                'Riwayat 1 Pribadi' => $db->riwayat_1_pribadi,
                'Riwayat 2 Pribadi' => $db->riwayat_1_pribadi,
                'Riwayat 3 Pribadi' => $db->riwayat_1_pribadi,
                'Sistol' => $db->sistol,
                'Diastol' => $db->diastol,
                'Tinggi Badan' => $db->tb,
                'Berat Badan' => $db->bb,
                'Lingkar Perut' => $db->perut,
                'Gula Darah' => $db->gula,
                'Merokok' => $db->merokok,
                'Kurang Aktifitas Fisik' => $db->fisik,
                'Alkohol' => $db->alkohol,
                'Gula Berlebih' => $db->gula_lebih,
                'Garam Berlebih' => $db->garam_lebih,
                'Lemak Berlebih' => $db->lemak_lebih,
                'Kurang Buah & Sayur' => $db->buah_sayur,
                'Gangguan Mata Kanan' => $db->mata_kanan,
                'Gangguan Mata Kiri' => $db->mata_kiri,
                'Rujukan Mata' => $db->rujukan_mata,
                'Gangguan Telinga Kanan' => $db->telinga_kanan,
                'Gangguan Telinga Kiri' => $db->telinga_kiri,
                'Rujukan Puskesmas' => $db->rujukan_telinga,
                'Benjolan Payudara' => $db->benjolan_payudara,
                'Rujuan Payudara' => $db->rujukan_payudara,
                'Edukasi' => $db->edukasi,
            ];
        });
    }
}
