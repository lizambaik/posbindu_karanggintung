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

    public function pemeriksaan(Request $request)
    {
        if ($request->ajax()) {
            # code...
            $data = [];

            if ($request->has('q')) {
                $search = $request->q;
                $data = Pasien::where('nama_lengkap', 'LIKE', "%$search%")->get();
            }
            return response()->json($data);
        }
        $data = Pasien::select('nama_lengkap', 'id')->get();
        return view('pasien.pemeriksaan', compact('data'));
    }
}
