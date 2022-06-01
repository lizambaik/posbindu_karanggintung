<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pasien extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_lengkap',
        'nama_panggilan',
        'ktp',
        'tanggal_lahir',
        'jk',
        'agama',
        'pekerjaan',
        'goldar',
        'pendidikan',
        'no_hp',
        'email',
        'pernikahan',
        'alamat',
    ];

    public function rekappasien($id)
    {
        return DB::table('pemeriksaans')
            ->select('pemeriksaans.*', 'pasiens.nama_lengkap')
            ->join('pasiens', 'pasiens.id', '=', 'pemeriksaans.pasien_id')
            ->where(['pemeriksaans.pasien_id' => $id])
            ->get();
    }
}
