<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PropertyMedia extends Model
{
    const UPDATED_AT = null;
    
    protected $fillable = [
        "type",
        "url",
        "caption",
        "sort_order",
        "media_update_date"
    ];

    public function properties(): BelongsTo
    {
        return $this->belongsTo(Property::class, "property_id");
    }
}
