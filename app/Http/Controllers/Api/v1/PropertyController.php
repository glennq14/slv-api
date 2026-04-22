<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Http\Resources\PropertyResource;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // $properties = Property::all()->toArray();
        // $xml = new \SimpleXMLElement('<root/>');
        // foreach ($properties as $property) {
        //     print_r($property); exit;
        //     print_r(array_flip($property)); exit;
        //     $xml->addChild('', $property->title);
        //     // $flipped = array_flip($property);
        //     // array_walk_recursive($flipped, [$xml, 'addChild']);
        // }
        
        // print $xml->asXML();

       return PropertyResource::collection(Property::with('author')->with('property_type')->paginate(10));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        
        $property = Property::create($data); 

        return $property;
    }

    /**
     * Display the specified resource.
     */
    public function show(Property  $property)
    {
        return PropertyResource::make($property);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Property $property)
    {
        $property->update($request->all());

        return new PropertyResource($property);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
