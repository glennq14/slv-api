<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PropertyDetailRoom extends Model
{
    protected $fillable = [
        "","","","","","",""
    ];

    public function properties(): BelongsTo
    {
        return $this->belongsTo(PropertyDetail::class);
    }
}
