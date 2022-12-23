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
                    <div class="card-header">
                        <a href="#" class="btn btn-primary" data-bs-target="#addPegawai" data-bs-toggle="modal"
                            style="float: right">+ Tambah</a>
                    </div>
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
                                    <th>Edit</th>
                                </thead>
                                <tbody>
                                    @foreach ($data as $no => $d)
                                        <tr>
                                            <td>{{ $no + 1 }}</td>
                                            <td>{{ $d['_id'] }}</td>
                                            <td>{{ $d['name'] }}</td>
                                            <td>{{ $d['age'] }}</td>
                                            <td>{{ $d['type'] }}</td>
                                            <td>{{ $d['work_unit']['name'] }}</td>
                                            <td>{{ $d['phone'] }}</td>
                                            <td>{{ $d['email'] }}</td>
                                            <td>{{ $d['work_unit']['branch']['branch_country'] }}</td>
                                            <td> <a href="#" class="btn btn-warning btn-sm"
                                                    data-bs-target="#editPegawai" data-bs-toggle="modal"
                                                    style="float: right"><i class="fa fa-edit"></i></a></td>
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
    <div class="modal fade bd-example-modal-lg" id="addPegawai" aria-labelledby="myLargeModalLabel" aria-modal="true"
        role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myLargeModalLabel">Tambah Data Pegawai</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"
                        data-bs-original-title="" title=""></button>
                </div>
                <form class="needs-validation" novalidate="" action="{{ route('hrd.pegawai.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="row g-1 mb-3">
                            <div class="col-md-12">
                                <span class="form-label" for="jenis_cuti">Jenis Profesi</span>
                                <select class="form-control js-example-basic-single col-sm-12 select2-hidden-accessible"
                                    id="jenis_cuti" name="jenis_cuti" required="">
                                    <option selected="" disabled="" value="">-- Pilih Profesi ---</option>
                                    <option value="branch manager">Branch Manager</option>
                                    <option value="physicians">Physician</option>
                                    <option value="nurse">Nurse</option>
                                    <option value="staff">Staff</option>
                                    <option value="technicians">Technician</option>
                                </select>
                            </div>
                        </div>
                        <div class="row g-2 mb-3">
                            <div class="col-md-4">
                                <span class="form-label" for="tgl_awal_cuti">Tanggal Lahir</span>
                                <input class="form-control" id="tgl_awal_cuti" name="tgl_awal_cuti" type="date"
                                    required="">
                                <div class="invalid-feedback">Wajib Diisi !</div>
                            </div>
                            <div class="col-md-4">
                                <span class="form-label" for="tgl_akhir_cuti">Age</span>
                                <input class="form-control" id="tgl_akhir_cuti" name="tgl_akhir_cuti" type="text"
                                    required="">
                                <div class="invalid-feedback">Wajib Diisi !</div>
                            </div>
                            <div class="col-md-4">
                                <span class="form-label" for="tgl_akhir_cuti">Email</span>
                                <input class="form-control" id="tgl_akhir_cuti" name="tgl_akhir_cuti" type="text"
                                    required="">
                                <div class="invalid-feedback">Wajib Diisi !</div>
                            </div>
                        </div>
                        <div class="row g-2 mb-3">
                            <div class="col-md-6">
                                <span class="form-label" for="no_hp">No HP</span>
                                <div class="input-group">
                                    <span class="input-group-text" id="no_hp_input">+62</span>
                                    <input class="form-control" id="no_hp" name="no_hp" type="text"
                                        aria-describedby="no_hp_input" required="">
                                    <div class="invalid-feedback">Wajib Diisi !</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <span class="form-label" for="alamat">Alamat</span>
                                <textarea name="alamat" id="alamat" name="alamat" class="form-control" required></textarea>
                                <div class="invalid-feedback">Wajib Diisi !</div>
                            </div>

                        </div>
                        <div class="row g-2 mb-3">
                            <div class="col-md-6">
                                <span class="form-label" for="jenis_cuti">Cabang</span>
                                <select class="form-control js-example-basic-single col-sm-12 select2-hidden-accessible"
                                    id="jenis_cuti" name="jenis_cuti" required="">
                                    <option selected="" disabled="" value="">-- Pilih Cabang ---</option>
                                    <option value="Colorado">Physician</option>
                                    <option value="California">Nurse</option>
                                    <option value="Indonesia">Staff</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <span class="form-label" for="jenis_cuti">Work Unit</span>
                                <select class="form-control js-example-basic-single col-sm-12 select2-hidden-accessible"
                                    id="jenis_cuti" name="jenis_cuti" required="">
                                    <option selected="" disabled="" value="">-- Pilih Work Unit ---</option>
                                    <option value="Colorado">Care Center</option>
                                    <option value="California">Radiology</option>
                                    <option value="Indonesia">Maternity</option>
                                </select>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button class="btn btn-primary" type="submit" id="btnSubmit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade bd-example-modal-lg" id="editPegawai" aria-labelledby="myLargeModalLabel" aria-modal="true"
        role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myLargeModalLabel">Ubah Data Pegawai</h5>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"
                        data-bs-original-title="" title=""></button>
                </div>
                <form class="needs-validation" novalidate="" action="{{ route('hrd.pegawai.update') }}"
                    method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="row g-1 mb-3">
                            <div class="col-md-12">
                                <span class="form-label" for="jenis_cuti">Jenis Profesi</span>
                                <select class="form-control js-example-basic-single col-sm-12 select2-hidden-accessible"
                                    id="jenis_cuti" name="jenis_cuti" required="">
                                    <option selected="" disabled="" value="">-- Pilih Profesi ---</option>
                                    <option value="branch manager">Branch Manager</option>
                                    <option value="physicians">Physician</option>
                                    <option value="nurse">Nurse</option>
                                    <option value="staff">Staff</option>
                                    <option value="technicians">Technician</option>
                                </select>
                            </div>
                        </div>
                        <div class="row g-2 mb-3">
                            <div class="col-md-4">
                                <span class="form-label" for="tgl_awal_cuti">Tanggal Lahir</span>
                                <input class="form-control" id="tgl_awal_cuti" name="tgl_awal_cuti" type="date"
                                    required="">
                                <div class="invalid-feedback">Wajib Diisi !</div>
                            </div>
                            <div class="col-md-4">
                                <span class="form-label" for="tgl_akhir_cuti">Age</span>
                                <input class="form-control" id="tgl_akhir_cuti" name="tgl_akhir_cuti" type="text"
                                    required="">
                                <div class="invalid-feedback">Wajib Diisi !</div>
                            </div>
                            <div class="col-md-4">
                                <span class="form-label" for="tgl_akhir_cuti">Email</span>
                                <input class="form-control" id="tgl_akhir_cuti" name="tgl_akhir_cuti" type="text"
                                    required="">
                                <div class="invalid-feedback">Wajib Diisi !</div>
                            </div>
                        </div>
                        <div class="row g-2 mb-3">
                            <div class="col-md-6">
                                <span class="form-label" for="no_hp">No HP</span>
                                <div class="input-group">
                                    <span class="input-group-text" id="no_hp_input">+62</span>
                                    <input class="form-control" id="no_hp" name="no_hp" type="text"
                                        aria-describedby="no_hp_input" required="">
                                    <div class="invalid-feedback">Wajib Diisi !</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <span class="form-label" for="alamat">Alamat</span>
                                <textarea name="alamat" id="alamat" name="alamat" class="form-control" required></textarea>
                                <div class="invalid-feedback">Wajib Diisi !</div>
                            </div>

                        </div>
                        <div class="row g-2 mb-3">
                            <div class="col-md-6">
                                <span class="form-label" for="jenis_cuti">Cabang</span>
                                <select class="form-control js-example-basic-single col-sm-12 select2-hidden-accessible"
                                    id="jenis_cuti" name="jenis_cuti" required="">
                                    <option selected="" disabled="" value="">-- Pilih Cabang ---</option>
                                    <option value="Colorado">Physician</option>
                                    <option value="California">Nurse</option>
                                    <option value="Indonesia">Staff</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <span class="form-label" for="jenis_cuti">Work Unit</span>
                                <select class="form-control js-example-basic-single col-sm-12 select2-hidden-accessible"
                                    id="jenis_cuti" name="jenis_cuti" required="">
                                    <option selected="" disabled="" value="">-- Pilih Work Unit ---</option>
                                    <option value="Colorado">Care Center</option>
                                    <option value="California">Radiology</option>
                                    <option value="Indonesia">Maternity</option>
                                </select>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button class="btn btn-primary" type="submit" id="btnSubmit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
