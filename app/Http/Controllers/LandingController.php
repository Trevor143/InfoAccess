<?php

namespace App\Http\Controllers;

use App\Opportunity;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    //
    public function landing(){
        $opports = Opportunity::paginate(10);
        return view('landing', compact('opports'));
    }
}
