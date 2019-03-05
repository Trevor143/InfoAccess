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

    public function store(Request $request)
    {
        //
//        $resCheck = Response::all();
//
//        if($resCheck->opportunity_id == $request->ref_id && $resCheck->org_id == $request->org_id){
//            return $this->show($request->ref_id);
//        }
//        else {
            $response = new Response();

            $response->opportunity_id = $request->ref_id;
            $response->org_id = $request->org_id;
            $response->intro = "New words to introduce";

            $response->save();
            $opports = Opportunity::orderBy('created_at', 'desc')->paginate(10);

            return view('sme.opportunity.index', compact('opports'))->withMessage('Expressed Interest');
//            return $this->index();
//        }

    }
}
