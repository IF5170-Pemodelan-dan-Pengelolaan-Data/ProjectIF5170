<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Employee;
use App\Models\Leave;
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
            $value_pegawai = Employee::raw(function ($collection) {
                return $collection->aggregate(array(
                    array(
                        '$group' => array(
                            '_id' => '$employee.type',
                            'count' => array('$sum' => 1)
                        )
                    )
                ));
            })->toArray();
            $data = [
                'total_pegawai' => $value_pegawai
            ];
            return view('manager.index', compact('title', 'data'));
        } else {
            return redirect()->route('login')->with('logout', 'You are not authenticated');
        }
    }

    public function getJumlahPegawai()
    {
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
        $labels = [];
        $values = [];
        foreach ($branch as $b) {
            array_push($labels, $b['_id']['month']);
            array_push($values, round(($b['physicians'] + $b['nurse'] + $b['staff'] + $b['technicians']) / 4));
        }
        return response()->json(['labels' => $labels, 'values' => $values]);
    }
    public function getJumlahProfesi()
    {
        $branch = Employee::raw(function ($collection) {
            return $collection->aggregate(array(
                array(
                    '$group' => array(
                        '_id' => '$type',
                        'count' => array('$sum' => 1)
                    )
                )
            ));
        })->toArray();
        // dd($branch);
        $labels = [];
        $values = [];
        foreach ($branch as $b) {
            array_push($labels, $b['_id']);
            array_push($values, $b['count']);
        }
        return response()->json(['labels' => $labels, 'values' => $values]);
    }

    public function pegawai_mycabang()
    {
        if (Session::has('data')) {
            $title = 'Manager - Pegawai MVCH Employee Management';
            $data = Employee::where(
                'work_unit.branch.branch_country',
                Session::get('data')['work_unit']['branch']['branch_country']
            )->get([
                '_id', 'name', 'age', 'phone',
                'email', 'type', 'work_unit.name', 'work_unit.branch.branch_country'
            ])->toArray();
            return view('manager.pegawai_mycabang', compact('title', 'data'));
        } else {
            return redirect()->route('login')->with('logout', 'You are not authenticated');
        }
    }

    public function cuti_mycabang()
    {
        if (Session::has('data')) {
            $title = 'Manager - Cuti MVCH Employee Management';
            $data = Employee::with(['leave'])->where('work_unit.branch.branch_country', Session::get('data')['work_unit']['branch']['branch_country'])->get([
                '_id', 'name', 'work_unit.branch.branch_country'
            ])->toArray();
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
            return view('manager.laporan_jumlah_pegawai', compact('title', 'branch'));
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
            $data = Employee::with(['leave'])->where('work_unit.branch.branch_country', Session::get('data')['work_unit']['branch']['branch_country'])->get([
                '_id', 'name', 'work_unit.branch.branch_country'
            ])->toArray();
            return view('manager.laporan_pengajuan_cuti', compact('title', 'data'));
        } else {
            return redirect()->route('login')->with('logout', 'You are not authenticated');
        }
    }

    public function appr_cuti($id)
    {
        if (Session::has('data')) {
            $query = Leave::where('_id', $id)->update(['approval_status' => 'approved']);
            if ($query) {
                return redirect()->back()->with('success', 'Berhasil Approve Cuti');
            } else {
                return redirect()->back()->with('danger', 'Gagal Approve Cuti');
            }
        } else {
            return redirect()->route('login')->with('logout', 'You are not authenticated');
        }
    }
    public function dec_cuti($id)
    {
        if (Session::has('data')) {
            $query = Leave::where('_id', $id)->update(['approval_status' => "not approved"]);
            // dd($query);
            if ($query) {
                return redirect()->back()->with('success', 'Berhasil Decline Cuti');
            } else {
                return redirect()->back()->with('danger', 'Gagal Approve Cuti');
            }
        } else {
            return redirect()->route('login')->with('logout', 'You are not authenticated');
        }
    }
}
