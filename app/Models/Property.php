<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;
use App\Models\PropertyType;
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

    public function property_type()
    {
        return $this->belongsTo(PropertyType::class);
    }
}