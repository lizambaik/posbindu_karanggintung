@extends('layouts.admin.master')

@section('title')
    Rekap Excell Pemeriksaan
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
                            <li class="breadcrumb-item"><a href="{{ url('admin') }}">Rekap</a></li>
                            <li class="breadcrumb-item active">@yield('title')</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                @if ($message = Session::get('galat'))
                    <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h5 class="text-center font-weight-bold">Rekap Data Pemeriksaan Per Bulan</h5>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <img src="{{ asset('cdn/img/report.svg') }}" alt="" width="300" class="mx-auto d-block">
                        <div class="row justify-content-center">
                            <form class="form-inline" action="{{ route('excell') }}" method="POST">
                                @csrf
                                <div class="form-group mx-sm-3 mb-2">
                                    <label for="date" class="sr-only">Password</label>
                                    <input type="date" class="form-control  @error('bulan') is-invalid @enderror" id="date"
                                        placeholder="Password" name="bulan">
                                        @error('bulan')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                                <button type="submit" class="btn btn-secondary mb-2"><i class="fa fa-file-excel mr-2"></i>
                                    Cetak Excell</button>
                            </form>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection
