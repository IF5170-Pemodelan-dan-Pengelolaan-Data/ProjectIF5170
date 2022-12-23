@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <h3>Data Cuti Pegawai</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">Data</li>
                        <li class="breadcrumb-item active">Cuti Pegawai</li>
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
                    <div class="card-header">
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                                data-bs-target="#add-modal">Tambah Cuti</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="dt-ext table-responsive">
                            <table class="dataTable" id="maintable">
                                <thead>
                                    <tr>
                                        <th rowspan="2">No</th>
                                        <th rowspan="2">Nama</th>
                                        <th rowspan="2">Cabang</th>
                                        <th rowspan="2">Care Center</th>
                                        <th colspan="3" style="text-align: center">Tanggal</th>
                                        <th rowspan="2">Tipe Cuti</th>
                                        <th rowspan="2">Status</th>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Permintaan</th>
                                        <th>Tanggal Awal</th>
                                        <th>Tanggal Selesai</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data->leave as $i => $d)
                                        <tr>
                                            <td>{{ $i + 1 }}</td>
                                            <td>{{ $data['name'] }}</td>
                                            <td>{{ $data['work_unit']['branch']['branch_country'] }}</td>
                                            <td>{{ $data['work_unit']['name'] }}</td>
                                            <td>{{ tanggal($d['request_date']) }}</td>
                                            <td>{{ tanggal($d['date_from']) }}</td>
                                            <td>{{ tanggal($d['date_to']) }}</td>
                                            <td>{{ $d['type'] }}</td>
                                            <td>
                                                @if ($d['approval_status'] == null)
                                                    <span class="badge badge-warning">Waiting</span>
                                                @elseif ($d['approval_status'] == 'not approved')
                                                    <span class="badge badge-danger">{{ $d['approval_status'] }}</span>
                                                @elseif ($d['approval_status'] == 'approved')
                                                    <span class="badge badge-success">{{ $d['approval_status'] }}</span>
                                                @endif

                                            </td>
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
    <div class="modal fade" id="add-modal" tabindex="-1" role="dialog" aria-labelledby="add-modal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('pegawai.store_cuti', $data['_id']) }}" method="post">
                    @csrf
                    <div class="modal-body grid-showcase">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="row mb-2">
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <label class="form-label">Tanggal Awal</label>
                                            <input type="text" class="datepicker-here form-control" name="date_from"
                                                id="date_from" placeholder="Masukan Tanggal Awal" data-language="en">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <label class="form-label">Tanggal Akhir</label>
                                            <input type="text" class="datepicker-here form-control" name="date_to"
                                                placeholder="Masukan Tanggal Akhir" data-language="en">
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <label class="form-label">Alasan Cuti</label>
                                            <select name="type" id="type" class="form-select">
                                                <option selected disabled>Pilih Cuti</option>
                                                <option value="yearly leave">Yearly Leave</option>
                                                <option value="sick leave">Sick Leave</option>
                                                <option value="religious holiday">Religious Holiday</option>
                                                <option value="maternity">Maternity</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                        <button class="btn btn-primary" type="submit">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
