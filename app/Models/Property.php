<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\User     ;
use App\Models\PropertyType;
use App\Models\PropertyAddress;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Property extends Model
{
    protected $fillable = [
        'author_id', 
        'title', 
        'property_type_id', 
        'published', 
        'agent_ref'
    ];

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function property_type(): BelongsTo
    {
        return $this->belongsTo(PropertyType::class);
    }

    public function address(): HasOne
    {
        return $this->hasOne(PropertyAddress::class);
    }

    public function details(): HasOne
    {
        return $this->hasOne(PropertyDetail::class);
    }

    public function price(): HasOne
    {
        return $this->hasOne(PropertyPrice::class);
    }

    public function media(): HasMany
    {
        return $this->hasMany(PropertyMedia::class);
    }
    
    public function rooms(): HasOne
    {
        return $this->hasOne(PropertyDetailRoom::class);
    }
}