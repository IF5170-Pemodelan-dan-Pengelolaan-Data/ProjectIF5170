<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\HRD;
use App\Models\Manager;
use App\Models\Nurse;
use App\Models\Physicians;
use App\Models\Staff;
use App\Models\Technician;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        $title = 'Login';
        return view('auth.index', compact('title'));
    }

    public function login(Request $request)
    {
        $employee = Employee::where([
            'email' => $request->email,
            'password' => (int)$request->password
        ])->first();
        // dd($hrd);
        if ($employee['type'] == 'Physicians') {
            Session::put('data', $employee);
            Session::put('login', 'Physician');
            return redirect()->intended('pegawai')->with('success', 'Berhasil Login');
        } elseif ($employee['type'] == 'Nurse') {
            Session::put('data', $employee);
            Session::put('login', 'Nurse');
            return redirect()->intended('pegawai')->with('success', 'Berhasil Login');
        } elseif ($employee['type'] == 'Technician') {
            Session::put('data', $employee);
            Session::put('login', 'technician');
            return redirect()->intended('pegawai')->with('success', 'Berhasil Login');
        } elseif ($employee['type'] == 'staff') {
            Session::put('data', $employee);
            Session::put('login', 'Staff');
            return redirect()->intended('pegawai')->with('success', 'Berhasil Login');
        } elseif ($employee['type'] == 'hrd') {
            Session::put('data', $employee);
            Session::put('login', 'HRD');
            return redirect()->intended('hrd')->with('success', 'Berhasil Login');
        } elseif ($employee['type'] == 'branch manager') {
            Session::put('data', $employee);
            Session::put('login', 'Manager');
            return redirect()->intended('manager')->with('success', 'Berhasil Login');
        } else {
            return redirect()->back()->with('danger', 'Email / Password Salah');
        }
    }

    public function logout()
    {
        Session::flush();
        return redirect()->route('login')->with('logout-success', 'Kamu berhasil Keluar');
    }
}
