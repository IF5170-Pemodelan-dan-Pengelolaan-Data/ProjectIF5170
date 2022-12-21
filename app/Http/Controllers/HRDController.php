<?php

namespace App\Http\Controllers;

use App\Models\Nurse;
use App\Models\Physicians;
use Illuminate\Http\Request;

class HRDController extends Controller
{
    public function index()
    {
        $title = 'HRD - MVCH Employee Management';
        return view('hrd.index', compact('title'));
    }

    public function pegawai_allcabang()
    {
        $title = 'HRD - Pegawai Semua Cabang MVCH Employee Management';
        $physc = Physicians::get(['employee_id', 'name', 'age', 'phone', 'email', 'type', 'work_unit.name', 'work_unit.branch.branch_country'])->toArray();
        $nurse = Nurse::get(['employee_id', 'name', 'age', 'phone', 'email', 'type', 'work_unit.name', 'work_unit.branch.branch_country'])->toArray();

        $data = array_merge($physc, $nurse);
        return view('hrd.pegawai_allcabang', compact('title', 'data'));
    }
    public function pegawai_colorado()
    {
        $title = 'HRD - Pegawai Cabang Colorado MVCH Employee Management';
        $physc = Physicians::where('work_unit.branch.branch_country', 'Colorado')->get(['employee_id', 'name', 'age', 'phone', 'email', 'type', 'work_unit.name'])->toArray();
        $nurse = Nurse::where('work_unit.branch.branch_country', 'Colorado')->get(['employee_id', 'name', 'age', 'phone', 'email', 'type', 'work_unit.name'])->toArray();

        $data = array_merge($physc, $nurse);
        return view('hrd.pegawai_colorado', compact('title', 'data'));
    }
    public function pegawai_california()
    {
        $title = 'HRD - Pegawai Cabang California MVCH Employee Management';
        $physc = Physicians::where('work_unit.branch.branch_country', 'California')->get(['employee_id', 'name', 'age', 'phone', 'email', 'type', 'work_unit.name'])->toArray();
        $nurse = Nurse::where('work_unit.branch.branch_country', 'California')->get(['employee_id', 'name', 'age', 'phone', 'email', 'type', 'work_unit.name'])->toArray();

        $data = array_merge($physc, $nurse);
        return view('hrd.pegawai_california', compact('title', 'data'));
    }
    public function pegawai_indonesia()
    {
        $title = 'HRD - Pegawai Cabang Indonesia MVCH Employee Management';
        $physc = Physicians::where('work_unit.branch.branch_country', 'Indonesia')->get(['employee_id', 'name', 'age', 'phone', 'email', 'type', 'work_unit.name'])->toArray();
        $nurse = Nurse::where('work_unit.branch.branch_country', 'Indonesia')->get(['employee_id', 'name', 'age', 'phone', 'email', 'type', 'work_unit.name'])->toArray();

        $data = array_merge($physc, $nurse);
        return view('hrd.pegawai_indonesia', compact('title', 'data'));
    }
    public function cuti_allcabang()
    {
        $title = 'HRD - Cuti Semua Cabang MVCH Employee Management';
        return view('hrd.cuti_allcabang', compact('title'));
    }
    public function cuti_colorado()
    {
        $title = 'HRD - Cuti Cabang Colorado MVCH Employee Management';
        return view('hrd.cuti_colorado', compact('title'));
    }
    public function cuti_california()
    {
        $title = 'HRD - Cuti Cabang California MVCH Employee Management';
        return view('hrd.cuti_california', compact('title'));
    }
    public function cuti_indonesia()
    {
        $title = 'HRD - Cuti Cabang Indonesia MVCH Employee Management';
        return view('hrd.cuti_indonesia', compact('title'));
    }
    public function laporan_histori()
    {
        $title = 'HRD - Laporan Histori Pemindahan Pegawai MVCH Employee Management';
        return view('hrd.laporan_histori', compact('title'));
    }
    public function laporan_jumlah_pegawai()
    {
        $title = 'HRD - Laporan Jumlah Pegawai MVCH Employee Management';
        return view('hrd.laporan_jumlah_pegawai', compact('title'));
    }
    public function laporan_presensi_pegawai()
    {
        $title = 'HRD - Laporan Presensi Pegawai MVCH Employee Management';
        return view('hrd.laporan_presensi_pegawai', compact('title'));
    }
    public function laporan_pengajuan_cuti()
    {
        $title = 'HRD - Laporan Pengajuan Cuti Pegawai MVCH Employee Management';
        return view('hrd.laporan_pengajuan_cuti', compact('title'));
    }
}
