<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::all();

        return response()->json($members);
    }

    public function show($id)
    {
        $member = Member::find($id);

        return response()->json($member);
    }
}
