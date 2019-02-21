<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SixRiversController extends Controller
{
    //
    public function index()
    {
        return view('admin.approval.index');
    }

    public function create(){
        return view('SixRivers.createoppo');
    }
}

