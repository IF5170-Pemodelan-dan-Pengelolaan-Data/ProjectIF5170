@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <h3>Laporan Jumlah Pegawai</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Laporan</li>
                        <li class="breadcrumb-item active">Jumlah Pegawai</li>
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
                                    <th>No</th>
                                    <th>Bulan</th>
                                    <th>Physician</th>
                                    <th>Nurse</th>
                                    <th>Technician</th>
                                    <th>Staff</th>
                                </thead>
                                <tbody>
                                    @foreach ($branch as $no => $d)
                                        <tr>
                                            <td>{{ $no + 1 }}</td>
                                            <td>{{ $d['_id']['month'] . ' ' . $d['_id']['year'] }}</td>
                                            <td>{{ round($d['physicians']) }}</td>
                                            <td>{{ round($d['nurse']) }}</td>
                                            <td>{{ round($d['technicians']) }}</td>
                                            <td>{{ round($d['staff']) }}</td>

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
