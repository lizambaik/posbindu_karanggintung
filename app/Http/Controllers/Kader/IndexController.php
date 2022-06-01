<?php

namespace App\Http\Controllers\Kader;

use App\Http\Controllers\Controller;
use App\Models\Pasien;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('kader.index');
    }

    public function pemeriksaan()
    {
        $data = Pasien::select('nama_lengkap', 'id')->get();
        return view('pasien.pemeriksaan', compact('data'));
    }

   
}
