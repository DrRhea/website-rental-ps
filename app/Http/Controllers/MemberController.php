<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index ()
    {
        return view ('welcome');
    }

    public function store (Request $request)
    {
    $validatedData = $request->validate([
        'nama_member' => 'required',
        'no_hp_member' => 'required',
        'email_member' => 'required',
    ]);

    $member = Member::create([
        'nama_member' => $request->nama_member,
        'no_hp_member' => $request->no_hp_member,
        'email_member' => $request->email_member
    ]);

    }
}
