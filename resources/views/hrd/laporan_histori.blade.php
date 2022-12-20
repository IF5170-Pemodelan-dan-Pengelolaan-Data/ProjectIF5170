@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <h3>Laporan Histori Pemindahan Pegawai</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Laporan</li>
                        <li class="breadcrumb-item active">Histori Pemindahan Pegawai</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <!-- Zero Configuration  Starts-->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="dt-ext table-responsive">
                            <table class="dataTable" id="maintable">
                                <thead>
                                    <tr>
                                        <th rowspan="2">ID</th>
                                        <th rowspan="2">Name</th>
                                        <th colspan="2" style="text-align: center;">Lama</th>
                                        <th colspan="2" style="text-align: center;">Baru</th>
                                        <th rowspan="2">Date Start</th>
                                    </tr>
                                    <tr>
                                        <th>Cabang Lama</th>
                                        <th>Care Center Lama</th>
                                        <th>Cabang Baru</th>
                                        <th>Care Center Baru</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
