<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
//        $users = User::all();
        $users = User::where('id', '!=', auth()->id())->get();
        return view('admin.approval.users', compact('users'));
    }

    public function show($id){
        $user = User::find($id);
        return view('admin.approval.approve', compact('user'));
    }

    public function approve($user_id)
    {
        $user = User::findOrFail($user_id);
        $user->update(['approved_at' => now()]);
        $user->update(['deactivated_at' => NULL]);


        return redirect()->route('admin.approval.index')->withMessage('User approved successfully');
    }

    public function deactivate($user_id)
    {
        $user = User::findOrFail($user_id);
        $user->update(['deactivated_at' => now()]);
        $user->update(['approved_at' => NULL]);


        return redirect()->route('admin.approval.index')->withMessage('User deactivated successfully');
    }

}
