<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use App\Models\Place;
use App\Models\Plan;

use SKAgarwal\GoogleApi\PlacesApi;

class SearchController extends Controller
{
    public function searchPlace()
    {
        return view('search.google');
    }

    public function list()
    {
        // return view('search.list');

        $attributes = request()->validate([
            'q' => 'required'
        ]);


        $googlePlaces = new PlacesApi(env('GOOGLE_MAP_KEY'));
        $response = $googlePlaces->textSearch($attributes['q']);
        
        $results = $response['results'];

        return view('search.list', array(
            'results' => $results
        ));
    }

    public function saveForm(string $place_id)
    {
        $googlePlaces = new PlacesApi(env('GOOGLE_MAP_KEY'));
        $response = $googlePlaces->placeDetails($place_id);

        $result = $response['result'];
        // $result = str_replace("'", "\'", json_encode($result));

        if ($result['photos']) {
            $photo_reference = $result['photos'][0]['photo_reference'];
            $image = $googlePlaces->photo($photo_reference, $params = ['maxwidth'=>500]);
            
        } else {
            $image = "/images/default.png";
        }
        

        return view('search.save', [
            'result' => $result,
            'plans' => Plan::all(),
            'image' => $image,
        ]);
    }

    public function save(Place $place)
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
            ->with('message', 'Place has been saved!');
    }
}
