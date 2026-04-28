<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PropertyNetworks extends Model
{
     const UPDATED_AT = null;
    protected $fillable = [
        "network",
        "published"
    ];
    
    public function properties(): BelongsTo
    {
        return $this->belongsTo(Property::class, "property_id");
    }
}
