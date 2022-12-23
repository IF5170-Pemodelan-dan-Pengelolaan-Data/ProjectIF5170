@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card o-hidden border-0">
                <div class="bg-secondary b-r-4 card-body">
                    <div class="media static-top-widget">
                        <div class="align-self-center text-center">
                            <i data-feather="clock"></i>
                        </div>
                        <div class="media-body">
                            <span class="m-0">Total Pegawai</span>
                            <h4 class="mb-0 counter"> 100</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card o-hidden border-0">
                <div class="bg-primary b-r-4 card-body">
                    <div class="media static-top-widget">
                        <div class="align-self-center text-center">
                            <i data-feather="check-circle"></i>
                        </div>
                        <div class="media-body">
                            <span class="m-0">Presensi Pegawai</span>
                            <h4 class="mb-0 counter"> 120</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card o-hidden border-0">
                <div class="bg-secondary b-r-4 card-body">
                    <div class="media static-top-widget">
                        <div class="align-self-center text-center">
                            <i data-feather="trending-up"></i>
                        </div>
                        <div class="media-body">
                            <span class="m-0">Jumlah Pegawai Cuti</span>
                            <h4 class="mb-0 counter"> 130</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <canvas id="employee" data-height="400" height="400"></canvas>
                </div>
            </div>

            <div class="col-lg-6 col-md-12 col-sm-12">
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <!-- Page JS -->
    <script src="{{ asset('assets/js/chart/chartjs/chart.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/chart/chartjs/chart.custom.js') }}"></script> --}}
    <script>
        $(document).ready(function() {
            $.ajax({
                type: "GET",
                url: "{{ route('hrd.pegawai.getJumlahPegawai') }}",
                success: function(r) {
                    console.log(r);
                    var idemployee = document.getElementById('employee');
                    var employee = new Chart(idemployee, {
                        type: "bar",
                        data: {
                            labels: r.labels,
                            datasets: [{
                                label: 'Jumlah Pegawai per Bulan',
                                data: r.bobot,
                                // backgroundColor: t,
                                borderColor: "transparent",
                                maxBarThickness: 15,
                                borderRadius: {
                                    topRight: 15,
                                    topLeft: 15
                                }
                            }]
                        },
                    });
                },
                error: function(xhr) {
                    console.log(xhr.responseJSON);
                }
            });
        });
    </script>
@endpush
