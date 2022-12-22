<?php

namespace App\Http\Controllers;

use App\Models\Manager;
use App\Models\Nurse;
use App\Models\Physicians;
use App\Models\Staff;
use App\Models\Technician;
use Session;
use Illuminate\Http\Request;

class ManagerController extends Controller
{

    public function index()
    {
        if (Session::has('data')) {
            $title = 'Manager - MVCH Employee Management';
            return view('manager.index', compact('title'));
        } else {
            return redirect()->route('login')->with('logout', 'You are not authenticated');
        }
    }

    public function pegawai_mycabang()
    {
        if (Session::has('data')) {
            $title = 'Manager - Pegawai MVCH Employee Management';
            $physc = Physicians::where(
                'work_unit.branch.branch_country',
                Session::get('data')['work_unit']['branch']['branch_country']
            )->get([
                'employee_id', 'name', 'age', 'phone',
                'email', 'type', 'work_unit.name', 'work_unit.branch.branch_country'
            ])->toArray();
            $nurse = Nurse::where(
                'work_unit.branch.branch_country',
                Session::get('data')['work_unit']['branch']['branch_country']
            )->get([
                'employee_id', 'name', 'age', 'phone', 'email', 'type', 'work_unit.name', 'work_unit.branch.branch_country'
            ])->toArray();
            $tech = Technician::where(
                'work_unit.branch.branch_country',
                Session::get('data')['work_unit']['branch']['branch_country']
            )->get([
                'employee_id', 'name', 'age', 'phone', 'email', 'type', 'work_unit.name', 'work_unit.branch.branch_country'
            ])->toArray();
            $staff = Staff::where(
                'work_unit.branch.branch_country',
                Session::get('data')['work_unit']['branch']['branch_country']
            )->get([
                'employee_id', 'name', 'age', 'phone', 'email', 'type', 'work_unit.name', 'work_unit.branch.branch_country'
            ])->toArray();
            $manager = Manager::where(
                'work_unit.branch.branch_country',
                Session::get('data')['work_unit']['branch']['branch_country']
            )->get([
                'employee_id', 'name', 'age', 'phone', 'email', 'type', 'work_unit.name', 'work_unit.branch.branch_country'
            ])->toArray();

            $data = array_merge($physc, $nurse, $tech, $staff, $manager);
            return view('manager.pegawai_mycabang', compact('title', 'data'));
        } else {
            return redirect()->route('login')->with('logout', 'You are not authenticated');
        }
    }

