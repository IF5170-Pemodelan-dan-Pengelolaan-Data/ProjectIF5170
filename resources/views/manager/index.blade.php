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
    {{-- <div class="row">
        <div class="col-xl-12">
            <div class="o-hidden card">
                <div class="pb-0 card-header">
                    <h5>Jumlah Pegawai Setiap Bulan</h5>
                </div>
                <div class="bar-chart-widget">
                    <div class="bottom-content card-body">
                        <div class="row">
                            <div class="col">
                                <div id="chart-widget4">
                                    <div style="min-height: 375px;">
                                        <div id="apexcharts3u9kecji"
                                            class="apexcharts-canvas apexcharts3u9kecji apexcharts-theme-light"
                                            style="width: 100%; height: 360px;"><svg id="SvgjsSvg2230" width="833"
                                                height="360" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                                class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                style="background: transparent;">
                                                <foreignObject x="0" y="0" width="833" height="360">
                                                    <div class="apexcharts-legend apexcharts-align-center apx-legend-position-bottom"
                                                        xmlns="http://www.w3.org/1999/xhtml"
                                                        style="inset: auto 0px 1px; position: absolute; max-height: 180px;">
                                                        <div class="apexcharts-legend-series" rel="1"
                                                            seriesname="NetxProfit" data:collapsed="false"
                                                            style="margin: 2px 5px;"><span class="apexcharts-legend-marker"
                                                                rel="1" data:collapsed="false"
                                                                style="background: rgb(38, 105, 92) !important; color: rgb(38, 105, 92); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 2px;"></span><span
                                                                class="apexcharts-legend-text" rel="1" i="0"
                                                                data:default-text="Net%20Profit" data:collapsed="false"
                                                                style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Net
                                                                Profit</span></div>
                                                        <div class="apexcharts-legend-series" rel="2"
                                                            seriesname="Revenue" data:collapsed="false"
                                                            style="margin: 2px 5px;"><span class="apexcharts-legend-marker"
                                                                rel="2" data:collapsed="false"
                                                                style="background: rgb(194, 152, 115) !important; color: rgb(194, 152, 115); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 2px;"></span><span
                                                                class="apexcharts-legend-text" rel="2" i="1"
                                                                data:default-text="Revenue" data:collapsed="false"
                                                                style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Revenue</span>
                                                        </div>
                                                    </div>
                                                    <style type="text/css">
                                                        .apexcharts-legend {
                                                            display: flex;
                                                            overflow: auto;
                                                            padding: 0 10px;
                                                        }

                                                        .apexcharts-legend.apx-legend-position-bottom,
                                                        .apexcharts-legend.apx-legend-position-top {
                                                            flex-wrap: wrap
                                                        }

                                                        .apexcharts-legend.apx-legend-position-right,
                                                        .apexcharts-legend.apx-legend-position-left {
                                                            flex-direction: column;
                                                            bottom: 0;
                                                        }

                                                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                                        .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                                        .apexcharts-legend.apx-legend-position-right,
                                                        .apexcharts-legend.apx-legend-position-left {
                                                            justify-content: flex-start;
                                                        }

                                                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                                        .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                                            justify-content: center;
                                                        }

                                                        .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                                        .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                                            justify-content: flex-end;
                                                        }

                                                        .apexcharts-legend-series {
                                                            cursor: pointer;
                                                            line-height: normal;
                                                        }

                                                        .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series,
                                                        .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series {
                                                            display: flex;
                                                            align-items: center;
                                                        }

                                                        .apexcharts-legend-text {
                                                            position: relative;
                                                            font-size: 14px;
                                                        }

                                                        .apexcharts-legend-text *,
                                                        .apexcharts-legend-marker * {
                                                            pointer-events: none;
                                                        }

                                                        .apexcharts-legend-marker {
                                                            position: relative;
                                                            display: inline-block;
                                                            cursor: pointer;
                                                            margin-right: 3px;
                                                            border-style: solid;
                                                        }

                                                        .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series,
                                                        .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series {
                                                            display: inline-block;
                                                        }

                                                        .apexcharts-legend-series.apexcharts-no-click {
                                                            cursor: auto;
                                                        }

                                                        .apexcharts-legend .apexcharts-hidden-zero-series,
                                                        .apexcharts-legend .apexcharts-hidden-null-series {
                                                            display: none !important;
                                                        }

                                                        .apexcharts-inactive-legend {
                                                            opacity: 0.45;
                                                        }
                                                    </style>
                                                </foreignObject>
                                                <g id="SvgjsG2232" class="apexcharts-inner apexcharts-graphical"
                                                    transform="translate(53.90201950073242, 30)">
                                                    <defs id="SvgjsDefs2231">
                                                        <linearGradient id="SvgjsLinearGradient2237" x1="0"
                                                            y1="0" x2="0" y2="1">
                                                            <stop id="SvgjsStop2238" stop-opacity="0.4"
                                                                stop-color="rgba(216,227,240,0.4)" offset="0">
                                                            </stop>
                                                            <stop id="SvgjsStop2239" stop-opacity="0.5"
                                                                stop-color="rgba(190,209,230,0.5)" offset="1">
                                                            </stop>
                                                            <stop id="SvgjsStop2240" stop-opacity="0.5"
                                                                stop-color="rgba(190,209,230,0.5)" offset="1">
                                                            </stop>
                                                        </linearGradient>
                                                        <clipPath id="gridRectMask3u9kecji">
                                                            <rect id="SvgjsRect2242" width="775.0979804992676"
                                                                height="278.42666563796996" x="-3" y="-1"
                                                                rx="0" ry="0" opacity="1"
                                                                stroke-width="0" stroke="none" stroke-dasharray="0"
                                                                fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="forecastMask3u9kecji"></clipPath>
                                                        <clipPath id="nonForecastMask3u9kecji"></clipPath>
                                                        <clipPath id="gridRectMarkerMask3u9kecji">
                                                            <rect id="SvgjsRect2243" width="773.0979804992676"
                                                                height="280.42666563796996" x="-2" y="-2"
                                                                rx="0" ry="0" opacity="1"
                                                                stroke-width="0" stroke="none" stroke-dasharray="0"
                                                                fill="#fff"></rect>
                                                        </clipPath>
                                                        <linearGradient id="SvgjsLinearGradient2249" x1="0"
                                                            y1="0" x2="0" y2="1">
                                                            <stop id="SvgjsStop2250" stop-opacity="0.9"
                                                                stop-color="rgba(38,105,92,0.9)" offset="0">
                                                            </stop>
                                                            <stop id="SvgjsStop2251" stop-opacity="0.8"
                                                                stop-color="rgba(125,165,157,0.8)" offset="1">
                                                            </stop>
                                                            <stop id="SvgjsStop2252" stop-opacity="0.8"
                                                                stop-color="rgba(125,165,157,0.8)" offset="1">
                                                            </stop>
                                                        </linearGradient>
                                                        <linearGradient id="SvgjsLinearGradient2255" x1="0"
                                                            y1="0" x2="0" y2="1">
                                                            <stop id="SvgjsStop2256" stop-opacity="0.9"
                                                                stop-color="rgba(38,105,92,0.9)" offset="0">
                                                            </stop>
                                                            <stop id="SvgjsStop2257" stop-opacity="0.8"
                                                                stop-color="rgba(125,165,157,0.8)" offset="1">
                                                            </stop>
                                                            <stop id="SvgjsStop2258" stop-opacity="0.8"
                                                                stop-color="rgba(125,165,157,0.8)" offset="1">
                                                            </stop>
                                                        </linearGradient>
                                                        <linearGradient id="SvgjsLinearGradient2261" x1="0"
                                                            y1="0" x2="0" y2="1">
                                                            <stop id="SvgjsStop2262" stop-opacity="0.9"
                                                                stop-color="rgba(38,105,92,0.9)" offset="0">
                                                            </stop>
                                                            <stop id="SvgjsStop2263" stop-opacity="0.8"
                                                                stop-color="rgba(125,165,157,0.8)" offset="1">
                                                            </stop>
                                                            <stop id="SvgjsStop2264" stop-opacity="0.8"
                                                                stop-color="rgba(125,165,157,0.8)" offset="1">
                                                            </stop>
                                                        </linearGradient>
                                                        <linearGradient id="SvgjsLinearGradient2267" x1="0"
                                                            y1="0" x2="0" y2="1">
                                                            <stop id="SvgjsStop2268" stop-opacity="0.9"
                                                                stop-color="rgba(38,105,92,0.9)" offset="0">
                                                            </stop>
                                                            <stop id="SvgjsStop2269" stop-opacity="0.8"
                                                                stop-color="rgba(125,165,157,0.8)" offset="1">
                                                            </stop>
                                                            <stop id="SvgjsStop2270" stop-opacity="0.8"
                                                                stop-color="rgba(125,165,157,0.8)" offset="1">
                                                            </stop>
                                                        </linearGradient>
                                                        <linearGradient id="SvgjsLinearGradient2273" x1="0"
                                                            y1="0" x2="0" y2="1">
                                                            <stop id="SvgjsStop2274" stop-opacity="0.9"
                                                                stop-color="rgba(38,105,92,0.9)" offset="0">
                                                            </stop>
                                                            <stop id="SvgjsStop2275" stop-opacity="0.8"
                                                                stop-color="rgba(125,165,157,0.8)" offset="1">
                                                            </stop>
                                                            <stop id="SvgjsStop2276" stop-opacity="0.8"
                                                                stop-color="rgba(125,165,157,0.8)" offset="1">
                                                            </stop>
                                                        </linearGradient>
                                                        <linearGradient id="SvgjsLinearGradient2279" x1="0"
                                                            y1="0" x2="0" y2="1">
                                                            <stop id="SvgjsStop2280" stop-opacity="0.9"
                                                                stop-color="rgba(38,105,92,0.9)" offset="0">
                                                            </stop>
                                                            <stop id="SvgjsStop2281" stop-opacity="0.8"
                                                                stop-color="rgba(125,165,157,0.8)" offset="1">
                                                            </stop>
                                                            <stop id="SvgjsStop2282" stop-opacity="0.8"
                                                                stop-color="rgba(125,165,157,0.8)" offset="1">
                                                            </stop>
                                                        </linearGradient>
                                                        <linearGradient id="SvgjsLinearGradient2285" x1="0"
                                                            y1="0" x2="0" y2="1">
                                                            <stop id="SvgjsStop2286" stop-opacity="0.9"
                                                                stop-color="rgba(38,105,92,0.9)" offset="0">
                                                            </stop>
                                                            <stop id="SvgjsStop2287" stop-opacity="0.8"
                                                                stop-color="rgba(125,165,157,0.8)" offset="1">
                                                            </stop>
                                                            <stop id="SvgjsStop2288" stop-opacity="0.8"
                                                                stop-color="rgba(125,165,157,0.8)" offset="1">
                                                            </stop>
                                                        </linearGradient>
                                                        <linearGradient id="SvgjsLinearGradient2291" x1="0"
                                                            y1="0" x2="0" y2="1">
                                                            <stop id="SvgjsStop2292" stop-opacity="0.9"
                                                                stop-color="rgba(38,105,92,0.9)" offset="0">
                                                            </stop>
                                                            <stop id="SvgjsStop2293" stop-opacity="0.8"
                                                                stop-color="rgba(125,165,157,0.8)" offset="1">
                                                            </stop>
                                                            <stop id="SvgjsStop2294" stop-opacity="0.8"
                                                                stop-color="rgba(125,165,157,0.8)" offset="1">
                                                            </stop>
                                                        </linearGradient>
                                                        <linearGradient id="SvgjsLinearGradient2297" x1="0"
                                                            y1="0" x2="0" y2="1">
                                                            <stop id="SvgjsStop2298" stop-opacity="0.9"
                                                                stop-color="rgba(38,105,92,0.9)" offset="0">
                                                            </stop>
                                                            <stop id="SvgjsStop2299" stop-opacity="0.8"
                                                                stop-color="rgba(125,165,157,0.8)" offset="1">
                                                            </stop>
                                                            <stop id="SvgjsStop2300" stop-opacity="0.8"
                                                                stop-color="rgba(125,165,157,0.8)" offset="1">
                                                            </stop>
                                                        </linearGradient>
                                                        <linearGradient id="SvgjsLinearGradient2306" x1="0"
                                                            y1="0" x2="0" y2="1">
                                                            <stop id="SvgjsStop2307" stop-opacity="0.9"
                                                                stop-color="rgba(194,152,115,0.9)" offset="0">
                                                            </stop>
                                                            <stop id="SvgjsStop2308" stop-opacity="0.8"
                                                                stop-color="rgba(218,193,171,0.8)" offset="1">
                                                            </stop>
                                                            <stop id="SvgjsStop2309" stop-opacity="0.8"
                                                                stop-color="rgba(218,193,171,0.8)" offset="1">
                                                            </stop>
                                                        </linearGradient>
                                                        <linearGradient id="SvgjsLinearGradient2312" x1="0"
                                                            y1="0" x2="0" y2="1">
                                                            <stop id="SvgjsStop2313" stop-opacity="0.9"
                                                                stop-color="rgba(194,152,115,0.9)" offset="0">
                                                            </stop>
                                                            <stop id="SvgjsStop2314" stop-opacity="0.8"
                                                                stop-color="rgba(218,193,171,0.8)" offset="1">
                                                            </stop>
                                                            <stop id="SvgjsStop2315" stop-opacity="0.8"
                                                                stop-color="rgba(218,193,171,0.8)" offset="1">
                                                            </stop>
                                                        </linearGradient>
                                                        <linearGradient id="SvgjsLinearGradient2318" x1="0"
                                                            y1="0" x2="0" y2="1">
                                                            <stop id="SvgjsStop2319" stop-opacity="0.9"
                                                                stop-color="rgba(194,152,115,0.9)" offset="0">
                                                            </stop>
                                                            <stop id="SvgjsStop2320" stop-opacity="0.8"
                                                                stop-color="rgba(218,193,171,0.8)" offset="1">
                                                            </stop>
                                                            <stop id="SvgjsStop2321" stop-opacity="0.8"
                                                                stop-color="rgba(218,193,171,0.8)" offset="1">
                                                            </stop>
                                                        </linearGradient>
                                                        <linearGradient id="SvgjsLinearGradient2324" x1="0"
                                                            y1="0" x2="0" y2="1">
                                                            <stop id="SvgjsStop2325" stop-opacity="0.9"
                                                                stop-color="rgba(194,152,115,0.9)" offset="0">
                                                            </stop>
                                                            <stop id="SvgjsStop2326" stop-opacity="0.8"
                                                                stop-color="rgba(218,193,171,0.8)" offset="1">
                                                            </stop>
                                                            <stop id="SvgjsStop2327" stop-opacity="0.8"
                                                                stop-color="rgba(218,193,171,0.8)" offset="1">
                                                            </stop>
                                                        </linearGradient>
                                                        <linearGradient id="SvgjsLinearGradient2330" x1="0"
                                                            y1="0" x2="0" y2="1">
                                                            <stop id="SvgjsStop2331" stop-opacity="0.9"
                                                                stop-color="rgba(194,152,115,0.9)" offset="0">
                                                            </stop>
                                                            <stop id="SvgjsStop2332" stop-opacity="0.8"
                                                                stop-color="rgba(218,193,171,0.8)" offset="1">
                                                            </stop>
                                                            <stop id="SvgjsStop2333" stop-opacity="0.8"
                                                                stop-color="rgba(218,193,171,0.8)" offset="1">
                                                            </stop>
                                                        </linearGradient>
                                                        <linearGradient id="SvgjsLinearGradient2336" x1="0"
                                                            y1="0" x2="0" y2="1">
                                                            <stop id="SvgjsStop2337" stop-opacity="0.9"
                                                                stop-color="rgba(194,152,115,0.9)" offset="0">
                                                            </stop>
                                                            <stop id="SvgjsStop2338" stop-opacity="0.8"
                                                                stop-color="rgba(218,193,171,0.8)" offset="1">
                                                            </stop>
                                                            <stop id="SvgjsStop2339" stop-opacity="0.8"
                                                                stop-color="rgba(218,193,171,0.8)" offset="1">
                                                            </stop>
                                                        </linearGradient>
                                                        <linearGradient id="SvgjsLinearGradient2342" x1="0"
                                                            y1="0" x2="0" y2="1">
                                                            <stop id="SvgjsStop2343" stop-opacity="0.9"
                                                                stop-color="rgba(194,152,115,0.9)" offset="0">
                                                            </stop>
                                                            <stop id="SvgjsStop2344" stop-opacity="0.8"
                                                                stop-color="rgba(218,193,171,0.8)" offset="1">
                                                            </stop>
                                                            <stop id="SvgjsStop2345" stop-opacity="0.8"
                                                                stop-color="rgba(218,193,171,0.8)" offset="1">
                                                            </stop>
                                                        </linearGradient>
                                                        <linearGradient id="SvgjsLinearGradient2348" x1="0"
                                                            y1="0" x2="0" y2="1">
                                                            <stop id="SvgjsStop2349" stop-opacity="0.9"
                                                                stop-color="rgba(194,152,115,0.9)" offset="0">
                                                            </stop>
                                                            <stop id="SvgjsStop2350" stop-opacity="0.8"
                                                                stop-color="rgba(218,193,171,0.8)" offset="1">
                                                            </stop>
                                                            <stop id="SvgjsStop2351" stop-opacity="0.8"
                                                                stop-color="rgba(218,193,171,0.8)" offset="1">
                                                            </stop>
                                                        </linearGradient>
                                                        <linearGradient id="SvgjsLinearGradient2354" x1="0"
                                                            y1="0" x2="0" y2="1">
                                                            <stop id="SvgjsStop2355" stop-opacity="0.9"
                                                                stop-color="rgba(194,152,115,0.9)" offset="0">
                                                            </stop>
                                                            <stop id="SvgjsStop2356" stop-opacity="0.8"
                                                                stop-color="rgba(218,193,171,0.8)" offset="1">
                                                            </stop>
                                                            <stop id="SvgjsStop2357" stop-opacity="0.8"
                                                                stop-color="rgba(218,193,171,0.8)" offset="1">
                                                            </stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <rect id="SvgjsRect2241" width="25.636599349975587"
                                                        height="276.42666563796996" x="211.54464747111004" y="0"
                                                        rx="0" ry="0" opacity="1" stroke-width="0"
                                                        stroke-dasharray="3" fill="url(#SvgjsLinearGradient2237)"
                                                        class="apexcharts-xcrosshairs" y2="276.42666563796996"
                                                        filter="none" fill-opacity="0.9" x1="211.54464747111004"
                                                        x2="211.54464747111004"></rect>
                                                    <g id="SvgjsG2359" class="apexcharts-xaxis"
                                                        transform="translate(0, 0)">
                                                        <g id="SvgjsG2360" class="apexcharts-xaxis-texts-g"
                                                            transform="translate(0, -4)"><text id="SvgjsText2362"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="42.72766558329264" y="305.42666563796996"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan2363">Feb</tspan>
                                                                <title>Feb</title>
                                                            </text><text id="SvgjsText2365"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="128.18299674987793" y="305.42666563796996"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan2366">Mar</tspan>
                                                                <title>Mar</title>
                                                            </text><text id="SvgjsText2368"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="213.63832791646323" y="305.42666563796996"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan2369">Apr</tspan>
                                                                <title>Apr</title>
                                                            </text><text id="SvgjsText2371"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="299.09365908304846" y="305.42666563796996"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan2372">May</tspan>
                                                                <title>May</title>
                                                            </text><text id="SvgjsText2374"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="384.54899024963373" y="305.42666563796996"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan2375">Jun</tspan>
                                                                <title>Jun</title>
                                                            </text><text id="SvgjsText2377"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="470.00432141621906" y="305.42666563796996"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan2378">Jul</tspan>
                                                                <title>Jul</title>
                                                            </text><text id="SvgjsText2380"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="555.4596525828044" y="305.42666563796996"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan2381">Aug</tspan>
                                                                <title>Aug</title>
                                                            </text><text id="SvgjsText2383"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="640.9149837493898" y="305.42666563796996"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan2384">Sep</tspan>
                                                                <title>Sep</title>
                                                            </text><text id="SvgjsText2386"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="726.3703149159751" y="305.42666563796996"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan2387">Oct</tspan>
                                                                <title>Oct</title>
                                                            </text></g>
                                                        <line id="SvgjsLine2388" x1="0" y1="277.42666563796996"
                                                            x2="769.0979804992676" y2="277.42666563796996"
                                                            stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1"
                                                            stroke-linecap="butt"></line>
                                                    </g>
                                                    <g id="SvgjsG2408" class="apexcharts-grid">
                                                        <g id="SvgjsG2409" class="apexcharts-gridlines-horizontal">
                                                            <line id="SvgjsLine2421" x1="0" y1="0"
                                                                x2="769.0979804992676" y2="0" stroke="#e0e0e0"
                                                                stroke-dasharray="0" stroke-linecap="butt"
                                                                class="apexcharts-gridline">
                                                            </line>
                                                            <line id="SvgjsLine2422" x1="0"
                                                                y1="69.10666640949249" x2="769.0979804992676"
                                                                y2="69.10666640949249" stroke="#e0e0e0"
                                                                stroke-dasharray="0" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine2423" x1="0"
                                                                y1="138.21333281898498" x2="769.0979804992676"
                                                                y2="138.21333281898498" stroke="#e0e0e0"
                                                                stroke-dasharray="0" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine2424" x1="0"
                                                                y1="207.31999922847746" x2="769.0979804992676"
                                                                y2="207.31999922847746" stroke="#e0e0e0"
                                                                stroke-dasharray="0" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine2425" x1="0"
                                                                y1="276.42666563796996" x2="769.0979804992676"
                                                                y2="276.42666563796996" stroke="#e0e0e0"
                                                                stroke-dasharray="0" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                        </g>
                                                        <g id="SvgjsG2410" class="apexcharts-gridlines-vertical"></g>
                                                        <line id="SvgjsLine2411" x1="0" y1="277.42666563796996"
                                                            x2="0" y2="283.42666563796996" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-linecap="butt"
                                                            class="apexcharts-xaxis-tick"></line>
                                                        <line id="SvgjsLine2412" x1="85.45533116658528"
                                                            y1="277.42666563796996" x2="85.45533116658528"
                                                            y2="283.42666563796996" stroke="#e0e0e0" stroke-dasharray="0"
                                                            stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                                        <line id="SvgjsLine2413" x1="170.91066233317056"
                                                            y1="277.42666563796996" x2="170.91066233317056"
                                                            y2="283.42666563796996" stroke="#e0e0e0" stroke-dasharray="0"
                                                            stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                                        <line id="SvgjsLine2414" x1="256.36599349975586"
                                                            y1="277.42666563796996" x2="256.36599349975586"
                                                            y2="283.42666563796996" stroke="#e0e0e0" stroke-dasharray="0"
                                                            stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                                        <line id="SvgjsLine2415" x1="341.8213246663411"
                                                            y1="277.42666563796996" x2="341.8213246663411"
                                                            y2="283.42666563796996" stroke="#e0e0e0" stroke-dasharray="0"
                                                            stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                                        <line id="SvgjsLine2416" x1="427.2766558329264"
                                                            y1="277.42666563796996" x2="427.2766558329264"
                                                            y2="283.42666563796996" stroke="#e0e0e0" stroke-dasharray="0"
                                                            stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                                        <line id="SvgjsLine2417" x1="512.7319869995117"
                                                            y1="277.42666563796996" x2="512.7319869995117"
                                                            y2="283.42666563796996" stroke="#e0e0e0" stroke-dasharray="0"
                                                            stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                                        <line id="SvgjsLine2418" x1="598.187318166097"
                                                            y1="277.42666563796996" x2="598.187318166097"
                                                            y2="283.42666563796996" stroke="#e0e0e0" stroke-dasharray="0"
                                                            stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                                        <line id="SvgjsLine2419" x1="683.6426493326824"
                                                            y1="277.42666563796996" x2="683.6426493326824"
                                                            y2="283.42666563796996" stroke="#e0e0e0" stroke-dasharray="0"
                                                            stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                                        <line id="SvgjsLine2420" x1="769.0979804992677"
                                                            y1="277.42666563796996" x2="769.0979804992677"
                                                            y2="283.42666563796996" stroke="#e0e0e0" stroke-dasharray="0"
                                                            stroke-linecap="butt" class="apexcharts-xaxis-tick"></line>
                                                        <line id="SvgjsLine2427" x1="0" y1="276.42666563796996"
                                                            x2="769.0979804992676" y2="276.42666563796996"
                                                            stroke="transparent" stroke-dasharray="0"
                                                            stroke-linecap="butt"></line>
                                                        <line id="SvgjsLine2426" x1="0" y1="1"
                                                            x2="0" y2="276.42666563796996" stroke="transparent"
                                                            stroke-dasharray="0" stroke-linecap="butt"></line>
                                                    </g>
                                                    <g id="SvgjsG2244"
                                                        class="apexcharts-bar-series apexcharts-plot-series">
                                                        <g id="SvgjsG2245" class="apexcharts-series" rel="1"
                                                            seriesName="NetxProfit" data:realIndex="0">
                                                            <path id="SvgjsPath2253"
                                                                d="M17.091066233317054 276.42666563796996L17.091066233317054 185.0702215707143C17.091066233317054 178.40355490404764 20.424399566650386 175.0702215707143 27.091066233317054 175.0702215707143L30.72766558329264 175.0702215707143C37.394332249959305 175.0702215707143 40.72766558329264 178.40355490404764 40.72766558329264 185.0702215707143L40.72766558329264 185.0702215707143L40.72766558329264 276.42666563796996L40.72766558329264 276.42666563796996C40.72766558329264 276.42666563796996 17.091066233317054 276.42666563796996 17.091066233317054 276.42666563796996 "
                                                                fill="url(#SvgjsLinearGradient2249)" fill-opacity="1"
                                                                stroke="transparent" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="2"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="0" clip-path="url(#gridRectMask3u9kecji)"
                                                                pathTo="M 17.091066233317054 276.42666563796996L 17.091066233317054 185.0702215707143Q 17.091066233317054 175.0702215707143 27.091066233317054 175.0702215707143L 30.72766558329264 175.0702215707143Q 40.72766558329264 175.0702215707143 40.72766558329264 185.0702215707143L 40.72766558329264 185.0702215707143L 40.72766558329264 276.42666563796996L 40.72766558329264 276.42666563796996z"
                                                                pathFrom="M 17.091066233317054 276.42666563796996L 17.091066233317054 276.42666563796996L 40.72766558329264 276.42666563796996L 40.72766558329264 276.42666563796996L 40.72766558329264 276.42666563796996L 40.72766558329264 276.42666563796996L 40.72766558329264 276.42666563796996L 17.091066233317054 276.42666563796996"
                                                                cy="175.0702215707143" cx="101.54639739990233"
                                                                j="0" val="44"
                                                                barHeight="101.35644406725565"
                                                                barWidth="25.636599349975587"></path>
                                                            <path id="SvgjsPath2259"
                                                                d="M102.54639739990233 276.42666563796996L102.54639739990233 159.7311105539004C102.54639739990233 153.06444388723375 105.87973073323566 149.7311105539004 112.54639739990233 149.7311105539004L116.18299674987793 149.7311105539004C122.84966341654459 149.7311105539004 126.18299674987793 153.06444388723375 126.18299674987793 159.7311105539004L126.18299674987793 159.7311105539004L126.18299674987793 276.42666563796996L126.18299674987793 276.42666563796996C126.18299674987793 276.42666563796996 102.54639739990233 276.42666563796996 102.54639739990233 276.42666563796996 "
                                                                fill="url(#SvgjsLinearGradient2255)" fill-opacity="1"
                                                                stroke="transparent" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="2"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="0" clip-path="url(#gridRectMask3u9kecji)"
                                                                pathTo="M 102.54639739990233 276.42666563796996L 102.54639739990233 159.7311105539004Q 102.54639739990233 149.7311105539004 112.54639739990233 149.7311105539004L 116.18299674987793 149.7311105539004Q 126.18299674987793 149.7311105539004 126.18299674987793 159.7311105539004L 126.18299674987793 159.7311105539004L 126.18299674987793 276.42666563796996L 126.18299674987793 276.42666563796996z"
                                                                pathFrom="M 102.54639739990233 276.42666563796996L 102.54639739990233 276.42666563796996L 126.18299674987793 276.42666563796996L 126.18299674987793 276.42666563796996L 126.18299674987793 276.42666563796996L 126.18299674987793 276.42666563796996L 126.18299674987793 276.42666563796996L 102.54639739990233 276.42666563796996"
                                                                cy="149.7311105539004" cx="187.0017285664876"
                                                                j="1" val="55"
                                                                barHeight="126.69555508406955"
                                                                barWidth="25.636599349975587"></path>
                                                            <path id="SvgjsPath2265"
                                                                d="M188.0017285664876 276.42666563796996L188.0017285664876 155.12399945993423C188.0017285664876 148.45733279326757 191.33506189982091 145.12399945993423 198.0017285664876 145.12399945993423L201.6383279164632 145.12399945993423C208.30499458312988 145.12399945993423 211.6383279164632 148.45733279326757 211.6383279164632 155.12399945993423L211.6383279164632 155.12399945993423L211.6383279164632 276.42666563796996L211.6383279164632 276.42666563796996C211.6383279164632 276.42666563796996 188.0017285664876 276.42666563796996 188.0017285664876 276.42666563796996 "
                                                                fill="url(#SvgjsLinearGradient2261)" fill-opacity="1"
                                                                stroke="transparent" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="2"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="0" clip-path="url(#gridRectMask3u9kecji)"
                                                                pathTo="M 188.0017285664876 276.42666563796996L 188.0017285664876 155.12399945993423Q 188.0017285664876 145.12399945993423 198.0017285664876 145.12399945993423L 201.6383279164632 145.12399945993423Q 211.6383279164632 145.12399945993423 211.6383279164632 155.12399945993423L 211.6383279164632 155.12399945993423L 211.6383279164632 276.42666563796996L 211.6383279164632 276.42666563796996z"
                                                                pathFrom="M 188.0017285664876 276.42666563796996L 188.0017285664876 276.42666563796996L 211.6383279164632 276.42666563796996L 211.6383279164632 276.42666563796996L 211.6383279164632 276.42666563796996L 211.6383279164632 276.42666563796996L 211.6383279164632 276.42666563796996L 188.0017285664876 276.42666563796996"
                                                                cy="145.12399945993423" cx="272.45705973307287"
                                                                j="2" val="57"
                                                                barHeight="131.30266617803574"
                                                                barWidth="25.636599349975587"></path>
                                                            <path id="SvgjsPath2271"
                                                                d="M273.45705973307287 276.42666563796996L273.45705973307287 157.42755500691732C273.45705973307287 150.76088834025063 276.7903930664062 147.42755500691732 283.45705973307287 147.42755500691732L287.09365908304846 147.42755500691732C293.76032574971515 147.42755500691732 297.09365908304846 150.76088834025063 297.09365908304846 157.42755500691732L297.09365908304846 157.42755500691732L297.09365908304846 276.42666563796996L297.09365908304846 276.42666563796996C297.09365908304846 276.42666563796996 273.45705973307287 276.42666563796996 273.45705973307287 276.42666563796996 "
                                                                fill="url(#SvgjsLinearGradient2267)" fill-opacity="1"
                                                                stroke="transparent" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="2"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="0" clip-path="url(#gridRectMask3u9kecji)"
                                                                pathTo="M 273.45705973307287 276.42666563796996L 273.45705973307287 157.42755500691732Q 273.45705973307287 147.42755500691732 283.45705973307287 147.42755500691732L 287.09365908304846 147.42755500691732Q 297.09365908304846 147.42755500691732 297.09365908304846 157.42755500691732L 297.09365908304846 157.42755500691732L 297.09365908304846 276.42666563796996L 297.09365908304846 276.42666563796996z"
                                                                pathFrom="M 273.45705973307287 276.42666563796996L 273.45705973307287 276.42666563796996L 297.09365908304846 276.42666563796996L 297.09365908304846 276.42666563796996L 297.09365908304846 276.42666563796996L 297.09365908304846 276.42666563796996L 297.09365908304846 276.42666563796996L 273.45705973307287 276.42666563796996"
                                                                cy="147.42755500691732" cx="357.91239089965813"
                                                                j="3" val="56"
                                                                barHeight="128.99911063105264"
                                                                barWidth="25.636599349975587"></path>
                                                            <path id="SvgjsPath2277"
                                                                d="M358.91239089965813 276.42666563796996L358.91239089965813 145.90977727200192C358.91239089965813 139.24311060533523 362.2457242329915 135.90977727200192 368.91239089965813 135.90977727200192L372.54899024963373 135.90977727200192C379.2156569163004 135.90977727200192 382.54899024963373 139.24311060533523 382.54899024963373 145.90977727200192L382.54899024963373 145.90977727200192L382.54899024963373 276.42666563796996L382.54899024963373 276.42666563796996C382.54899024963373 276.42666563796996 358.91239089965813 276.42666563796996 358.91239089965813 276.42666563796996 "
                                                                fill="url(#SvgjsLinearGradient2273)" fill-opacity="1"
                                                                stroke="transparent" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="2"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="0" clip-path="url(#gridRectMask3u9kecji)"
                                                                pathTo="M 358.91239089965813 276.42666563796996L 358.91239089965813 145.90977727200192Q 358.91239089965813 135.90977727200192 368.91239089965813 135.90977727200192L 372.54899024963373 135.90977727200192Q 382.54899024963373 135.90977727200192 382.54899024963373 145.90977727200192L 382.54899024963373 145.90977727200192L 382.54899024963373 276.42666563796996L 382.54899024963373 276.42666563796996z"
                                                                pathFrom="M 358.91239089965813 276.42666563796996L 358.91239089965813 276.42666563796996L 382.54899024963373 276.42666563796996L 382.54899024963373 276.42666563796996L 382.54899024963373 276.42666563796996L 382.54899024963373 276.42666563796996L 382.54899024963373 276.42666563796996L 358.91239089965813 276.42666563796996"
                                                                cy="135.90977727200192" cx="443.3677220662434"
                                                                j="4" val="61"
                                                                barHeight="140.51688836596804"
                                                                barWidth="25.636599349975587"></path>
                                                            <path id="SvgjsPath2283"
                                                                d="M444.3677220662434 276.42666563796996L444.3677220662434 152.82044391295116C444.36772206624335 146.1537772462845 447.7010553995767 142.82044391295116 454.3677220662434 142.82044391295116L458.004321416219 142.82044391295116C464.67098808288563 142.82044391295116 468.004321416219 146.1537772462845 468.004321416219 152.82044391295116L468.004321416219 152.82044391295116L468.004321416219 276.42666563796996L468.004321416219 276.42666563796996C468.004321416219 276.42666563796996 444.3677220662434 276.42666563796996 444.3677220662434 276.42666563796996 "
                                                                fill="url(#SvgjsLinearGradient2279)" fill-opacity="1"
                                                                stroke="transparent" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="2"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="0" clip-path="url(#gridRectMask3u9kecji)"
                                                                pathTo="M 444.3677220662434 276.42666563796996L 444.3677220662434 152.82044391295116Q 444.3677220662434 142.82044391295116 454.3677220662434 142.82044391295116L 458.004321416219 142.82044391295116Q 468.004321416219 142.82044391295116 468.004321416219 152.82044391295116L 468.004321416219 152.82044391295116L 468.004321416219 276.42666563796996L 468.004321416219 276.42666563796996z"
                                                                pathFrom="M 444.3677220662434 276.42666563796996L 444.3677220662434 276.42666563796996L 468.004321416219 276.42666563796996L 468.004321416219 276.42666563796996L 468.004321416219 276.42666563796996L 468.004321416219 276.42666563796996L 468.004321416219 276.42666563796996L 444.3677220662434 276.42666563796996"
                                                                cy="142.82044391295116" cx="528.8230532328287"
                                                                j="5" val="58"
                                                                barHeight="133.6062217250188"
                                                                barWidth="25.636599349975587"></path>
                                                            <path id="SvgjsPath2289"
                                                                d="M529.8230532328287 276.42666563796996L529.8230532328287 141.30266617803574C529.8230532328287 134.63599951136908 533.1563865661619 131.30266617803574 539.8230532328287 131.30266617803574L543.4596525828042 131.30266617803574C550.1263192494708 131.30266617803574 553.4596525828042 134.63599951136908 553.4596525828042 141.30266617803574L553.4596525828042 141.30266617803574L553.4596525828042 276.42666563796996L553.4596525828042 276.42666563796996C553.4596525828042 276.42666563796996 529.8230532328287 276.42666563796996 529.8230532328287 276.42666563796996 "
                                                                fill="url(#SvgjsLinearGradient2285)" fill-opacity="1"
                                                                stroke="transparent" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="2"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="0" clip-path="url(#gridRectMask3u9kecji)"
                                                                pathTo="M 529.8230532328287 276.42666563796996L 529.8230532328287 141.30266617803574Q 529.8230532328287 131.30266617803574 539.8230532328287 131.30266617803574L 543.4596525828042 131.30266617803574Q 553.4596525828042 131.30266617803574 553.4596525828042 141.30266617803574L 553.4596525828042 141.30266617803574L 553.4596525828042 276.42666563796996L 553.4596525828042 276.42666563796996z"
                                                                pathFrom="M 529.8230532328287 276.42666563796996L 529.8230532328287 276.42666563796996L 553.4596525828042 276.42666563796996L 553.4596525828042 276.42666563796996L 553.4596525828042 276.42666563796996L 553.4596525828042 276.42666563796996L 553.4596525828042 276.42666563796996L 529.8230532328287 276.42666563796996"
                                                                cy="131.30266617803574" cx="614.278384399414"
                                                                j="6" val="63"
                                                                barHeight="145.12399945993423"
                                                                barWidth="25.636599349975587"></path>
                                                            <path id="SvgjsPath2295"
                                                                d="M615.278384399414 276.42666563796996L615.278384399414 148.21333281898498C615.278384399414 141.54666615231832 618.6117177327474 138.21333281898498 625.278384399414 138.21333281898498L628.9149837493895 138.21333281898498C635.5816504160562 138.21333281898498 638.9149837493895 141.54666615231832 638.9149837493895 148.21333281898498L638.9149837493895 148.21333281898498L638.9149837493895 276.42666563796996L638.9149837493895 276.42666563796996C638.9149837493895 276.42666563796996 615.278384399414 276.42666563796996 615.278384399414 276.42666563796996 "
                                                                fill="url(#SvgjsLinearGradient2291)" fill-opacity="1"
                                                                stroke="transparent" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="2"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="0" clip-path="url(#gridRectMask3u9kecji)"
                                                                pathTo="M 615.278384399414 276.42666563796996L 615.278384399414 148.21333281898498Q 615.278384399414 138.21333281898498 625.278384399414 138.21333281898498L 628.9149837493895 138.21333281898498Q 638.9149837493895 138.21333281898498 638.9149837493895 148.21333281898498L 638.9149837493895 148.21333281898498L 638.9149837493895 276.42666563796996L 638.9149837493895 276.42666563796996z"
                                                                pathFrom="M 615.278384399414 276.42666563796996L 615.278384399414 276.42666563796996L 638.9149837493895 276.42666563796996L 638.9149837493895 276.42666563796996L 638.9149837493895 276.42666563796996L 638.9149837493895 276.42666563796996L 638.9149837493895 276.42666563796996L 615.278384399414 276.42666563796996"
                                                                cy="138.21333281898498" cx="699.7337155659993"
                                                                j="7" val="60"
                                                                barHeight="138.21333281898498"
                                                                barWidth="25.636599349975587"></path>
                                                            <path id="SvgjsPath2301"
                                                                d="M700.7337155659993 276.42666563796996L700.7337155659993 134.3919995370865C700.7337155659993 127.72533287041983 704.0670488993327 124.39199953708649 710.7337155659993 124.39199953708649L714.3703149159749 124.39199953708649C721.0369815826416 124.39199953708649 724.3703149159749 127.72533287041983 724.3703149159749 134.3919995370865L724.3703149159749 134.3919995370865L724.3703149159749 276.42666563796996L724.3703149159749 276.42666563796996C724.3703149159749 276.42666563796996 700.7337155659993 276.42666563796996 700.7337155659993 276.42666563796996 "
                                                                fill="url(#SvgjsLinearGradient2297)" fill-opacity="1"
                                                                stroke="transparent" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="2"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="0" clip-path="url(#gridRectMask3u9kecji)"
                                                                pathTo="M 700.7337155659993 276.42666563796996L 700.7337155659993 134.3919995370865Q 700.7337155659993 124.39199953708649 710.7337155659993 124.39199953708649L 714.3703149159749 124.39199953708649Q 724.3703149159749 124.39199953708649 724.3703149159749 134.3919995370865L 724.3703149159749 134.3919995370865L 724.3703149159749 276.42666563796996L 724.3703149159749 276.42666563796996z"
                                                                pathFrom="M 700.7337155659993 276.42666563796996L 700.7337155659993 276.42666563796996L 724.3703149159749 276.42666563796996L 724.3703149159749 276.42666563796996L 724.3703149159749 276.42666563796996L 724.3703149159749 276.42666563796996L 724.3703149159749 276.42666563796996L 700.7337155659993 276.42666563796996"
                                                                cy="124.39199953708649" cx="785.1890467325846"
                                                                j="8" val="66"
                                                                barHeight="152.03466610088347"
                                                                barWidth="25.636599349975587"></path>
                                                            <g id="SvgjsG2247" class="apexcharts-bar-goals-markers"
                                                                style="pointer-events: none">
                                                                <g id="SvgjsG2248"
                                                                    className="apexcharts-bar-goals-groups"></g>
                                                                <g id="SvgjsG2254"
                                                                    className="apexcharts-bar-goals-groups"></g>
                                                                <g id="SvgjsG2260"
                                                                    className="apexcharts-bar-goals-groups"></g>
                                                                <g id="SvgjsG2266"
                                                                    className="apexcharts-bar-goals-groups"></g>
                                                                <g id="SvgjsG2272"
                                                                    className="apexcharts-bar-goals-groups"></g>
                                                                <g id="SvgjsG2278"
                                                                    className="apexcharts-bar-goals-groups"></g>
                                                                <g id="SvgjsG2284"
                                                                    className="apexcharts-bar-goals-groups"></g>
                                                                <g id="SvgjsG2290"
                                                                    className="apexcharts-bar-goals-groups"></g>
                                                                <g id="SvgjsG2296"
                                                                    className="apexcharts-bar-goals-groups"></g>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG2302" class="apexcharts-series" rel="2"
                                                            seriesName="Revenue" data:realIndex="1">
                                                            <path id="SvgjsPath2310"
                                                                d="M42.72766558329264 276.42666563796996L42.72766558329264 111.35644406725567C42.72766558329264 104.68977740058901 46.06099891662598 101.35644406725567 52.72766558329264 101.35644406725567L56.36426493326823 101.35644406725567C63.030931599934895 101.35644406725567 66.36426493326823 104.68977740058901 66.36426493326823 111.35644406725567L66.36426493326823 111.35644406725567L66.36426493326823 276.42666563796996L66.36426493326823 276.42666563796996C66.36426493326823 276.42666563796996 42.72766558329264 276.42666563796996 42.72766558329264 276.42666563796996 "
                                                                fill="url(#SvgjsLinearGradient2306)" fill-opacity="1"
                                                                stroke="transparent" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="2"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="1" clip-path="url(#gridRectMask3u9kecji)"
                                                                pathTo="M 42.72766558329264 276.42666563796996L 42.72766558329264 111.35644406725567Q 42.72766558329264 101.35644406725567 52.72766558329264 101.35644406725567L 56.36426493326823 101.35644406725567Q 66.36426493326823 101.35644406725567 66.36426493326823 111.35644406725567L 66.36426493326823 111.35644406725567L 66.36426493326823 276.42666563796996L 66.36426493326823 276.42666563796996z"
                                                                pathFrom="M 42.72766558329264 276.42666563796996L 42.72766558329264 276.42666563796996L 66.36426493326823 276.42666563796996L 66.36426493326823 276.42666563796996L 66.36426493326823 276.42666563796996L 66.36426493326823 276.42666563796996L 66.36426493326823 276.42666563796996L 42.72766558329264 276.42666563796996"
                                                                cy="101.35644406725567" cx="127.18299674987793"
                                                                j="0" val="76"
                                                                barHeight="175.0702215707143"
                                                                barWidth="25.636599349975587"></path>
                                                            <path id="SvgjsPath2316"
                                                                d="M128.18299674987793 276.42666563796996L128.18299674987793 90.6244441444079C128.18299674987793 83.95777747774125 131.51633008321124 80.6244441444079 138.18299674987793 80.6244441444079L141.81959609985353 80.6244441444079C148.48626276652018 80.6244441444079 151.81959609985353 83.95777747774125 151.81959609985353 90.6244441444079L151.81959609985353 90.6244441444079L151.81959609985353 276.42666563796996L151.81959609985353 276.42666563796996C151.81959609985353 276.42666563796996 128.18299674987793 276.42666563796996 128.18299674987793 276.42666563796996 "
                                                                fill="url(#SvgjsLinearGradient2312)" fill-opacity="1"
                                                                stroke="transparent" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="2"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="1" clip-path="url(#gridRectMask3u9kecji)"
                                                                pathTo="M 128.18299674987793 276.42666563796996L 128.18299674987793 90.6244441444079Q 128.18299674987793 80.6244441444079 138.18299674987793 80.6244441444079L 141.81959609985353 80.6244441444079Q 151.81959609985353 80.6244441444079 151.81959609985353 90.6244441444079L 151.81959609985353 90.6244441444079L 151.81959609985353 276.42666563796996L 151.81959609985353 276.42666563796996z"
                                                                pathFrom="M 128.18299674987793 276.42666563796996L 128.18299674987793 276.42666563796996L 151.81959609985353 276.42666563796996L 151.81959609985353 276.42666563796996L 151.81959609985353 276.42666563796996L 151.81959609985353 276.42666563796996L 151.81959609985353 276.42666563796996L 128.18299674987793 276.42666563796996"
                                                                cy="80.6244441444079" cx="212.6383279164632"
                                                                j="1" val="85"
                                                                barHeight="195.80222149356206"
                                                                barWidth="25.636599349975587"></path>
                                                            <path id="SvgjsPath2322"
                                                                d="M213.6383279164632 276.42666563796996L213.6383279164632 53.76755539267859C213.6383279164632 47.10088872601193 216.97166124979654 43.76755539267859 223.6383279164632 43.76755539267859L227.2749272664388 43.76755539267859C233.94159393310548 43.76755539267859 237.2749272664388 47.10088872601193 237.2749272664388 53.76755539267859L237.2749272664388 53.76755539267859L237.2749272664388 276.42666563796996L237.2749272664388 276.42666563796996C237.2749272664388 276.42666563796996 213.6383279164632 276.42666563796996 213.6383279164632 276.42666563796996 "
                                                                fill="url(#SvgjsLinearGradient2318)" fill-opacity="1"
                                                                stroke="transparent" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="2"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="1" clip-path="url(#gridRectMask3u9kecji)"
                                                                pathTo="M 213.6383279164632 276.42666563796996L 213.6383279164632 53.76755539267859Q 213.6383279164632 43.76755539267859 223.6383279164632 43.76755539267859L 227.2749272664388 43.76755539267859Q 237.2749272664388 43.76755539267859 237.2749272664388 53.76755539267859L 237.2749272664388 53.76755539267859L 237.2749272664388 276.42666563796996L 237.2749272664388 276.42666563796996z"
                                                                pathFrom="M 213.6383279164632 276.42666563796996L 213.6383279164632 276.42666563796996L 237.2749272664388 276.42666563796996L 237.2749272664388 276.42666563796996L 237.2749272664388 276.42666563796996L 237.2749272664388 276.42666563796996L 237.2749272664388 276.42666563796996L 213.6383279164632 276.42666563796996"
                                                                cy="43.76755539267859" cx="298.09365908304846"
                                                                j="2" val="101"
                                                                barHeight="232.65911024529137"
                                                                barWidth="25.636599349975587"></path>
                                                            <path id="SvgjsPath2328"
                                                                d="M299.09365908304846 276.42666563796996L299.09365908304846 60.67822203362783C299.09365908304846 54.011555366961176 302.42699241638184 50.67822203362783 309.09365908304846 50.67822203362783L312.73025843302406 50.67822203362783C319.39692509969075 50.67822203362783 322.73025843302406 54.011555366961176 322.73025843302406 60.67822203362783L322.73025843302406 60.67822203362783L322.73025843302406 276.42666563796996L322.73025843302406 276.42666563796996C322.73025843302406 276.42666563796996 299.09365908304846 276.42666563796996 299.09365908304846 276.42666563796996 "
                                                                fill="url(#SvgjsLinearGradient2324)" fill-opacity="1"
                                                                stroke="transparent" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="2"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="1" clip-path="url(#gridRectMask3u9kecji)"
                                                                pathTo="M 299.09365908304846 276.42666563796996L 299.09365908304846 60.67822203362783Q 299.09365908304846 50.67822203362783 309.09365908304846 50.67822203362783L 312.73025843302406 50.67822203362783Q 322.73025843302406 50.67822203362783 322.73025843302406 60.67822203362783L 322.73025843302406 60.67822203362783L 322.73025843302406 276.42666563796996L 322.73025843302406 276.42666563796996z"
                                                                pathFrom="M 299.09365908304846 276.42666563796996L 299.09365908304846 276.42666563796996L 322.73025843302406 276.42666563796996L 322.73025843302406 276.42666563796996L 322.73025843302406 276.42666563796996L 322.73025843302406 276.42666563796996L 322.73025843302406 276.42666563796996L 299.09365908304846 276.42666563796996"
                                                                cy="50.67822203362783" cx="383.54899024963373"
                                                                j="3" val="98"
                                                                barHeight="225.74844360434213"
                                                                barWidth="25.636599349975587"></path>
                                                            <path id="SvgjsPath2334"
                                                                d="M384.54899024963373 276.42666563796996L384.54899024963373 86.01733305044175C384.5489902496337 79.35066638377509 387.88232358296705 76.01733305044175 394.54899024963373 76.01733305044175L398.18558959960933 76.01733305044175C404.85225626627596 76.01733305044175 408.18558959960933 79.35066638377509 408.18558959960933 86.01733305044175L408.18558959960933 86.01733305044175L408.18558959960933 276.42666563796996L408.18558959960933 276.42666563796996C408.18558959960933 276.42666563796996 384.54899024963373 276.42666563796996 384.54899024963373 276.42666563796996 "
                                                                fill="url(#SvgjsLinearGradient2330)" fill-opacity="1"
                                                                stroke="transparent" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="2"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="1" clip-path="url(#gridRectMask3u9kecji)"
                                                                pathTo="M 384.54899024963373 276.42666563796996L 384.54899024963373 86.01733305044175Q 384.54899024963373 76.01733305044175 394.54899024963373 76.01733305044175L 398.18558959960933 76.01733305044175Q 408.18558959960933 76.01733305044175 408.18558959960933 86.01733305044175L 408.18558959960933 86.01733305044175L 408.18558959960933 276.42666563796996L 408.18558959960933 276.42666563796996z"
                                                                pathFrom="M 384.54899024963373 276.42666563796996L 384.54899024963373 276.42666563796996L 408.18558959960933 276.42666563796996L 408.18558959960933 276.42666563796996L 408.18558959960933 276.42666563796996L 408.18558959960933 276.42666563796996L 408.18558959960933 276.42666563796996L 384.54899024963373 276.42666563796996"
                                                                cy="76.01733305044175" cx="469.004321416219"
                                                                j="4" val="87"
                                                                barHeight="200.4093325875282"
                                                                barWidth="25.636599349975587"></path>
                                                            <path id="SvgjsPath2340"
                                                                d="M470.004321416219 276.42666563796996L470.004321416219 44.55333320474625C470.004321416219 37.886666538079595 473.3376547495523 34.55333320474625 480.004321416219 34.55333320474625L483.6409207661946 34.55333320474625C490.3075874328613 34.55333320474625 493.6409207661946 37.886666538079595 493.6409207661946 44.55333320474625L493.6409207661946 44.55333320474625L493.6409207661946 276.42666563796996L493.6409207661946 276.42666563796996C493.6409207661946 276.42666563796996 470.004321416219 276.42666563796996 470.004321416219 276.42666563796996 "
                                                                fill="url(#SvgjsLinearGradient2336)" fill-opacity="1"
                                                                stroke="transparent" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="2"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="1" clip-path="url(#gridRectMask3u9kecji)"
                                                                pathTo="M 470.004321416219 276.42666563796996L 470.004321416219 44.55333320474625Q 470.004321416219 34.55333320474625 480.004321416219 34.55333320474625L 483.6409207661946 34.55333320474625Q 493.6409207661946 34.55333320474625 493.6409207661946 44.55333320474625L 493.6409207661946 44.55333320474625L 493.6409207661946 276.42666563796996L 493.6409207661946 276.42666563796996z"
                                                                pathFrom="M 470.004321416219 276.42666563796996L 470.004321416219 276.42666563796996L 493.6409207661946 276.42666563796996L 493.6409207661946 276.42666563796996L 493.6409207661946 276.42666563796996L 493.6409207661946 276.42666563796996L 493.6409207661946 276.42666563796996L 470.004321416219 276.42666563796996"
                                                                cy="34.55333320474625" cx="554.4596525828042"
                                                                j="5" val="105"
                                                                barHeight="241.8733324332237"
                                                                barWidth="25.636599349975587"></path>
                                                            <path id="SvgjsPath2346"
                                                                d="M555.4596525828042 276.42666563796996L555.4596525828042 76.80311086250941C555.4596525828042 70.13644419584273 558.7929859161376 66.80311086250941 565.4596525828042 66.80311086250941L569.0962519327798 66.80311086250941C575.7629185994465 66.80311086250941 579.0962519327798 70.13644419584273 579.0962519327798 76.80311086250941L579.0962519327798 76.80311086250941L579.0962519327798 276.42666563796996L579.0962519327798 276.42666563796996C579.0962519327798 276.42666563796996 555.4596525828042 276.42666563796996 555.4596525828042 276.42666563796996 "
                                                                fill="url(#SvgjsLinearGradient2342)" fill-opacity="1"
                                                                stroke="transparent" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="2"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="1" clip-path="url(#gridRectMask3u9kecji)"
                                                                pathTo="M 555.4596525828042 276.42666563796996L 555.4596525828042 76.80311086250941Q 555.4596525828042 66.80311086250941 565.4596525828042 66.80311086250941L 569.0962519327798 66.80311086250941Q 579.0962519327798 66.80311086250941 579.0962519327798 76.80311086250941L 579.0962519327798 76.80311086250941L 579.0962519327798 276.42666563796996L 579.0962519327798 276.42666563796996z"
                                                                pathFrom="M 555.4596525828042 276.42666563796996L 555.4596525828042 276.42666563796996L 579.0962519327798 276.42666563796996L 579.0962519327798 276.42666563796996L 579.0962519327798 276.42666563796996L 579.0962519327798 276.42666563796996L 579.0962519327798 276.42666563796996L 555.4596525828042 276.42666563796996"
                                                                cy="66.80311086250941" cx="639.9149837493895"
                                                                j="6" val="91"
                                                                barHeight="209.62355477546055"
                                                                barWidth="25.636599349975587"></path>
                                                            <path id="SvgjsPath2352"
                                                                d="M640.9149837493895 276.42666563796996L640.9149837493895 23.82133328189849C640.9149837493895 17.154666615231804 644.2483170827229 13.82133328189849 650.9149837493895 13.82133328189849L654.5515830993651 13.82133328189849C661.2182497660317 13.82133328189849 664.5515830993651 17.154666615231804 664.5515830993651 23.82133328189849L664.5515830993651 23.82133328189849L664.5515830993651 276.42666563796996L664.5515830993651 276.42666563796996C664.5515830993651 276.42666563796996 640.9149837493895 276.42666563796996 640.9149837493895 276.42666563796996 "
                                                                fill="url(#SvgjsLinearGradient2348)" fill-opacity="1"
                                                                stroke="transparent" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="2"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="1" clip-path="url(#gridRectMask3u9kecji)"
                                                                pathTo="M 640.9149837493895 276.42666563796996L 640.9149837493895 23.82133328189849Q 640.9149837493895 13.82133328189849 650.9149837493895 13.82133328189849L 654.5515830993651 13.82133328189849Q 664.5515830993651 13.82133328189849 664.5515830993651 23.82133328189849L 664.5515830993651 23.82133328189849L 664.5515830993651 276.42666563796996L 664.5515830993651 276.42666563796996z"
                                                                pathFrom="M 640.9149837493895 276.42666563796996L 640.9149837493895 276.42666563796996L 664.5515830993651 276.42666563796996L 664.5515830993651 276.42666563796996L 664.5515830993651 276.42666563796996L 664.5515830993651 276.42666563796996L 664.5515830993651 276.42666563796996L 640.9149837493895 276.42666563796996"
                                                                cy="13.82133328189849" cx="725.3703149159749"
                                                                j="7" val="114"
                                                                barHeight="262.6053323560715"
                                                                barWidth="25.636599349975587"></path>
                                                            <path id="SvgjsPath2358"
                                                                d="M726.3703149159749 276.42666563796996L726.3703149159749 69.89244422156017C726.3703149159749 63.22577755489351 729.7036482493082 59.89244422156017 736.3703149159749 59.89244422156017L740.0069142659504 59.89244422156017C746.673580932617 59.89244422156017 750.0069142659504 63.22577755489351 750.0069142659504 69.89244422156017L750.0069142659504 69.89244422156017L750.0069142659504 276.42666563796996L750.0069142659504 276.42666563796996C750.0069142659504 276.42666563796996 726.3703149159749 276.42666563796996 726.3703149159749 276.42666563796996 "
                                                                fill="url(#SvgjsLinearGradient2354)" fill-opacity="1"
                                                                stroke="transparent" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="2"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="1" clip-path="url(#gridRectMask3u9kecji)"
                                                                pathTo="M 726.3703149159749 276.42666563796996L 726.3703149159749 69.89244422156017Q 726.3703149159749 59.89244422156017 736.3703149159749 59.89244422156017L 740.0069142659504 59.89244422156017Q 750.0069142659504 59.89244422156017 750.0069142659504 69.89244422156017L 750.0069142659504 69.89244422156017L 750.0069142659504 276.42666563796996L 750.0069142659504 276.42666563796996z"
                                                                pathFrom="M 726.3703149159749 276.42666563796996L 726.3703149159749 276.42666563796996L 750.0069142659504 276.42666563796996L 750.0069142659504 276.42666563796996L 750.0069142659504 276.42666563796996L 750.0069142659504 276.42666563796996L 750.0069142659504 276.42666563796996L 726.3703149159749 276.42666563796996"
                                                                cy="59.89244422156017" cx="810.8256460825602"
                                                                j="8" val="94"
                                                                barHeight="216.5342214164098"
                                                                barWidth="25.636599349975587"></path>
                                                            <g id="SvgjsG2304" class="apexcharts-bar-goals-markers"
                                                                style="pointer-events: none">
                                                                <g id="SvgjsG2305"
                                                                    className="apexcharts-bar-goals-groups"></g>
                                                                <g id="SvgjsG2311"
                                                                    className="apexcharts-bar-goals-groups"></g>
                                                                <g id="SvgjsG2317"
                                                                    className="apexcharts-bar-goals-groups"></g>
                                                                <g id="SvgjsG2323"
                                                                    className="apexcharts-bar-goals-groups"></g>
                                                                <g id="SvgjsG2329"
                                                                    className="apexcharts-bar-goals-groups"></g>
                                                                <g id="SvgjsG2335"
                                                                    className="apexcharts-bar-goals-groups"></g>
                                                                <g id="SvgjsG2341"
                                                                    className="apexcharts-bar-goals-groups"></g>
                                                                <g id="SvgjsG2347"
                                                                    className="apexcharts-bar-goals-groups"></g>
                                                                <g id="SvgjsG2353"
                                                                    className="apexcharts-bar-goals-groups"></g>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG2246" class="apexcharts-datalabels"
                                                            data:realIndex="0"></g>
                                                        <g id="SvgjsG2303" class="apexcharts-datalabels"
                                                            data:realIndex="1"></g>
                                                    </g>
                                                    <line id="SvgjsLine2428" x1="0" y1="0"
                                                        x2="769.0979804992676" y2="0" stroke="#b6b6b6"
                                                        stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                        class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine2429" x1="0" y1="0"
                                                        x2="769.0979804992676" y2="0" stroke-dasharray="0"
                                                        stroke-width="0" stroke-linecap="butt"
                                                        class="apexcharts-ycrosshairs-hidden"></line>
                                                    <g id="SvgjsG2430" class="apexcharts-yaxis-annotations"></g>
                                                    <g id="SvgjsG2431" class="apexcharts-xaxis-annotations"></g>
                                                    <g id="SvgjsG2432" class="apexcharts-point-annotations"></g>
                                                </g>
                                                <g id="SvgjsG2389" class="apexcharts-yaxis" rel="0"
                                                    transform="translate(23.902019500732422, 0)">
                                                    <g id="SvgjsG2390" class="apexcharts-yaxis-texts-g"><text
                                                            id="SvgjsText2392"
                                                            font-family="Helvetica, Arial, sans-serif" x="20"
                                                            y="31.4" text-anchor="end" dominant-baseline="auto"
                                                            font-size="11px" font-weight="400" fill="#373d3f"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan2393">120</tspan>
                                                            <title>120</title>
                                                        </text><text id="SvgjsText2395"
                                                            font-family="Helvetica, Arial, sans-serif" x="20"
                                                            y="100.5066664094925" text-anchor="end"
                                                            dominant-baseline="auto" font-size="11px"
                                                            font-weight="400" fill="#373d3f"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan2396">90</tspan>
                                                            <title>90</title>
                                                        </text><text id="SvgjsText2398"
                                                            font-family="Helvetica, Arial, sans-serif" x="20"
                                                            y="169.613332818985" text-anchor="end"
                                                            dominant-baseline="auto" font-size="11px"
                                                            font-weight="400" fill="#373d3f"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan2399">60</tspan>
                                                            <title>60</title>
                                                        </text><text id="SvgjsText2401"
                                                            font-family="Helvetica, Arial, sans-serif" x="20"
                                                            y="238.71999922847746" text-anchor="end"
                                                            dominant-baseline="auto" font-size="11px"
                                                            font-weight="400" fill="#373d3f"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan2402">30</tspan>
                                                            <title>30</title>
                                                        </text><text id="SvgjsText2404"
                                                            font-family="Helvetica, Arial, sans-serif" x="20"
                                                            y="307.82666563796994" text-anchor="end"
                                                            dominant-baseline="auto" font-size="11px"
                                                            font-weight="400" fill="#373d3f"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan2405">0</tspan>
                                                            <title>0</title>
                                                        </text></g>
                                                    <g id="SvgjsG2406" class="apexcharts-yaxis-title"><text
                                                            id="SvgjsText2407"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="29.972980499267578" y="168.21333281898498"
                                                            text-anchor="end" dominant-baseline="auto"
                                                            font-size="11px" font-weight="900" fill="#373d3f"
                                                            class="apexcharts-text apexcharts-yaxis-title-text "
                                                            style="font-family: Helvetica, Arial, sans-serif;"
                                                            transform="rotate(-90 -14.902019500732422 164.21334838867188)">$
                                                            (thousands)</text></g>
                                                </g>
                                                <g id="SvgjsG2233" class="apexcharts-annotations"></g>
                                            </svg>
                                            <div class="apexcharts-tooltip apexcharts-theme-light"
                                                style="left: 278.265px; top: 37.5px;">
                                                <div class="apexcharts-tooltip-title"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    Apr</div>
                                                <div class="apexcharts-tooltip-series-group apexcharts-active"
                                                    style="order: 1; display: flex;"><span
                                                        class="apexcharts-tooltip-marker" style=""></span>
                                                    <div class="apexcharts-tooltip-text"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group"><span
                                                                class="apexcharts-tooltip-text-y-label">Revenue:
                                                            </span><span class="apexcharts-tooltip-text-y-value">$ 101
                                                                thousands</span></div>
                                                        <div class="apexcharts-tooltip-goals-group"><span
                                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                                class="apexcharts-tooltip-text-goals-value"></span>
                                                        </div>
                                                        <div class="apexcharts-tooltip-z-group"><span
                                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                                    </div>
                                                </div>
                                                <div class="apexcharts-tooltip-series-group"
                                                    style="order: 2; display: none;"><span
                                                        class="apexcharts-tooltip-marker" style=""></span>
                                                    <div class="apexcharts-tooltip-text"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group"><span
                                                                class="apexcharts-tooltip-text-y-label">Revenue:
                                                            </span><span class="apexcharts-tooltip-text-y-value">$ 101
                                                                thousands</span></div>
                                                        <div class="apexcharts-tooltip-goals-group"><span
                                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                                class="apexcharts-tooltip-text-goals-value"></span>
                                                        </div>
                                                        <div class="apexcharts-tooltip-z-group"><span
                                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                <div class="apexcharts-yaxistooltip-text"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
