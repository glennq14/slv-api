<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use App\Http\Resources\PropertyResource;

class PropertyController extends Controller
{
    public function index()
    {

        $data = Property::with('author')
                            ->with('property_type')
                            ->with('address')
                            ->get();

        return response()
                ->view('property.feed', ['properties' => $data])
                ->header('Content-Type', 'text/xml');
    }
}
