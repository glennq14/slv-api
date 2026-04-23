{!! '<?xml version="1.0" encoding="UTF-8"?>' !!}
<Properties>
    @foreach($properties as $item)
    <Property>
        <UniquePropertyID>{{ $item->id }}</UniquePropertyID>
        <LastUpdateDate>{{ $item->updated_at->format('Y-m-d') }}</LastUpdateDate>
        <LeadEmail>{{ config('app.lead_email') }}</LeadEmail>
        <Town>
            <![CDATA[L'Hermitage-Lorge]]>
        </Town>
        <PropertyType>{{ $item->property_type->name }}</PropertyType>
        <PropertyName>{{ $item->title }}</PropertyName>
    </Property>
    @endforeach
</Properties>