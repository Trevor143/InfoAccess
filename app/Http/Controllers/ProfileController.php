<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function tipo(){
        return view('tipo.profile');
    }

    public function sme(){
        return view('sme.profile');
    }
}
