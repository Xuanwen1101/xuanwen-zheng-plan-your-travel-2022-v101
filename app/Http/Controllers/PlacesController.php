<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use App\Models\Place;
use App\Models\Plan;

class PlacesController extends Controller
{
    public function list()
    {
        return view('places.list', [
            'places' => Place::all()
        ]);
    }

    public function addForm()
    {
        return view('places.add', [
            'plans' => Plan::all(),
        ]);
    }
    
    public function add()
    {

        $attributes = request()->validate([
            'place_name' => 'required',
            'address' => 'required',
            'google_id' => 'nullable',
            'note' => 'nullable',
            'plan_id' => 'required',
        ]);

        $place = new Place();
        $place->place_name = $attributes['place_name'];
        $place->address = $attributes['address'];
        $place->google_id = $attributes['google_id'];
        $place->note = $attributes['note'];
        $place->plan_id = $attributes['plan_id'];
        $place->user_id = Auth::user()->id;
        $place->save();

        return redirect('/console/places/list')
            ->with('message', 'Place has been added!');
    }

    public function editForm(Place $place)
    {
        return view('places.edit', [
            'place' => $place,
            'plans' => Plan::all(),
        ]);
    }

    public function edit(Place $place)
    {

        $attributes = request()->validate([
            'place_name' => 'required',
            'address' => 'required',
            'google_id' => 'nullable',
            'note' => 'nullable',
            'plan_id' => 'required',
        ]);

        $place->place_name = $attributes['place_name'];
        $place->address = $attributes['address'];
        $place->google_id = $attributes['google_id'];
        $place->note = $attributes['note'];
        $place->plan_id = $attributes['plan_id'];
        $place->save();

        return redirect('/console/places/list')
            ->with('message', 'Place has been edited!');
    }

    public function delete(Place $place)
    {
        $place->delete();
        
        return redirect('/console/places/list')
            ->with('message', 'Place has been deleted!');        
    }

}
