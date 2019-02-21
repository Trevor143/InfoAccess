<?php

namespace App\Http\Controllers;

use App\Opportunity;
use App\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OpportunityController extends Controller
{
    public function store (Request $request){
        Opportunity::create($request->all());
        return redirect()->route('admin.opportunity.index');
    }

    public function index(){
        $opports = Opportunity::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.opportunity.index', compact('opports'));
    }

    public function create(){
        $user_id = Auth::user()->id;
        $user_name = Auth::user()->name;
        return view('admin.opportunity.create', compact('user_id','user_name'));
    }

//    public function details($id){
//        $opports = Opportunity::find($id)->with('responses');
//        $responses = Response::where('ref_id', '=', $opports->id);
//
//        return view('tipo.opportunity.details', compact('opports','responses'));
//    }

    public function respond(){

    }
}
