<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Employee;
use App\Models\Manager;
use App\Models\Nurse;
use App\Models\Physicians;
use App\Models\Staff;
use App\Models\Technician;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use UnexpectedValueException;

class HRDController extends Controller
{
    public function index()
    {
        if (Session::has('data')) {
            $title = 'HRD - MVCH Employee Management';
            $branch = Branch::raw(function ($collection) {
                return $collection->aggregate(array(
                    array(
                        '$unwind' => '$employee_statistics'
                    ),
                    array(
                        '$group' => array(
                            '_id' => array(
                                'month' => '$employee_statistics.month',
                                'year' => '$employee_statistics.year'
                            ),
                            'physicians' => array(
                                '$avg' => '$employee_statistics.physicians'
                            ),
                            'nurse' => array(
                                '$avg' => '$employee_statistics.nurse'
                            ),
                            'staff' => array(
                                '$avg' => '$employee_statistics.staff'
                            ),
                            'technicians' => array(
                                '$avg' => '$employee_statistics.technicians'
                            ),

                        )
                    )
                ));
            })->toArray();
            // dd($branch);
            return view('hrd.index', compact('title', 'branch'));
        } else {
            return redirect()->route('login')->with('logout', 'You are not authenticated');
        }
    }

    public function pegawai_allcabang()
    {
        if (Session::has('data')) {
            $title = 'HRD - Pegawai Semua Cabang MVCH Employee Management';
            $data = Employee::get([
                '_id', 'name', 'age', 'phone',
                'email', 'type', 'work_unit.name', 'work_unit.branch.branch_country'
            ])->toArray();
            // dd($data);
            return view('hrd.pegawai_allcabang', compact('title', 'data'));
        } else {
            return redirect()->route('login')->with('logout', 'You are not authenticated');
        }
    }
    public function pegawai_colorado()
    {
        if (Session::has('data')) {
            $title = 'HRD - Pegawai Cabang Colorado MVCH Employee Management';
            $data = Employee::where('work_unit.branch.branch_country', 'Colorado')->get([
                '_id', 'name', 'age', 'phone',
                'email', 'type', 'work_unit.name', 'work_unit.branch.branch_country'
            ])->toArray();
            return view('hrd.pegawai_colorado', compact('title', 'data'));
        } else {
            return redirect()->route('login')->with('logout', 'You are not authenticated');
        }
    }
    public function pegawai_california()
    {
        if (Session::has('data')) {
            $title = 'HRD - Pegawai Cabang California MVCH Employee Management';
            $data = Employee::where('work_unit.branch.branch_country', 'California')->get([
                '_id', 'name', 'age', 'phone',
                'email', 'type', 'work_unit.name', 'work_unit.branch.branch_country'
            ])->toArray();
            return view('hrd.pegawai_california', compact('title', 'data'));
        } else {
            return redirect()->route('login')->with('logout', 'You are not authenticated');
        }
    }
    public function pegawai_indonesia()
    {
        if (Session::has('data')) {
            $title = 'HRD - Pegawai Cabang Indonesia MVCH Employee Management';
            $data = Employee::where('work_unit.branch.branch_country', 'Indonesia')->get([
                '_id', 'name', 'age', 'phone',
                'email', 'type', 'work_unit.name', 'work_unit.branch.branch_country'
            ])->toArray();
            return view('hrd.pegawai_indonesia', compact('title', 'data'));
        } else {
            return redirect()->route('login')->with('logout', 'You are not authenticated');
        }
    }
    public function cuti_allcabang()
    {
        if (Session::has('data')) {
            $title = 'HRD - Cuti Semua Cabang MVCH Employee Management';
            $physc = Physicians::get([
                'employee_id', 'name', 'leave', 'work_unit.branch.branch_country'
            ])->toArray();
            $nurse = Nurse::get([
                'employee_id', 'name', 'leave', 'work_unit.branch.branch_country'
            ])->toArray();
            $tech = Technician::get([
                'employee_id', 'name', 'leave', 'work_unit.branch.branch_country'
            ])->toArray();
            $staff = Staff::get([
                'employee_id', 'name', 'leave', 'work_unit.branch.branch_country'
            ])->toArray();

            $data = array_merge($physc, $nurse, $tech, $staff);
            return view('hrd.cuti_allcabang', compact('title', 'data'));
        } else {
            return redirect()->route('login')->with('logout', 'You are not authenticated');
        }
    }
    public function cuti_colorado()
    {
        if (Session::has('data')) {
            $title = 'HRD - Cuti Cabang Colorado MVCH Employee Management';
            $physc = Physicians::where('work_unit.branch.branch_country', 'Colorado')->get([
                'employee_id', 'name', 'leave', 'work_unit.branch.branch_country'
            ])->toArray();
            $nurse = Nurse::where('work_unit.branch.branch_country', 'Colorado')->get([
                'employee_id', 'name', 'leave', 'work_unit.branch.branch_country'
            ])->toArray();
            $tech = Technician::where('work_unit.branch.branch_country', 'Colorado')->get([
                'employee_id', 'name', 'leave', 'work_unit.branch.branch_country'
            ])->toArray();
            $staff = Staff::where('work_unit.branch.branch_country', 'Colorado')->get([
                'employee_id', 'name', 'leave', 'work_unit.branch.branch_country'
            ])->toArray();

            $data = array_merge($physc, $nurse, $tech, $staff);
            return view('hrd.cuti_colorado', compact('title', 'data'));
        } else {
            return redirect()->route('login')->with('logout', 'You are not authenticated');
        }
    }
    public function cuti_california()
    {
        if (Session::has('data')) {
            $title = 'HRD - Cuti Cabang California MVCH Employee Management';
            $physc = Physicians::where('work_unit.branch.branch_country', 'California')->get([
                'employee_id', 'name', 'leave', 'work_unit.branch.branch_country'
            ])->toArray();
            $nurse = Nurse::where('work_unit.branch.branch_country', 'California')->get([
                'employee_id', 'name', 'leave', 'work_unit.branch.branch_country'
            ])->toArray();
            $tech = Technician::where('work_unit.branch.branch_country', 'California')->get([
                'employee_id', 'name', 'leave', 'work_unit.branch.branch_country'
            ])->toArray();
            $staff = Staff::where('work_unit.branch.branch_country', 'California')->get([
                'employee_id', 'name', 'leave', 'work_unit.branch.branch_country'
            ])->toArray();

            $data = array_merge($physc, $nurse, $tech, $staff);
            return view('hrd.cuti_california', compact('title', 'data'));
        } else {
            return redirect()->route('login')->with('logout', 'You are not authenticated');
        }
    }
    public function cuti_indonesia()
    {
        if (Session::has('data')) {
            $title = 'HRD - Cuti Cabang Indonesia MVCH Employee Management';
            $physc = Physicians::where('work_unit.branch.branch_country', 'Indonesia')->get([
                'employee_id', 'name', 'leave', 'work_unit.branch.branch_country'
            ])->toArray();
            $nurse = Nurse::where('work_unit.branch.branch_country', 'Indonesia')->get([
                'employee_id', 'name', 'leave', 'work_unit.branch.branch_country'
            ])->toArray();
            $tech = Technician::where('work_unit.branch.branch_country', 'Indonesia')->get([
                'employee_id', 'name', 'leave', 'work_unit.branch.branch_country'
            ])->toArray();
            $staff = Staff::where('work_unit.branch.branch_country', 'Indonesia')->get([
                'employee_id', 'name', 'leave', 'work_unit.branch.branch_country'
            ])->toArray();

            $data = array_merge($physc, $nurse, $tech, $staff);
            return view('hrd.cuti_indonesia', compact('title', 'data'));
        } else {
            return redirect()->route('login')->with('logout', 'You are not authenticated');
        }
    }
    public function laporan_histori()
    {
        if (Session::has('data')) {
            $title = 'HRD - Laporan Histori Pemindahan Pegawai MVCH Employee Management';
            $physc = Physicians::get([
                'employee_id', 'name', 'placement_history'
            ])->toArray();
            $nurse = Nurse::get([
                'employee_id', 'name', 'placement_history'
            ])->toArray();
            $tech = Technician::get([
                'employee_id', 'name', 'placement_history'
            ])->toArray();
            $staff = Staff::get([
                'employee_id', 'name', 'placement_history'
            ])->toArray();
            $manager = Manager::get([
                'employee_id', 'name', 'placement_history'
            ])->toArray();

            $data = array_merge($physc, $nurse, $tech, $staff, $manager);
            // dd($em)
            return view('hrd.laporan_histori', compact('title', 'data'));
        } else {
            return redirect()->route('login')->with('logout', 'You are not authenticated');
        }
    }
    public function laporan_jumlah_pegawai()
    {
        if (Session::has('data')) {
            $title = 'HRD - Laporan Jumlah Pegawai MVCH Employee Management';

            return view('hrd.laporan_jumlah_pegawai', compact('title'));
        } else {
            return redirect()->route('login')->with('logout', 'You are not authenticated');
        }
    }
    public function laporan_presensi_pegawai()
    {
        if (Session::has('data')) {
            $title = 'HRD - Laporan Presensi Pegawai MVCH Employee Management';
            $physc = Physicians::get([
                'employee_id', 'name', 'attendance', 'work_unit.name', 'work_unit.branch.branch_country'
            ])->toArray();
            $nurse = Nurse::get([
                'employee_id', 'name', 'attendance', 'work_unit.name', 'work_unit.branch.branch_country'
            ])->toArray();
            $tech = Technician::get([
                'employee_id', 'name', 'attendance', 'work_unit.name', 'work_unit.branch.branch_country'
            ])->toArray();
            $staff = Staff::get([
                'employee_id', 'name', 'attendance', 'work_unit.name', 'work_unit.branch.branch_country'
            ])->toArray();
            $manager = Manager::get([
                'employee_id', 'name', 'attendance', 'work_unit.name', 'work_unit.branch.branch_country'
            ])->toArray();

            $data = array_merge($physc, $nurse, $tech, $staff, $manager);
            return view('hrd.laporan_presensi_pegawai', compact('title', 'data'));
        } else {
            return redirect()->route('login')->with('logout', 'You are not authenticated');
        }
    }
    public function laporan_pengajuan_cuti()
    {
        if (Session::has('data')) {
            $title = 'HRD - Laporan Pengajuan Cuti Pegawai MVCH Employee Management';
            $physc = Physicians::get([
                'employee_id', 'name', 'leave', 'work_unit.branch.branch_country'
            ])->toArray();
            $nurse = Nurse::get([
                'employee_id', 'name', 'leave', 'work_unit.branch.branch_country'
            ])->toArray();
            $tech = Technician::get([
                'employee_id', 'name', 'leave', 'work_unit.branch.branch_country'
            ])->toArray();
            $staff = Staff::get([
                'employee_id', 'name', 'leave', 'work_unit.branch.branch_country'
            ])->toArray();

            $data = array_merge($physc, $nurse, $tech, $staff);
            return view('hrd.laporan_pengajuan_cuti', compact('title', 'data'));
        } else {
            return redirect()->route('login')->with('logout', 'You are not authenticated');
        }
    }
}
