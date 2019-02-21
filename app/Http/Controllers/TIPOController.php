<?php

namespace App\Http\Controllers;

use App\Opportunity;
use App\TIPO;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TIPOController extends Controller
{
    //
//    public function index(){
//        $opports = Opportunity::where('poster_id','=', Auth::user()->id)->get();
//
//        return view('tipo.opportunity.index', compact('opports'));
//    }

    public function index(){
        $user = User::find(Auth::user()->id);
        $opports = $user->opportunity()->get();
        return view('tipo.opportunity.index', compact('opports'));
    }

    public function store (Request $request){
        Opportunity::create($request->all());
        return redirect()->route('tipo.opportunity.index');
    }

    public function show($id){
        $opport= Opportunity::find($id);

        return view('tipo.opportunity.details', compact('opport'));
    }
}
