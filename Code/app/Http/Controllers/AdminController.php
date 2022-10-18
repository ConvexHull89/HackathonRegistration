<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\User;

class AdminController extends Controller
{
    public function home(){
        $users = User::all();
        return view('adminparticipant', compact('users'));
    }

    public function payment(){
        $users = User::all();
        return view('adminpayment', compact('users'));
    }

    public function view($id){
        $user = User::FindOrFail($id);
        $members = Member::all();
        return view('view', compact('user', 'members'));
    }

    public function edit($id){
        $user = User::FindOrFail($id);
        return view('edit', compact('user'));
    }

    public function store(Request $request, $id){
        $request->validate([
            'email_leader' => 'unique:users,email_leader,' . $id,
            'wa_num' => 'unique:users,wa_num,' . $id,
            'line_id' => 'unique:users,line_id,' . $id
        ]);
        
        User::FindOrFail($id)->update([
            'email_leader' => $request->email_leader,
            'fullname' => $request->full_name,
            'wa_num' => $request->wa_num,
            'line_id' => $request->line_id,
            'github' => $request->github,
            'birth_place' => $request->birth_place,
            'birth_day' => $request->birth_day,
        ]);

        return back();
    }

    public function storemember(Request $request, $id){
        Member::FindOrFail($id)->update([
            'email_member' => $request->email,
            'fullname' => $request->full_name,
            'wa_num' => $request->wa_num,
            'line_id' => $request->line_id,
            'github' => $request->github,
            'birth_place' => $request->birth_place,
            'birth_day' => $request->birth_day,
        ]);

        return back();
    }

    public function destroy($id){
        User::destroy($id);
        return back();
    }

    public function approve($id){
        User::FindOrFail($id)->update([
            'payment_confirmation' => 'approved'
        ]);
        return back();
    }

    public function reject($id){
        User::FindOrFail($id)->update([
            'payment_confirmation' => 'rejected'
        ]);
        return back();
    }
}