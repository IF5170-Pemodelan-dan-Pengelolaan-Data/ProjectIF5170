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
                            <h4 class="mb-0 counter">{{ $data['total_pegawai'][0]['count'] }}</h4>
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
                            <h4 class="mb-0 counter">98</h4>
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
                            <h4 class="mb-0 counter"> 252</h4>
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
                    <label>Jumlah Pegawai per Bulan (2022)</label>
                    <div class="row">
                        <canvas id="employee" data-height="200" height="200"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <label>Jumlah Pegawai per Profesi</label>
                        <canvas id="employee2" data-height="200" height="200"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <!-- Page JS -->
    <script src="{{ asset('assets/js/chart/chartjs/chart.min.js') }}"></script>
    <script src="{{ asset('assets/js/chart/chartjs/chart.custom.js') }}"></script>
    <script>
        $(document).ready(function() {
            $.ajax({
                type: "GET",
                url: "{{ route('hrd.pegawai.getJumlahPegawai') }}",
                success: function(r) {
                    var emData = {
                        labels: r.labels,
                        datasets: [{
                            label: "Rata-rata Jumlah Pegawai per Bulan",
                            fillColor: "rgba(36, 105, 92, 0.4)",
                            strokeColor: vihoAdminConfig.primary,
                            highlightFill: "rgba(36, 105, 92, 0.6)",
                            highlightStroke: vihoAdminConfig.primary,
                            data: r.values
                        }]
                    };
                    var emOptions = {
                        scaleBeginAtZero: true,
                        scaleShowGridLines: true,
                        scaleGridLineColor: "rgba(0,0,0,0.1)",
                        scaleGridLineWidth: 1,
                        scaleShowHorizontalLines: true,
                        scaleShowVerticalLines: true,
                        barShowStroke: true,
                        barStrokeWidth: 2,
                        barValueSpacing: 5,
                        barDatasetSpacing: 1,
                    };
                    var barCtx = document.getElementById("employee").getContext("2d");
                    var myBarChart = new Chart(barCtx).Bar(emData, emOptions);

                },
                error: function(xhr) {
                    alert('Error get data from ajax');
                }
            });
            $.ajax({
                type: "GET",
                url: "{{ route('hrd.pegawai.getJumlahProfesi') }}",
                success: function(r) {
                    var emdoughnutData = [{
                            value: r.values[0],
                            color: vihoAdminConfig.primary,
                            highlight: vihoAdminConfig.primary,
                            label: r.labels[0]
                        },
                        {
                            value: r.values[1],
                            color: vihoAdminConfig.secondary,
                            highlight: vihoAdminConfig.secondary,
                            label: r.labels[1]
                        },
                        {
                            value: r.values[2],
                            color: "#035400",
                            highlight: "#035400",
                            label: r.labels[2]
                        },
                        {
                            value: r.values[3],
                            color: "#000354",
                            highlight: "#000354",
                            label: r.labels[3]
                        },
                        {
                            value: r.values[4],
                            color: "#222222",
                            highlight: "#222222",
                            label: r.labels[4]
                        },
                        {
                            value: r.values[5],
                            color: "#bf6102",
                            highlight: "#bf6102",
                            label: r.labels[5]
                        },
                    ];
                    var emdoughnutOptions = {
                        segmentShowStroke: true,
                        segmentStrokeColor: "#fff",
                        segmentStrokeWidth: 2,
                        percentageInnerCutout: 50,
                        animationSteps: 100,
                        animationEasing: "easeOutBounce",
                        animateRotate: true,
                        animateScale: false,
                        legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
                    };
                    var doughnutCtx = document.getElementById("employee2").getContext("2d");
                    var myDoughnutChart = new Chart(doughnutCtx).Doughnut(emdoughnutData,
                        emdoughnutOptions);

                },
                error: function(xhr) {
                    alert('Error get data from ajax');
                }
            });
        });
    </script>
@endpush
