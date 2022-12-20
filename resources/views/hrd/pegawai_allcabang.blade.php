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
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection