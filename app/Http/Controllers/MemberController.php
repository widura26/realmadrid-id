<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class MemberController extends Controller
{
    public function card(){
        $user = Auth::user();
        return view('member.card', ['User' => $user]);
    }

    public function list(){
        // $user = User::all();
        // return view('member.listMember', $user);
        // $member = DB::select('select * from users');
        // return view('member.listMember', ['users' => $member]);
        $users = DB::table("users")->get();
        return view('member.listMember', ["users" => $users]);
    }
}
