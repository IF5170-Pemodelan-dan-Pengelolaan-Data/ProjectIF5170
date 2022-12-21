@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <h3>Data Pegawai (Semua Cabang)</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Data Pegawai</li>
                        <li class="breadcrumb-item active">Semua Cabang</li>
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
                                    <th>No.</th>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>Usia</th>
                                    <th>Role</th>
                                    <th>Work Unit</th>
                                    <th>No. Telp</th>
                                    <th>Email</th>
                                    <th>Cabang</th>
                                </thead>
                                <tbody>
                                    @foreach ($data as $no => $d)
                                        <tr>
                                            <td>{{ $no + 1 }}</td>
                                            <td>{{ $d['employee_id'] }}</td>
                                            <td>{{ $d['name'] }}</td>
                                            <td>{{ $d['age'] }}</td>
                                            <td>{{ $d['type'] }}</td>
                                            <td>{{ $d['work_unit']['name'] }}</td>
                                            <td>{{ $d['phone'] }}</td>
                                            <td>{{ $d['email'] }}</td>
                                            <td>{{ $d['work_unit']['branch']['branch_country'] }}</td>
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
