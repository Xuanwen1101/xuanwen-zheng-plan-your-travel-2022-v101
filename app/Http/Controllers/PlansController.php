<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use App\Models\Plan;
use App\Models\Place;

class PlansController extends Controller
{
    public function list()
    {
        return view('plans.list', [
            'plans' => Plan::all(),
            'places' => Place::all(),
        ]);
    }

    public function addForm()
    {
        return view('plans.add');
    }
    
    public function add()
    {

        $attributes = request()->validate([
            'plan_name' => 'required',
            'trans_type' => 'required',
            'departure' => 'required',
            'destination' => 'required',
            'note' => 'nullable',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        $plan = new Plan();
        $plan->plan_name = $attributes['plan_name'];
        $plan->trans_type = $attributes['trans_type'];
        $plan->departure = $attributes['departure'];
        $plan->destination = $attributes['destination'];
        $plan->note = $attributes['note'];
        $plan->start_date = $attributes['start_date'];
        $plan->end_date = $attributes['end_date'];
        $plan->user_id = Auth::user()->id;

        $plan->save();

        return redirect('/console/plans/list')
            ->with('message', 'Plan has been added!');
    }

    public function editForm(Plan $plan)
    {
        return view('plans.edit', [
            'plan' => $plan,
        ]);
    }

    public function edit(Plan $plan)
    {

        $attributes = request()->validate([
            'plan_name' => 'required',
            'trans_type' => 'required',
            'departure' => 'required',
            'destination' => 'required',
            'note' => 'nullable',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        $plan->plan_name = $attributes['plan_name'];
        $plan->trans_type = $attributes['trans_type'];
        $plan->departure = $attributes['departure'];
        $plan->destination = $attributes['destination'];
        $plan->note = $attributes['note'];
        $plan->start_date = $attributes['start_date'];
        $plan->end_date = $attributes['end_date'];
        $plan->save();

        return redirect('/console/plans/list')
            ->with('message', 'Plan has been edited!');
    }

    public function delete(Plan $plan)
    {
        $plan->delete();
        
        return redirect('/console/plans/list')
            ->with('message', 'Plan has been deleted!');        
    }

    
}
