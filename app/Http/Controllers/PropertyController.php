<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function list()
    {
        $properties = Property::all();
        return view('dashboard.property.list', compact('properties'));
    }
}
