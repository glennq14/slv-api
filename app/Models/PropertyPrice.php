<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PropertyPrice extends Model
{
    protected $fillable = [
        "price",
        "price_qualifier",
        "os_price_qualifier",
        "deposit",
        "administration_fee",
        "rent_frequency",
        "tenure_Type",
        "auction",
        "tenure_Unexpired_Years",
        "price_per_unit_area",
        "price_per_unit_per_annum"
    ];

    public function properties(): BelongsTo
    {
        return $this->belongsTo(Property::class, "property_id");
    }
}
