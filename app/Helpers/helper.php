<?php

use App\Models\WorkUnit;
use Carbon\Carbon;

if (!function_exists('tanggal')) {
    function tanggal($date)
    {
        return Carbon::parse($date)->translatedFormat('d F Y');
    }
}
if (!function_exists('tahun')) {
    function tahun($date)
    {
        return Carbon::parse($date)->translatedFormat('Y');
    }
}
if (!function_exists('unit')) {
    function unit($id)
    {
        $data = WorkUnit::where('_id', $id)->first();
        return $data;
    }
}
