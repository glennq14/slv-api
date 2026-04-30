<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use App\Http\Resources\PropertyResource;

class PropertyXmlController extends Controller
{
    public function feed()
    {

        $data = Property::with('author')
                            ->with('property_type')
                            ->with('address')
                            ->get();

        return response()
                ->view('property-xml.feed', ['properties' => $data])
                ->header('Content-Type', 'text/xml');
    }


    /**
     * Summary of downloadXml
     * @param Property $property
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
     */
    private function downloadXml(Property $property)
    {
        $pathToFile = storage_path('app/public/exports/properties.xml');
        return response()->download($pathToFile, 'properties.xml', [
            'Content-Type' => 'application/xml'
        ]);
    }
}
