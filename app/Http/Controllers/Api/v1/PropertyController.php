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
    public function index(Request $request)
    {

        $query = Property::query();
        if ($request->has('include')) {
            $query->with(explode(',', $request->include));
        }

        return PropertyResource::collection($query->paginate(10));
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

    /**
     * Summary of downloadXml
     * @param Property $property
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
     */
    private function downloadXml(Property $property)
    {
        $pathToFile = storage_path('app/exports/data.xml');
        return response()->download($pathToFile, 'filename.xml', [
            'Content-Type' => 'application/xml'
        ]);
    }
}
