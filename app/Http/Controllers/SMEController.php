<?php

namespace App\Http\Controllers;

use App\Opportunity;
use App\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SMEController extends Controller
{
    //
    public function index(){
        $opports = Opportunity::orderBy('created_at', 'desc')->paginate(10);
        return view('sme.opportunity.index', compact('opports'));

    }

    public function approval()
    {
        return view('sme.approval.index');
    }

    public function show($id){
        $opport= Opportunity::find($id);
        $responses = Response::where('opportunity_id', $opport->id);


        return view('sme.opportunity.details', compact('opport', 'responses'));
    }
}
