<?php

namespace App\Http\Controllers\Kader;

use App\Http\Controllers\Controller;
use App\Models\Pasien;
use App\Models\Pemeriksaan;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class PasienController extends Controller
{
    public function __construct()
    {
        $this->pasien = new Pasien();
    }
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Pasien::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn_1 = '<a href="' . route('kader.pasien.view', $row->id) . '" class="btn btn-secondary btn-sm mr-1"><i class="fas fa-eye"></i></a>';
                    $actionBtn_2 = '<a href="' . route('kader.pasien.edit', $row->id) . '" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>';
                    $actionBtn = $actionBtn_1 . $actionBtn_2 . ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-url="' . route('kader.pasien.hapus', $row->id) . '" data-original-title="Delete" class="btn btn-danger btn-sm deleteItem"><i class="fas fa-trash"></i></a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('pasien.index');
    }

    public function view($id)
    {
        $data = Pasien::find($id);
        if (empty($data)) {
            # jika kosong maka
            return redirect()->route('kader.pasien')->with('galat', 'Pasien Tidak Tersedia !');
        } else {
            # jika tidak kosong maka
            $riwayat = Pemeriksaan::where('pasien_id', $data->id)->get();
            return view('pasien.view', compact('data', 'riwayat'));
            // dd($rekap);
        }
        
    }

    public function create()
    {
        return view('pasien.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'nama_panggilan' => 'required',
            'ktp' => 'required|numeric',
            'tanggal_lahir' => 'required',
            'jk' => 'required',
            'agama' => 'required',
            'pekerjaan' => 'required',
            'goldar' => 'required',
            'pendidikan' => 'required',
            'no_hp' => 'required|numeric',
            'email' => 'required|email',
            'pernikahan' => 'required',
            'alamat' => 'required',
        ]);;
        // dd($request->all());
        Pasien::create($request->all());
        return redirect()->route('kader.pasien')->with('success', 'Pasien Berhasil ditambahkan');
    }

    public function destroy($id)
    {
        Pasien::find($id)->delete();
        return response()->json(['success' => 'Data Pasien Berhasil di Hapus']);
    }

}
