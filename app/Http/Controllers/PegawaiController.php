<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
        $title = 'Data Pegawai';
        return view('pegawai.index', compact('title'));
    }
}
