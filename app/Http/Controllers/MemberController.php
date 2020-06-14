<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;

class MemberController extends Controller
{
    //
    public function create()
    {   
        return view('member.create');
    }
    public function create1(Request $request)
    {   
        $request->validate([
            'Account' => 'required|unique:members|max:255'
        ]);

        $member = Member::create($request->all()); 
        return view('member.create');
    }

    public function delete()
    {
        $members = Member::all();
        return view('member.delete', [
            'members' => $members
        ]);
    }
    public function destroy(Request $request, Member $member)
    {
        $member->delete();
        return view('member.create');
    }
    public function change()
    {
        $members = Member::all();
        return view('member.change', [
            'members' => $members
        ]);
    }
    public function change1(Request $request, Member $member)
    {   
        dd($member);
    }
    public function login()
    {
        $members = Member::all();
        return view('member.login', [
            'members' => $members
        ]);
    }
}
