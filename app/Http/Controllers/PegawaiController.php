<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
        $title = 'Dashboard';
        return view('pegawai.index', compact('title'));
    }
    public function cuti()
    {
        $title = 'Dashboard';
        return view('pegawai.cuti', compact('title'));
    }
    public function profil()
    {
        $title = 'Dashboard';
        return view('pegawai.profil', compact('title'));
    }
}
