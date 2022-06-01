@extends('layouts.admin.master')

@section('title')
    Pendaftaran Pasien
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
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Pendaftaran Pasien</h3>
                    </div>
                    <form action="{{ route('kader.simpan.pasien') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputNamaLengkap" class="form-label">Nama Lengkap</label>
                                        <input type="text" name="nama_lengkap"
                                            class="form-control  @error('nama_lengkap') is-invalid @enderror"
                                            id="inputNamaLengkap">
                                        @error('nama_lengkap')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputpanggilan" class="form-label">Nama Panggilan</label>
                                        <input type="text" name="nama_panggilan"
                                            class="form-control  @error('nama_panggilan') is-invalid @enderror"
                                            id="inputpanggilan">
                                        @error('panggilan')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputKTP" class="form-label">Nomor KTP</label>
                                        <input type="number" name="ktp"
                                            class="form-control  @error('ktp') is-invalid @enderror" id="inputKTP"
                                            placeholder="">
                                        @error('ktp')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="date" class="form-label">Tanggal Lahir</label>
                                        <div class="input-group">
                                            <input type="date" name="tanggal_lahir"
                                                class="form-control  @error('tanggal_lahir') is-invalid @enderror">
                                            @error('tanggal_lahir')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputJK" class="form-label">Jenis Kelamin</label><br>
                                        <div class="form-check-inline">
                                            <input type="radio" name="jk"
                                                class="form-check-input  @error('jk') is-invalid @enderror" value="L"
                                                id="radio2">
                                            @error('jk')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <label> Laki-Laki </label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input type="radio" name="jk"
                                                class="form-check-input  @error('jk') is-invalid @enderror" value="P"
                                                id="radio2">
                                            @error('jk')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <label> Perempuan </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Pilih Agama</label>
                                        <select class="form-control  @error('agama') is-invalid @enderror" name="agama">
                                            <option selected value="">Pilih Agama...</option>
                                            <option>Islam</option>
                                            <option>Kristen</option>
                                            <option>Katolik</option>
                                            <option>Hindu</option>
                                            <option>Budha</option>
                                            <option>Konghucu</option>
                                        </select>
                                        @error('agama')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputGoldar" class="form-label">Golongan Darah</label><br>
                                        <div class="form-check-inline">
                                            <input type="radio" class="form-check-input @error('goldar') is-invalid @enderror" name="goldar" value="A"
                                                id="radio3">
                                            @error('goldar')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <label> A </label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input type="radio" class="form-check-input @error('goldar') is-invalid @enderror" name="goldar" value="B"
                                                id="radio3">
                                            @error('goldar')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <label> B </label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input type="radio" class="form-check-input @error('goldar') is-invalid @enderror" name="goldar" value="AB"
                                                id="radio3">
                                            @error('goldar')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <label> AB </label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input type="radio" class="form-check-input @error('goldar') is-invalid @enderror" name="goldar" value="O"
                                                id="radio3">
                                            @error('goldar')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <label> O </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Pekerjaan</label>
                                        <select class="form-control  @error('pekerjaan') is-invalid @enderror"
                                            name="pekerjaan">
                                            <option selected value="">Pilih Pekerjaan...</option>
                                            <option>TNI/POLRI/ASN</option>
                                            <option>Karyawan</option>
                                            <option>IRT/Tidak Bekerja</option>
                                            <option>Petani</option>
                                            <option>Pedagang</option>
                                            <option>Pengajar</option>
                                            <option>Pensiunan</option>
                                            <option>Lainnya</option>
                                        </select>
                                        @error('pekerjaan')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputnohp" class="form-label">Nomor HP</label>
                                        <input type="number" class="form-control  @error('no_hp') is-invalid @enderror"
                                            name="no_hp" id="inputnohp" placeholder="">
                                        @error('no_hp')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Pendidikan Terakhir</label>
                                        <select class="form-control  @error('pendidikan') is-invalid @enderror"
                                            name="pendidikan">
                                            <option selected value="">Pilih Pendidikan Terakhir...</option>
                                            <option>Tidak Tamat SD/Sederajat</option>
                                            <option>SD/Sederajat</option>
                                            <option>SMP/SLTP</option>
                                            <option>SMA/SLTA</option>
                                            <option>Diploma</option>
                                            <option>Sarjana</option>
                                            <option>Pasca Sarjana</option>
                                            <option>Lainnya</option>
                                        </select>
                                        @error('pendidikan')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="inputEmail" class="form-label">Email</label>
                                        <input type="email" class="form-control  @error('email') is-invalid @enderror"
                                            name="email" id="inputEmail" placeholder="">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Status Pernikahan</label>
                                        <select class="form-control  @error('pernikahan') is-invalid @enderror"
                                            name="pernikahan">
                                            <option selected value="">Pilih Status...</option>
                                            <option>Belum Menikah</option>
                                            <option>Menikah</option>
                                            <option>Duda/Janda</option>
                                        </select>
                                        @error('pernikahan')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="inputAddress" class="form-label">Alamat Lengkap</label>
                                        <textarea class="form-control  @error('alamat') is-invalid @enderror " name="alamat" rows="5"></textarea>
                                        @error('alamat')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
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
        </section>
        <!-- /.content -->
    </div>
@endsection
