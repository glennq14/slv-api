<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class PropertyAddress extends Model
{
    protected $fillable = [
        "house_name_number",
        "address_2",
        "address_3",
        "address_4",
        "town",
        "postcode_1",
        "postcode_2",
        "display_address",
        "country_code",
        "region",
        "sub_region",
        "town_city",
        "latitude",
        "longitude",
        "pov_latitude",
        "pov_longitude",
        "pov_heading",
        "pov_pitch",
        "pov_zoom"
    ];

    public function properties(): BelongsTo
    {
        return $this->belongsTo(Property::class, "property_id");
    }
}
