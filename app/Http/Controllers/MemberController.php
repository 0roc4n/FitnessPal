<?php

namespace App\Http\Controllers;

use App\Models\Members;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index(){
        $members = Members::all();
        return view('members.show-members', compact('members'));
    }
}
