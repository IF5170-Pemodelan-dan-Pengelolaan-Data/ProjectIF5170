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
                                        <th rowspan="2">No</th>
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
                                    @foreach ($data as $no => $d)
                                        <tr>
                                            <td>{{ $no + 1 }}</td>
                                            <td>{{ $d['employee_id'] }}</td>
                                            <td>{{ $d['name'] }}</td>
                                            <td>{{ $d['placement_history'][0]['branch_name'] }}</td>
                                            <td>{{ $d['placement_history'][0]['plc_name'] }}</td>
                                            <td>{{ $d['placement_history'][1]['branch_name'] }}</td>
                                            <td>{{ $d['placement_history'][1]['plc_name'] }}</td>
                                            <td>{{ $d['placement_history'][1]['date_start'] }}</td>
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
