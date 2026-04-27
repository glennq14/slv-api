<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
class PropertyDetail extends Model
{
    protected $fillable = [
        "summary",
        "description",
        "features",
        "bedrooms",
        "bathrooms",
        "reception_rooms",
        "parking",
        "outside_space",
        "year_built",
        "internal_area",
        "internal_area_unit",
        "land_area",
        "land_area_unit",
        "floors",
        "entrance_floor",
        "condition",
        "accessibility",
        "heating",
        "golf_course_on_site_or_within_10_minutes_walk",
        "golf_course_within_a_20_minute_drive",
        "private_pool",
        "communal_pool",
        "at_beach_or_within_10_minute_walk",
        "beach_within_a_20_minute_drive",
        "private_beach",
        "sea_view",
        "at_ski_field_or_within_10_minutes_walk",
        "ski_field_within_a_45_minute_drive",
        "air_conditioning",
        "security_system",
        "gated_entry",
        "balcony",
        "ground_floor_terrace",
        "roof_terrace",
        "hot_tub",
        "business_for_sale",
        "comm_use_class"
    ];

    public function properties(): BelongsTo
    {
        return $this->belongsTo(Property::class, "property_id");
    }

    public function sizing(): HasOne
    {
        return $this->hasOne(PropertyDetailSizing::class, "property_detail_id");
    }

    public function rooms(): hasOne
    {
        return $this->hasOne(PropertyDetailRoom::class);
    }

}
