<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PropertyDetailSizing extends Model
{
    protected $fillable = [
        "","","","","","",""
    ];

    public function properties(): BelongsTo
    {
        return $this->belongsTo(PropertyDetail::class);
    }
}
