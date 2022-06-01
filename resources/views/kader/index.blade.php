@extends('layouts.admin.master')

@section('title')
    Selamat Datang Kader
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
                            <li class="breadcrumb-item"><a href="{{ url('admin') }}">Admin</a></li>
                            <li class="breadcrumb-item active">@yield('title')</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12" id="accordion">
                        <div class="card card-primary card-outline">
                            <a class="d-block w-100" data-toggle="collapse" href="#collapseOne">
                                <div class="card-header">
                                    <h4 class="card-title w-100">
                                        1. Posbindu Karanggintung
                                    </h4>
                                </div>
                            </a>
                            <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                <div class="card-body">
                                    Pos Binaan Terpadu (POSBINDU) adalah kegiatan monitoring dan deteksi dini faktor resiko
                                    penyakit tidak menular terintegrasi serta gangguan akibat kecelakaan dan tindakan
                                    kekerasan dalam rumah tangga yang dikelola oleh masyarakat melalui pembinaan terpadu.
                                    Sasaran program ini ditujukan kepada seluruh masyarakat sehat dan berisiko yang berusia
                                    mulai dari 15 tahun ke atas.
                                    Posbindu PTM dapat diselenggarakan dalam sebulan sekali, ila diperlukan dapat lebih dari
                                    satu kali dala sebulan.
                                    Hari dan waktu yang dipilih sesuai dengan kesepakatan serta dapat saja disesuaikan
                                    dengan situasi dan kondisi Desa Karanggintung.
                                    Posbindu PTM diperlukan untuk dapat mengendalikan faktor risiko Penyakit Tidak Menular
                                    yang terdapat pada setiap idividu agar tidak berkembang menjadi Penyakit Tidak Menular.

                                </div>
                            </div>
                        </div>
                        <div class="card card-primary card-outline">
                            <a class="d-block w-100" data-toggle="collapse" href="#collapseTwo">
                                <div class="card-header">
                                    <h4 class="card-title w-100">
                                        2. Kader Posbindu Karanggintung
                                    </h4>
                                </div>
                            </a>
                            <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    Kader Posbindu merupakan relawan yang dipandang memiliki kemampuan lebih dibanding
                                    masyarakat lainnya.
                                    Mereka mempunyai andil yang besar terhadap pelaksanaan program posbindu. Peran kader
                                    posbiindu adalah sebagai pelaksana pengendalian faktor risiko PTM bagi masyarakat di
                                    sekitarnya melalui Posbindu PTM. Fungsi kader posbindu sendiri antara lain, sebagai
                                    koordinator penyelenggaraan Posbindu PTM, penggerak masyarakat untuk mengikuti Posbindu
                                    PTM, pemantau pengukuran faktor risiko PTM, konselor peserta Posbindu PTM, dan pencatat
                                    hasil kegiatan Posbindu PTM.
                                </div>
                            </div>
                        </div>
                        <div class="card card-primary card-outline">
                            <a class="d-block w-100" data-toggle="collapse" href="#collapseThree">
                                <div class="card-header">
                                    <h4 class="card-title w-100">
                                        3. Jadwal Pelaksanaan Posbindu Karanggintung
                                    </h4>
                                </div>
                            </a>
                            <div id="collapseThree" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    Kegiatan rutin Posbindu Desa Karanggintung dilaksanakan 3 kali dalam sebulan, dimana tiap RW memiliki jadwal yang berbeda. 
                                 <br> Posbindu pada RW 1 dilaksanakan setiap bulan pada tanggal 9.
                                 <br> Posbindu pada RW 3 dilaksanakkan setiap bulan pada tanggal 13.
                                 <br> Posbindu pada RW 2 dilaksanakan setiap bulan pada tanggal 15.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
