<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Leave;
use App\Models\Manager;
use App\Models\Nurse;
use App\Models\Physicians;
use App\Models\Staff;
use App\Models\Technician;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class PegawaiController extends Controller
{
    public function index()
    {
        if (Session::has('data')) {
            $title = 'Dashboard';
            $empl = Session::get('data');
            $data = [];
            if ($empl['type'] == "staff") {
                $data = Staff::where('employee_id', $empl['_id'])->get([
                    'employee_id', 'name', 'attendance', 'work_unit.name', 'work_unit.branch.branch_country'
                ])->first();
            } elseif ($empl['type'] == "Physicians") {
                $data = Physicians::where('employee_id', $empl['_id'])->get([
                    'employee_id', 'name', 'attendance', 'work_unit.name', 'work_unit.branch.branch_country'
                ])->first();
            } elseif ($empl['type'] == "Nurse") {
                $data = Nurse::where('employee_id', $empl['_id'])->get([
                    'employee_id', 'name', 'attendance', 'work_unit.name', 'work_unit.branch.branch_country'
                ])->first();
            } elseif ($empl['type'] == "technician") {
                $data = Technician::where('employee_id', $empl['_id'])->get([
                    'employee_id', 'name', 'attendance', 'work_unit.name', 'work_unit.branch.branch_country'
                ])->first();
            } elseif ($empl['type'] == "branch manager") {
                $manager = Manager::where('employee_id', $empl['_id'])->get([
                    'employee_id', 'name', 'attendance', 'work_unit.name', 'work_unit.branch.branch_country'
                ])->first();
            }
            // dd($data['attendance']);

            return view('pegawai.index', compact('title', 'data'));
        } else {
            return redirect()->route('login')->with('logout', 'You are not authenticated');
        }
    }
    public function cuti()
    {
        if (Session::has('data')) {
            $title = 'Data Cuti';
            $empl = Session::get('data');
            $data = Employee::where('_id', $empl['_id'])->first();
            // dd($data->leave);
            return view('pegawai.cuti', compact('title', 'data'));
        } else {
            return redirect()->route('login')->with('logout', 'You are not authenticated');
        }
    }
    public function profil()
    {
        if (Session::has('data')) {
            $title = 'Profil';
            $data = Session::get('data');
            // dd($data);
            return view('pegawai.profil', compact('title', 'data'));
        } else {
            return redirect()->route('login')->with('logout', 'You are not authenticated');
        }
    }

    public function store_cuti(Request $request, $employee_id)
    {
        // dd($employee_id);
        $data = Employee::where('_id', (int)($employee_id))->first();
        $l =  Leave::orderBy('_id', 'desc')->first();
        // dd($l['_id'] + 1);
        $insertArray = [
            '_id' => $l['_id'] + 1,
            'request_date' => date('Y-m-d'),
            'date_from' => Carbon::parse($request->get('date_from'))->translatedFormat('Y-m-d'),
            'date_to' => Carbon::parse($request->get('date_to'))->translatedFormat('Y-m-d'),
            'employee_id' => (int)($employee_id),
            'branch_manager_id' => $data['work_unit']['branch']['branch_id'],
            'type' => $request->get('type'),
            'approval_status' => null,
        ];
        DB::collection('leave')->insert($insertArray);
        // dd($insertid);
        // $leave = new Leave();
        // $leave->_id = $l['_id'] + 1;
        // $leave->request_date = date('Y-m-d');
        // $leave->date_from = Carbon::parse($request->get('date_from'))->translatedFormat('Y-m-d');
        // $leave->date_to = Carbon::parse($request->get('date_to'))->translatedFormat('Y-m-d');
        // $leave->branch_manager_id = $data['work_unit']['branch']['branch_id'];
        // $leave->type = $request->get('type');
        // $leave->approval_status = null;
        // $leave->save();
        return redirect()->back()->with('success', 'Cuti berhasil ditambahkan');
    }
}
