@extends('layouts.app')
@section('content')
    <style>
        input {
            pointer-events: none;
        }
    </style>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="edit-profile">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h4 class="card-title mb-0">My Profile</h4>
                            <div class="card-options"><a class="card-options-collapse" href="#"
                                    data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a
                                    class="card-options-remove" href="#" data-bs-toggle="card-remove"><i
                                        class="fe fe-x"></i></a></div>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="row mb-2">
                                    <div class="profile-title">
                                        <div class="media"> <img class="img-70 rounded-circle" alt=""
                                                src="{{ asset('assets/images/dashboard/1.png') }}">
                                            <div class="media-body">
                                                <h3 class="mb-1 f-20 txt-primary">{{ $data['name'] }}</h3>
                                                <p class="f-12">
                                                    {{ $data['type'] }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Hire Date</label>
                                    <input class="form-control" placeholder="2019-08-19"
                                        value="{{ tanggal($data['hire_date']) }}">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Work Unit</label>
                                    <input class="form-control" placeholder="Radiology"
                                        value="{{ $data['work_unit']['name'] ? $data['work_unit']['name'] : '-' }}">
                                </div>
                            </form>
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="mb-3">
                                        <label class="form-label">Day of Birthday</label>
                                        <input class="form-control" type="text" placeholder="DoB"
                                            value="{{ tanggal($data['DoB']) }}">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">Phone Number</label>
                                        <input class="form-control" type="text" placeholder="Phone"
                                            value="{{ $data['phone'] }}">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">Email address</label>
                                        <input class="form-control" type="email" placeholder="Email"
                                            value="{{ $data['email'] }}">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label">City</label>
                                        <input class="form-control" type="text" placeholder="City"
                                            value="{{ $data['address']['city'] ? $data['address']['city'] : '-' }}">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="mb-3">
                                        <label class="form-label">Postal Code</label>
                                        <input class="form-control" type="number" placeholder="ZIP Code"
                                            value="{{ $data['address']['zip'] ? $data['address']['zip'] : '-' }}">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-5">
                                    <div class="mb-3">
                                        <label class="form-label">State</label>
                                        <input class="form-control" type="text" placeholder="State"
                                            value="{{ $data['address']['state'] ? $data['address']['state'] : '-' }}">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Placement History</label>
                                    <div id="timeline-2">
                                        <div class="active" data-year="{{ tahun($data['hire_date']) }}">Hire Year</div>
                                        @foreach ($data['placement_history'] as $i => $d)
                                            <div data-year="{{ tahun($d['date_start']) }}">
                                                {{ unit($d['work_unit_id'])['name'] }}
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection
@push('scripts')
    <!-- Page JS -->
    <script src="{{ asset('assets/js/timeline/timeline-v-2/jquery.timeliny.min.js') }}"></script>
    <script src="{{ asset('assets/js/timeline/timeline-v-2/timeline-v-2-custom.js') }}"></script>
@endpush