    public function cuti_mycabang()
    {
        if (Session::has('data')) {
            $title = 'Manager - Cuti MVCH Employee Management';
            $physc = Physicians::where('work_unit.branch.branch_country', Session::get('data')['work_unit']['branch']['branch_country'])->get([
                'employee_id', 'name', 'leave', 'work_unit.branch.branch_country'
            ])->toArray();
            $nurse = Nurse::where('work_unit.branch.branch_country', Session::get('data')['work_unit']['branch']['branch_country'])->get([
                'employee_id', 'name', 'leave', 'work_unit.branch.branch_country'
            ])->toArray();
            $tech = Technician::where('work_unit.branch.branch_country', Session::get('data')['work_unit']['branch']['branch_country'])->get([
                'employee_id', 'name', 'leave', 'work_unit.branch.branch_country'
            ])->toArray();
            $staff = Staff::where('work_unit.branch.branch_country', Session::get('data')['work_unit']['branch']['branch_country'])->get([
                'employee_id', 'name', 'leave', 'work_unit.branch.branch_country'
            ])->toArray();

            $data = array_merge($physc, $nurse, $tech, $staff);
            return view('manager.cuti_mycabang', compact('title', 'data'));
        } else {
            return redirect()->route('login')->with('logout', 'You are not authenticated');
        }
    }
    public function laporan_histori()
    {
        if (Session::has('data')) {
            $title = 'Manager - Laporan Histori Pemindahan Pegawai MVCH Employee Management';
            $physc = Physicians::where('work_unit.branch.branch_country', Session::get('data')['work_unit']['branch']['branch_country'])->get([
                'employee_id', 'name', 'placement_history'
            ])->toArray();
            $nurse = Nurse::where('work_unit.branch.branch_country', Session::get('data')['work_unit']['branch']['branch_country'])->get([
                'employee_id', 'name', 'placement_history'
            ])->toArray();
            $tech = Technician::where('work_unit.branch.branch_country', Session::get('data')['work_unit']['branch']['branch_country'])->get([
                'employee_id', 'name', 'placement_history'
            ])->toArray();
            $staff = Staff::where('work_unit.branch.branch_country', Session::get('data')['work_unit']['branch']['branch_country'])->get([
                'employee_id', 'name', 'placement_history'
            ])->toArray();
            $manager = Manager::where('work_unit.branch.branch_country', Session::get('data')['work_unit']['branch']['branch_country'])->get([
                'employee_id', 'name', 'placement_history'
            ])->toArray();

            $data = array_merge($physc, $nurse, $tech, $staff, $manager);
            return view('manager.laporan_histori', compact('title', 'data'));
        } else {
            return redirect()->route('login')->with('logout', 'You are not authenticated');
        }
    }
    public function laporan_jumlah_pegawai()
    {
        if (Session::has('data')) {
            $title = 'Manager - Laporan Jumlah Pegawai MVCH Employee Management';
            return view('manager.laporan_jumlah_pegawai', compact('title'));
        } else {
            return redirect()->route('login')->with('logout', 'You are not authenticated');
        }
    }
    public function laporan_presensi_pegawai()
    {
        if (Session::has('data')) {
            $title = 'Manager - Laporan Presensi Pegawai MVCH Employee Management';
            $physc = Physicians::where('work_unit.branch.branch_country', Session::get('data')['work_unit']['branch']['branch_country'])->get([
                'employee_id', 'name', 'attendance', 'work_unit.name', 'work_unit.branch.branch_country'
            ])->toArray();
            $nurse = Nurse::where('work_unit.branch.branch_country', Session::get('data')['work_unit']['branch']['branch_country'])->get([
                'employee_id', 'name', 'attendance', 'work_unit.name', 'work_unit.branch.branch_country'
            ])->toArray();
            $tech = Technician::where('work_unit.branch.branch_country', Session::get('data')['work_unit']['branch']['branch_country'])->get([
                'employee_id', 'name', 'attendance', 'work_unit.name', 'work_unit.branch.branch_country'
            ])->toArray();
            $staff = Staff::where('work_unit.branch.branch_country', Session::get('data')['work_unit']['branch']['branch_country'])->get([
                'employee_id', 'name', 'attendance', 'work_unit.name', 'work_unit.branch.branch_country'
            ])->toArray();
            $manager = Manager::where('work_unit.branch.branch_country', Session::get('data')['work_unit']['branch']['branch_country'])->get([
                'employee_id', 'name', 'attendance', 'work_unit.name', 'work_unit.branch.branch_country'
            ])->toArray();

            $data = array_merge($physc, $nurse, $tech, $staff, $manager);
            return view('manager.laporan_presensi_pegawai', compact('title', 'data'));
        } else {
            return redirect()->route('login')->with('logout', 'You are not authenticated');
        }
    }
    public function laporan_pengajuan_cuti()
    {
        if (Session::has('data')) {
            $title = 'Manager - Laporan Pengajuan Cuti Pegawai MVCH Employee Management';
            $physc = Physicians::where('work_unit.branch.branch_country', Session::get('data')['work_unit']['branch']['branch_country'])->get([
                'employee_id', 'name', 'leave', 'work_unit.branch.branch_country'
            ])->toArray();
            $nurse = Nurse::where('work_unit.branch.branch_country', Session::get('data')['work_unit']['branch']['branch_country'])->get([
                'employee_id', 'name', 'leave', 'work_unit.branch.branch_country'
            ])->toArray();
            $tech = Technician::where('work_unit.branch.branch_country', Session::get('data')['work_unit']['branch']['branch_country'])->get([
                'employee_id', 'name', 'leave', 'work_unit.branch.branch_country'
            ])->toArray();
            $staff = Staff::where('work_unit.branch.branch_country', Session::get('data')['work_unit']['branch']['branch_country'])->get([
                'employee_id', 'name', 'leave', 'work_unit.branch.branch_country'
            ])->toArray();

            $data = array_merge($physc, $nurse, $tech, $staff);
            return view('manager.laporan_pengajuan_cuti', compact('title', 'data'));
        } else {
            return redirect()->route('login')->with('logout', 'You are not authenticated');
        }
    }
}
