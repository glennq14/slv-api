<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PropertyDetailSizing extends Model
{
    protected $fillable = [
        "minimum",
        "maximum",
        "unit"
    ];

    public function propertyDetail(): BelongsTo
    {
        return $this->belongsTo(PropertyDetail::class, "property_detail_id");
    }
}
