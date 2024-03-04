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

    public function addmember(){
        return view('members.add-members');
    }
    public function store(Request $request){
        $members = Members::create([
            'name' =>$request->input('name'),
            'birtday' => $request->input('birthday'),
            'age' => $request->input('age'),
            'address' =>$request->input('address'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'gender' => $request->input('gender'),
            'plan' => $request->input('plan'),
            'height' => $request->input('height'),
            'weight' => $request->input('weight')
        ]);
        return redirect()->back()->with('flash_mssg', 'Member Added Success!');
    }
}
