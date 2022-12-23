<?php

namespace App\Http\Controllers;

use App\Models\Manager;
use App\Models\Nurse;
use App\Models\Physicians;
use App\Models\Staff;
use App\Models\Technician;
use Illuminate\Http\Request;
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
            $title = 'Dashboard';
            return view('pegawai.cuti', compact('title'));
        } else {
            return redirect()->route('login')->with('logout', 'You are not authenticated');
        }
    }
    public function profil()
    {
        if (Session::has('data')) {
            $title = 'Dashboard';
            $data = Session::get('data');
            // dd($data);
            return view('pegawai.profil', compact('title', 'data'));
        } else {
            return redirect()->route('login')->with('logout', 'You are not authenticated');
        }
    }
}
