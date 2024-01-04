<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Member;

class MemberController extends Controller
{
    public function index()
    {
        return view('pages.members', [
            'members' => Member::all(),
        ]);
    }

    public function show(Member $member)
    {
        return view('pages.member', [
            'member' => $member,
        ]);
    }
}
