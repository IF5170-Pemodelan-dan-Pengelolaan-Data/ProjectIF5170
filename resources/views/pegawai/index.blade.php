@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <h3>Dashboard</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active">Dashboar Pegawai</li>
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
                                        <th rowspan="2">No</th>
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
                                    @foreach ($data['attendance'] as $i => $d)
                                        <tr>
                                            <td>{{ $i + 1 }}</td>
                                            <td>{{ $data['name'] }}</td>
                                            <td>{{ $data['work_unit']['branch']['branch_country'] }}</td>
                                            <td>{{ $data['work_unit']['name'] }}</td>
                                            <td>{{ $d['month'] . ' ' . $d['year'] }}</td>
                                            <td>{{ $d['present'] }}</td>
                                            <td>{{ $d['sick'] }}</td>
                                            <td>{{ $d['leave'] }}</td>
                                            <td>{{ $d['alpha'] }}</td>
                                            <td>{{ $d['score'] }}</td>
                                        </tr>
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
