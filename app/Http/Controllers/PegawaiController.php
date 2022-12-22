<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class PegawaiController extends Controller
{
    public function index()
    {
        if (Session::has('data')) {
            $title = 'Dashboard';
            return view('pegawai.index', compact('title'));
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
            return view('pegawai.profil', compact('title'));
        } else {
            return redirect()->route('login')->with('logout', 'You are not authenticated');
        }
    }
}
