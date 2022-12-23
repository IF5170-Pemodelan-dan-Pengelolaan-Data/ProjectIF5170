@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <h3>Data Cuti ({{ Session::get('data')['work_unit']['branch']['branch_country'] }})</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Data Cuti</li>
                        <li class="breadcrumb-item active">
                            {{ Session::get('data')['work_unit']['branch']['branch_country'] }}</li>
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
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>Tgl. Pengajuan</th>
                                    <th>Tgl. Awal</th>
                                    <th>Tgl. Akhir</th>
                                    <th>Jenis Cuti</th>
                                    <th>Status</th>
                                    <th>Branch</th>
                                </thead>
                                <tbody>
                                    @foreach ($data as $d)
                                        @if (array_key_exists('leave', $d))
                                            @foreach ($d['leave'] as $d2)
                                                <tr>
                                                    <td>{{ $d['_id'] }}</td>
                                                    <td>{{ $d['name'] }}</td>
                                                    <td>{{ $d2['request_date'] }}</td>
                                                    <td>{{ $d2['date_from'] }}</td>
                                                    <td>{{ $d2['date_to'] }}</td>
                                                    <td>{{ $d2['type'] }}</td>
                                                    <td>
                                                        @if ($d2['approval_status'] == '')
                                                            <a href="{{ route('manager.cuti.appr', $d2['_id']) }}"
                                                                class="btn btn-success btn-sm"><i
                                                                    class="fa fa-check"></i></a>
                                                            <a href="{{ route('manager.cuti.dec', $d2['_id']) }}"
                                                                class="btn btn-danger btn-sm"><i
                                                                    class="fa fa-times"></i></a>
                                                        @else
                                                            @if ($d2['approval_status'] == 'approved')
                                                                <span
                                                                    class="badge badge-success">{{ $d2['approval_status'] }}</span>
                                                            @else
                                                                <span
                                                                    class="badge badge-danger">{{ $d2['approval_status'] }}</span>
                                                            @endif
                                                        @endif
                                                    </td>
                                                    <td>{{ $d['work_unit']['branch']['branch_country'] }}</td>
                                                </tr>
                                            @endforeach
                                        @endif
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
