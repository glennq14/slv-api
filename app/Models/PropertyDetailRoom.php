<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PropertyDetailRoom extends Model
{
    protected $fillable = [
        "name",
        "description",
        "length",
        "width",
        "dimension_unit",
        "dimention_text",
        "photo_urls",
    ];

    public function propertyDetail(): BelongsTo
    {
        return $this->belongsTo(PropertyDetail::class, "property_detail_id");
    }
}
