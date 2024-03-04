<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function index(){
        $plans = Plan::all();
        return view('plans.plans', compact(['plans']));
    }

    public function store(Request $request){
        Plan::create([
            'plan_name' => $request->input('plan_name'),
            'plan_desc' => $request->input('plan_desc'),
            'validity' => $request->input('validity'),
            'fee' => $request->input('fee')
        ]);
        return redirect('/plans') ->with('flash_mssg', 'Plan created success!');
    }
}
