@extends('layouts.admin.master')

@section('title')
    Rekap Data Pasien {{ $data->nama_lengkap }}
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
                        <h3 class="card-title">Pasien a.n {{ $data->nama_lengkap }}</h3>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Nama Lengkap</td>
                                    <td>:</td>
                                    <td>{{ $data->nama_lengkap }}</td>
                                    <td>Nama Panggilan</td>
                                    <td>:</td>
                                    <td>{{ $data->nama_panggilan }}</td>
                                </tr>
                                <tr>
                                    <td>Nomor KTP</td>
                                    <td>:</td>
                                    <td>{{ $data->ktp }}</td>
                                    <td>Tanggal Lahir</td>
                                    <td>:</td>
                                    <td>{{ $data->tanggal_lahir }}</td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td>
                                    <td>:</td>
                                    <td>{{ $data->jk }}</td>
                                    <td>Golongan Darah</td>
                                    <td>:</td>
                                    <td>{{ $data->goldar }}</td>
                                </tr>
                                <tr>
                                    <td>Agama</td>
                                    <td>:</td>
                                    <td>{{ $data->agama }}</td>
                                    <td>Pekerjaan</td>
                                    <td>:</td>
                                    <td>{{ $data->pekerjaan }}</td>
                                </tr>
                                <tr>
                                    <td>Nomor HP</td>
                                    <td>:</td>
                                    <td>{{ $data->no_hp }}</td>
                                    <td>Pendidikan Terakhir</td>
                                    <td>:</td>
                                    <td>{{ $data->pendidikan }}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td>{{ $data->email }}</td>
                                    <td>Status</td>
                                    <td>:</td>
                                    <td>{{ $data->pernikahan }}</td>
                                </tr>
                                <tr>
                                    <td colspan="1">Alamat Lengkap</td>
                                    <td>:</td>
                                    <td colspan="4">{{ $data->alamat }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="card card-success">
                            <div class="card-header">
                                <div class="d-flex justify-content-between">
                                    <h3 class="card-title">Rekap Pemeriksaan</h3>
                                    {{-- <button class="btn btn-light btn-sm">Cetak PDF</button> --}}
                                </div>
                            </div>
                            <div class="card-body">

                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Tanggal Pemeriksaan</th>
                                            <th scope="col">Sistol</th>
                                            <th scope="col">Diastol</th>
                                            <th scope="col">Tinggi</th>
                                            <th scope="col">Berat</th>
                                            <th scope="col">Lingkar Perut</th>
                                            <th scope="col">Gula</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($riwayat as $rk)
                                            <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <th>{{ $rk->tanggal }}</th>
                                                <td>{{ $rk->sistol }}</td>
                                                <td>{{ $rk->diastol }}</td>
                                                <td>{{ $rk->tb }} cm</td>
                                                <td>{{ $rk->bb }} Kg</td>
                                                <td>{{ $rk->perut }} cm</td>
                                                <td>{{ $rk->gula }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>

                                    <thead>
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                            <th scope="col">PTM Keluarga Riwayat 1</th>
                                            <th scope="col">PTM Keluarga Riwayat 2</th>
                                            <th scope="col">PTM Keluarga Riwayat 3</th>
                                            <th scope="col">PTM Pribadi Riwayat 1</th>
                                            <th scope="col">PTM Pribadi Riwayat 2</th>
                                            <th scope="col">PTM Pribadi Riwayat 3</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($riwayat as $rk)
                                            <tr>
                                                <td></td>
                                                <th>{{ $rk->tanggal }}</th>
                                                <td>{{ $rk->riwayat_1_kelurga }}</td>
                                                <td>{{ $rk->riwayat_2_kelurga }}</td>
                                                <td>{{ $rk->riwayat_3_kelurga }}</td>
                                                <td>{{ $rk->riwayat_1_pribadi }}</td>
                                                <td>{{ $rk->riwayat_2_pribadi }}</td>
                                                <td>{{ $rk->riwayat_3_pribadi }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>

                                    <thead>
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                            <th scope="col"> Merokok</th>
                                            <th scope="col"> Kurang Aktivitas Fisik</th>
                                            <th scope="col"> Konsumsi Alkohol</th>
                                            <th scope="col"> Gula Berlebih</th>
                                            <th scope="col"> Garam Berlebih</th>
                                            <th scope="col"> Lemak Berlebih</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($riwayat as $rk)
                                            <tr>
                                                <td></td>
                                                <th>{{ $rk->tanggal }}</th>
                                                <td>{{ $rk->merokok }}</td>
                                                <td>{{ $rk->fisik }}</td>
                                                <td>{{ $rk->alkohol }}</td>
                                                <td>{{ $rk->gula_lebih }}</td>
                                                <td>{{ $rk->garam_lebih }}</td>
                                                <td>{{ $rk->lemak_lebih }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>

                                    <thead>
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                            <th scope="col"> Kurang Buah Sayur</th>
                                            <th scope="col"> Benjolan Payudara</th>
                                            <th scope="col"> Rujuk Puskesmas (Payudara) </th>
                                            <th scope="col"> Gangguan Mata Kanan</th>
                                            <th scope="col"> Gangguan Mata Kiri</th>
                                            <th scope="col"> Rujuk Puskesmas (Mata)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($riwayat as $rk)
                                            <tr>
                                                <td></td>
                                                <th>{{ $rk->tanggal }}</th>
                                                <td>{{ $rk->buah_sayur }}</td>
                                                <td>{{ $rk->benjolan_payudara }}</td>
                                                <td>{{ $rk->rujukan_payudara }}</td>
                                                <td>{{ $rk->mata_kanan }}</td>
                                                <td>{{ $rk->mata_kiri }}</td>
                                                <td>{{ $rk->rujukan_mata}}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>

                                    <thead>
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                            <th scope="col"> Gangguan Telinga Kanan</th>
                                            <th scope="col"> Gangguan Telinga Kiri</th>
                                            <th scope="col"> Rujuk Puskesmas (Telinga) </th>
                                            <th scope="col"> Edukasi</th>
                                            <th scope="col"> </th>
                                            <th scope="col"> </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($riwayat as $rk)
                                            <tr>
                                                <td></td>
                                                <th>{{ $rk->tanggal }}</th>
                                                <td>{{ $rk->telinga_kanan }}</td>
                                                <td>{{ $rk->telinga_kiri }}</td>
                                                <td>{{ $rk->rujukan_telinga }}</td>
                                                <td>{{ $rk->edukasi}}</td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        @endforeach
                                    </tbody>

                                    {{-- <tbody>
                                        @foreach ($riwayat as $rk)
                                            <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <th>{{ $rk->tanggal }}</th>
                                                <td>{{ $rk->sistol }}</td>
                                                <td>{{ $rk->diastol }}</td>
                                                <td>{{ $rk->tb }} cm</td>
                                                <td>{{ $rk->bb }} Kg</td>
                                                <td>{{ $rk->perut }} cm</td>
                                                <td>{{ $rk->gula }}</td>
                                            </tr>
                                            <tr>
                                                <td>{{ $rk->riwayat_1_kelurga }}</td>
                                                <td>{{ $rk->riwayat_2_kelurga }}</td>
                                                <td>{{ $rk->riwayat_3_kelurga }}</td>
                                                <td>{{ $rk->riwayat_1_pribadi }}</td>
                                                <td>{{ $rk->riwayat_2_pribadi }}</td>
                                                <td>{{ $rk->riwayat_3_pribadi }}</td>
                                                <td>{{ $rk->merokok }}</td>
                                                <td>{{ $rk->fisik }}</td>
                                                <td>{{ $rk->alkohol }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody> --}}
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
