@extends('layouts.admin.master')

@section('title')
    Pemeriksaan Pasien
@endsection

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>@yield('title')</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('kader') }}">Kader</a></li>
                            <li class="breadcrumb-item active">@yield('title')</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Pemeriksaan Pasien</h3>
                    </div>
                    <div class="card-body">
                        {{-- <form action="{{ route('kader.cek.pasien') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="inputPasien_id" class="form-label">Nama Lengkap</label>
                                    <input type="text" name="pasien_id" class="form-control @error('pasien_id') is-invalid @enderror" id="inputPasien_id">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputTanggal" class="form-label">Tanggal Pemeriksaan</label>
                                    <div class="col-12">
                                        <div class="input-group date" id="datepicker">
                                            <input type="text" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror">
                                            <span class="input-group-append">
                                                <span class="input-group-text bg-white d-block">
                                                    <i class="fa fa-calendar"></i>
                                                </span>
                                            </span>
                                            @error('tanggal')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="p-2 mt-5">
                                        <h5>Riwayat Penyakit Tidak Menular Pada Keluarga</h5>
                                        <div class="col-12">
                                            <label for="riwayat_1_kelurga" class="form-label">Riwayat 1</label>
                                            <select id="riwayat_1_kelurga" name="riwayat_1_kelurga"
                                                class="form-control  @error('riwayat_1_kelurga') is-invalid @enderror">
                                                <option selected>Tidak ada...</option>
                                                <option>Diabetes</option>
                                                <option>Hipertensi</option>
                                                <option>Jantung</option>
                                                <option>Stroke</option>
                                                <option>Asma</option>
                                                <option>Kanker</option>
                                                <option>Kolesterol</option>
                                                <option>Kanker</option>
                                            </select>
                                            @error('riwayat_1_kelurga')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <label for="riwayat_2_kelurga" class="form-label">Riwayat 2</label>
                                            <select id="riwayat_2_kelurga" name="riwayat_2_kelurga"
                                                class="form-control  @error('riwayat_2_kelurga') is-invalid @enderror">
                                                <option selected>Tidak ada...</option>
                                                <option>Diabetes</option>
                                                <option>Hipertensi</option>
                                                <option>Jantung</option>
                                                <option>Stroke</option>
                                                <option>Asma</option>
                                                <option>Kanker</option>
                                                <option>Kolesterol</option>
                                                <option>Kanker</option>
                                            </select>
                                            @error('riwayat_2_kelurga')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <label for="riwayat_3_kelurga" class="form-label">Riwayat 3</label>
                                            <select id="riwayat_3_kelurga" name="riwayat_3_kelurga"
                                                class="form-control  @error('riwayat_3_kelurga') is-invalid @enderror">
                                                <option selected>Tidak ada...</option>
                                                <option>Diabetes</option>
                                                <option>Hipertensi</option>
                                                <option>Jantung</option>
                                                <option>Stroke</option>
                                                <option>Asma</option>
                                                <option>Kanker</option>
                                                <option>Kolesterol</option>
                                                <option>Kanker</option>
                                            </select>
                                            @error('riwayat_3_kelurga')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="p-2 mt-5">
                                        <h5>Riwayat Penyakit Tidak Menular Pada Diri Sendiri</h5>
                                        <div class="col-12">
                                            <label for="riwayat_1_pribadi" class="form-label">Riwayat 1</label>
                                            <select id="riwayat_1_pribadi" name="riwayat_1_pribadi"
                                                class="form-control  @error('riwayat_1_pribadi') is-invalid @enderror">
                                                <option selected>Tidak ada...</option>
                                                <option>Diabetes</option>
                                                <option>Hipertensi</option>
                                                <option>Jantung</option>
                                                <option>Stroke</option>
                                                <option>Asma</option>
                                                <option>Kanker</option>
                                                <option>Kolesterol</option>
                                                <option>Kanker</option>
                                            </select>
                                            @error('riwayat_1_pribadi')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <label for="riwayat_2_pribadi" class="form-label">Riwayat 2</label>
                                            <select id="riwayat_2_pribadi" name="riwayat_2_pribadi"
                                                class="form-control  @error('riwayat_2_pribadi') is-invalid @enderror">
                                                <option selected>Tidak ada...</option>
                                                <option>Diabetes</option>
                                                <option>Hipertensi</option>
                                                <option>Jantung</option>
                                                <option>Stroke</option>
                                                <option>Asma</option>
                                                <option>Kanker</option>
                                                <option>Kolesterol</option>
                                                <option>Kanker</option>
                                            </select>
                                            @error('riwayat_2_pribadi')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <label for="riwayat_3_pribadi" class="form-label">Riwayat 3</label>
                                            <select id="riwayat_3_pribadi" name="riwayat_3_pribadi"
                                                class="form-control  @error('riwayat_1_pribadi') is-invalid @enderror">
                                                <option selected>Tidak ada...</option>
                                                <option>Diabetes</option>
                                                <option>Hipertensi</option>
                                                <option>Jantung</option>
                                                <option>Stroke</option>
                                                <option>Asma</option>
                                                <option>Kanker</option>
                                                <option>Kolesterol</option>
                                                <option>Kanker</option>
                                            </select>
                                            @error('riwayat_1_pribadi')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class=" mt-5">
                                        <h5>Tekanan Darah</h5>
                                        <div class="col-12 ">
                                            <label for="sistol" class="form-label">Sistol</label>
                                            <input type="text" name="sistol" class="form-control @error('sistol') is-invalid @enderror" id="sistol"
                                                placeholder="">
                                            @error('sistol')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <label for="diastol" class="form-label">Diastol</label>
                                            <input type="text" name="diastol" class="form-control @error('diastol') is-invalid @enderror" id="diastol"
                                                placeholder="">
                                            @error('diastol')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class=" mt-5">
                                        <h5>IMT</h5>
                                        <div class="col-12">
                                            <label for="tb" class="form-label">Tinggi Badan (CM)</label>
                                            <input type="text" name="tb" class="form-control @error('tb') is-invalid @enderror" id="tb" placeholder="">
                                            @error('tb')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-12">
                                            <label for="bb" class="form-label">Berat Badan (KG)</label>
                                            <input type="text" name="bb" class="form-control @error('bb') is-invalid @enderror" id="bb" placeholder="">
                                            @error('bb')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mt-5">
                                        <h5>Lain-Lain</h5>
                                        <div class="col-12">
                                            <label for="perut" class="form-label">Perut (CM)
                                            </label>
                                            <input type="text" name="perut" class="form-control @error('perut') is-invalid @enderror"
                                                id="perut" placeholder="">
                                            @error('perut')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="col-12">
                                            <label for="gula" class="form-label">Pemeriksaan Gula</label>
                                            <input type="text" name="gula"class="form-control @error('gula') is-invalid @enderror" id="gula" placeholder="">
                                            @error('gula')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mt-5">
                                        <h5>Wawancara</h5>
                                        <div class="col-12">
                                            <label for="inputMerokok" class="form-label">Merokok</label><br>
                                            <div class="form-check-inline">
                                                <input type="radio" name="merokok"
                                                    class="form-check-input  @error('merokok') is-invalid @enderror"
                                                    value="YA" id="radio22">
                                                @error('merokok')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <label> YA </label>

                                            </div>
                                            <div class="form-check-inline">
                                                <input type="radio" name="merokok"
                                                    class="form-check-input  @error('merokok') is-invalid @enderror"
                                                    value="TIDAK" id="radio22" checked>
                                                @error('merokok')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <label> TIDAK </label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="inputFisik" class="form-label">Kurang Aktivitas
                                                Fisik</label><br>
                                            <div class="form-check-inline">
                                                <input type="radio" name="fisik"
                                                    class="form-check-input  @error('fisik') is-invalid @enderror"
                                                    value="YA" id="radio5">
                                                @error('fisik')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <label> YA </label>
                                            </div>
                                            <div class="form-check-inline">
                                                <input type="radio" name="fisik"
                                                    class="form-check-input  @error('fisik') is-invalid @enderror"
                                                    value="TIDAK" id="radio5" checked>
                                                @error('fisik')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <label> TIDAK </label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="inputAlkohol" class="form-label">Konsumsi
                                                Alkohol</label><br>
                                            <div class="form-check-inline">
                                                <input type="radio" name="alkohol"
                                                    class="form-check-input  @error('alkohol') is-invalid @enderror"
                                                    value="YA" id="radio6">
                                                @error('alkohol')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <label> YA </label>
                                            </div>
                                            <div class="form-check-inline">
                                                <input type="radio" name="alkohol"
                                                    class="form-check-input  @error('alkohol') is-invalid @enderror"
                                                    value="TIDAK" checked>
                                                @error('fisik')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <label> TIDAK </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mt-5">
                                        <h5>Pola Makan</h5>
                                        <div class="col-12">
                                            <label for="inputGula_lebih" class="form-label">Gula
                                                Berlebih</label><br>
                                            <div class="form-check-inline">
                                                <input type="radio" name="gula_lebih"
                                                    class="form-check-input  @error('gula_lebih') is-invalid @enderror"
                                                    value="YA" id="radio7">
                                                @error('gula_lebih')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <label> YA </label>
                                            </div>
                                            <div class="form-check-inline">
                                                <input type="radio" name="gula_lebih"
                                                    class="form-check-input  @error('gula_lebih') is-invalid @enderror"
                                                    value="TIDAK" id="radio7" checked>
                                                @error('gula_lebih')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <label> TIDAK </label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="inputGaram_leih" class="form-label">Garam
                                                Berlebih</label><br>
                                            <div class="form-check-inline">
                                                <input type="radio" name="garam_lebih"
                                                    class="form-check-input  @error('garam_lebih') is-invalid @enderror"
                                                    value="YA" id="radio8">
                                                @error('garam_lebih')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <label> YA </label>
                                            </div>
                                            <div class="form-check-inline">
                                                <input type="radio" name="garam_lebih"
                                                    class="form-check-input  @error('garam_lebih') is-invalid @enderror"
                                                    value="TIDAK" id="radio8" checked>
                                                @error('garam_lebih')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <label> TIDAK </label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="inputLemak_lebih" class="form-label">Lemak
                                                Berlebih</label><br>
                                            <div class="form-check-inline">
                                                <input type="radio" name="lemak_lebih"
                                                    class="form-check-input  @error('lemak_lebih') is-invalid @enderror"
                                                    value="YA" id="radio9">
                                                @error('lemak_lebih')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <label> YA </label>
                                            </div>
                                            <div class="form-check-inline">
                                                <input type="radio" name="lemak_lebih"
                                                    class="form-check-input  @error('lemak_lebih') is-invalid @enderror"
                                                    value="TIDAK" id="radio9" checked>
                                                @error('lemak_lebih')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <label> TIDAK </label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="inputBuah_sayur" class="form-label">Kurang Makan Buah &
                                                Sayur</label><br>
                                            <div class="form-check-inline">
                                                <input type="radio" name="buah_sayur"
                                                    class="form-check-input  @error('buah_sayur') is-invalid @enderror"
                                                    value="YA" id="radio10">
                                                @error('buah_sayur')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <label> YA </label>
                                            </div>
                                            <div class="form-check-inline">
                                                <input type="radio" name="buah_sayur"
                                                    class="form-check-input  @error('buah_sayur') is-invalid @enderror"
                                                    value="TIDAK" id="radio10" checked>
                                                @error('buah_sayur')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <label> TIDAK </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class=" mt-5">
                                        <h5>Gangguan Indra Penglihatan</h5>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label for="inputMata_kanan" class="form-label">Mata
                                                    Kanan</label><br>
                                                <div class="form-check-inline">
                                                    <input type="radio" name="mata_kanan"
                                                        class="form-check-input  @error('mata_kanan') is-invalid @enderror"
                                                        value="YA" id="radio11">
                                                    @error('mata_kanan')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    <label> YA </label>
                                                </div>

                                                <div class="form-check-inline">
                                                    <input type="radio" name="mata_kanan"
                                                        class="form-check-input  @error('mata_kanan') is-invalid @enderror"
                                                        value="TIDAK" id="radio11" checked>
                                                    @error('mata_kanan')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    <label> TIDAK </label>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <label for="inputMata_kiri" class="form-label">Mata
                                                    Kiri</label><br>
                                                <div class="form-check-inline">
                                                    <input type="radio" name="mata_kiri"
                                                        class="form-check-input  @error('mata_kiri') is-invalid @enderror"
                                                        value="YA" id="radio12">
                                                    @error('mata_kiri')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    <label> YA </label>
                                                </div>

                                                <div class="form-check-inline">
                                                    <input type="radio" name="mata_kiri"
                                                        class="form-check-input  @error('mata_kiri') is-invalid @enderror"
                                                        value="YA" id="radio12" checked>
                                                    @error('mata_kiri')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    <label> TIDAK </label>
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <label for="inputRujukan_mata" class="form-label">Rujuk
                                                    Puskesmas</label><br>
                                                <div class="form-check-inline">
                                                    <input type="radio" name="rujukan_mata"
                                                        class="form-check-input  @error('rujukan_mata') is-invalid @enderror"
                                                        value="YA" id="radio13">
                                                    @error('rujukan_mata')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    <label> YA </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <input type="radio" name="rujukan_mata"
                                                        class="form-check-input  @error('rujukan_mata') is-invalid @enderror"
                                                        value="TIDAK" id="radio13" checked>
                                                    @error('rujukan_mata')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    <label> TIDAK </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-5">
                                    <h5>Gangguan Indra Pendengaran</h5>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="inputTelinga_Kanan" class="form-label">Telinga
                                                Kanan</label><br>
                                            <div class="form-check-inline">
                                                <input type="radio" name="telinga_kanan"
                                                    class="form-check-input  @error('telinga_kanan') is-invalid @enderror"
                                                    value="YA" id="radio14">
                                                @error('telinga_kanan')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <label> YA </label>
                                            </div>
                                            <div class="form-check-inline">
                                                <input type="radio" name="telinga_kanan"
                                                    class="form-check-input  @error('telinga_kanan') is-invalid @enderror"
                                                    value="TIDAK" id="radio14" checked>
                                                @error('telinga_kanan')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <label> TIDAK </label>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="inputTelinga_kiri" class="form-label">Telinga
                                                Kiri</label><br>
                                            <div class="form-check-inline">
                                                <input type="radio" name="telinga_kiri"
                                                    class="form-check-input  @error('telinga_kiri') is-invalid @enderror"
                                                    value="TIDAK" id="radio15">
                                                @error('telinga_kiri')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <label> YA </label>
                                            </div>

                                            <div class="form-check-inline">
                                                <input type="radio" name="telinga_kiri"
                                                    class="form-check-input  @error('telinga_kiri') is-invalid @enderror"
                                                    value="TIDAK" id="radio15" checked>
                                                @error('telinga_kiri')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <label> TIDAK </label>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="inputRujuk_telinga" class="form-label">Rujuk
                                                Puskesmas</label><br>
                                            <div class="form-check-inline">
                                                <input type="radio" name="rujukan_telinga"
                                                    class="form-check-input  @error('rujukan_telinga') is-invalid @enderror"
                                                    value="YA" id="radio16">
                                                @error('rujukan_telinga')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <label> YA </label>
                                            </div>
                                            <div class="form-check-inline">
                                                <input type="radio" name="rujukan_telinga"
                                                    class="form-check-input  @error('rujukan_telinga') is-invalid @enderror"
                                                    value="TIDAK" id="radio16" checked>
                                                @error('rujukan_telinga')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <label> TIDAK </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <h5></h5>
                                <div class="col-md-6 mt-5">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="inputBenjolan_payudara" class="form-label">Benjolan
                                                Payudara</label><br>
                                            <div class="form-check-inline">
                                                <input type="radio" name="benjolan_payudara"
                                                    class="form-check-input  @error('benjolan_payudara') is-invalid @enderror"
                                                    value="DITEMUKAN" id="radio17">
                                                @error('benjolan_payudara')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <label> DITEMUKAN </label>
                                            </div>
                                            <div class="form-check-inline">
                                                <input type="radio" name="benjolan_payudara"
                                                    class="form-check-input  @error('benjolan_payudara') is-invalid @enderror"
                                                    value="TIDAK DITEMUKAN" id="radio17" checked>
                                                @error('benjolan_payudara')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <label> TIDAK DITEMUKAN </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputRujukan_payudara" class="form-label">Rujuk
                                                Puskesmas</label><br>

                                            <div class="form-check-inline">
                                                <input type="radio" name="rujukan_payudara"
                                                    class="form-check-input  @error('rujukan_payudara') is-invalid @enderror"
                                                    value="YA" id="radio18">
                                                @error('rujukan_payudara')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <label> YA </label>
                                            </div>
                                            <div class="form-check-inline">
                                                <input type="radio" name="rujukan_payudara"
                                                    class="form-check-input  @error('rujukan_payudara') is-invalid @enderror"
                                                    value="TIDAK" id="radio18" checked>
                                                @error('rujukan_payudara')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <label> TIDAK </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputEdukasi" class="form-label">Edukasi</label><br>
                                            <div class="form-check-inline">
                                                <input type="radio" name="edukasi"
                                                    class="form-check-input  @error('edukasi') is-invalid @enderror"
                                                    value="YA" id="radio19">
                                                @error('edukasi')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <label> YA </label>
                                            </div>
                                            <div class="form-check-inline">
                                                <input type="radio" name="edukasi"
                                                    class="form-check-input  @error('edukasi') is-invalid @enderror"
                                                    value="TIDAK" id="radio19" checked>
                                                @error('edukasi')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <label> TIDAK </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form> --}}
                        <form action="{{ route('kader.cek.pasien') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="pasien">Pilih Pasien</label>
                                        <select class="form-control select2 @error('pasien_id') is-invalid @enderror" id="pasien"
                                            name="pasien_id">
                                            <option value=""> Masukan Nama Pasien </option>
                                            @foreach ($data as $pasien)
                                                <option value="{{ $pasien->id }}">{{ $pasien->nama_lengkap }}</option>
                                            @endforeach
                                        </select>
                                        @error('pasien_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tanggal_periksa">Tanggal Periksa</label>
                                        <input type="date" name="tanggal"
                                            class="form-control @error('tanggal') is-invalid @enderror" id="tanggal_periksa"
                                            placeholder="name@example.com">
                                        @error('tanggal')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <h5>Tekanan Darah</h5>
                                    <div class="form-group ">
                                        <label for="sistol" class="form-label">Sistol</label>
                                        <input type="text" name="sistol"
                                            class="form-control @error('sistol') is-invalid @enderror" id="sistol"
                                            placeholder="">
                                        @error('sistol')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="diastol" class="form-label">Diastol</label>
                                        <input type="text" name="diastol"
                                            class="form-control @error('diastol') is-invalid @enderror" id="diastol"
                                            placeholder="">
                                        @error('diastol')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <h5>IMT</h5>
                                    <div class="form-group">
                                        <label for="tb" class="form-label">Tinggi Badan (CM)</label>
                                        <input type="text" name="tb" class="form-control @error('tb') is-invalid @enderror"
                                            id="tb" placeholder="">
                                        @error('tb')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="bb" class="form-label">Berat Badan (KG)</label>
                                        <input type="text" name="bb" class="form-control @error('bb') is-invalid @enderror"
                                            id="bb" placeholder="">
                                        @error('bb')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <h5>Lain-Lain</h5>
                                    <div class="form-group">
                                        <label for="perut" class="form-label">Perut (CM)
                                        </label>
                                        <input type="text" name="perut"
                                            class="form-control @error('perut') is-invalid @enderror" id="perut"
                                            placeholder="">
                                        @error('perut')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="gula" class="form-label">Pemeriksaan Gula</label>
                                        <input type="text" name="gula"
                                            class="form-control @error('gula') is-invalid @enderror" id="gula"
                                            placeholder="">
                                        @error('gula')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h5>Riwayat penyakit Tidak Menular Pada Keluarga</h5>
                                    <div class="form-group">
                                        <label for="riwayat_1_kelurga" class="form-label">Riwayat 1</label>
                                        <select id="riwayat_1_kelurga" name="riwayat_1_kelurga"
                                            class="form-control  @error('riwayat_1_kelurga') is-invalid @enderror">
                                            <option selected>Tidak ada...</option>
                                            <option>Penyakit Diabetes</option>
                                            <option>Penyakit Hipertensi</option>
                                            <option>Penyakit Jantung</option>
                                            <option>Penyakit Stroke</option>
                                            <option>Penyakit Asma</option>
                                            <option>Penyakit Kanker</option>
                                            <option>Kolesterol Tinggi</option>
                                            <option>Benjolan Abnormal Pada Payudara</option>
                                        </select>
                                        @error('riwayat_1_kelurga')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="riwayat_2_kelurga" class="form-label">Riwayat 2</label>
                                        <select id="riwayat_2_kelurga" name="riwayat_2_kelurga"
                                            class="form-control  @error('riwayat_2_kelurga') is-invalid @enderror">
                                            <option selected>Tidak ada...</option>
                                            <option>Penyakit Diabetes</option>
                                            <option>Penyakit Hipertensi</option>
                                            <option>Penyakit Jantung</option>
                                            <option>Penyakit Stroke</option>
                                            <option>Penyakit Asma</option>
                                            <option>Penyakit Kanker</option>
                                            <option>Kolesterol Tinggi</option>
                                            <option>Benjolan Abnormal Pada Payudara</option>
                                        </select>
                                        @error('riwayat_2_kelurga')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="riwayat_3_kelurga" class="form-label">Riwayat 3</label>
                                        <select id="riwayat_3_kelurga" name="riwayat_3_kelurga"
                                            class="form-control  @error('riwayat_3_kelurga') is-invalid @enderror">
                                            <option selected>Tidak ada...</option>
                                            <option>Penyakit Diabetes</option>
                                            <option>Penyakit Hipertensi</option>
                                            <option>Penyakit Jantung</option>
                                            <option>Penyakit Stroke</option>
                                            <option>Penyakit Asma</option>
                                            <option>Penyakit Kanker</option>
                                            <option>Kolesterol Tinggi</option>
                                            <option>Benjolan Abnormal Pada Payudara</option>
                                        </select>
                                        @error('riwayat_3_kelurga')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h5>Riwayat Penyakit Tidak Menular Pada Diri Sendiri</h5>
                                    <div class="form-group">
                                        <label for="riwayat_1_pribadi" class="form-label">Riwayat 1</label>
                                        <select id="riwayat_1_pribadi" name="riwayat_1_pribadi"
                                            class="form-control  @error('riwayat_1_pribadi') is-invalid @enderror">
                                            <option selected>Tidak ada...</option>
                                            <option>Penyakit Diabetes</option>
                                            <option>Penyakit Hipertensi</option>
                                            <option>Penyakit Jantung</option>
                                            <option>Penyakit Stroke</option>
                                            <option>Penyakit Asma</option>
                                            <option>Penyakit Kanker</option>
                                            <option>Kolesterol Tinggi</option>
                                            <option>Benjolan Abnormal Pada Payudara</option>
                                        </select>
                                        @error('riwayat_1_pribadi')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="riwayat_2_pribadi" class="form-label">Riwayat 2</label>
                                        <select id="riwayat_2_pribadi" name="riwayat_2_pribadi"
                                            class="form-control  @error('riwayat_2_pribadi') is-invalid @enderror">
                                            <option selected>Tidak ada...</option>
                                            <option>Penyakit Diabetes</option>
                                            <option>Penyakit Hipertensi</option>
                                            <option>Penyakit Jantung</option>
                                            <option>Penyakit Stroke</option>
                                            <option>Penyakit Asma</option>
                                            <option>Penyakit Kanker</option>
                                            <option>Kolesterol Tinggi</option>
                                            <option>Benjolan Abnormal Pada Payudara</option>
                                        </select>
                                        @error('riwayat_2_pribadi')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="riwayat_3_pribadi" class="form-label">Riwayat 3</label>
                                        <select id="riwayat_3_pribadi" name="riwayat_3_pribadi"
                                            class="form-control  @error('riwayat_1_pribadi') is-invalid @enderror">
                                            <option selected>Tidak ada...</option>
                                            <option>Penyakit Diabetes</option>
                                            <option>Penyakit Hipertensi</option>
                                            <option>Penyakit Jantung</option>
                                            <option>Penyakit Stroke</option>
                                            <option>Penyakit Asma</option>
                                            <option>Penyakit Kanker</option>
                                            <option>Kolesterol Tinggi</option>
                                            <option>Benjolan Abnormal Pada Payudara</option>
                                        </select>
                                        @error('riwayat_1_pribadi')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                {{-- <div class="col-md-4">
                                    <h5>Tekanan Darah</h5>
                                    <div class="form-group ">
                                        <label for="sistol" class="form-label">Sistol</label>
                                        <input type="text" name="sistol"
                                            class="form-control @error('sistol') is-invalid @enderror" id="sistol"
                                            placeholder="">
                                        @error('sistol')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="diastol" class="form-label">Diastol</label>
                                        <input type="text" name="diastol"
                                            class="form-control @error('diastol') is-invalid @enderror" id="diastol"
                                            placeholder="">
                                        @error('diastol')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <h5>IMT</h5>
                                    <div class="form-group">
                                        <label for="tb" class="form-label">Tinggi Badan (CM)</label>
                                        <input type="text" name="tb" class="form-control @error('tb') is-invalid @enderror"
                                            id="tb" placeholder="">
                                        @error('tb')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="bb" class="form-label">Berat Badan (KG)</label>
                                        <input type="text" name="bb" class="form-control @error('bb') is-invalid @enderror"
                                            id="bb" placeholder="">
                                        @error('bb')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <h5>Lain-Lain</h5>
                                    <div class="form-group">
                                        <label for="perut" class="form-label">Perut (CM)
                                        </label>
                                        <input type="text" name="perut"
                                            class="form-control @error('perut') is-invalid @enderror" id="perut"
                                            placeholder="">
                                        @error('perut')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="gula" class="form-label">Pemeriksaan Gula</label>
                                        <input type="text" name="gula"
                                            class="form-control @error('gula') is-invalid @enderror" id="gula"
                                            placeholder="">
                                        @error('gula')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div> --}}

                                <div class="col-md-4 col-6">
                                    <h5>Wawancara</h5>
                                    <div class="form-group">
                                        <label for="inputMerokok" class="form-label">Merokok</label><br>
                                        <div class="form-check-inline">
                                            <input type="radio" name="merokok"
                                                class="form-check-input  @error('merokok') is-invalid @enderror" value="YA"
                                                id="radio22">
                                            @error('merokok')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <label> YA </label>

                                        </div>
                                        <div class="form-check-inline">
                                            <input type="radio" name="merokok"
                                                class="form-check-input  @error('merokok') is-invalid @enderror"
                                                value="TIDAK" id="radio22" checked>
                                            @error('merokok')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <label> TIDAK </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputFisik" class="form-label">Kurang Aktivitas
                                            Fisik</label><br>
                                        <div class="form-check-inline">
                                            <input type="radio" name="fisik"
                                                class="form-check-input  @error('fisik') is-invalid @enderror" value="YA"
                                                id="radio5">
                                            @error('fisik')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <label> YA </label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input type="radio" name="fisik"
                                                class="form-check-input  @error('fisik') is-invalid @enderror"
                                                value="TIDAK" id="radio5" checked>
                                            @error('fisik')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <label> TIDAK </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputAlkohol" class="form-label">Konsumsi
                                            Alkohol</label><br>
                                        <div class="form-check-inline">
                                            <input type="radio" name="alkohol"
                                                class="form-check-input  @error('alkohol') is-invalid @enderror" value="YA"
                                                id="radio6">
                                            @error('alkohol')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <label> YA </label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input type="radio" name="alkohol"
                                                class="form-check-input  @error('alkohol') is-invalid @enderror"
                                                value="TIDAK" checked>
                                            @error('fisik')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <label> TIDAK </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-6">
                                    <h5>Pola Makan</h5>
                                    <div class="form-group">
                                        <label for="inputGula_lebih" class="form-label">Gula
                                            Berlebih</label><br>
                                        <div class="form-check-inline">
                                            <input type="radio" name="gula_lebih"
                                                class="form-check-input  @error('gula_lebih') is-invalid @enderror"
                                                value="YA" id="radio7">
                                            @error('gula_lebih')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <label> YA </label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input type="radio" name="gula_lebih"
                                                class="form-check-input  @error('gula_lebih') is-invalid @enderror"
                                                value="TIDAK" id="radio7" checked>
                                            @error('gula_lebih')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <label> TIDAK </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputGaram_leih" class="form-label">Garam
                                            Berlebih</label><br>
                                        <div class="form-check-inline">
                                            <input type="radio" name="garam_lebih"
                                                class="form-check-input  @error('garam_lebih') is-invalid @enderror"
                                                value="YA" id="radio8">
                                            @error('garam_lebih')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <label> YA </label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input type="radio" name="garam_lebih"
                                                class="form-check-input  @error('garam_lebih') is-invalid @enderror"
                                                value="TIDAK" id="radio8" checked>
                                            @error('garam_lebih')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <label> TIDAK </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputLemak_lebih" class="form-label">Lemak
                                            Berlebih</label><br>
                                        <div class="form-check-inline">
                                            <input type="radio" name="lemak_lebih"
                                                class="form-check-input  @error('lemak_lebih') is-invalid @enderror"
                                                value="YA" id="radio9">
                                            @error('lemak_lebih')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <label> YA </label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input type="radio" name="lemak_lebih"
                                                class="form-check-input  @error('lemak_lebih') is-invalid @enderror"
                                                value="TIDAK" id="radio9" checked>
                                            @error('lemak_lebih')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <label> TIDAK </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputBuah_sayur" class="form-label">Kurang Makan Buah &
                                            Sayur</label><br>
                                        <div class="form-check-inline">
                                            <input type="radio" name="buah_sayur"
                                                class="form-check-input  @error('buah_sayur') is-invalid @enderror"
                                                value="YA" id="radio10">
                                            @error('buah_sayur')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <label> YA </label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input type="radio" name="buah_sayur"
                                                class="form-check-input  @error('buah_sayur') is-invalid @enderror"
                                                value="TIDAK" id="radio10" checked>
                                            @error('buah_sayur')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <label> TIDAK </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-6">
                                    <h5>Gangguan Indra Penglihatan</h5>
                                    <div class="form-group">
                                        <label for="inputMata_kanan" class="form-label">Mata
                                            Kanan</label><br>
                                        <div class="form-check-inline">
                                            <input type="radio" name="mata_kanan"
                                                class="form-check-input  @error('mata_kanan') is-invalid @enderror"
                                                value="YA" id="radio11">
                                            @error('mata_kanan')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <label> YA </label>
                                        </div>

                                        <div class="form-check-inline">
                                            <input type="radio" name="mata_kanan"
                                                class="form-check-input  @error('mata_kanan') is-invalid @enderror"
                                                value="TIDAK" id="radio11" checked>
                                            @error('mata_kanan')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <label> TIDAK </label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputMata_kiri" class="form-label">Mata
                                            Kiri</label><br>
                                        <div class="form-check-inline">
                                            <input type="radio" name="mata_kiri"
                                                class="form-check-input  @error('mata_kiri') is-invalid @enderror"
                                                value="YA" id="radio12">
                                            @error('mata_kiri')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <label> YA </label>
                                        </div>

                                        <div class="form-check-inline">
                                            <input type="radio" name="mata_kiri"
                                                class="form-check-input  @error('mata_kiri') is-invalid @enderror"
                                                value="YA" id="radio12" checked>
                                            @error('mata_kiri')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <label> TIDAK </label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputRujukan_mata" class="form-label">Rujuk
                                            Puskesmas</label><br>
                                        <div class="form-check-inline">
                                            <input type="radio" name="rujukan_mata"
                                                class="form-check-input  @error('rujukan_mata') is-invalid @enderror"
                                                value="YA" id="radio13">
                                            @error('rujukan_mata')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <label> YA </label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input type="radio" name="rujukan_mata"
                                                class="form-check-input  @error('rujukan_mata') is-invalid @enderror"
                                                value="TIDAK" id="radio13" checked>
                                            @error('rujukan_mata')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <label> TIDAK </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <h5>Gangguan Indra Pendengaran</h5>
                                    <div class="form-group">
                                        <label for="inputTelinga_Kanan" class="form-label">Telinga
                                            Kanan</label><br>
                                        <div class="form-check-inline">
                                            <input type="radio" name="telinga_kanan"
                                                class="form-check-input  @error('telinga_kanan') is-invalid @enderror"
                                                value="YA" id="radio14">
                                            @error('telinga_kanan')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <label> YA </label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input type="radio" name="telinga_kanan"
                                                class="form-check-input  @error('telinga_kanan') is-invalid @enderror"
                                                value="TIDAK" id="radio14" checked>
                                            @error('telinga_kanan')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <label> TIDAK </label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputTelinga_kiri" class="form-label">Telinga
                                            Kiri</label><br>
                                        <div class="form-check-inline">
                                            <input type="radio" name="telinga_kiri"
                                                class="form-check-input  @error('telinga_kiri') is-invalid @enderror"
                                                value="TIDAK" id="radio15">
                                            @error('telinga_kiri')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <label> YA </label>
                                        </div>

                                        <div class="form-check-inline">
                                            <input type="radio" name="telinga_kiri"
                                                class="form-check-input  @error('telinga_kiri') is-invalid @enderror"
                                                value="TIDAK" id="radio15" checked>
                                            @error('telinga_kiri')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <label> TIDAK </label>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputRujuk_telinga" class="form-label">Rujuk
                                            Puskesmas</label><br>
                                        <div class="form-check-inline">
                                            <input type="radio" name="rujukan_telinga"
                                                class="form-check-input  @error('rujukan_telinga') is-invalid @enderror"
                                                value="YA" id="radio16">
                                            @error('rujukan_telinga')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <label> YA </label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input type="radio" name="rujukan_telinga"
                                                class="form-check-input  @error('rujukan_telinga') is-invalid @enderror"
                                                value="TIDAK" id="radio16" checked>
                                            @error('rujukan_telinga')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <label> TIDAK </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <h5>Gangguan Payudara</h5>
                                    <div class="form-group">
                                        <label for="inputBenjolan_payudara" class="form-label">Benjolan
                                            Payudara</label><br>
                                        <div class="form-check-inline">
                                            <input type="radio" name="benjolan_payudara"
                                                class="form-check-input  @error('benjolan_payudara') is-invalid @enderror"
                                                value="DITEMUKAN" id="radio17">
                                            @error('benjolan_payudara')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <label> DITEMUKAN </label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input type="radio" name="benjolan_payudara"
                                                class="form-check-input  @error('benjolan_payudara') is-invalid @enderror"
                                                value="TIDAK" id="radio17" checked>
                                            @error('benjolan_payudara')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <label> TIDAK DITEMUKAN </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputRujukan_payudara" class="form-label">Rujuk
                                            Puskesmas</label><br>

                                        <div class="form-check-inline">
                                            <input type="radio" name="rujukan_payudara"
                                                class="form-check-input  @error('rujukan_payudara') is-invalid @enderror"
                                                value="YA" id="radio18">
                                            @error('rujukan_payudara')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <label> YA </label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input type="radio" name="rujukan_payudara"
                                                class="form-check-input  @error('rujukan_payudara') is-invalid @enderror"
                                                value="TIDAK" id="radio18" checked>
                                            @error('rujukan_payudara')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <label> TIDAK </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEdukasi" class="form-label">Edukasi</label><br>
                                        <div class="form-check-inline">
                                            <input type="radio" name="edukasi"
                                                class="form-check-input  @error('edukasi') is-invalid @enderror"
                                                value="YA" id="radio19">
                                            @error('edukasi')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <label> YA </label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input type="radio" name="edukasi"
                                                class="form-check-input  @error('edukasi') is-invalid @enderror"
                                                value="TIDAK" id="radio19" checked>
                                            @error('edukasi')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <label> TIDAK </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
