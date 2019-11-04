<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::all();

        return view('admin.member.index')->with(compact('members'));
    }

    public function show($id)
    {
        $member = Member::find($id);

        return response()->json($member);
    }
}
