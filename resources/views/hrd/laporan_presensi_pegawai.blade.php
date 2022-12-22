@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <h3>Laporan Presensi Pegawai</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Laporan</li>
                        <li class="breadcrumb-item active">Presensi Pegawai</li>
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
                                        <th rowspan="2">Nama</th>
                                        <th rowspan="2">Cabang</th>
                                        <th rowspan="2">Care Center</th>
                                        <th rowspan="2">Bulan</th>
                                        <th colspan="4" style="text-align: center">Rekap Presensi</th>
                                        <th rowspan="2">Score</th>
                                    </tr>
                                    <tr>
                                        <th>Hadir</th>
                                        <th>Sakit</th>
                                        <th>Cuti</th>
                                        <th>Absen</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $d)
                                        @foreach ($d['attendance'] as $d2)
                                            <tr>
                                                <td>{{ $d['employee_id'] }}</td>
                                                <td>{{ $d['name'] }}</td>
                                                <td>{{ $d['work_unit']['branch']['branch_country'] }}</td>
                                                <td>{{ $d['work_unit']['name'] }}</td>
                                                <td>{{ $d2['month'] . ' ' . $d2['year'] }}</td>
                                                <td>{{ $d2['present'] }}</td>
                                                <td>{{ $d2['sick'] }}</td>
                                                <td>{{ $d2['leave'] }}</td>
                                                <td>{{ $d2['alpha'] }}</td>
                                                <td>{{ $d2['score'] }}</td>
                                            </tr>
                                        @endforeach
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
