<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use App\Models\Place;
use App\Models\Plan;


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


        return view('search.list', array(
            'q' => $attributes['q']
        ));
    }
}
