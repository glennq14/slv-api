{!! '<?xml version="1.0" encoding="UTF-8"?>' !!}
<Properties>
    @foreach($properties as $item)
    <Property>
        <UniquePropertyID>{{ $item->id }}</UniquePropertyID>
        <LastUpdateDate>{{ $item->updated_at->format('Y-m-d') }}</LastUpdateDate>
        <LeadEmail>{{ config('app.lead_email') }}</LeadEmail>
        <PropertyType>{{ $item->property_type->name }}</PropertyType>
        <PropertyName>{{ $item->title }}</PropertyName>
        <Town>
            <![CDATA[L'Hermitage-Lorge]]>
        </Town>
    </Property>
    @endforeach
</Properties>