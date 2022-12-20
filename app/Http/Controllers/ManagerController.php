<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function index()
    {
        $title = 'Manager';
        return view('manager.index', compact('title'));
    }
}
