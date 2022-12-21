<?php

namespace App\Http\Controllers;

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
        $physc = Physicians::where([
            'email' => $request->email,
            'password' => (int)$request->password
        ])->first();
        $nurse = Nurse::where([
            'email' => $request->email,
            'password' => (int)$request->password
        ])->first();
        $tech = Technician::where([
            'email' => $request->email,
            'password' => (int)$request->password
        ])->first();
        $staff = Staff::where([
            'email' => $request->email,
            'password' => (int)$request->password
        ])->first();
        $hrd = HRD::where([
            'email' => $request->email,
            'password' => (int)$request->password
        ])->first();
        $manager = Manager::where([
            'email' => $request->email,
            'password' => (int)$request->password
        ])->first();
        // dd($hrd);
        if ($physc) {
            Session::put('data', $physc);
            Session::put('login', 'Physician');
            return redirect()->intended('pegawai')->with('success', 'Berhasil Login');
        } elseif ($nurse) {
            Session::put('data', $nurse);
            Session::put('login', 'Nurse');
            return redirect()->intended('pegawai')->with('success', 'Berhasil Login');
        } elseif ($tech) {
            Session::put('data', $tech);
            Session::put('login', 'Technician');
            return redirect()->intended('pegawai')->with('success', 'Berhasil Login');
        } elseif ($staff) {
            Session::put('data', $staff);
            Session::put('login', 'Staff');
            return redirect()->intended('pegawai')->with('success', 'Berhasil Login');
        } elseif ($hrd) {
            Session::put('data', $hrd);
            Session::put('login', 'HRD');
            return redirect()->intended('hrd')->with('success', 'Berhasil Login');
        } elseif ($manager) {
            Session::put('data', $manager);
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
